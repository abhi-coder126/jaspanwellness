<?php
/**
 * Database & Lead Storage Engine
 * Supports SQLite (via PDO) with automated fallback to JSON storage
 */

require_once __DIR__ . '/config.php';

class ClinicDB {
    private static $pdo = null;
    private static $dbFile = __DIR__ . '/data/leads.sqlite';
    private static $jsonFile = __DIR__ . '/data/leads.json';

    public static function getPDO() {
        if (self::$pdo === null) {
            try {
                if (!is_dir(__DIR__ . '/data')) {
                    mkdir(__DIR__ . '/data', 0777, true);
                }
                self::$pdo = new PDO('sqlite:' . self::$dbFile);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::initTables();
            } catch (Exception $e) {
                // If SQLite is not supported or fails, self::$pdo stays null
                self::$pdo = null;
            }
        }
        return self::$pdo;
    }

    private static function initTables() {
        if (!self::$pdo) return;
        $sql = "
            CREATE TABLE IF NOT EXISTS leads (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                ref_code TEXT UNIQUE,
                patient_name TEXT,
                phone TEXT,
                email TEXT,
                case_type TEXT,
                incident_date TEXT,
                pain_area TEXT,
                current_treatment TEXT,
                preferred_contact TEXT,
                preferred_time TEXT,
                message TEXT,
                source_channel TEXT,
                status TEXT DEFAULT 'New',
                staff_notes TEXT DEFAULT '',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ";
        self::$pdo->exec($sql);

        // Seed demonstration sample leads if database is empty
        $count = self::$pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
        if ($count == 0) {
            self::seedSampleLeads();
        }
    }

    private static function seedSampleLeads() {
        $samples = [
            [
                'ref_code' => 'JAS-2026-1042',
                'patient_name' => 'Michael Torres',
                'phone' => '(212) 555-8921',
                'email' => 'mtorres@gmail.com',
                'case_type' => 'auto_accident',
                'incident_date' => '2026-09-18',
                'pain_area' => 'Cervical Spine / Whiplash & Shoulder',
                'current_treatment' => 'No',
                'preferred_contact' => 'WhatsApp',
                'preferred_time' => 'Morning (8am-11am)',
                'message' => 'Rear-ended on FDR Drive 2 weeks ago. Constant neck stiffness and radiating tingling in right arm. Seeking No-Fault evaluation.',
                'source_channel' => 'chatbot',
                'status' => 'New',
                'staff_notes' => 'Priority intake. Need police report & No-Fault insurance policy carrier number.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 hours'))
            ],
            [
                'ref_code' => 'JAS-2026-1039',
                'patient_name' => 'Sarah Jenkins',
                'phone' => '(646) 555-4310',
                'email' => 'sarah.j@outlook.com',
                'case_type' => 'workers_comp',
                'incident_date' => '2026-09-04',
                'pain_area' => 'Lumbar Spine / Lower Back',
                'current_treatment' => 'Yes (Initial ER visit only)',
                'preferred_contact' => 'Phone Call',
                'preferred_time' => 'Afternoon (1pm-4pm)',
                'message' => 'Injured back lifting warehouse pallets. WCB case number established. Looking to begin guided physical therapy.',
                'source_channel' => 'website_form',
                'status' => 'Contacted',
                'staff_notes' => 'Spoke with Sarah. Authorized for initial PT evaluation. Scheduling for Dr. Jaspan on Thursday 9am.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day'))
            ],
            [
                'ref_code' => 'JAS-2026-1035',
                'patient_name' => 'David Miller',
                'phone' => '(917) 555-7762',
                'email' => 'dmiller.consult@gmail.com',
                'case_type' => 'physical_therapy',
                'incident_date' => '2026-08-20',
                'pain_area' => 'Knee / Post-Meniscus Repair',
                'current_treatment' => 'Surgery 4 weeks ago',
                'preferred_contact' => 'Email',
                'preferred_time' => 'Morning',
                'message' => 'Prescription from orthopedic surgeon for 8-week physical therapy protocol. Need gait retraining and strengthening.',
                'source_channel' => 'website_form',
                'status' => 'Scheduled',
                'staff_notes' => 'First evaluation confirmed for Oct 12 with Dr. Vance.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-3 days'))
            ]
        ];

        foreach ($samples as $lead) {
            self::saveLead($lead);
        }
    }

    public static function saveLead($data) {
        $refCode = $data['ref_code'] ?? ('JAS-' . date('Y') . '-' . rand(1000, 9999));
        $now = $data['created_at'] ?? date('Y-m-d H:i:s');

        $pdo = self::getPDO();
        if ($pdo) {
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO leads 
                    (ref_code, patient_name, phone, email, case_type, incident_date, pain_area, current_treatment, preferred_contact, preferred_time, message, source_channel, status, staff_notes, created_at)
                    VALUES 
                    (:ref, :name, :phone, :email, :case, :date, :pain, :curr, :contact, :time, :msg, :source, :status, :notes, :created)
                ");
                $stmt->execute([
                    ':ref' => $refCode,
                    ':name' => $data['patient_name'] ?? 'Inquirer',
                    ':phone' => $data['phone'] ?? '',
                    ':email' => $data['email'] ?? '',
                    ':case' => $data['case_type'] ?? 'general',
                    ':date' => $data['incident_date'] ?? '',
                    ':pain' => $data['pain_area'] ?? '',
                    ':curr' => $data['current_treatment'] ?? '',
                    ':contact' => $data['preferred_contact'] ?? 'WhatsApp',
                    ':time' => $data['preferred_time'] ?? 'ASAP',
                    ':msg' => $data['message'] ?? '',
                    ':source' => $data['source_channel'] ?? 'website',
                    ':status' => $data['status'] ?? 'New',
                    ':notes' => $data['staff_notes'] ?? '',
                    ':created' => $now
                ]);
                return $refCode;
            } catch (Exception $e) {
                // fallback to JSON
            }
        }

        // JSON Fallback
        $leads = self::getJsonLeads();
        $record = [
            'id' => count($leads) + 1,
            'ref_code' => $refCode,
            'patient_name' => $data['patient_name'] ?? 'Inquirer',
            'phone' => $data['phone'] ?? '',
            'email' => $data['email'] ?? '',
            'case_type' => $data['case_type'] ?? 'general',
            'incident_date' => $data['incident_date'] ?? '',
            'pain_area' => $data['pain_area'] ?? '',
            'current_treatment' => $data['current_treatment'] ?? '',
            'preferred_contact' => $data['preferred_contact'] ?? 'WhatsApp',
            'preferred_time' => $data['preferred_time'] ?? 'ASAP',
            'message' => $data['message'] ?? '',
            'source_channel' => $data['source_channel'] ?? 'website',
            'status' => $data['status'] ?? 'New',
            'staff_notes' => $data['staff_notes'] ?? '',
            'created_at' => $now
        ];
        array_unshift($leads, $record);
        file_put_contents(self::$jsonFile, json_encode($leads, JSON_PRETTY_PRINT));
        return $refCode;
    }

    public static function getLeads($statusFilter = '', $search = '') {
        $pdo = self::getPDO();
        if ($pdo) {
            try {
                $sql = "SELECT * FROM leads WHERE 1=1";
                $params = [];
                if (!empty($statusFilter)) {
                    $sql .= " AND status = :status";
                    $params[':status'] = $statusFilter;
                }
                if (!empty($search)) {
                    $sql .= " AND (patient_name LIKE :s OR phone LIKE :s OR email LIKE :s OR ref_code LIKE :s OR pain_area LIKE :s)";
                    $params[':s'] = "%$search%";
                }
                $sql .= " ORDER BY created_at DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {}
        }

        $leads = self::getJsonLeads();
        if (!empty($statusFilter)) {
            $leads = array_filter($leads, fn($l) => ($l['status'] ?? '') === $statusFilter);
        }
        if (!empty($search)) {
            $s = strtolower($search);
            $leads = array_filter($leads, function($l) use ($s) {
                return str_contains(strtolower($l['patient_name'] ?? ''), $s) ||
                       str_contains(strtolower($l['phone'] ?? ''), $s) ||
                       str_contains(strtolower($l['email'] ?? ''), $s) ||
                       str_contains(strtolower($l['ref_code'] ?? ''), $s);
            });
        }
        return array_values($leads);
    }

    public static function updateLeadStatus($refCode, $newStatus, $notes = null) {
        $pdo = self::getPDO();
        if ($pdo) {
            try {
                if ($notes !== null) {
                    $stmt = $pdo->prepare("UPDATE leads SET status = :status, staff_notes = :notes WHERE ref_code = :ref");
                    return $stmt->execute([':status' => $newStatus, ':notes' => $notes, ':ref' => $refCode]);
                } else {
                    $stmt = $pdo->prepare("UPDATE leads SET status = :status WHERE ref_code = :ref");
                    return $stmt->execute([':status' => $newStatus, ':ref' => $refCode]);
                }
            } catch (Exception $e) {}
        }

        $leads = self::getJsonLeads();
        foreach ($leads as &$lead) {
            if ($lead['ref_code'] === $refCode) {
                $lead['status'] = $newStatus;
                if ($notes !== null) {
                    $lead['staff_notes'] = $notes;
                }
                break;
            }
        }
        file_put_contents(self::$jsonFile, json_encode($leads, JSON_PRETTY_PRINT));
        return true;
    }

    public static function deleteLead($refCode) {
        $pdo = self::getPDO();
        if ($pdo) {
            try {
                $stmt = $pdo->prepare("DELETE FROM leads WHERE ref_code = :ref");
                return $stmt->execute([':ref' => $refCode]);
            } catch (Exception $e) {}
        }

        $leads = self::getJsonLeads();
        $initialCount = count($leads);
        $leads = array_values(array_filter($leads, fn($l) => ($l['ref_code'] ?? '') !== $refCode));
        if (count($leads) !== $initialCount) {
            file_put_contents(self::$jsonFile, json_encode($leads, JSON_PRETTY_PRINT));
            return true;
        }
        return false;
    }

    private static function getJsonLeads() {
        if (!file_exists(self::$jsonFile)) {
            return [];
        }
        $data = json_decode(file_get_contents(self::$jsonFile), true);
        return is_array($data) ? $data : [];
    }
}

