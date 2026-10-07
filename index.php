<?php
/**
 * HOMEPAGE — JASPAN PHYSICAL THERAPY & REHABILITATION INSTITUTE
 * Master Patient Acquisition & Clinical Authority Hub
 * Redesigned for Spacious, Uncluttered, Ultra-Premium Healthcare UI
 */

$pageTitle = 'Jaspan Physical Therapy & Rehabilitation | Manhattan Injury & Recovery Center';
$pageDescription = 'Premier outpatient physical therapy and specialized rehabilitation institute in New York. Expert care for No-Fault auto accidents, Workers’ Comp, spine and post-surgical recovery.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- =========================================================================
     1. HERO SECTION: CLEAN, MINIMALISTIC, MODERN HEALTHCARE AESTHETIC
     ========================================================================= -->
<section class="relative bg-white pt-10 pb-16 lg:pt-16 lg:pb-24 border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
      
      <!-- Left Column: Clinical Value Proposition -->
      <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
        
        <!-- Subtle Clinical Badge -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-semibold bg-teal-50 text-teal-900 border border-teal-200">
          <span class="w-2 h-2 rounded-full bg-teal-500 live-pulse"></span>
          <span>Outpatient &amp; Post-Acute Rehabilitation Center</span>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-title text-slate-900">
          Evidence-Based <br class="hidden sm:inline">
          <span class="text-clinical-teal">Physical Therapy</span> &amp; <br class="hidden sm:inline">
          Specialized Recovery
        </h1>

        <!-- Subheading -->
        <p class="section-subtitle max-w-2xl mx-auto lg:mx-0">
          Individualized, 1-on-1 rehabilitation led by licensed Doctor of Physical Therapy clinicians. Specializing in <strong class="text-slate-900 font-semibold">No-Fault car collisions</strong>, <strong class="text-slate-900 font-semibold">Workers' Compensation injuries</strong>, and post-surgical functional restoration.
        </p>

        <!-- Primary Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
          
          <a href="book-evaluation.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl font-bold text-sm sm:text-base text-white bg-brand-900 hover:bg-slate-800 shadow-md shadow-brand-900/10 hover:shadow-lg transition-all">
            <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i>
            <span>Schedule Initial Evaluation</span>
          </a>

          <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-bold text-sm sm:text-base text-emerald-900 bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 transition-all">
            <i data-lucide="message-square" class="w-4 h-4 text-emerald-600"></i>
            <span>Message Intake on WhatsApp</span>
          </a>

        </div>

        <!-- Trust Badges Row -->
        <div class="pt-5 border-t border-slate-100 flex flex-wrap items-center justify-center lg:justify-start gap-y-2.5 gap-x-6 text-xs sm:text-sm text-slate-600 font-medium">
          <div class="flex items-center gap-2">
            <i data-lucide="shield-check" class="w-4 h-4 text-teal-600"></i>
            <span>Direct Access (No Referral Needed)</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600"></i>
            <span>Direct No-Fault Insurance Billing</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="award" class="w-4 h-4 text-teal-600"></i>
            <span>1-on-1 Dedicated Therapist Care</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Clean Clinical Hero Imagery Card -->
      <div class="lg:col-span-5">
        <div class="relative mx-auto max-w-md lg:max-w-none">
          
          <!-- Image Frame with Clean Clinical Card -->
          <div class="relative rounded-2xl overflow-hidden shadow-md border border-slate-200/90 aspect-4/3 sm:aspect-4/5 bg-slate-100">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=80" 
                 alt="Licensed Physical Therapist evaluating patient in clinic" 
                 class="w-full h-full object-cover object-center">
            
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>

            <div class="absolute bottom-5 left-5 right-5 text-white space-y-1.5">
              <span class="inline-block px-2.5 py-0.5 rounded bg-teal-600 text-[11px] font-bold uppercase tracking-wider">
                Clinical Excellence
              </span>
              <div class="text-lg sm:text-xl font-bold font-heading">
                Jaspan Rehabilitation Center
              </div>
              <p class="text-xs sm:text-sm text-slate-200">Modern therapeutic gym &amp; private evaluation suites.</p>
            </div>
          </div>

          <!-- Subtle Clinical Meta Badge (Bottom Docked) -->
          <div class="mt-3.5 bg-slate-50 border border-slate-200/90 rounded-xl p-3 flex items-center justify-between text-xs text-slate-600">
            <div class="flex items-center gap-2">
              <div class="w-7 h-7 rounded-lg bg-teal-100 text-clinical-teal flex items-center justify-center shrink-0">
                <i data-lucide="award" class="w-4 h-4"></i>
              </div>
              <span class="font-semibold text-slate-800">18+ Years Experience</span>
            </div>
            <div class="h-4 w-px bg-slate-200"></div>
            <div class="flex items-center gap-2">
              <div class="w-7 h-7 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center shrink-0">
                <i data-lucide="shield" class="w-4 h-4"></i>
              </div>
              <span class="font-semibold text-slate-800">No-Fault &amp; Work Comp</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     2. TRUST METRICS STRIP: CLEAN, SPACIOUS, UNCLUTTERED
     ========================================================================= -->
<section class="bg-white border-b border-slate-100 py-10 sm:py-14">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-100">
      
      <div class="space-y-1">
        <div class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-slate-900">18+ Years</div>
        <div class="text-xs sm:text-sm text-slate-600 font-medium">Licensed Clinical Leadership</div>
      </div>

      <div class="space-y-1 pt-4 md:pt-0">
        <div class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-clinical-teal">1-on-1</div>
        <div class="text-xs sm:text-sm text-slate-600 font-medium">Dedicated Hands-On Care</div>
      </div>

      <div class="space-y-1 pt-4 md:pt-0">
        <div class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-amber-700">Direct Billing</div>
        <div class="text-xs sm:text-sm text-slate-600 font-medium">NY No-Fault &amp; Workers' Comp</div>
      </div>

      <div class="space-y-1 pt-4 md:pt-0">
        <div class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-brand-900">Modern Gym</div>
        <div class="text-xs sm:text-sm text-slate-600 font-medium">Dedicated Recovery Facility</div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     3. SPECIALIZED INJURY CARE (NO-FAULT & WORKERS' COMP): CLEAN DUAL HERO
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-slate-50/50 border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-14">
      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-900 border border-amber-200">
        <i data-lucide="shield-check" class="w-3.5 h-3.5 text-amber-600"></i> Specialized Injury Management
      </span>
      <h2 class="section-title text-slate-900">
        Dedicated Care for Auto Accidents &amp; Workplace Injuries
      </h2>
      <p class="section-subtitle max-w-2xl mx-auto">
        Collisions and job-site injuries involve severe mechanical trauma and strict insurance timelines. We combine clinical rehabilitation with seamless case documentation.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      
      <!-- Card 1: No-Fault Auto Accidents -->
      <div class="bg-white rounded-2xl p-7 sm:p-9 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all space-y-6 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-3.5">
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center border border-amber-200 shrink-0">
              <i data-lucide="car" class="w-6 h-6"></i>
            </div>
            <div>
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">No-Fault / Auto Accidents</h3>
              <p class="text-xs sm:text-sm text-amber-800 font-medium">Motor Vehicle Collision Rehabilitation</p>
            </div>
          </div>

          <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
            Severe deceleration trauma causes whiplash, spinal disc herniations, and joint damage that may take days to surface. Early physical therapy prevents chronic fibrotic tissue stiffness.
          </p>

          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-amber-600 mt-0.5 shrink-0"></i>
              <span>No out-of-pocket costs with valid NY No-Fault coverage</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-amber-600 mt-0.5 shrink-0"></i>
              <span>Assistance meeting the critical 30-day claim notice deadline</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-amber-600 mt-0.5 shrink-0"></i>
              <span>Objective range-of-motion reports for your treating physician</span>
            </li>
          </ul>
        </div>

        <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row gap-3">
          <a href="no-fault-auto-accident.php" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-xs sm:text-sm transition-colors shadow-xs">
            <span>Learn About No-Fault Care</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <button type="button" onclick="window.openClinicChatbot('auto_accident')" class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs sm:text-sm font-semibold transition-colors">
            <i data-lucide="message-square" class="w-4 h-4 text-amber-600"></i> Check My Collision Case
          </button>
        </div>
      </div>

      <!-- Card 2: Workers' Compensation -->
      <div class="bg-white rounded-2xl p-7 sm:p-9 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all space-y-6 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-3.5">
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center border border-blue-200 shrink-0">
              <i data-lucide="briefcase" class="w-6 h-6"></i>
            </div>
            <div>
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">Workers’ Compensation</h3>
              <p class="text-xs sm:text-sm text-blue-800 font-medium">Work Injury Recovery &amp; Return-to-Work</p>
            </div>
          </div>

          <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
            From heavy lifting lumbar disc herniations to repetitive strain, our clinical team focuses on progressive functional capacity restoration, pain reduction, and sustainable return to work.
          </p>

          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-blue-600 mt-0.5 shrink-0"></i>
              <span>Simulated job-task conditioning (lifting, carrying, stairs)</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-blue-600 mt-0.5 shrink-0"></i>
              <span>Timely C-4.2 progress notes and MTG variance authorization</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check" class="w-4 h-4 text-blue-600 mt-0.5 shrink-0"></i>
              <span>Direct communication with nurse case managers and adjusters</span>
            </li>
          </ul>
        </div>

        <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row gap-3">
          <a href="workers-compensation.php" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs sm:text-sm transition-colors shadow-xs">
            <span>Learn About Workers' Comp</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <button type="button" onclick="window.openClinicChatbot('workers_comp')" class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs sm:text-sm font-semibold transition-colors">
            <i data-lucide="message-square" class="w-4 h-4 text-blue-600"></i> Check My Work Injury
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     4. CLINICAL LEADERSHIP & DOCTOR AUTHORITY
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
      
      <!-- Doctor Portrait Card -->
      <div class="lg:col-span-5">
        <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs">
          <div class="relative rounded-xl overflow-hidden aspect-4/5 mb-5 bg-slate-100 border border-slate-200/60">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=800&q=80" 
                 alt="Dr. Robert Jaspan, PT, DPT, OCS - Lead Clinical Director" 
                 class="w-full h-full object-cover object-top">
            <div class="absolute bottom-3 left-3 bg-brand-900/95 text-white text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm">
              Clinical Director Profile
            </div>
          </div>

          <div class="space-y-1.5">
            <div class="flex items-center justify-between">
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">Dr. Robert Jaspan</h3>
              <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-teal-50 text-teal-800 border border-teal-200">PT, DPT, OCS</span>
            </div>
            <p class="text-xs sm:text-sm font-semibold text-clinical-teal">Doctor of Physical Therapy • Board-Certified Specialist</p>
            <p class="text-xs sm:text-sm text-slate-600 pt-1 leading-relaxed">
              18+ years directing hospital inpatient trauma continuum, outpatient orthopedic protocols, and complex collision rehabilitation.
            </p>
          </div>

          <div class="pt-4 border-t border-slate-100 mt-4 flex items-center justify-between">
            <a href="doctors.php" class="text-xs sm:text-sm font-bold text-teal-700 hover:text-teal-900 flex items-center gap-1.5">
              <span>View Full Credentials</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
            <span class="text-xs font-medium text-slate-500">Bilingual Staff</span>
          </div>
        </div>
      </div>

      <!-- Authority Narrative -->
      <div class="lg:col-span-7 space-y-6">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-clinical-teal font-heading">Clinical Philosophy</span>
          <h2 class="section-title text-slate-900 mt-1">
            Care Rooted in Science, Delivered with Dignity
          </h2>
        </div>

        <p class="section-subtitle leading-relaxed">
          At Jaspan Physical Therapy, we reject the high-volume assembly line where patients are passed between rotating aides. Every treatment session is guided by licensed Doctors of Physical Therapy who assess your biomechanics, perform targeted manual therapy, and adapt exercises to your progress.
        </p>

        <!-- 3 Pillars -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 pt-1">
          <div class="p-4 sm:p-5 rounded-xl bg-slate-50 border border-slate-200/80">
            <i data-lucide="activity" class="w-5 h-5 text-teal-600 mb-2"></i>
            <h4 class="font-bold text-sm sm:text-base text-slate-900 font-heading">Objective Tracking</h4>
            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Goniometric range of motion &amp; strength tests every 30 days.</p>
          </div>

          <div class="p-4 sm:p-5 rounded-xl bg-slate-50 border border-slate-200/80">
            <i data-lucide="building-2" class="w-5 h-5 text-blue-600 mb-2"></i>
            <h4 class="font-bold text-sm sm:text-base text-slate-900 font-heading">Dedicated Gym</h4>
            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Spacious functional training floor and private treatment rooms.</p>
          </div>

          <div class="p-4 sm:p-5 rounded-xl bg-slate-50 border border-slate-200/80">
            <i data-lucide="file-check" class="w-5 h-5 text-amber-600 mb-2"></i>
            <h4 class="font-bold text-sm sm:text-base text-slate-900 font-heading">Case Management</h4>
            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Meticulous documentation for insurance carriers and attorneys.</p>
          </div>
        </div>

        <div class="pt-2 flex flex-wrap items-center gap-4 text-xs sm:text-sm">
          <a href="about.php" class="inline-flex items-center gap-1.5 font-bold text-brand-900 hover:text-teal-700">
            <span>Learn More About Our Clinic Heritage</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
          <span class="text-slate-300">|</span>
          <a href="rehab-center.php" class="inline-flex items-center gap-1.5 font-bold text-brand-900 hover:text-teal-700">
            <span>Explore Rehabilitation Center</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- =========================================================================
     5. CORE SERVICES OVERVIEW: 3 CLEAN HIGH-IMPACT CARDS
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-slate-50/50 border-b border-slate-100" id="services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-14">
      <span class="text-xs font-bold uppercase tracking-wider text-clinical-teal font-heading">Clinical Scope</span>
      <h2 class="section-title text-slate-900">
        Comprehensive Physical Therapy &amp; Rehabilitation
      </h2>
      <p class="section-subtitle max-w-2xl mx-auto">
        Our treatments combine evidence-based manual therapy, neuromuscular re-education, and functional loading in our dedicated facility.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
      
      <!-- Service 1: Physical Therapy -->
      <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-teal-50 text-clinical-teal flex items-center justify-center mb-5 border border-teal-100">
            <i data-lucide="stethoscope" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold font-heading text-slate-900 mb-2.5">Outpatient Physical Therapy</h3>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5">
            Hands-on manual therapy and targeted exercise to alleviate pain, mobilize stiff joints, rebuild muscle stability, and resolve posture deficits.
          </p>
          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 mb-6">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-teal-600 shrink-0"></i> Joint mobilization &amp; soft-tissue release</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-teal-600 shrink-0"></i> Spine, neck, shoulder, and knee recovery</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-teal-600 shrink-0"></i> Direct access without physician prescription</li>
          </ul>
        </div>
        <a href="services.php#pt" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-clinical-teal hover:underline pt-2 border-t border-slate-100">
          <span>Read Service Overview</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

      <!-- Service 2: Comprehensive Rehabilitation -->
      <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center mb-5 border border-blue-100">
            <i data-lucide="activity" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold font-heading text-slate-900 mb-2.5">Comprehensive Rehabilitation</h3>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5">
            Intensive, structured programs for individuals recovering from high-impact trauma, polytrauma, or transitioning from hospital inpatient care.
          </p>
          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 mb-6">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-600 shrink-0"></i> Functional capacity and gait retraining</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-600 shrink-0"></i> Dynamic exercise in dedicated gymnasium</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-blue-600 shrink-0"></i> Post-acute hospital discharge transitions</li>
          </ul>
        </div>
        <a href="services.php#rehab" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-blue-700 hover:underline pt-2 border-t border-slate-100">
          <span>Explore Rehab Process</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

      <!-- Service 3: Post-Surgical Recovery -->
      <div class="bg-white rounded-2xl p-7 sm:p-8 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-5 border border-emerald-100">
            <i data-lucide="heart-pulse" class="w-6 h-6"></i>
          </div>
          <h3 class="text-xl font-bold font-heading text-slate-900 mb-2.5">Post-Surgical Rehabilitation</h3>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5">
            Surgeon-aligned rehabilitation protocols strictly respecting tissue healing timelines after joint replacement, spinal surgery, or tendon repairs.
          </p>
          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 mb-6">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600 shrink-0"></i> Total knee &amp; hip replacement protocols</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600 shrink-0"></i> Rotator cuff &amp; ACL reconstruction</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-600 shrink-0"></i> Lumbar &amp; cervical spinal surgery recovery</li>
          </ul>
        </div>
        <a href="services.php#post-op" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-emerald-700 hover:underline pt-2 border-t border-slate-100">
          <span>View Post-Op Protocols</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

    </div>

    <div class="mt-12 text-center">
      <a href="services.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm font-bold text-slate-800 hover:bg-white hover:border-slate-400 shadow-xs transition-all">
        <span>View Full Services Directory &amp; Modalities</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-teal-600"></i>
      </a>
    </div>

  </div>
</section>

<!-- =========================================================================
     6. HOW REHABILITATION WORKS: 5-PHASE CONNECTED VISUAL ROADMAP
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-100 relative" id="roadmap">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-16">
      <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-semibold uppercase tracking-wider text-teal-900 bg-teal-50 border border-teal-200">
        <i data-lucide="git-commit" class="w-3.5 h-3.5 text-teal-600"></i> Clinical Care Roadmap
      </span>
      <h2 class="section-title text-slate-900">
        Your Step-by-Step Pathway to Full Recovery
      </h2>
      <p class="section-subtitle max-w-2xl mx-auto">
        A structured, milestone-driven pathway engineered to guide you from initial injury assessment to lasting physical resilience and independence.
      </p>
    </div>

    <!-- 5-Stage Milestone Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
      
      <!-- Step 1 -->
      <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center font-bold text-base border border-teal-200">
              01
            </div>
            <span class="text-[11px] font-bold px-2.5 py-0.5 bg-teal-50 text-teal-800 rounded-md border border-teal-200">
              Day 01
            </span>
          </div>
          <div>
            <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Phase 1: Triage</div>
            <h3 class="text-base sm:text-lg font-bold font-heading text-slate-900 mt-1">Diagnostic Evaluation</h3>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            60-minute in-depth session assessing joint range of motion, muscle strength, nerve reflexes, and posture.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-teal-600"></i> Baseline metric mapping
        </div>
      </div>

      <!-- Step 2 -->
      <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-base border border-amber-200">
              02
            </div>
            <span class="text-[11px] font-bold px-2.5 py-0.5 bg-amber-50 text-amber-800 rounded-md border border-amber-200">
              Week 01
            </span>
          </div>
          <div>
            <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Phase 2: Blueprint</div>
            <h3 class="text-base sm:text-lg font-bold font-heading text-slate-900 mt-1">Custom Protocol</h3>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Targeted clinical plan combining manual mobilization, functional exercises, and direct insurance verification.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-amber-600"></i> Seamless case clearance
        </div>
      </div>

      <!-- Step 3 -->
      <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold text-base border border-blue-200">
              03
            </div>
            <span class="text-[11px] font-bold px-2.5 py-0.5 bg-blue-50 text-blue-800 rounded-md border border-blue-200">
              Weeks 2–6
            </span>
          </div>
          <div>
            <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Phase 3: Active Care</div>
            <h3 class="text-base sm:text-lg font-bold font-heading text-slate-900 mt-1">Guided Therapy</h3>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            1-on-1 manual therapy and progressive resistance conditioning in our gym under continuous Doctor supervision.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-blue-600"></i> Progressive joint loading
        </div>
      </div>

      <!-- Step 4 -->
      <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-700 flex items-center justify-center font-bold text-base border border-indigo-200">
              04
            </div>
            <span class="text-[11px] font-bold px-2.5 py-0.5 bg-indigo-50 text-indigo-800 rounded-md border border-indigo-200">
              Day 30
            </span>
          </div>
          <div>
            <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Phase 4: Milestone</div>
            <h3 class="text-base sm:text-lg font-bold font-heading text-slate-900 mt-1">30-Day Re-Test</h3>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Formal goniometric re-measurement and narrative progress reporting sent to physicians, insurers, and adjusters.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-indigo-600"></i> Objective proof of gain
        </div>
      </div>

      <!-- Step 5 -->
      <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold text-base border border-emerald-200">
              05
            </div>
            <span class="text-[11px] font-bold px-2.5 py-0.5 bg-emerald-50 text-emerald-800 rounded-md border border-emerald-200">
              Graduation
            </span>
          </div>
          <div>
            <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Phase 5: Independence</div>
            <h3 class="text-base sm:text-lg font-bold font-heading text-slate-900 mt-1">Functional Recovery</h3>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Successful return to work, sports, and daily activities with an individualized home exercise program.
          </p>
        </div>
        <div class="mt-5 pt-3 border-t border-slate-100 text-xs font-semibold text-emerald-900 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-600"></i> Lifelong mobility plan
        </div>
      </div>

    </div>

    <!-- Navigation & CTA below roadmap -->
    <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4 text-center">
      <a href="patient-journey.php" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl border border-slate-300 bg-white hover:bg-slate-50 text-slate-800 font-semibold text-xs sm:text-sm shadow-xs transition-all">
        <i data-lucide="route" class="w-4 h-4 text-teal-600"></i>
        <span>Read Detailed 8-Step Patient Journey Guide</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-slate-400"></i>
      </a>

      <a href="book-evaluation.php" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-brand-900 hover:bg-slate-800 text-white font-bold text-xs sm:text-sm shadow-md transition-all">
        <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i>
        <span>Schedule Initial Evaluation</span>
      </a>
    </div>

  </div>
</section>

<!-- =========================================================================
     7. REHABILITATION CENTER FACILITY TEASER
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-slate-50/50 border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
      
      <div class="lg:col-span-5 space-y-5">
        <span class="text-xs font-bold uppercase tracking-wider text-clinical-teal font-heading">Our Facility</span>
        <h2 class="section-title text-slate-900">
          A Purpose-Built Healing Environment
        </h2>
        <p class="section-subtitle leading-relaxed">
          Our clinic is designed to inspire physical confidence from the moment you arrive. Spacious gym zones, private treatment suites, and hospital-grade sanitization standards.
        </p>

        <div class="space-y-3 text-xs sm:text-sm text-slate-700">
          <div class="flex items-center gap-2.5">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i>
            <span>Therapeutic exercise gym with variable resistance equipment</span>
          </div>
          <div class="flex items-center gap-2.5">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i>
            <span>Private examination and spinal decompression rooms</span>
          </div>
          <div class="flex items-center gap-2.5">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i>
            <span>Ground-level ADA wheelchair accessibility and reserved parking</span>
          </div>
        </div>

        <div class="pt-2">
          <a href="rehab-center.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-900 text-white font-bold text-xs sm:text-sm hover:bg-slate-800 shadow-sm transition-all">
            <i data-lucide="camera" class="w-4 h-4 text-teal-400"></i>
            <span>Take a Virtual Facility Tour</span>
          </a>
        </div>
      </div>

      <!-- Facility Photos -->
      <div class="lg:col-span-7 grid grid-cols-2 gap-4">
        <div class="rounded-2xl overflow-hidden aspect-4/3 shadow-xs border border-slate-200/90">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=700&q=80" alt="Rehabilitation gym floor" class="w-full h-full object-cover">
        </div>
        <div class="rounded-2xl overflow-hidden aspect-4/3 shadow-xs border border-slate-200/90">
          <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=700&q=80" alt="Private clinical treatment room" class="w-full h-full object-cover">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     8. HIGH-INTENT FAQ PREVIEW (Clean Accordion)
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-white border-b border-slate-100" id="faqs">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
    
    <div class="text-center space-y-2.5">
      <span class="text-xs font-bold uppercase tracking-wider text-clinical-teal font-heading">Common Inquiries</span>
      <h2 class="section-title text-slate-900">
        Frequently Asked Questions
      </h2>
      <p class="section-subtitle">Clear answers regarding physical therapy evaluations, No-Fault coverage, and referrals</p>
    </div>

    <div class="space-y-3.5">
      
      <details class="group bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-teal-500/40 open:shadow-xs transition-all">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-slate-900 text-sm sm:text-base">
          <span>Do I need a doctor's referral to begin physical therapy?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3.5 pt-3.5 border-t border-slate-100 leading-relaxed">
          In New York, under Direct Access legislation, you can be evaluated and treated by a licensed physical therapist for up to 30 days or 10 visits without a doctor's prescription. For Workers' Comp or No-Fault, specific paperwork applies; our intake team verifies this for free prior to your arrival.
        </p>
      </details>

      <details class="group bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-teal-500/40 open:shadow-xs transition-all">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-slate-900 text-sm sm:text-base">
          <span>How does No-Fault auto insurance cover my rehabilitation?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3.5 pt-3.5 border-t border-slate-100 leading-relaxed">
          Under New York State No-Fault laws, medical expenses following an auto collision are covered by the insurance carrier regardless of who caused the crash, provided claims are filed within 30 days. We bill your insurer directly with zero out-of-pocket costs to you.
        </p>
      </details>

      <details class="group bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-teal-500/40 open:shadow-xs transition-all">
        <summary class="flex items-center justify-between cursor-pointer font-bold text-slate-900 text-sm sm:text-base">
          <span>What happens during my initial physical therapy evaluation?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3.5 pt-3.5 border-t border-slate-100 leading-relaxed">
          Your initial appointment takes approximately 60 minutes. Your therapist reviews your health history, examines joint range of motion, muscle strength, nerve reflexes, and functional limitations, and establishes a personalized recovery blueprint.
        </p>
      </details>

    </div>

    <div class="text-center pt-2">
      <a href="faqs.php" class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-clinical-teal hover:underline">
        <span>View Full Searchable FAQ Master Bank (22+ Questions)</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
    </div>

  </div>
</section>

<!-- =========================================================================
     9. FINAL CONVERSION BANNER (Clean Luxury Style)
     ========================================================================= -->
<section class="py-16 sm:py-20 bg-brand-900 text-white relative">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
    <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-semibold bg-teal-500/20 text-teal-300 border border-teal-500/30">
      <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Clinical Care Intake
    </span>
    <h2 class="section-title text-white">
      Ready to Begin Your Recovery Journey?
    </h2>
    <p class="text-slate-300 text-sm sm:text-base lg:text-lg max-w-2xl mx-auto leading-relaxed">
      Whether you were injured in an auto accident, hurt at work, or need post-surgical rehabilitation, our clinical intake coordinators are ready to assist you.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5 pt-2">
      <a href="book-evaluation.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl font-bold text-xs sm:text-sm text-brand-900 bg-white hover:bg-slate-100 shadow-md transition-all">
        <i data-lucide="calendar" class="w-4 h-4 text-teal-600"></i>
        <span>Book an Evaluation Online</span>
      </a>
      <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-bold text-xs sm:text-sm text-white bg-emerald-600 hover:bg-emerald-700 shadow-md transition-all">
        <i data-lucide="message-square" class="w-4 h-4"></i>
        <span>Chat on WhatsApp</span>
      </a>
      <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl font-semibold text-xs sm:text-sm text-slate-200 border border-slate-700 hover:border-slate-500 hover:text-white transition-all">
        <i data-lucide="phone" class="w-4 h-4 text-teal-400"></i>
        <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>
