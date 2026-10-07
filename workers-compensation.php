<?php
/**
 * WORKERS' COMPENSATION REHABILITATION LANDING PAGE
 * Dedicated Case-Intent Patient Acquisition Page (Brief Section 11)
 */

$pageTitle = 'Workers’ Compensation Physical Therapy & Rehabilitation | Jaspan Clinic';
$pageDescription = 'Specialized physical therapy and functional rehabilitation for workplace injuries and Workers’ Comp cases in New York. Dedicated case management, ergonomic restoration, and return-to-work milestones.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: WORKERS' COMP -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/15 text-blue-300 border border-blue-500/30">
        <i data-lucide="briefcase" class="w-3.5 h-3.5 text-blue-400"></i>
        <span>Authorized Workers’ Compensation Care · NYS WCB Compliant</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Targeted Rehabilitation for <br class="hidden sm:inline">
        <span class="text-teal-400">Workplace &amp; Occupational Injuries</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        A work-related injury threatens your livelihood, physical comfort, and functional capability. Our clinical rehabilitation program focuses on restoring pain-free movement, rebuilding task-specific strength, and meeting objective return-to-work benchmarks.
      </p>

      <!-- Primary Action Buttons -->
      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule Work Injury Evaluation</span>
        </a>

        <a href="<?= getWhatsAppUrl('workers_comp') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl font-semibold text-sm text-white bg-emerald-600 hover:bg-emerald-500 shadow-sm transition-all">
          <i data-lucide="message-square" class="w-4 h-4"></i>
          <span>Workers' Comp WhatsApp Desk</span>
        </a>

        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="btn-secondary">
          <i data-lucide="phone" class="w-4 h-4 text-teal-400"></i>
          <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
        </a>
      </div>

      <div class="pt-2 flex items-center gap-2 text-xs text-slate-400">
        <i data-lucide="check-circle-2" class="w-4 h-4 text-teal-400 shrink-0"></i>
        <span>Direct carrier billing under NYS Workers' Compensation Board Medical Treatment Guidelines (MTGs). Zero out-of-pocket costs for authorized claims.</span>
      </div>

    </div>
  </div>
</section>

<!-- WORKPLACE INJURY SPECIALTIES -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
      <span class="section-subtitle">Conditions We Treat</span>
      <h2 class="section-title text-brand-900">
        Occupational Injuries &amp; Functional Conditions
      </h2>
      <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
        Whether your injury was an acute event or developed over time through repetitive motion, our therapy team develops progressive protocols tailored to your job demands.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="arrow-down-up" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Heavy Lifting &amp; Lumbar Disc Injury</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Acute back strains, annular tears, and disc herniations sustained while lifting, bending, or loading. Rehabilitation focuses on spinal stabilization and safe biomechanics.
        </p>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="activity" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Slip, Trip &amp; Fall Trauma</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Traumatic joint sprains, wrist fractures, knee ligament contusions, and hip contusions resulting from wet surfaces, ladder falls, or uneven floor hazards.
        </p>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="keyboard" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Repetitive Strain &amp; Carpal Tunnel</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Chronic tendonitis, lateral epicondylitis (tennis elbow), median nerve compression, and ergonomic neck tension from continuous computer or assembly work.
        </p>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="maximize" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Rotator Cuff &amp; Overhead Strains</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Shoulder impingement and tendon tears common among construction workers, painters, mechanics, and warehouse personnel performing repeated overhead tasks.
        </p>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="check-circle" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Post-Surgical Work Injury Rehab</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Post-operative physical therapy following surgical intervention for work-related meniscus repair, spinal decompression, or fracture reduction.
        </p>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 hover:border-brand-300 transition-all shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold border border-blue-100">
          <i data-lucide="user-check" class="w-5 h-5"></i>
        </div>
        <h3 class="font-bold text-lg text-brand-900 font-heading">Work Conditioning &amp; Ergonomics</h3>
        <p class="text-sm text-slate-600 leading-relaxed">
          Simulated job task conditioning (lifting bins, pushing carts, climbing stairs) designed to prepare injured workers for safe, full-duty employment.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- HOW WE COORDINATE WITH WORKERS' COMP BOARDS -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
      
      <div class="lg:col-span-7 space-y-6">
        <div>
          <span class="section-subtitle">Case Management Excellence</span>
          <h2 class="section-title text-brand-900 mt-2">
            Reliable Documentation &amp; Adjuster Coordination
          </h2>
        </div>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Under Workers' Compensation, medical authorization and compliance with Medical Treatment Guidelines (MTGs) dictate patient care continuity. A breakdown in paperwork can delay therapy. Jaspan ensures meticulous documentation and swift turnarounds.
        </p>

        <div class="space-y-3.5 text-sm sm:text-base text-slate-700">
          <div class="flex items-start gap-3.5 p-4 sm:p-5 bg-white rounded-xl border border-slate-200/90 shadow-xs">
            <i data-lucide="file-check-2" class="w-5 h-5 text-teal-600 mt-0.5 shrink-0"></i>
            <div>
              <strong class="text-brand-900 font-bold block text-sm sm:text-base">Objective Re-Evaluations (Form C-4.2 / MTG Variance Requests)</strong>
              <span class="text-slate-600 text-xs sm:text-sm">Timely submission of functional progress notes, range-of-motion measurements, and variance requests when additional therapy is clinically justified.</span>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-4 sm:p-5 bg-white rounded-xl border border-slate-200/90 shadow-xs">
            <i data-lucide="users" class="w-5 h-5 text-teal-600 mt-0.5 shrink-0"></i>
            <div>
              <strong class="text-brand-900 font-bold block text-sm sm:text-base">Case Manager &amp; Adjuster Coordination</strong>
              <span class="text-slate-600 text-xs sm:text-sm">Direct lines of communication with nurse case managers and insurance claims adjusters to keep your care uninterrupted.</span>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-4 sm:p-5 bg-white rounded-xl border border-slate-200/90 shadow-xs">
            <i data-lucide="award" class="w-5 h-5 text-teal-600 mt-0.5 shrink-0"></i>
            <div>
              <strong class="text-brand-900 font-bold block text-sm sm:text-base">Return-to-Work Functional Milestones</strong>
              <span class="text-slate-600 text-xs sm:text-sm">Objective criteria for modified duty, transitional duty, and clearance for full physical exertion without risk of re-injury.</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Action Roadmap Card -->
      <div class="lg:col-span-5 bg-brand-900 text-white rounded-2xl p-6 sm:p-8 border border-slate-800 shadow-lg relative space-y-6">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-teal-400">Action Protocol</span>
          <h3 class="text-xl sm:text-2xl font-bold font-heading text-white mt-1">
            What to Do After a Workplace Injury:
          </h3>
        </div>
        
        <div class="space-y-4 relative before:absolute before:top-3 before:bottom-3 before:left-4 before:w-0.5 before:bg-slate-700">
          <div class="relative flex items-start gap-3.5">
            <span class="w-8 h-8 rounded-full bg-teal-500 text-brand-950 flex items-center justify-center font-bold text-xs shrink-0 shadow-sm ring-4 ring-brand-900 z-10">1</span>
            <div class="pt-0.5">
              <strong class="text-white text-sm block font-bold">Notify Your Employer</strong>
              <span class="text-slate-300 text-xs sm:text-sm leading-relaxed">Report the injury in writing immediately to your supervisor (within 30 days under NY law).</span>
            </div>
          </div>

          <div class="relative flex items-start gap-3.5">
            <span class="w-8 h-8 rounded-full bg-teal-500 text-brand-950 flex items-center justify-center font-bold text-xs shrink-0 shadow-sm ring-4 ring-brand-900 z-10">2</span>
            <div class="pt-0.5">
              <strong class="text-white text-sm block font-bold">Obtain Case Number</strong>
              <span class="text-slate-300 text-xs sm:text-sm leading-relaxed">Secure your WCB Case Number and carrier name/claim number from your employer or doctor.</span>
            </div>
          </div>

          <div class="relative flex items-start gap-3.5">
            <span class="w-8 h-8 rounded-full bg-teal-500 text-brand-950 flex items-center justify-center font-bold text-xs shrink-0 shadow-sm ring-4 ring-brand-900 z-10">3</span>
            <div class="pt-0.5">
              <strong class="text-white text-sm block font-bold">Contact Jaspan Rehabilitation</strong>
              <span class="text-slate-300 text-xs sm:text-sm leading-relaxed">Send your case details to our intake desk via WhatsApp, phone, or online intake form.</span>
            </div>
          </div>

          <div class="relative flex items-start gap-3.5">
            <span class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold text-xs shrink-0 shadow-sm ring-4 ring-brand-900 z-10">4</span>
            <div class="pt-0.5">
              <strong class="text-white text-sm block font-bold">Begin Guided Therapy</strong>
              <span class="text-slate-300 text-xs sm:text-sm leading-relaxed">Start targeted 1-on-1 rehabilitation to prevent chronic functional disability.</span>
            </div>
          </div>
        </div>

        <div class="pt-4 border-t border-slate-800 flex flex-col sm:flex-row gap-3">
          <a href="book-evaluation.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-teal-500 hover:bg-teal-400 text-brand-950 font-bold text-xs sm:text-sm transition-colors">
            <span>Schedule Evaluation</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="<?= getWhatsAppUrl('workers_comp') ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm transition-colors">
            <i data-lucide="message-square" class="w-4 h-4"></i> WhatsApp Intake
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WORKERS' COMPENSATION FAQS -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center space-y-3 mb-12">
      <span class="section-subtitle">Common Questions</span>
      <h2 class="section-title text-brand-900">Workers' Comp Physical Therapy FAQ</h2>
      <p class="text-slate-600 text-sm sm:text-base">Clear answers to frequent questions about treatment, approvals, and out-of-pocket costs.</p>
    </div>

    <div class="space-y-4">
      <div class="p-5 rounded-xl border border-slate-200/90 bg-white shadow-xs">
        <h4 class="font-bold text-base text-brand-900 mb-2">Do I have to pay anything out of pocket for Workers' Comp therapy?</h4>
        <p class="text-sm text-slate-600 leading-relaxed">No. Under New York State Workers' Compensation law, all approved medical treatments and physical therapy sessions are billed directly to your employer's Workers' Comp insurance carrier. Injured workers do not pay copays or deductibles for authorized care.</p>
      </div>

      <div class="p-5 rounded-xl border border-slate-200/90 bg-white shadow-xs">
        <h4 class="font-bold text-base text-brand-900 mb-2">Can I choose my own physical therapist under Workers' Compensation?</h4>
        <p class="text-sm text-slate-600 leading-relaxed">Yes. In New York, injured workers generally have the right to select any authorized, licensed physical therapy practice that accepts Workers' Compensation patients. You are not obligated to use a clinic chosen by your employer or insurance adjuster.</p>
      </div>

      <div class="p-5 rounded-xl border border-slate-200/90 bg-white shadow-xs">
        <h4 class="font-bold text-base text-brand-900 mb-2">What if my claim is currently disputed or awaiting authorization?</h4>
        <p class="text-sm text-slate-600 leading-relaxed">Our clinical intake team regularly works with workers' compensation attorneys, claim adjusters, and medical providers to navigate pending authorizations and verify documentation so your physical recovery is not delayed.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

