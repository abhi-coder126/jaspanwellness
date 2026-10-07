<?php
/**
 * REHABILITATION CENTER & FACILITY SHOWCASE
 * Dedicated Facility Page (Brief Section 12)
 */

$pageTitle = 'Our Rehabilitation Center & Modern Facility | Jaspan Clinic';
$pageDescription = 'Tour our dedicated physical therapy and rehabilitation facility. Modern therapeutic exercise gym, private evaluation suites, advanced recovery equipment, and full ADA accessibility.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: FACILITY -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="building-2" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Advanced Clinical Recovery Center</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        A Dedicated Facility Designed for <br class="hidden sm:inline">
        <span class="text-teal-400">Healing, Mobility &amp; Independence</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        True physical rehabilitation requires an environment that blends clinical precision with patient comfort. Explore our spacious exercise gymnasium, private treatment rooms, advanced therapeutic modalities, and barrier-free accessible facility.
      </p>

      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule an In-Person Evaluation</span>
        </a>

        <a href="<?= getWhatsAppUrl('rehab_center') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl font-semibold text-sm text-white bg-emerald-600 hover:bg-emerald-500 shadow-sm transition-all">
          <i data-lucide="message-square" class="w-4 h-4"></i>
          <span>Ask Questions on WhatsApp</span>
        </a>

        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="btn-secondary">
          <i data-lucide="phone" class="w-4 h-4 text-teal-400"></i>
          <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- FACILITY TOUR & SPACES -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
      <span class="section-subtitle">Purpose-Built Architecture</span>
      <h2 class="section-title text-brand-900">
        Tour Our Rehabilitation Spaces
      </h2>
      <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
        Every square foot of our clinic is engineered to support the clinical journey—from private initial evaluations to dynamic full-body strength conditioning.
      </p>
    </div>

    <!-- Area 1: The Main Rehabilitation Gym Floor -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center mb-16">
      <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm aspect-16/10">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80" alt="Spacious Physical Therapy Gym Floor" class="w-full h-full object-cover">
      </div>
      <div class="lg:col-span-6 space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-teal-600 font-heading">Primary Recovery Arena</span>
        <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Therapeutic Gym &amp; Functional Motion Floor</h3>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Our open gym area allows our physical therapists to guide patients through dynamic balance exercises, gait retraining, therapeutic resistance exercises, and simulated daily tasks.
        </p>
        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Parallel walking bars and dynamic bodyweight harness support</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Low-impact recumbent cross-trainers and upper-body ergometers</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Free weight, resistance tubing, and functional pulley stations</li>
        </ul>
      </div>
    </div>

    <!-- Area 2: Private Examination Suites -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center mb-16">
      <div class="lg:col-span-6 order-2 lg:order-1 space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-teal-600 font-heading">Confidential Clinical Care</span>
        <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Private Manual Therapy &amp; Examination Suites</h3>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Initial consultations, detailed physical exams, spinal mobilizations, and soft-tissue treatments take place in private, quiet examination rooms designed for optimal comfort and HIPAA privacy.
        </p>
        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> High-low adjustable orthopedic examination tables</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Advanced cervical and lumbar mechanical decompression systems</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Complete acoustic privacy for personal medical discussions</li>
        </ul>
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2 rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm aspect-16/10">
        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="Private clinical examination suite" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Area 3: Modalities & Recovery Station -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
      <div class="lg:col-span-6 rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm aspect-16/10">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" alt="Rehabilitation center reception and recovery area" class="w-full h-full object-cover">
      </div>
      <div class="lg:col-span-6 space-y-4">
        <span class="text-xs font-bold uppercase tracking-wider text-teal-600 font-heading">Pain Relief &amp; Regeneration</span>
        <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Physiotherapy Modalities &amp; Recovery Technology</h3>
        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          We integrate modern therapeutic technologies to accelerate healing, manage pain non-pharmacologically, and reduce post-injury tissue edema.
        </p>
        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700">
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Neuromuscular electrical stimulation (NMES) &amp; TENS therapy</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Therapeutic deep ultrasound and phonophoresis</li>
          <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-teal-600 shrink-0"></i> Cryotherapy compression and moist heat hydrocollators</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- ACCESSIBILITY, PARKING & LOCATION DETAILS -->
<section class="py-16 sm:py-24 bg-slate-50 border-t border-slate-200/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
      <span class="section-subtitle">Patient Convenience</span>
      <h3 class="section-title text-brand-900">
        Accessibility &amp; Environment
      </h3>
      <p class="text-slate-600 text-sm sm:text-base">Barrier-free access for patients with mobility limitations, wheelchairs, or crutches.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center mb-2">
          <i data-lucide="accessibility" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">ADA Accessible Facility</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Ground-level entrance, automatic doors, spacious elevators, wide corridors, and handicap-accessible private restrooms designed for wheelchair and walker use.
        </p>
      </div>

      <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center mb-2">
          <i data-lucide="car" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Dedicated Patient Parking</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Reserved patient parking spots directly adjacent to the clinic entrance, with convenient drop-off and pickup zones for family members and medical transport vehicles.
        </p>
      </div>

      <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-xs space-y-3">
        <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center mb-2">
          <i data-lucide="shield-check" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Sanitization &amp; Safety</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Hospital-grade disinfectant protocols performed on all treatment tables, exercise machines, and diagnostic instruments between every single patient visit.
        </p>
      </div>

    </div>

    <div class="mt-12 text-center flex flex-wrap justify-center gap-3">
      <a href="book-evaluation.php" class="btn-primary">
        <i data-lucide="calendar" class="w-4 h-4"></i>
        <span>Schedule Clinical Evaluation</span>
      </a>
      <a href="contact.php" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-brand-900 text-white font-semibold text-sm hover:bg-slate-800 transition-colors shadow-xs">
        <i data-lucide="map-pin" class="w-4 h-4 text-teal-400"></i>
        <span>Directions &amp; Location Details</span>
      </a>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

