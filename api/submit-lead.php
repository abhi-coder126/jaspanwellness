<?php
/**
 * API Endpoint: Submit Patient Lead & Intake Request
 * Handles submissions from Chatbot, Intake Form, Exit Modal, and Contact Form
 */

header('Content-Type: application/json');
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Honeypot spam protection
if (!empty($_POST['clinic_bot_catcher']) || !empty($_POST['website_hp'])) {
    // Silently reject bots
    echo json_encode(['success' => true, 'ref_code' => 'JAS-SPAM-IGN', 'message' => 'Processed']);
    exit;
}

// Read JSON or POST form data
$input = $_POST;
if (empty($input)) {
    $raw = file_get_contents('php://input');
    $json = json_decode($raw, true);
    if (is_array($json)) {
        $input = $json;
    }
}

// Extract & sanitize
$patientName = trim($input['patient_name'] ?? $input['name'] ?? 'Patient Inquirer');
$phone = trim($input['phone'] ?? '');
$email = trim($input['email'] ?? '');
$caseType = trim($input['case_type'] ?? 'general');
$incidentDate = trim($input['incident_date'] ?? '');
$painArea = trim($input['pain_area'] ?? '');
$currentTreatment = trim($input['current_treatment'] ?? 'Not specified');
$preferredContact = trim($input['preferred_contact'] ?? 'WhatsApp');
$preferredTime = trim($input['preferred_time'] ?? 'ASAP');
$message = trim($input['message'] ?? $input['notes'] ?? '');
$sourceChannel = trim($input['source_channel'] ?? 'website');

if (empty($phone) && empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Please provide either a phone number or email so our clinical intake team can reach you.']);
    exit;
}

// Save lead
$leadData = [
    'patient_name' => $patientName,
    'phone' => $phone,
    'email' => $email,
    'case_type' => $caseType,
    'incident_date' => $incidentDate,
    'pain_area' => $painArea,
    'current_treatment' => $currentTreatment,
    'preferred_contact' => $preferredContact,
    'preferred_time' => $preferredTime,
    'message' => $message,
    'source_channel' => $sourceChannel,
    'status' => 'New'
];

$refCode = ClinicDB::saveLead($leadData);

// Generate customized pre-filled WhatsApp handoff message with lead context
$caseLabel = [
    'auto_accident' => 'No-Fault Auto Accident',
    'workers_comp' => 'Workers’ Compensation',
    'physical_therapy' => 'Physical Therapy Evaluation',
    'rehab' => 'Rehabilitation Program',
    'physician_referral' => 'Physician / Attorney Referral',
    'general' => 'Clinical Inquiry'
][$caseType] ?? 'Intake Inquiry';

$handoffContext = "Hi Jaspan Rehab Team, I just submitted an inquiry on your website (Ref: {$refCode}). Name: {$patientName}, Case: {$caseLabel}. I'd like to coordinate next steps with your intake team.";
$whatsAppUrl = getWhatsAppUrl($caseType, "- Ref: {$refCode}. Name: {$patientName}");

// Check if request is AJAX / Fetch or accepts JSON
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (!empty($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
    || (isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false);

if (!$isAjax && !empty($_POST)) {
    // Normal browser form post fallback
    $redirectUrl = '../contact.php?submitted=1&ref=' . urlencode($refCode) . '&name=' . urlencode($patientName) . '&case=' . urlencode($caseType);
    header('Location: ' . $redirectUrl);
    exit;
}

echo json_encode([
    'success' => true,
    'ref_code' => $refCode,
    'message' => 'Intake request submitted successfully. Our clinical coordinator will reach out shortly.',
    'whatsapp_url' => $whatsAppUrl,
    'handoff_message' => $handoffContext
]);

