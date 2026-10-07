<?php
/**
 * API: Update Clinic Settings (Phone, Hours, WhatsApp, Address)
 */

header('Content-Type: application/json');
require_once __DIR__ . '/../config.php';

if (empty($_SESSION['admin_auth'])) {
    $pin = $_POST['pin'] ?? '';
    if ($pin !== CLINIC_CONFIG['admin_pin']) {
        http_response_code(401);
        echo json_encode(['success' => false, 'error' => 'Unauthorized']);
        exit;
    }
}

$allowedKeys = [
    'clinic_name', 'clinic_tagline', 'phone_primary', 'phone_toll_free',
    'whatsapp_number', 'email_intake', 'address_full', 'hours_weekday',
    'hours_saturday', 'hours_sunday', 'admin_pin'
];

$updates = [];
foreach ($allowedKeys as $k) {
    if (isset($_POST[$k])) {
        $updates[$k] = trim($_POST[$k]);
    }
}

if (!empty($updates)) {
    $settingsFile = __DIR__ . '/../data/settings.json';
    $existing = [];
    if (file_exists($settingsFile)) {
        $existing = json_decode(file_get_contents($settingsFile), true) ?: [];
    }
    $merged = array_merge($existing, $updates);
    file_put_contents($settingsFile, json_encode($merged, JSON_PRETTY_PRINT));
    echo json_encode(['success' => true, 'message' => 'Clinic settings updated successfully!']);
    exit;
}

echo json_encode(['success' => false, 'error' => 'No settings provided']);

