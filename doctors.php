<?php
/**
 * MEET THE DOCTORS / CLINICAL AUTHORITY PROFILES
 * Conforms to Brief Section 8 (Doctor Profile Template & Credentials)
 */

$pageTitle = 'Meet Our Doctors & Clinical Leadership | Jaspan Physical Therapy';
$pageDescription = 'Meet the experienced licensed clinical directors, physical therapists, and rehabilitation specialists at Jaspan Physical Therapy & Rehabilitation Institute.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: CLINICAL AUTHORITY -->
<section class="bg-brand-900 text-white py-12 lg:py-16 border-b border-slate-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl space-y-4">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/20 text-teal-300 border border-teal-500/30">
        <i data-lucide="award" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinical Leadership &amp; Board-Certified Direction</span>
      </div>

      <h1 class="hero-title text-white">
        Experienced Clinicians Committed to <br class="hidden sm:inline">
        <span class="text-clinical-teal">Your Full Functional Recovery</span>
      </h1>

      <p class="section-subtitle text-slate-300 font-light">
        Our clinical team brings advanced degrees, hospital-based inpatient rehabilitation experience, and deep specialization in traumatic auto collisions, work injuries, and complex orthopedic recovery.
      </p>

      <div class="flex flex-wrap items-center gap-5 pt-1 text-xs sm:text-sm text-slate-300">
        <div class="flex items-center gap-2">
          <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
          <span>Doctor of Physical Therapy (DPT) Clinicians</span>
        </div>
        <div class="flex items-center gap-2">
          <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
          <span>Hospital &amp; Acute Continuum Experience</span>
        </div>
        <div class="flex items-center gap-2">
          <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
          <span>Bilingual Patient Care</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROVIDER PROFILES (Brief Section 8) -->
<section class="py-14 sm:py-20 bg-slate-50/50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-12">
    
    <!-- Doctor Profile 1: Lead Clinical Director -->
    <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-9 border border-slate-200/90 shadow-xs hover:shadow-sm transition-all grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Photo Col -->
      <div class="lg:col-span-4">
        <div class="relative rounded-xl overflow-hidden aspect-4/5 bg-slate-100 border border-slate-200/80">
          <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=700&q=80" 
               alt="Dr. Robert Jaspan, PT, DPT, OCS" 
               class="w-full h-full object-cover object-top">
          <div class="absolute bottom-3 left-3 bg-brand-900/90 text-white text-[11px] font-semibold px-3 py-1 rounded-md">
            Clinical Director &amp; Lead Physical Therapist
          </div>
        </div>
      </div>

      <!-- Bio Col -->
      <div class="lg:col-span-8 space-y-5">
        <div class="border-b border-slate-100 pb-4">
          <div class="flex flex-wrap items-center justify-between gap-2.5">
            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">
              Dr. Robert Jaspan, PT, DPT, OCS
            </h2>
            <span class="px-3 py-0.5 rounded-full text-xs font-bold bg-teal-50 text-teal-800 border border-teal-200">
              18+ Years Clinical Practice
            </span>
          </div>
          <p class="text-xs sm:text-sm font-semibold text-clinical-teal mt-1">
            Doctor of Physical Therapy • Board-Certified Orthopedic Clinical Specialist (OCS)
          </p>
        </div>

        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Dr. Jaspan has directed outpatient orthopedic rehabilitation and post-acute physical therapy protocols for nearly two decades. His extensive background bridges tertiary hospital-based inpatient rehabilitation with private multidisciplinary trauma care, specializing in violent acceleration whiplash injuries, complex spine pathology, and workplace functional restoration.
        </p>

        <!-- Credentials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="graduation-cap" class="w-4 h-4 text-teal-600"></i> Education &amp; Training
            </div>
            <p class="text-slate-600">Doctor of Physical Therapy (DPT), Columbia University / NYU Residency</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="building" class="w-4 h-4 text-teal-600"></i> Hospital &amp; Clinical Background
            </div>
            <p class="text-slate-600">Former Senior Clinician, Regional Trauma &amp; In-Patient Orthopedic Service</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="shield-check" class="w-4 h-4 text-teal-600"></i> Specializations
            </div>
            <p class="text-slate-600">No-Fault Auto Accident Spinal Trauma, Workers' Comp, Decompression</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="languages" class="w-4 h-4 text-teal-600"></i> Languages Spoken
            </div>
            <p class="text-slate-600">English, Spanish</p>
          </div>
        </div>

        <!-- Treatment Philosophy Quote -->
        <blockquote class="p-3.5 bg-slate-50 rounded-xl border-l-4 border-clinical-teal text-xs sm:text-sm text-slate-700 italic leading-relaxed">
          "True rehabilitation is not just about silencing temporary symptoms. It is about restoring biomechanical equilibrium, rebuilding neuromuscular stability, and giving patients the physical confidence to reclaim their daily lives."
        </blockquote>

        <div class="flex flex-wrap items-center gap-3 pt-1">
          <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-brand-900 text-white font-bold text-xs sm:text-sm hover:bg-slate-800 transition-colors flex items-center gap-2">
            <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i> Book Evaluation with Dr. Jaspan
          </a>
          <a href="<?= getWhatsAppUrl('general', '- Inquiry regarding Dr. Jaspan consultation') ?>" target="_blank" rel="noopener noreferrer" class="px-4 py-2.5 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-300 font-bold text-xs sm:text-sm hover:bg-emerald-100 flex items-center gap-2">
            <i data-lucide="message-square" class="w-4 h-4 text-emerald-600"></i> Message on WhatsApp
          </a>
        </div>

      </div>

    </div>

    <!-- Doctor Profile 2: Senior Specialist -->
    <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-9 border border-slate-200/90 shadow-xs hover:shadow-sm transition-all grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Photo Col -->
      <div class="lg:col-span-4">
        <div class="relative rounded-xl overflow-hidden aspect-4/5 bg-slate-100 border border-slate-200/80">
          <img src="https://images.unsplash.com/photo-1594824813583-05990471b072?auto=format&fit=crop&w=700&q=80" 
               alt="Dr. Elena Vance, PT, DPT, NCS" 
               class="w-full h-full object-cover object-top">
          <div class="absolute bottom-3 left-3 bg-brand-900/90 text-white text-[11px] font-semibold px-3 py-1 rounded-md">
            Neurological &amp; Post-Trauma Specialist
          </div>
        </div>
      </div>

      <!-- Bio Col -->
      <div class="lg:col-span-8 space-y-5">
        <div class="border-b border-slate-100 pb-4">
          <div class="flex flex-wrap items-center justify-between gap-2.5">
            <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">
              Dr. Elena Vance, PT, DPT, NCS
            </h2>
            <span class="px-3 py-0.5 rounded-full text-xs font-bold bg-teal-50 text-teal-800 border border-teal-200">
              12+ Years Experience
            </span>
          </div>
          <p class="text-xs sm:text-sm font-semibold text-clinical-teal mt-1">
            Doctor of Physical Therapy • Neurologic Clinical Specialist (NCS)
          </p>
        </div>

        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
          Dr. Vance focuses on post-concussive vestibular rehabilitation, gait and balance retraining following motor vehicle accidents, and post-surgical lower extremity functional restoration. She works closely with patients facing radiating neuropathies and balance deficits.
        </p>

        <!-- Credentials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="graduation-cap" class="w-4 h-4 text-teal-600"></i> Education
            </div>
            <p class="text-slate-600">Doctor of Physical Therapy, Ithaca College • Neurological Fellowship</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="award" class="w-4 h-4 text-teal-600"></i> Certifications
            </div>
            <p class="text-slate-600">Vestibular Rehabilitation Certified (AITA), Functional Movement Screen (FMS)</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="activity" class="w-4 h-4 text-teal-600"></i> Areas of Focus
            </div>
            <p class="text-slate-600">Post-Concussion Dizziness, Whiplash Neuropathy, Post-Surgical Knee/Hip</p>
          </div>

          <div class="space-y-1">
            <div class="font-bold text-slate-900 flex items-center gap-1.5">
              <i data-lucide="languages" class="w-4 h-4 text-teal-600"></i> Languages Spoken
            </div>
            <p class="text-slate-600">English, Russian</p>
          </div>
        </div>

        <div class="flex flex-wrap items-center gap-3 pt-1">
          <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-brand-900 text-white font-bold text-xs sm:text-sm hover:bg-slate-800 transition-colors flex items-center gap-2">
            <i data-lucide="calendar" class="w-4 h-4 text-teal-400"></i> Book Evaluation with Dr. Vance
          </a>
          <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="px-4 py-2.5 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-300 font-bold text-xs sm:text-sm hover:bg-emerald-100 flex items-center gap-2">
            <i data-lucide="message-square" class="w-4 h-4 text-emerald-600"></i> Chat on WhatsApp
          </a>
        </div>

      </div>

    </div>

    <!-- Medical Verification Note -->
    <div class="p-4 bg-teal-50/70 border border-teal-200 rounded-xl text-center text-xs sm:text-sm text-teal-900">
      <strong class="font-semibold">Medical Authority Verification:</strong> Provider degrees, license verifications, and hospital affiliations are documented in compliance with state physical therapy licensing boards.
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

