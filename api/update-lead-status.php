<?php
/**
 * API: Update Lead Status & Staff Notes (Admin)
 */

header('Content-Type: application/json');
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Check simple session or PIN authorization
if (empty($_SESSION['admin_auth'])) {
    $pin = $_REQUEST['pin'] ?? '';
    if ($pin !== CLINIC_CONFIG['admin_pin']) {
        http_response_code(401);
        echo json_encode(['success' => false, 'error' => 'Unauthorized']);
        exit;
    }
}

$ref = trim($_POST['ref_code'] ?? '');
$status = trim($_POST['status'] ?? '');
$notes = isset($_POST['notes']) ? trim($_POST['notes']) : null;

if (empty($ref) || empty($status)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Missing reference code or status']);
    exit;
}

$updated = ClinicDB::updateLeadStatus($ref, $status, $notes);

echo json_encode([
    'success' => $updated,
    'message' => 'Status updated successfully',
    'ref_code' => $ref,
    'new_status' => $status
]);

