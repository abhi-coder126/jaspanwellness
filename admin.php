<?php
/**
 * CLINIC INTAKE & PATIENT LEAD MANAGEMENT CRM
 * Meets Developer Brief Section 30 (Lead Management, Status Tracking & CSV Export)
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

// Authentication Check
$pinError = false;
if (isset($_POST['login_pin'])) {
    if ($_POST['login_pin'] === CLINIC_CONFIG['admin_pin']) {
        $_SESSION['admin_auth'] = true;
    } else {
        $pinError = true;
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['admin_auth']);
    header('Location: admin.php');
    exit;
}

$isAuthenticated = !empty($_SESSION['admin_auth']);

// Filters
$statusFilter = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

$leads = [];
$stats = [
    'total' => 0,
    'new' => 0,
    'auto_accident' => 0,
    'workers_comp' => 0,
    'scheduled' => 0
];

if ($isAuthenticated) {
    $leads = ClinicDB::getLeads($statusFilter, $search);
    $allLeads = ClinicDB::getLeads(); // For stats
    $stats['total'] = count($allLeads);
    foreach ($allLeads as $l) {
        if (($l['status'] ?? '') === 'New') $stats['new']++;
        if (($l['status'] ?? '') === 'Scheduled') $stats['scheduled']++;
        if (($l['case_type'] ?? '') === 'auto_accident') $stats['auto_accident']++;
        if (($l['case_type'] ?? '') === 'workers_comp') $stats['workers_comp']++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinic Intake &amp; Patient Lead Portal | Jaspan Rehabilitation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="assets/css/custom.css">
  <style>
    @media print {
      body { background: white !important; color: #0f172a !important; padding: 0 !important; }
      header, main, #chatbot-container, #whatsapp-launcher, #exit-intent-modal, .no-print { display: none !important; }
      #meeting-checklist-modal { display: block !important; position: static !important; background: white !important; padding: 0 !important; }
      #meeting-checklist-modal > div { max-height: none !important; border: 1px solid #cbd5e1 !important; box-shadow: none !important; margin: 0 !important; width: 100% !important; max-width: 100% !important; }
      #meeting-checklist-modal button { display: none !important; }
    }
  </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen">

  <?php if (!$isAuthenticated): ?>
  <!-- PIN LOGIN SCREEN -->
  <div class="min-h-screen flex items-center justify-center p-4">
    <div class="card-clean bg-white rounded-2xl p-8 sm:p-10 shadow-xl border border-slate-200/90 max-w-md w-full space-y-6">
      <div class="text-center space-y-3">
        <a href="index.php" class="inline-block">
          <img src="assets/images/logo.png" alt="Jaspan Rehab" class="h-11 w-auto mx-auto object-contain">
        </a>
        <div>
          <h1 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Clinic Intake Portal</h1>
          <p class="text-xs text-slate-500">Physical Therapy &amp; Rehabilitation Staff Access</p>
        </div>
      </div>

      <?php if ($pinError): ?>
      <div class="p-3 bg-red-50 border border-red-200 rounded-xl text-xs text-red-700 font-medium text-center">
        Invalid access PIN. Default demonstration PIN is: <code class="font-mono font-bold">jaspan2026</code>
      </div>
      <?php endif; ?>

      <form method="POST" class="space-y-4">
        <div>
          <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Enter Staff Access PIN</label>
          <input type="password" name="login_pin" autofocus placeholder="••••••••" required 
                 class="w-full px-4 py-3 rounded-xl border border-slate-300 text-center tracking-widest text-lg font-mono focus:border-teal-500 focus:outline-none">
          <p class="text-[11px] text-slate-400 mt-1 text-center">Default PIN: <strong class="text-slate-600 font-mono">jaspan2026</strong></p>
        </div>

        <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-brand-900 hover:bg-slate-800 text-white font-bold text-sm shadow-md transition-colors flex items-center justify-center gap-2">
          <i data-lucide="lock" class="w-4 h-4 text-teal-400"></i>
          <span>Access Patient Inquiries</span>
        </button>

        <div class="text-center pt-2">
          <a href="index.php" class="text-xs text-slate-500 hover:text-slate-800">Return to Public Website</a>
        </div>
      </form>
    </div>
  </div>

  <?php else: ?>
  <!-- AUTHENTICATED INTAKE DASHBOARD -->
  <div class="min-h-screen flex flex-col">
    
    <!-- Top Bar -->
    <header class="bg-brand-900 text-white py-4 px-6 shadow-md border-b border-slate-800">
      <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <a href="index.php" class="bg-white px-2.5 py-1.5 rounded-lg border border-slate-700/60 shadow-xs hover:opacity-95 transition-opacity inline-flex items-center">
            <img src="assets/images/logo.png" alt="Jaspan Rehab" class="h-6 w-auto object-contain">
          </a>
          <div>
            <h1 class="font-heading font-bold text-lg text-white">Patient Intake &amp; Case CRM</h1>
            <span class="text-xs text-teal-300">Jaspan Rehabilitation • Lead Management System</span>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <button type="button" onclick="document.getElementById('meeting-checklist-modal').classList.remove('hidden')" 
                  class="px-3.5 py-1.5 rounded-lg bg-teal-600 hover:bg-teal-500 text-white text-xs font-bold flex items-center gap-1.5 shadow-sm transition-colors">
            <i data-lucide="clipboard-list" class="w-3.5 h-3.5"></i> Meeting Intake Sheet
          </button>
          <a href="index.php" target="_blank" class="px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-semibold text-slate-200 flex items-center gap-1.5 transition-colors">
            <i data-lucide="external-link" class="w-3.5 h-3.5"></i> View Live Site
          </a>
          <a href="api/export-leads.php?pin=<?= e(CLINIC_CONFIG['admin_pin']) ?>" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold flex items-center gap-1.5 shadow-sm transition-colors">
            <i data-lucide="download" class="w-3.5 h-3.5"></i> Export CSV
          </a>
          <a href="admin.php?logout=1" class="px-3 py-1.5 rounded-lg bg-red-600/20 text-red-300 hover:bg-red-600/30 text-xs font-semibold transition-colors">
            Log Out
          </a>
        </div>
      </div>
    </header>

    <!-- Main Workspace -->
    <main class="flex-1 max-w-7xl w-full mx-auto p-4 sm:p-6 lg:p-8 space-y-6">
      
      <!-- KPI STAT CARDS (Brief Section 28 & 30) -->
      <div class="grid grid-cols-2 sm:grid-cols-5 gap-4">
        
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-2xs">
          <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Leads</div>
          <div class="text-3xl font-extrabold font-heading text-brand-900 mt-1"><?= $stats['total'] ?></div>
          <div class="text-xs text-slate-400 mt-0.5">All Channels</div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-teal-200 shadow-2xs bg-teal-50/40">
          <div class="text-xs font-bold uppercase tracking-wider text-teal-700">New / Uncontacted</div>
          <div class="text-3xl font-extrabold font-heading text-teal-800 mt-1"><?= $stats['new'] ?></div>
          <div class="text-xs text-teal-600 mt-0.5 font-medium">Requires callback</div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-amber-200 shadow-2xs bg-amber-50/40">
          <div class="text-xs font-bold uppercase tracking-wider text-amber-800">No-Fault Auto</div>
          <div class="text-3xl font-extrabold font-heading text-amber-900 mt-1"><?= $stats['auto_accident'] ?></div>
          <div class="text-xs text-amber-700 mt-0.5 font-medium">Collision Intake</div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-blue-200 shadow-2xs bg-blue-50/40">
          <div class="text-xs font-bold uppercase tracking-wider text-blue-800">Workers' Comp</div>
          <div class="text-3xl font-extrabold font-heading text-blue-900 mt-1"><?= $stats['workers_comp'] ?></div>
          <div class="text-xs text-blue-700 mt-0.5 font-medium">Workplace Claims</div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-emerald-200 shadow-2xs bg-emerald-50/40">
          <div class="text-xs font-bold uppercase tracking-wider text-emerald-800">Scheduled Evals</div>
          <div class="text-3xl font-extrabold font-heading text-emerald-900 mt-1"><?= $stats['scheduled'] ?></div>
          <div class="text-xs text-emerald-700 mt-0.5 font-medium">Confirmed on calendar</div>
        </div>

      </div>

      <!-- SEARCH & FILTER BAR -->
      <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-2xs flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <form method="GET" class="flex-1 flex flex-col sm:flex-row gap-3 w-full">
          <div class="relative flex-1">
            <input type="text" name="search" value="<?= e($search) ?>" placeholder="Search by name, phone, email, or reference code..." 
                   class="w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border border-slate-300 focus:outline-none focus:border-teal-500">
            <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-3.5"></i>
          </div>

          <select name="status" class="px-4 py-2.5 text-sm rounded-xl border border-slate-300 focus:outline-none focus:border-teal-500 font-medium">
            <option value="">All Statuses</option>
            <option value="New" <?= $statusFilter === 'New' ? 'selected' : '' ?>>New</option>
            <option value="Contacted" <?= $statusFilter === 'Contacted' ? 'selected' : '' ?>>Contacted</option>
            <option value="Scheduled" <?= $statusFilter === 'Scheduled' ? 'selected' : '' ?>>Scheduled</option>
            <option value="Not Qualified" <?= $statusFilter === 'Not Qualified' ? 'selected' : '' ?>>Not Qualified</option>
            <option value="Closed" <?= $statusFilter === 'Closed' ? 'selected' : '' ?>>Closed</option>
          </select>

          <button type="submit" class="px-5 py-2.5 bg-brand-900 text-white rounded-xl text-sm font-bold hover:bg-slate-800 transition-colors">
            Filter Leads
          </button>

          <?php if (!empty($search) || !empty($statusFilter)): ?>
          <a href="admin.php" class="px-4 py-2.5 bg-slate-100 text-slate-600 rounded-xl text-sm font-medium hover:bg-slate-200 transition-colors flex items-center justify-center">
            Reset
          </a>
          <?php endif; ?>

          <button type="button" onclick="document.getElementById('manual-lead-modal').classList.remove('hidden')" 
                  class="px-4 py-2.5 bg-emerald-600 text-white rounded-xl text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center gap-1.5 shadow-xs whitespace-nowrap">
            <i data-lucide="user-plus" class="w-4 h-4"></i> New Inquiry
          </button>
        </form>

        <div class="text-sm text-slate-500 font-medium shrink-0">
          Showing <strong class="text-slate-800"><?= count($leads) ?></strong> inquiry record(s)
        </div>

      </div>

      <!-- LEADS TABLE -->
      <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 border-b border-slate-200 font-heading text-slate-700 uppercase tracking-wider text-xs">
              <tr>
                <th class="py-4 px-4">Ref &amp; Date</th>
                <th class="py-4 px-4">Patient Information</th>
                <th class="py-4 px-4">Case Type</th>
                <th class="py-4 px-4">Pain / Symptoms</th>
                <th class="py-4 px-4">Channel &amp; Pref</th>
                <th class="py-4 px-4">Status</th>
                <th class="py-4 px-4 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <?php if (empty($leads)): ?>
              <tr>
                <td colspan="7" class="py-12 text-center text-slate-400">
                  <i data-lucide="inbox" class="w-8 h-8 mx-auto mb-2 opacity-50"></i>
                  No inquiry records match your search criteria.
                </td>
              </tr>
              <?php else: ?>
              <?php foreach ($leads as $lead): ?>
              <?php 
                $caseColors = [
                  'auto_accident' => 'bg-amber-100 text-amber-900 border-amber-300',
                  'workers_comp' => 'bg-blue-100 text-blue-900 border-blue-300',
                  'physical_therapy' => 'bg-teal-100 text-teal-900 border-teal-300',
                  'post-op' => 'bg-emerald-100 text-emerald-900 border-emerald-300',
                  'general' => 'bg-slate-100 text-slate-800 border-slate-300'
                ];
                $caseBadge = $caseColors[$lead['case_type'] ?? 'general'] ?? 'bg-slate-100 text-slate-800 border-slate-300';
                
                $statusColors = [
                  'New' => 'bg-red-100 text-red-800 font-bold',
                  'Contacted' => 'bg-amber-100 text-amber-800 font-semibold',
                  'Scheduled' => 'bg-emerald-100 text-emerald-800 font-bold',
                  'Not Qualified' => 'bg-slate-200 text-slate-600',
                  'Closed' => 'bg-slate-100 text-slate-500'
                ];
                $statusBadge = $statusColors[$lead['status'] ?? 'New'] ?? 'bg-slate-100 text-slate-700';
                
                $cleanPhone = preg_replace('/[^0-9]/', '', $lead['phone'] ?? '');
                $waMsg = rawurlencode("Hello " . ($lead['patient_name'] ?? 'Patient') . ", this is the clinical intake coordinator at Jaspan Physical Therapy & Rehabilitation regarding your recent inquiry (Ref: " . ($lead['ref_code'] ?? '') . ").");
                $waUrl = !empty($cleanPhone) ? "https://wa.me/{$cleanPhone}?text={$waMsg}" : "#";
              ?>
              <tr id="lead-row-<?= e($lead['ref_code']) ?>" class="hover:bg-slate-50/80 transition-colors">
                
                <!-- Ref & Date -->
                <td class="py-3.5 px-4 font-mono">
                  <div class="font-bold text-brand-900 text-sm"><?= e($lead['ref_code'] ?? 'JAS-0000') ?></div>
                  <div class="text-xs text-slate-400 mt-0.5"><?= date('M d, Y g:ia', strtotime($lead['created_at'] ?? 'now')) ?></div>
                </td>

                <!-- Patient -->
                <td class="py-3.5 px-4">
                  <div class="font-bold text-slate-900 text-sm"><?= e($lead['patient_name'] ?? 'Inquirer') ?></div>
                  <div class="text-xs text-slate-600 flex items-center gap-1.5 mt-0.5">
                    <i data-lucide="phone" class="w-3.5 h-3.5 text-teal-600"></i>
                    <a href="tel:<?= e($lead['phone'] ?? '') ?>" class="hover:underline font-medium"><?= e($lead['phone'] ?? 'No phone') ?></a>
                  </div>
                  <?php if (!empty($lead['email'])): ?>
                  <div class="text-xs text-slate-400 truncate max-w-[150px]"><?= e($lead['email']) ?></div>
                  <?php endif; ?>
                </td>

                <!-- Case Type -->
                <td class="py-3.5 px-4">
                  <span class="inline-block px-3 py-1 rounded-md text-xs font-bold border <?= $caseBadge ?>">
                    <?= strtoupper(str_replace('_', ' ', $lead['case_type'] ?? 'General')) ?>
                  </span>
                  <?php if (!empty($lead['incident_date'])): ?>
                  <div class="text-xs text-slate-500 mt-1">Incident: <?= e($lead['incident_date']) ?></div>
                  <?php endif; ?>
                </td>

                <!-- Pain / Symptoms -->
                <td class="py-3.5 px-4 max-w-[220px]">
                  <div class="font-medium text-slate-800 text-sm truncate"><?= e($lead['pain_area'] ?? 'General Physical Therapy') ?></div>
                  <?php if (!empty($lead['message'])): ?>
                  <div class="text-xs text-slate-500 truncate mt-0.5" title="<?= e($lead['message']) ?>"><?= e($lead['message']) ?></div>
                  <?php endif; ?>
                </td>

                <!-- Channel & Preferred Contact -->
                <td class="py-3.5 px-4">
                  <div class="font-semibold text-slate-700 capitalize flex items-center gap-1.5 text-xs sm:text-sm">
                    <?php if (($lead['preferred_contact'] ?? '') === 'WhatsApp'): ?>
                    <i data-lucide="message-square" class="w-4 h-4 text-emerald-600"></i>
                    <?php elseif (($lead['preferred_contact'] ?? '') === 'Phone Call'): ?>
                    <i data-lucide="phone" class="w-4 h-4 text-blue-600"></i>
                    <?php else: ?>
                    <i data-lucide="mail" class="w-4 h-4 text-slate-500"></i>
                    <?php endif; ?>
                    <?= e($lead['preferred_contact'] ?? 'WhatsApp') ?>
                  </div>
                  <div class="text-xs text-slate-400 capitalize mt-0.5">Src: <?= e(str_replace('_', ' ', $lead['source_channel'] ?? 'web')) ?></div>
                </td>

                <!-- Status Select -->
                <td class="py-3.5 px-4">
                  <select onchange="updateLeadStatus('<?= e($lead['ref_code']) ?>', this.value)" 
                          class="px-3 py-1.5 rounded-lg text-xs border border-slate-300 focus:outline-none focus:border-teal-500 font-semibold <?= $statusBadge ?>">
                    <option value="New" <?= ($lead['status'] ?? '') === 'New' ? 'selected' : '' ?>>New</option>
                    <option value="Contacted" <?= ($lead['status'] ?? '') === 'Contacted' ? 'selected' : '' ?>>Contacted</option>
                    <option value="Scheduled" <?= ($lead['status'] ?? '') === 'Scheduled' ? 'selected' : '' ?>>Scheduled</option>
                    <option value="Not Qualified" <?= ($lead['status'] ?? '') === 'Not Qualified' ? 'selected' : '' ?>>Not Qualified</option>
                    <option value="Closed" <?= ($lead['status'] ?? '') === 'Closed' ? 'selected' : '' ?>>Closed</option>
                  </select>
                </td>

                <!-- Actions -->
                <td class="py-3 px-4 text-right space-x-1.5 whitespace-nowrap">
                  <?php if (!empty($cleanPhone)): ?>
                  <a href="<?= $waUrl ?>" target="_blank" rel="noopener noreferrer" 
                     class="inline-flex p-1.5 rounded-lg bg-emerald-100 text-emerald-700 hover:bg-emerald-200 transition-colors" title="Message Patient on WhatsApp">
                    <i data-lucide="message-square" class="w-4 h-4"></i>
                  </a>
                  <a href="tel:<?= e($lead['phone']) ?>" 
                     class="inline-flex p-1.5 rounded-lg bg-blue-100 text-blue-700 hover:bg-blue-200 transition-colors" title="Call Patient Now">
                    <i data-lucide="phone-forwarded" class="w-4 h-4"></i>
                  </a>
                  <?php endif; ?>
                  <button type="button" onclick="deleteLeadRecord('<?= e($lead['ref_code']) ?>')" 
                          class="inline-flex p-1.5 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition-colors" title="Delete Inquiry Record">
                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                  </button>
                </td>

              </tr>
              <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- QUICK CLINIC SETTINGS TAB (Brief Section 41 & 42) -->
      <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm space-y-4">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
          <div>
            <h3 class="text-base font-bold font-heading text-brand-900">Clinic Phone &amp; Hours Configuration</h3>
            <p class="text-xs text-slate-500">Edit contact details and WhatsApp numbers dynamically without editing code:</p>
          </div>
          <span class="text-xs px-2.5 py-1 bg-teal-100 text-teal-800 rounded font-semibold">Live System Settings</span>
        </div>

        <form id="clinic-settings-form" class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
          <input type="hidden" name="pin" value="<?= e(CLINIC_CONFIG['admin_pin']) ?>">

          <div>
            <label class="block font-bold text-slate-700 mb-1">Primary Phone Number</label>
            <input type="text" name="phone_primary" value="<?= e(CLINIC_CONFIG['phone_primary']) ?>" class="w-full px-3 py-2 rounded-xl border border-slate-300">
          </div>

          <div>
            <label class="block font-bold text-slate-700 mb-1">WhatsApp Intake Number</label>
            <input type="text" name="whatsapp_number" value="<?= e(CLINIC_CONFIG['whatsapp_number']) ?>" class="w-full px-3 py-2 rounded-xl border border-slate-300">
          </div>

          <div>
            <label class="block font-bold text-slate-700 mb-1">Intake Notification Email</label>
            <input type="email" name="email_intake" value="<?= e(CLINIC_CONFIG['email_intake']) ?>" class="w-full px-3 py-2 rounded-xl border border-slate-300">
          </div>

          <div class="sm:col-span-2">
            <label class="block font-bold text-slate-700 mb-1">Clinic Physical Address</label>
            <input type="text" name="address_full" value="<?= e(CLINIC_CONFIG['address_full']) ?>" class="w-full px-3 py-2 rounded-xl border border-slate-300">
          </div>

          <div>
            <label class="block font-bold text-slate-700 mb-1">Weekday Hours</label>
            <input type="text" name="hours_weekday" value="<?= e(CLINIC_CONFIG['hours_weekday']) ?>" class="w-full px-3 py-2 rounded-xl border border-slate-300">
          </div>

          <div class="sm:col-span-3 pt-2">
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-clinical-teal hover:bg-clinical-dark text-white font-bold text-xs shadow-sm transition-colors">
              Save Clinic Settings
            </button>
            <span id="settings-status" class="ml-3 text-xs text-emerald-600 font-bold hidden">Settings saved!</span>
          </div>
        </form>
      </div>

    </main>

  </div>

  <!-- CLIENT MEETING INTAKE CHECKLIST MODAL (Brief Section 34 & 35) -->
  <div id="meeting-checklist-modal" class="fixed inset-0 z-50 bg-slate-950/75 backdrop-blur-sm hidden items-center justify-center p-4 overflow-y-auto">
    <div class="card-clean bg-white rounded-2xl max-w-4xl w-full my-8 overflow-hidden shadow-2xl border border-slate-200 flex flex-col max-h-[90vh]">
      
      <!-- Modal Header -->
      <div class="bg-brand-900 text-white p-6 flex items-center justify-between shrink-0">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-teal-500/20 text-teal-300 flex items-center justify-center border border-teal-500/30">
            <i data-lucide="clipboard-check" class="w-5 h-5"></i>
          </div>
          <div>
            <h2 class="text-xl font-bold font-heading">Clinic Meeting Intake &amp; Fact-Sheet Guide</h2>
            <p class="text-xs text-teal-300">Brief Sections 34 &amp; 35: Essential Questions &amp; Asset Checklist</p>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <button type="button" onclick="window.print()" class="px-3.5 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-bold flex items-center gap-1.5 transition-colors">
            <i data-lucide="printer" class="w-3.5 h-3.5"></i> Print / PDF
          </button>
          <button type="button" onclick="document.getElementById('meeting-checklist-modal').classList.add('hidden')" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors">
            <i data-lucide="x" class="w-5 h-5"></i>
          </button>
        </div>
      </div>

      <!-- Modal Scrollable Content -->
      <div class="p-6 sm:p-8 space-y-6 overflow-y-auto text-sm text-slate-700">
        
        <div class="p-4 bg-amber-50 border border-amber-200 rounded-xl text-xs text-amber-900 flex items-start gap-2.5">
          <i data-lucide="alert-circle" class="w-4 h-4 text-amber-600 mt-0.5 shrink-0"></i>
          <span>
            <strong>Critical Direction:</strong> Do not invent medical facts. Use this questionnaire during tomorrow's client meeting to verify all provider credentials, actual modalities, insurance coverage, and specialty relationships before final launch.
          </span>
        </div>

        <!-- Section 1: Doctor / Clinician Authority -->
        <div class="border border-slate-200 rounded-2xl p-5 space-y-3 bg-slate-50/50">
          <h3 class="font-bold text-base text-brand-900 font-heading flex items-center gap-2">
            <i data-lucide="user-check" class="w-4 h-4 text-clinical-teal"></i> 1. Doctor &amp; Clinician Profiles (Brief Section 8 &amp; 34)
          </h3>
          <ul class="space-y-1.5 text-xs sm:text-sm">
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Full legal name &amp; professional title (e.g., Dr. Robert Jaspan, PT, DPT, OCS)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Exact verified years of clinical practice (e.g., 18+ years)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Degrees &amp; universities attended (DPT, residency, fellowships)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Hospital experience &amp; previous hospital affiliations (In-patient / trauma continuum)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Board certifications &amp; state licenses (OCS, NCS, CPR/AED)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Patient populations treated &amp; languages spoken by clinicians</span></li>
          </ul>
        </div>

        <!-- Section 2: Services & Medical Specializations -->
        <div class="border border-slate-200 rounded-2xl p-5 space-y-3 bg-slate-50/50">
          <h3 class="font-bold text-base text-brand-900 font-heading flex items-center gap-2">
            <i data-lucide="activity" class="w-4 h-4 text-blue-600"></i> 2. Clinical Services &amp; Specialties (Brief Section 9 &amp; 34)
          </h3>
          <ul class="space-y-1.5 text-xs sm:text-sm">
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Outpatient Physical Therapy modalities actually provided</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Comprehensive rehabilitation scope &amp; equipment available</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Post-surgical joint replacement &amp; spine protocols</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Scope of care: In-patient, out-patient, or transitional care?</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span><strong>Vascular Surgery Clarification:</strong> Direct in-house service, affiliated specialist, or referral partner?</span></li>
          </ul>
        </div>

        <!-- Section 3: No-Fault & Workers' Comp -->
        <div class="border border-slate-200 rounded-2xl p-5 space-y-3 bg-slate-50/50">
          <h3 class="font-bold text-base text-brand-900 font-heading flex items-center gap-2">
            <i data-lucide="shield-check" class="w-4 h-4 text-amber-600"></i> 3. No-Fault &amp; Workers' Compensation Program (Brief Section 10 &amp; 11)
          </h3>
          <ul class="space-y-1.5 text-xs sm:text-sm">
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>No-Fault claims coordination workflow &amp; 30-day notice support</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>NYS Workers' Compensation Board (WCB) treatment authorizations &amp; C-4 forms</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Billing direct to insurers vs patient copays/self-pay</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Coordinating relationships with referring physicians and personal injury attorneys</span></li>
          </ul>
        </div>

        <!-- Section 4: Lead Handoff & Patient Communication -->
        <div class="border border-slate-200 rounded-2xl p-5 space-y-3 bg-slate-50/50">
          <h3 class="font-bold text-base text-brand-900 font-heading flex items-center gap-2">
            <i data-lucide="message-square" class="w-4 h-4 text-emerald-600"></i> 4. Patient Intake &amp; WhatsApp Handoff (Brief Section 14, 17, 30)
          </h3>
          <ul class="space-y-1.5 text-xs sm:text-sm">
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Confirmed official WhatsApp business telephone number</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Staff member designated to respond to live WhatsApp and web intake leads</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Expected response time window (e.g., within 15–30 minutes during business hours)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Intake destination: Internal CRM portal, designated email, or practice EHR?</span></li>
          </ul>
        </div>

        <!-- Section 5: Photography & Assets Collection -->
        <div class="border border-slate-200 rounded-2xl p-5 space-y-3 bg-slate-50/50">
          <h3 class="font-bold text-base text-brand-900 font-heading flex items-center gap-2">
            <i data-lucide="camera" class="w-4 h-4 text-purple-600"></i> 5. Photography &amp; Marketing Assets (Brief Section 26 &amp; 34)
          </h3>
          <ul class="space-y-1.5 text-xs sm:text-sm">
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Professional headshots of all treating clinicians</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Real photography of rehabilitation gym, equipment, and private treatment rooms</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Official clinic vector logo (SVG / high-res PNG)</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Written patient consents for published testimonials &amp; case studies</span></li>
            <li class="flex items-center gap-2"><input type="checkbox" class="rounded text-teal-600"> <span>Google Business Profile link &amp; verified review rating</span></li>
          </ul>
        </div>

      </div>

      <!-- Modal Footer -->
      <div class="bg-slate-50 p-4 border-t border-slate-200 flex items-center justify-between shrink-0 text-xs">
        <span class="text-slate-500">Master Developer Brief v1.0 • Client Discovery Framework</span>
        <button type="button" onclick="document.getElementById('meeting-checklist-modal').classList.add('hidden')" class="px-5 py-2 rounded-xl bg-brand-900 text-white font-bold hover:bg-slate-800 transition-colors">
          Close Intake Sheet
        </button>
      </div>

    </div>
  </div>

  <!-- MANUAL LEAD / PHONE INTAKE MODAL -->
  <div id="manual-lead-modal" class="fixed inset-0 z-50 bg-slate-950/75 backdrop-blur-sm hidden items-center justify-center p-4">
    <div class="card-clean bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-200 space-y-5">
      <div class="flex items-center justify-between border-b border-slate-100 pb-3">
        <div class="flex items-center gap-2.5">
          <div class="w-9 h-9 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center font-bold">
            <i data-lucide="user-plus" class="w-5 h-5"></i>
          </div>
          <h3 class="font-bold text-lg text-brand-900 font-heading">Record Patient Inquiry / Walk-in</h3>
        </div>
        <button type="button" onclick="document.getElementById('manual-lead-modal').classList.add('hidden')" class="p-1 rounded-lg text-slate-400 hover:text-slate-700">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="manual-lead-form" class="space-y-4 text-xs">
        <div>
          <label class="block font-bold text-slate-700 mb-1">Patient Full Name *</label>
          <input type="text" name="patient_name" id="manual_name" required placeholder="Jane Doe" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Phone Number *</label>
            <input type="tel" name="phone" id="manual_phone" required placeholder="(212) 555-0199" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Email Address</label>
            <input type="email" name="email" id="manual_email" placeholder="patient@gmail.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Case Type</label>
            <select name="case_type" id="manual_case" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-sm font-medium">
              <option value="auto_accident">No-Fault Auto Accident</option>
              <option value="workers_comp">Workers' Compensation</option>
              <option value="physical_therapy">Physical Therapy</option>
              <option value="post-op">Post-Surgical</option>
              <option value="general">General Inquiry</option>
            </select>
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Preferred Contact</label>
            <select name="preferred_contact" id="manual_contact_pref" class="w-full px-3 py-2 rounded-xl border border-slate-300 text-sm font-medium">
              <option value="WhatsApp">WhatsApp</option>
              <option value="Phone Call">Phone Call</option>
              <option value="Email">Email</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block font-bold text-slate-700 mb-1">Pain Area / Symptoms / Medical Notes</label>
          <textarea name="message" id="manual_notes" rows="3" placeholder="Whiplash, lumbar disc strain, surgeon prescription..." class="w-full px-3.5 py-2 rounded-xl border border-slate-300 text-sm"></textarea>
        </div>

        <div class="pt-2 flex items-center justify-end gap-3">
          <button type="button" onclick="document.getElementById('manual-lead-modal').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-300 font-semibold text-slate-700">Cancel</button>
          <button type="submit" id="manual-lead-btn" class="px-6 py-2.5 rounded-xl bg-brand-900 text-white font-bold hover:bg-slate-800 transition-colors flex items-center gap-1.5">
            <i data-lucide="check" class="w-4 h-4"></i> Save Record
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- AJAX Script for Lead Status Update & Settings -->
  <script>
    async function updateLeadStatus(refCode, newStatus) {
      try {
        const formData = new FormData();
        formData.append('ref_code', refCode);
        formData.append('status', newStatus);
        formData.append('pin', '<?= e(CLINIC_CONFIG['admin_pin']) ?>');

        const response = await fetch('api/update-lead-status.php', {
          method: 'POST',
          body: formData
        });
        const data = await response.json();
        if (!data.success) {
          alert('Failed to update status: ' + (data.error || 'Unknown error'));
        }
      } catch (err) {
        alert('Status update error');
      }
    }

    async function deleteLeadRecord(refCode) {
      if (!confirm(`Are you sure you want to permanently delete lead ${refCode}? This action cannot be undone.`)) {
        return;
      }
      try {
        const formData = new FormData();
        formData.append('ref_code', refCode);
        formData.append('pin', '<?= e(CLINIC_CONFIG['admin_pin']) ?>');

        const response = await fetch('api/delete-lead.php', {
          method: 'POST',
          body: formData
        });
        const data = await response.json();
        if (data.success) {
          const row = document.getElementById(`lead-row-${refCode}`);
          if (row) {
            row.style.transition = 'opacity 0.3s ease';
            row.style.opacity = '0';
            setTimeout(() => row.remove(), 300);
          }
        } else {
          alert(data.error || 'Failed to delete lead');
        }
      } catch (err) {
        alert('Error connecting to delete API');
      }
    }

    const manualLeadForm = document.getElementById('manual-lead-form');
    if (manualLeadForm) {
      manualLeadForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const btn = document.getElementById('manual-lead-btn');
        if (btn) btn.disabled = true;

        const payload = {
          patient_name: document.getElementById('manual_name').value.trim(),
          phone: document.getElementById('manual_phone').value.trim(),
          email: document.getElementById('manual_email').value.trim(),
          case_type: document.getElementById('manual_case').value,
          preferred_contact: document.getElementById('manual_contact_pref').value,
          pain_area: document.getElementById('manual_notes').value.trim(),
          message: 'Manually logged by clinical intake staff',
          source_channel: 'admin_walkin'
        };

        try {
          const res = await fetch('api/submit-lead.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
          });
          const data = await res.json();
          if (data.success) {
            location.reload();
          } else {
            alert(data.error || 'Failed to create lead');
            if (btn) btn.disabled = false;
          }
        } catch (err) {
          alert('Network error submitting lead');
          if (btn) btn.disabled = false;
        }
      });
    }

    const settingsForm = document.getElementById('clinic-settings-form');
    if (settingsForm) {
      settingsForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const fd = new FormData(settingsForm);
        try {
          const res = await fetch('api/update-settings.php', {
            method: 'POST',
            body: fd
          });
          const data = await res.json();
          if (data.success) {
            const statusEl = document.getElementById('settings-status');
            statusEl.classList.remove('hidden');
            setTimeout(() => statusEl.classList.add('hidden'), 3000);
          } else {
            alert(data.error || 'Failed to update settings');
          }
        } catch (err) {
          alert('Error saving settings');
        }
      });
    }
  </script>
  <?php endif; ?>

  <script>
    if (window.lucide) lucide.createIcons();
  </script>
</body>
</html>

