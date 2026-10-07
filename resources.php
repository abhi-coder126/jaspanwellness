<?php
/**
 * PATIENT RESOURCES & CLINICAL RECOVERY ARTICLES
 * SEO & AEO Topic Clusters (Brief Section 20 & 22)
 */

$pageTitle = 'Patient Educational Resources & Clinical Guides | Jaspan Physical Therapy';
$pageDescription = 'Evidence-based recovery guides, No-Fault auto accident timelines, Workers’ Comp navigation, and orthopedic rehabilitation articles reviewed by licensed physical therapists.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: RESOURCES -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="book-open" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinical Education Hub</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Patient Recovery Guides &amp; <br class="hidden sm:inline">
        <span class="text-teal-400">Evidence-Based Articles</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Clinically reviewed articles written in plain English to help you navigate injury recovery, understand diagnostic findings, and protect your health rights after an accident or workplace incident.
      </p>

      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule Evaluation</span>
        </a>
        <a href="faqs.php" class="btn-secondary">
          <i data-lucide="help-circle" class="w-4 h-4 text-teal-400"></i>
          <span>Search All FAQs</span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ARTICLES TOPIC CLUSTER -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-12">
    
    <!-- Article 1: 72-Hour Auto Accident Guide -->
    <article class="card-clean p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center hover:border-brand-300 transition-all">
      <div class="lg:col-span-8 space-y-3.5">
        <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-xs text-slate-500 font-medium">
          <span class="px-2.5 py-1 bg-amber-50 text-amber-800 border border-amber-200/80 rounded-md font-semibold text-xs">Auto Accident Recovery</span>
          <span>·</span>
          <span>Dr. Robert Jaspan, PT, DPT</span>
          <span>·</span>
          <span>Clinical Review</span>
        </div>

        <h2 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">
          The First 72 Hours After a Car Crash: Why Delayed Pain Is a Red Flag
        </h2>

        <!-- Direct Answer / AEO Snapshot -->
        <div class="p-4 sm:p-5 bg-slate-50 rounded-xl border-l-4 border-amber-500 text-xs sm:text-sm text-slate-700 leading-relaxed">
          <strong class="font-bold text-slate-900 block mb-1">Direct Clinical Summary:</strong>
          Following a collision, adrenaline and cortisol surges temporarily mask ligament and spinal micro-trauma. Cervical whiplash, lumbar disc swelling, and thoracic joint restrictions typically manifest 24 to 72 hours later. Delaying physical therapy evaluation allows fibrous scar tissue to stiffen in a shortened, dysfunctional state, significantly increasing the likelihood of chronic cervical pain.
        </div>

        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          In addition to physical health, the administrative timeline is pressing: New York No-Fault claim applications (NF-2) must generally be filed within 30 days of the collision to guarantee full medical expense coverage.
        </p>

        <div class="pt-1 flex items-center gap-3">
          <a href="no-fault-auto-accident.php" class="text-xs sm:text-sm font-bold text-amber-700 hover:text-amber-800 flex items-center gap-1.5">
            <span>Explore No-Fault Rehabilitation Program</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <div class="lg:col-span-4 rounded-xl overflow-hidden aspect-4/3 border border-slate-200/90 shadow-xs">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Doctor examining patient spine after accident" class="w-full h-full object-cover">
      </div>
    </article>

    <!-- Article 2: Workers' Comp Navigation -->
    <article class="card-clean p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center hover:border-brand-300 transition-all">
      <div class="lg:col-span-8 space-y-3.5">
        <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-xs text-slate-500 font-medium">
          <span class="px-2.5 py-1 bg-blue-50 text-blue-800 border border-blue-200/80 rounded-md font-semibold text-xs">Workers' Compensation</span>
          <span>·</span>
          <span>Dr. Elena Vance, PT, DPT</span>
          <span>·</span>
          <span>Clinical Review</span>
        </div>

        <h2 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">
          Understanding the Workers’ Compensation Therapy Timeline &amp; Variance Rules
        </h2>

        <div class="p-4 sm:p-5 bg-slate-50 rounded-xl border-l-4 border-blue-500 text-xs sm:text-sm text-slate-700 leading-relaxed">
          <strong class="font-bold text-slate-900 block mb-1">Direct Clinical Summary:</strong>
          The New York State Workers' Compensation Board operates under strict Medical Treatment Guidelines (MTGs) that dictate allowed treatment frequency and functional duration. To prevent insurance denials, your physical therapist must provide objective, data-backed re-evaluations (Form C-4.2) demonstrating measurable improvements in range of motion, strength, and work task capability every 30 to 45 days.
        </div>

        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Learn how structured work conditioning and ergonomic assessments provide the objective medical proof required by claims adjusters to approve continued rehabilitation.
        </p>

        <div class="pt-1 flex items-center gap-3">
          <a href="workers-compensation.php" class="text-xs sm:text-sm font-bold text-blue-700 hover:text-blue-800 flex items-center gap-1.5">
            <span>Learn About Workers' Comp Care</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <div class="lg:col-span-4 rounded-xl overflow-hidden aspect-4/3 border border-slate-200/90 shadow-xs">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Patient training functional movements in rehabilitation gym" class="w-full h-full object-cover">
      </div>
    </article>

    <!-- Article 3: What to Expect at Evaluation -->
    <article class="card-clean p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center hover:border-brand-300 transition-all">
      <div class="lg:col-span-8 space-y-3.5">
        <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-xs text-slate-500 font-medium">
          <span class="px-2.5 py-1 bg-emerald-50 text-emerald-800 border border-emerald-200/80 rounded-md font-semibold text-xs">Patient Education</span>
          <span>·</span>
          <span>Jaspan Clinical Staff</span>
          <span>·</span>
          <span>Clinical Review</span>
        </div>

        <h2 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">
          What Really Happens at Your First Physical Therapy Evaluation?
        </h2>

        <div class="p-4 sm:p-5 bg-slate-50 rounded-xl border-l-4 border-emerald-500 text-xs sm:text-sm text-slate-700 leading-relaxed">
          <strong class="font-bold text-slate-900 block mb-1">Direct Clinical Summary:</strong>
          A high-quality physical therapy evaluation is not an exercise session; it is a clinical diagnostic investigation. Your physical therapist assesses joint goniometry (degrees of movement), manual muscle testing (strength grades 0 to 5), neurological dermatomes and myotomes, deep tendon reflexes, and movement biomechanics to locate the root driver of your pain.
        </div>

        <div class="pt-1 flex items-center gap-3">
          <a href="book-evaluation.php" class="text-xs sm:text-sm font-bold text-emerald-700 hover:text-emerald-800 flex items-center gap-1.5">
            <span>Schedule Initial Diagnostic Evaluation</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <div class="lg:col-span-4 rounded-xl overflow-hidden aspect-4/3 border border-slate-200/90 shadow-xs">
        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80" alt="Clinical consultation in examination suite" class="w-full h-full object-cover">
      </div>
    </article>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

