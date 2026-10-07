<?php
/**
 * JASPAN PHYSICAL THERAPY & REHABILITATION INSTITUTE
 * Master Configuration & Application Core
 * Version 1.0 • Client Specification & Patient Acquisition Engine
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Global Site Defaults (Client can edit these or update them via Admin Portal)
$defaultConfig = [
    'clinic_name' => 'Jaspan Physical Therapy & Rehabilitation',
    'clinic_tagline' => 'Institute of Advanced Physical Therapy & Specialized Rehabilitation',
    'clinic_subtitle' => 'Evidence-Based Recovery • No-Fault & Workers’ Comp Specialization • Dedicated Facility',
    'phone_primary' => '(212) 555-0199',
    'phone_toll_free' => '(800) 555-REHAB',
    'phone_raw' => '+12125550199',
    'whatsapp_number' => '+12125550199',
    'email_intake' => 'intake@jaspanrehab.com',
    'address_street' => '1250 Health Sciences Parkway, Suite 340',
    'address_city' => 'New York',
    'address_state' => 'NY',
    'address_zip' => '10022',
    'address_full' => '1250 Health Sciences Parkway, Suite 340, New York, NY 10022',
    'hours_weekday' => 'Mon – Fri: 7:00 AM – 7:30 PM',
    'hours_saturday' => 'Saturday: 8:00 AM – 2:30 PM',
    'hours_sunday' => 'Sunday: Closed (Emergency Intake On-Call)',
    'emergency_line' => '911 (Life Threatening)',
    'admin_pin' => 'jaspan2026', // PIN for quick intake dashboard access
    'client_meeting_status' => 'Pending Final Medical Fact Confirmation',
];

// Check if saved settings exist
$settingsFile = __DIR__ . '/data/settings.json';
if (file_exists($settingsFile)) {
    $custom = json_decode(file_get_contents($settingsFile), true);
    if (is_array($custom)) {
        $defaultConfig = array_merge($defaultConfig, $custom);
    }
}

// Global helper constants / array
define('CLINIC_CONFIG', $defaultConfig);

/**
 * Generate context-aware WhatsApp link with prefilled triage message
 */
function getWhatsAppUrl($intent = 'general', $extraText = '') {
    $num = preg_replace('/[^0-9]/', '', CLINIC_CONFIG['whatsapp_number']);
    
    $messages = [
        'general' => "Hello Jaspan Rehabilitation team, I am visiting your website and would like to speak with a patient coordinator.",
        'auto_accident' => "Hello Jaspan Intake Team, I was involved in an auto accident and would like to check if I can schedule a No-Fault rehabilitation evaluation.",
        'workers_comp' => "Hello Jaspan Intake Team, I suffered a work-related injury and would like to inquire about Workers' Compensation physical therapy and case coordination.",
        'physical_therapy' => "Hello Jaspan Rehabilitation, I am looking to schedule a physical therapy evaluation for musculoskeletal pain/mobility.",
        'evaluation' => "Hello, I would like to book a physical therapy & rehabilitation evaluation at your center.",
        'rehab_center' => "Hello Jaspan Clinic, I would like more information about your rehabilitation facility and treatment programs."
    ];

    $text = $messages[$intent] ?? $messages['general'];
    if (!empty($extraText)) {
        $text .= " " . $extraText;
    }

    return "https://wa.me/" . $num . "?text=" . rawurlencode($text);
}

/**
 * Helper to safely sanitize and output strings
 */
function e($str) {
    return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}

