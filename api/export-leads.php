<?php
/**
 * API: Export Leads to CSV for Practice Management / EHR Integration
 */

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Authentication check
if (empty($_SESSION['admin_auth'])) {
    $pin = $_GET['pin'] ?? '';
    if ($pin !== CLINIC_CONFIG['admin_pin']) {
        die('Unauthorized access. Please log into the Clinic Intake Portal.');
    }
}

$leads = ClinicDB::getLeads();

$filename = 'Jaspan_Patient_Leads_' . date('Y-m-d_His') . '.csv';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=' . $filename);

$output = fopen('php://output', 'w');

// Output column headers
fputcsv($output, [
    'Ref Code',
    'Date Submitted',
    'Status',
    'Patient Name',
    'Phone',
    'Email',
    'Case Type',
    'Date of Incident/Injury',
    'Pain Area / Symptoms',
    'Current Treatment',
    'Preferred Contact Method',
    'Preferred Time',
    'Channel Source',
    'Patient Notes',
    'Staff Notes'
]);

foreach ($leads as $l) {
    fputcsv($output, [
        $l['ref_code'] ?? '',
        $l['created_at'] ?? '',
        $l['status'] ?? 'New',
        $l['patient_name'] ?? '',
        $l['phone'] ?? '',
        $l['email'] ?? '',
        $l['case_type'] ?? '',
        $l['incident_date'] ?? '',
        $l['pain_area'] ?? '',
        $l['current_treatment'] ?? '',
        $l['preferred_contact'] ?? '',
        $l['preferred_time'] ?? '',
        $l['source_channel'] ?? '',
        $l['message'] ?? '',
        $l['staff_notes'] ?? ''
    ]);
}

fclose($output);
exit;

