<?php
/**
 * THE PATIENT JOURNEY — HOW REHABILITATION WORKS
 * Conforms to Brief Section 13 (Recommended 8-Step Visual Care Roadmap)
 */

$pageTitle = 'The Patient Journey | How Rehabilitation Works at Jaspan Clinic';
$pageDescription = 'Understand your physical therapy and rehabilitation roadmap from initial intake to full functional independence. Step-by-step clinical guidance.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: PATIENT JOURNEY -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="git-merge" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinical Care Pathway</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        The Rehabilitation Journey: <br class="hidden sm:inline">
        <span class="text-teal-400">From Intake to Full Recovery</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        We understand that starting rehabilitation—especially after an auto accident or work-related injury—can feel daunting. Here is the structured 8-stage clinical pathway you can expect at our clinic.
      </p>

      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule Initial Evaluation</span>
        </a>
        <a href="<?= getWhatsAppUrl('patient_journey') ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
          <i data-lucide="message-square" class="w-4 h-4 text-teal-400"></i>
          <span>Ask About Your Case</span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- 8-STEP INTERACTIVE CLINICAL PATHWAY -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-100">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
      <span class="section-subtitle">Complete Care Architecture</span>
      <h2 class="section-title text-brand-900">
        The 8-Stage Clinical Progression
      </h2>
      <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
        From initial triage and insurance verification to post-discharge independence. Every step is documented, measured, and clinically supervised.
      </p>
    </div>

    <!-- Visual Connected Timeline Spine -->
    <div class="space-y-8 sm:space-y-10 relative before:absolute before:inset-0 before:left-6 sm:before:left-7 before:w-0.5 before:bg-slate-200">
      
      <!-- Step 1 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          01
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 1: First Contact &amp; Clinical Triage</h3>
            <span class="text-xs px-2.5 py-0.5 bg-teal-50 text-teal-800 border border-teal-200 rounded-full font-semibold">Immediate</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            You reach out via our website intake form, guided triage chatbot, WhatsApp desk, or phone. You share your condition, injury mechanism (e.g., auto collision, Workers’ Comp, post-surgical, joint pain), and scheduling preferences.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-teal-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i>
            <span>Instant initial case review &amp; triage screening</span>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          02
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 2: Case Verification &amp; Authorization</h3>
            <span class="text-xs px-2.5 py-0.5 bg-amber-50 text-amber-800 border border-amber-200 rounded-full font-semibold">Pre-Visit Check</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Our specialized intake coordinators verify your insurance coverage (NY No-Fault carrier guidelines, Workers’ Compensation WCB claim files, or private health plans). We verify approvals beforehand so you arrive with total peace of mind.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-amber-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-amber-600 shrink-0"></i>
            <span>Zero administrative stress &amp; verified claim authorization</span>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          03
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 3: Rapid Appointment Access</h3>
            <span class="text-xs px-2.5 py-0.5 bg-blue-50 text-blue-800 border border-blue-200 rounded-full font-semibold">Prompt Access</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            You are scheduled with an experienced Doctor of Physical Therapy. We offer flexible appointment windows including early morning and evening hours to accommodate work, family, and recovery needs.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-blue-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-blue-600 shrink-0"></i>
            <span>Same-week evaluations available to prevent condition chronicity</span>
          </div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          04
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 4: Comprehensive Diagnostic Assessment</h3>
            <span class="text-xs px-2.5 py-0.5 bg-teal-50 text-teal-800 border border-teal-200 rounded-full font-semibold">Day 01 In-Clinic</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            A dedicated 60-minute one-on-one session. Your therapist conducts an in-depth clinical interview, evaluates joint range of motion with digital goniometry, assesses muscle firing, screens neurological reflexes, and identifies kinetic compensations.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-teal-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i>
            <span>Objective baseline documentation &amp; immediate pain relief</span>
          </div>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          05
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 5: Customized Rehabilitation Blueprint</h3>
            <span class="text-xs px-2.5 py-0.5 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-full font-semibold">Care Protocol</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Based on clinical findings, an evidence-based roadmap is established outlining frequency, hands-on joint mobilization techniques, therapeutic exercise progressions, and quantifiable 30-day functional recovery targets.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-emerald-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 shrink-0"></i>
            <span>Personalized care schedule tailored to tissue healing biology</span>
          </div>
        </div>
      </div>

      <!-- Step 6 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          06
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 6: Supervised 1-on-1 Active Care</h3>
            <span class="text-xs px-2.5 py-0.5 bg-blue-50 text-blue-800 border border-blue-200 rounded-full font-semibold">Active Recovery</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Treatment takes place in our dedicated rehabilitation gym floor and private suites. You receive targeted manual mobilization, progressive resistance strengthening, neuromotor balance retraining, and therapeutic pain relief under direct clinical eyes.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-blue-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-blue-600 shrink-0"></i>
            <span>Continuous guidance—never left alone or shuffled to aides</span>
          </div>
        </div>
      </div>

      <!-- Step 7 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-900 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          07
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 7: 30-Day Milestone Re-Assessment &amp; Reports</h3>
            <span class="text-xs px-2.5 py-0.5 bg-amber-50 text-amber-800 border border-amber-200 rounded-full font-semibold">Every 30 Days</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            We objectively re-test your strength, joint angles, and functional capabilities. For Workers' Comp and No-Fault cases, formal narrative re-evaluations and C-4.2 variance documentations are submitted directly to adjusters, physicians, and attorneys.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-amber-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-amber-600 shrink-0"></i>
            <span>Quantified objective metrics verifying clinical improvement</span>
          </div>
        </div>
      </div>

      <!-- Step 8 -->
      <div class="relative flex items-start gap-4 sm:gap-6 group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-teal-600 text-white flex items-center justify-center font-bold text-base sm:text-lg shadow-sm shrink-0 ring-4 sm:ring-6 ring-slate-50 z-10 transition-colors group-hover:bg-teal-700">
          08
        </div>
        <div class="card-clean p-5 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs flex-1 space-y-2.5">
          <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Stage 8: Discharge &amp; Functional Independence</h3>
            <span class="text-xs px-2.5 py-0.5 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-full font-semibold">Goal Achieved</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            When you achieve pre-injury functional baseline, you graduate with an individualized home exercise program, workplace ergonomic guidance, and preventative resilience strategies to safeguard long-term spinal and joint health.
          </p>
          <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-emerald-800">
            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 shrink-0"></i>
            <span>Complete recovery, return-to-work clearance &amp; self-efficacy</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Final CTA in Journey -->
    <div class="mt-16 text-center">
      <a href="book-evaluation.php" class="btn-primary">
        <i data-lucide="calendar" class="w-4 h-4"></i>
        <span>Begin Stage 1: Schedule Your Initial Evaluation</span>
      </a>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

