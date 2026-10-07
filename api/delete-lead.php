<?php
/**
 * API Endpoint: Delete Patient Lead Record (Admin Authorized)
 */

header('Content-Type: application/json');
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Authentication check
if (empty($_SESSION['admin_auth'])) {
    $pin = $_POST['pin'] ?? $_REQUEST['pin'] ?? '';
    if ($pin !== CLINIC_CONFIG['admin_pin']) {
        http_response_code(401);
        echo json_encode(['success' => false, 'error' => 'Unauthorized']);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

$ref = trim($_POST['ref_code'] ?? '');

if (empty($ref)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Missing reference code']);
    exit;
}

$deleted = ClinicDB::deleteLead($ref);

if ($deleted) {
    echo json_encode([
        'success' => true,
        'message' => "Lead $ref successfully deleted",
        'ref_code' => $ref
    ]);
} else {
    http_response_code(404);
    echo json_encode([
        'success' => false,
        'error' => "Lead $ref not found"
    ]);
}

