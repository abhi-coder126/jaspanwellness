<?php
/**
 * Header Component: Navigation, Emergency Alert Strip, & Clinic Branding
 * Redesigned for Maximum Luxury Healthcare Aesthetic & Spacious UI
 */
require_once __DIR__ . '/../config.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($pageTitle) ? e($pageTitle) . ' | ' . e(CLINIC_CONFIG['clinic_name']) : e(CLINIC_CONFIG['clinic_name']) . ' | Physical Therapy & Rehabilitation' ?></title>
  <meta name="description" content="<?= isset($pageDescription) ? e($pageDescription) : 'Premier Physical Therapy and Rehabilitation Clinic in New York. Specialized No-Fault auto accident, Workers’ Compensation, and post-surgical recovery.' ?>">
  <meta name="keywords" content="<?= isset($pageKeywords) ? e($pageKeywords) : 'physical therapy, rehabilitation center, no-fault auto accident physical therapy, workers compensation rehab, physical therapist New York, post-surgical recovery' ?>">
  
  <!-- Open Graph / Meta -->
  <meta property="og:title" content="<?= isset($pageTitle) ? e($pageTitle) : e(CLINIC_CONFIG['clinic_name']) ?>">
  <meta property="og:description" content="<?= isset($pageDescription) ? e($pageDescription) : 'Premier Physical Therapy & Rehabilitation Clinic. Dedicated No-Fault and Workers’ Compensation patient acquisition & clinical recovery care.' ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=80">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo.png">

  <!-- Tailwind CSS CDN with custom config -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              950: '#081721',
              900: '#0f2430',
              800: '#163547',
              700: '#1e4860',
              600: '#2a6282'
            },
            clinical: {
              teal: '#0d9488',
              dark: '#0f766e',
              light: '#14b8a6',
              ice: '#f0fdfa'
            },
            medical: {
              blue: '#0284c7',
              navy: '#0b1e28'
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Plus Jakarta Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Healthcare CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">

  <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="bg-white text-slate-800 antialiased selection:bg-teal-600 selection:text-white flex flex-col min-h-screen">

  <!-- 1. SLIM, ELEGANT CLINICAL NOTICE STRIP -->
  <aside class="bg-slate-900 text-slate-300 text-xs sm:text-sm py-2 px-4 border-b border-slate-800 no-print" aria-label="Medical safety notice">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
      
      <!-- Left: Safety Notice -->
      <div class="flex items-center gap-2">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-red-600 text-white uppercase tracking-wider">
          Safety Notice
        </span>
        <span class="text-slate-300 hidden sm:inline">Experiencing acute chest pain, trauma, or emergency? Dial <strong class="text-white font-bold">911</strong> immediately.</span>
        <span class="text-slate-300 sm:hidden">Medical Emergency? Dial <strong class="text-white font-bold">911</strong></span>
      </div>

      <!-- Right: Direct Phone & Hours -->
      <div class="flex items-center gap-4 text-slate-300 shrink-0">
        <div class="hidden md:flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 live-pulse"></span>
          <span class="font-medium">Intake Desk Open • Mon-Sat</span>
        </div>
        <div class="h-3.5 w-px bg-slate-700 hidden md:block"></div>
        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="hover:text-white font-bold flex items-center gap-1.5 text-white">
          <i data-lucide="phone" class="w-3.5 h-3.5 text-teal-400"></i>
          <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
        </a>
        <a href="admin.php" class="text-slate-400 hover:text-slate-200 hidden lg:flex items-center gap-1 font-medium" title="Staff Portal">
          <i data-lucide="shield" class="w-3.5 h-3.5"></i> Admin
        </a>
      </div>

    </div>
  </aside>

  <!-- 2. MAIN HEADER & SPACIOUS NAVIGATION -->
  <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] transition-all duration-200 no-print">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- BRAND LOGO -->
        <a href="index.php" class="flex items-center group shrink-0">
          <img src="assets/images/logo.png" alt="Jaspan Rehab Physical Therapy &amp; Rehabilitation" class="h-10 sm:h-12 w-auto object-contain transition-transform group-hover:scale-[1.02]">
        </a>

        <!-- DESKTOP UNCLUTTERED NAVIGATION (Strictly 1 single line with whitespace-nowrap) -->
        <nav class="hidden lg:flex items-center gap-1.5 font-semibold text-sm xl:text-base text-slate-700 whitespace-nowrap">
          
          <a href="index.php" class="whitespace-nowrap px-4 py-2 rounded-xl transition-colors <?= $currentPage === 'index' ? 'text-brand-900 font-bold bg-slate-100' : 'hover:text-brand-900 hover:bg-slate-50' ?>">
            Home
          </a>

          <!-- About Dropdown -->
          <div class="relative group">
            <button type="button" class="whitespace-nowrap px-4 py-2 rounded-xl flex items-center gap-1 transition-colors <?= in_array($currentPage, ['about', 'doctors', 'rehab-center']) ? 'text-brand-900 font-bold bg-slate-100' : 'hover:text-brand-900 hover:bg-slate-50' ?>">
              <span>About</span> <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-hover:rotate-180 transition-transform"></i>
            </button>
            <div class="absolute left-0 mt-2 w-72 rounded-2xl bg-white shadow-xl border border-slate-100 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="about.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">Our Clinic &amp; Heritage</div>
                <div class="text-xs text-slate-500 mt-0.5">Hospital in-patient legacy &amp; mission</div>
              </a>
              <a href="doctors.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">Meet the Doctors</div>
                <div class="text-xs text-slate-500 mt-0.5">Dr. Jaspan &amp; clinical credentials</div>
              </a>
              <a href="rehab-center.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">Rehabilitation Center</div>
                <div class="text-xs text-slate-500 mt-0.5">Modern gym floor &amp; private suites</div>
              </a>
            </div>
          </div>

          <!-- Services Dropdown -->
          <div class="relative group">
            <button type="button" class="whitespace-nowrap px-4 py-2 rounded-xl flex items-center gap-1 transition-colors <?= in_array($currentPage, ['services', 'conditions', 'patient-journey']) ? 'text-brand-900 font-bold bg-slate-100' : 'hover:text-brand-900 hover:bg-slate-50' ?>">
              <span>Services</span> <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-hover:rotate-180 transition-transform"></i>
            </button>
            <div class="absolute left-0 mt-2 w-80 rounded-2xl bg-white shadow-xl border border-slate-100 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="services.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">Physical Therapy Programs</div>
                <div class="text-xs text-slate-500 mt-0.5">Manual therapy, post-op &amp; strengthening</div>
              </a>
              <a href="conditions.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">Conditions We Treat</div>
                <div class="text-xs text-slate-500 mt-0.5">Spine, neck, knee, shoulder &amp; sciatica</div>
              </a>
              <a href="patient-journey.php" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="font-bold text-sm text-slate-900">The Patient Journey</div>
                <div class="text-xs text-slate-500 mt-0.5">8-step roadmap to full recovery</div>
              </a>
            </div>
          </div>

          <!-- Special Programs Dropdown (No-Fault & Workers' Comp cleanly on 1 line) -->
          <div class="relative group">
            <button type="button" class="whitespace-nowrap px-4 py-2 rounded-xl flex items-center gap-1 transition-colors <?= in_array($currentPage, ['no-fault-auto-accident', 'workers-compensation']) ? 'text-teal-800 font-bold bg-teal-50' : 'hover:text-brand-900 hover:bg-slate-50' ?>">
              <span>Specialized Care</span>
              <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-hover:rotate-180 transition-transform"></i>
            </button>
            <div class="absolute left-0 mt-2 w-80 rounded-2xl bg-white shadow-xl border border-slate-100 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="no-fault-auto-accident.php" class="block p-3 rounded-xl hover:bg-amber-50/80 transition-colors">
                <div class="font-bold text-sm text-amber-900 flex items-center gap-1.5">
                  <i data-lucide="shield" class="w-4 h-4 text-amber-600"></i> No-Fault / Auto Accidents
                </div>
                <div class="text-xs text-slate-500 mt-0.5">Collision trauma, whiplash &amp; direct billing</div>
              </a>
              <a href="workers-compensation.php" class="block p-3 rounded-xl hover:bg-blue-50/80 transition-colors mt-1">
                <div class="font-bold text-sm text-blue-900 flex items-center gap-1.5">
                  <i data-lucide="briefcase" class="w-4 h-4 text-blue-600"></i> Workers' Compensation
                </div>
                <div class="text-xs text-slate-500 mt-0.5">Job-site injuries &amp; return-to-work goals</div>
              </a>
            </div>
          </div>

          <a href="contact.php" class="whitespace-nowrap px-4 py-2 rounded-xl transition-colors <?= $currentPage === 'contact' ? 'text-brand-900 font-bold bg-slate-100' : 'hover:text-brand-900 hover:bg-slate-50' ?>">
            Contact
          </a>

        </nav>

        <!-- RIGHT SIDE: SINGLE CLEAN PRIMARY CTA + PHONE (Strictly 1 line) -->
        <div class="hidden sm:flex items-center gap-4 whitespace-nowrap">
          
          <!-- Direct Phone Call on 1 single line -->
          <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="whitespace-nowrap hidden xl:flex items-center gap-2 text-slate-800 hover:text-brand-900 font-bold text-sm transition-colors">
            <div class="w-9 h-9 rounded-full bg-teal-50 flex items-center justify-center text-teal-700 shrink-0 border border-teal-100">
              <i data-lucide="phone" class="w-4 h-4"></i>
            </div>
            <span class="font-extrabold text-slate-900 text-sm"><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
          </a>

          <!-- Primary Book Evaluation Button -->
          <a href="book-evaluation.php" class="whitespace-nowrap shrink-0 inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-bold text-white bg-brand-900 hover:bg-slate-800 shadow-md shadow-brand-900/10 hover:shadow-lg hover:scale-[1.02] transition-all">
            <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i>
            <span>Book an Evaluation</span>
          </a>

          <!-- Mobile Hamburger Toggle -->
          <button type="button" id="mobile-menu-btn" class="lg:hidden p-2 rounded-xl text-slate-600 hover:text-brand-900 hover:bg-slate-100" aria-label="Toggle Navigation">
            <i data-lucide="menu" class="w-6 h-6"></i>
          </button>

        </div>

        <!-- Small Mobile Action -->
        <div class="sm:hidden flex items-center gap-2">
          <a href="book-evaluation.php" class="px-3.5 py-2 rounded-full text-xs font-bold text-white bg-brand-900">
            Book Eval
          </a>
          <button type="button" id="mobile-menu-btn-sm" class="p-2 rounded-xl text-slate-600 hover:bg-slate-100" aria-label="Toggle Menu">
            <i data-lucide="menu" class="w-6 h-6"></i>
          </button>
        </div>

      </div>
    </div>

    <!-- MOBILE NAVIGATION DRAWER -->
    <div id="mobile-nav-drawer" class="hidden lg:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 shadow-xl transition-all">
      <div class="flex flex-col space-y-2 font-medium text-slate-700 text-sm">
        <a href="index.php" class="px-3 py-2 rounded-xl hover:bg-slate-100 <?= $currentPage === 'index' ? 'text-teal-700 font-bold bg-teal-50' : '' ?>">Home</a>
        <a href="about.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">About the Clinic &amp; Heritage</a>
        <a href="doctors.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">Meet the Doctors</a>
        <a href="services.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">Physical Therapy Services</a>
        <a href="no-fault-auto-accident.php" class="px-3 py-2 rounded-xl bg-amber-50 text-amber-900 font-bold border border-amber-200 flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-amber-500"></span> No-Fault / Auto Accidents
        </a>
        <a href="workers-compensation.php" class="px-3 py-2 rounded-xl bg-blue-50 text-blue-900 font-bold border border-blue-200 flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-blue-500"></span> Workers' Compensation
        </a>
        <a href="rehab-center.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">Rehabilitation Center Tour</a>
        <a href="conditions.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">Conditions We Treat</a>
        <a href="patient-journey.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">The Patient Journey</a>
        <a href="faqs.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">FAQs</a>
        <a href="contact.php" class="px-3 py-2 rounded-xl hover:bg-slate-100">Contact &amp; Location</a>

        <div class="pt-4 mt-2 border-t border-slate-100 flex flex-col gap-2">
          <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl border border-slate-300 font-bold text-slate-800 text-xs">
            <i data-lucide="phone" class="w-4 h-4 text-teal-600"></i> Call <?= e(CLINIC_CONFIG['phone_primary']) ?>
          </a>
          <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl bg-emerald-600 text-white font-bold text-xs">
            <i data-lucide="message-square" class="w-4 h-4"></i> Chat on WhatsApp
          </a>
          <a href="book-evaluation.php" class="w-full flex items-center justify-center gap-2 py-3 rounded-xl bg-brand-900 text-white font-bold text-xs">
            <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i> Book Evaluation Online
          </a>
        </div>
      </div>
    </div>
  </header>
