<?php
/**
 * PATIENT OUTCOMES & TESTIMONIALS
 * Categorized by Case Type (Brief Section 23)
 */

$pageTitle = 'Patient Testimonials & Recovery Stories | Jaspan Clinic';
$pageDescription = 'Read authentic patient experiences and recovery outcomes at Jaspan Physical Therapy & Rehabilitation: auto accident survivors, injured workers, and post-surgical patients.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: TESTIMONIALS -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="award" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Patient Voices &amp; Verified Experiences</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Real Patients. Real Recovery. <br class="hidden sm:inline">
        <span class="text-teal-400">Measurable Functional Outcomes.</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Discover how our patient-centered physical therapy and multidisciplinary case coordination have helped New Yorkers regain strength, overcome chronic trauma, and return to work and active life.
      </p>

      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule an Evaluation</span>
        </a>
        <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
          <i data-lucide="message-square" class="w-4 h-4 text-teal-400"></i>
          <span>Ask Our Team on WhatsApp</span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- CATEGORIZED TESTIMONIALS -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Filter Buttons -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 mb-12">
      <button type="button" class="test-filter-btn px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-brand-900 text-white border border-brand-900 transition-all shadow-xs" data-category="all">
        All Patient Stories
      </button>
      <button type="button" class="test-filter-btn px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 transition-all shadow-xs" data-category="auto">
        Auto Accident / No-Fault
      </button>
      <button type="button" class="test-filter-btn px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 transition-all shadow-xs" data-category="wc">
        Workers' Compensation
      </button>
      <button type="button" class="test-filter-btn px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 transition-all shadow-xs" data-category="post-op">
        Post-Surgical
      </button>
      <button type="button" class="test-filter-btn px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 transition-all shadow-xs" data-category="pt">
        Physical Therapy &amp; Spine
      </button>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
      
      <!-- Testimonial 1: Auto Accident -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="auto">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-amber-50 text-amber-800 border border-amber-200/80 text-xs font-semibold">Auto Accident / No-Fault</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "After a rear-end collision on the Expressway, I had horrible whiplash, neck stiffness, and headaches that wouldn't quit. Jaspan Rehabilitation guided me through the entire No-Fault paperwork without any hassle. Within 6 weeks of dedicated manual therapy and gentle spinal decompression, I was completely pain-free."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Carlos M.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">Cervical Whiplash Recovery · 8 Weeks Care</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

      <!-- Testimonial 2: Workers' Comp -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="wc">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-blue-50 text-blue-800 border border-blue-200/80 text-xs font-semibold">Workers' Compensation</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "I injured my lower back lifting pallets in our distribution warehouse. Dealing with the Workers' Comp board was stressing me out, but the intake desk at Jaspan took care of all the medical authorization reports on time. The functional conditioning in their gym got me back on regular duty safely."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Derrick T.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">Lumbar Sprain &amp; Work Conditioning</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

      <!-- Testimonial 3: Post-Surgical -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="post-op">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200/80 text-xs font-semibold">Post-Surgical Knee</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "Following my total knee replacement, I was terrified of bending the joint. Dr. Jaspan and the therapists were patient, knowledgeable, and gave me hands-on attention every minute. My surgeon was amazed at my range of motion at my 12-week checkup."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Helena S.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">Total Knee Arthroplasty (TKA) Protocol</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

      <!-- Testimonial 4: Physical Therapy & Spine -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="pt">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-purple-50 text-purple-800 border border-purple-200/80 text-xs font-semibold">Sciatica &amp; Spine</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "I lived with chronic radiating sciatica down my right leg for over nine months. Other clinics just gave me a sheet of exercises and walked away. Jaspan's therapists actually did manual joint mobilization and taught me how to stabilize my core during sitting."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Anthony R.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">L4-L5 Disc Radiculopathy Protocol</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

      <!-- Testimonial 5: Auto Collision Multi-Trauma -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="auto">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-amber-50 text-amber-800 border border-amber-200/80 text-xs font-semibold">Auto Accident / No-Fault</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "I was a passenger in an Uber that was T-boned. Both my shoulder and neck took the brunt. The clinic scheduled me within 48 hours and coordinated directly with the driver's insurance company. I couldn't recommend them more highly for car crash recovery."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Rachel B.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">Passenger Collision Intake · Shoulder &amp; Neck</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

      <!-- Testimonial 6: Rotator Cuff Recovery -->
      <div class="testimonial-card card-clean bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-xs flex flex-col justify-between hover:border-brand-300 transition-all" data-category="post-op">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200/80 text-xs font-semibold">Post-Op Shoulder</span>
            <span class="text-xs font-semibold tracking-wide uppercase px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200">5.0 Verified Outcome</span>
          </div>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
            "After rotator cuff surgery, I couldn't even lift a coffee mug. The team at Jaspan took me step-by-step through gentle passive motion up to full strengthening. Today I'm back playing tennis on weekends without hesitation."
          </p>
        </div>
        <div class="pt-5 border-t border-slate-100 mt-5 flex items-center justify-between">
          <div>
            <div class="font-bold text-brand-900 text-sm">Kenneth W.</div>
            <div class="text-xs text-slate-500 font-medium mt-0.5">Supraspinatus Tendon Repair Protocol</div>
          </div>
          <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
        </div>
      </div>

    </div>

    <!-- Regulatory Notice for US Healthcare Compliance -->
    <div class="mt-14 p-5 bg-slate-50 border border-slate-200/90 rounded-xl text-center text-xs text-slate-500 max-w-3xl mx-auto leading-relaxed">
      <strong class="text-slate-700 font-semibold">Patient Outcome Notice:</strong> The testimonials presented reflect real individual patient experiences submitted with patient consent. Clinical outcomes vary based on pathology severity, general health, compliance with home programs, and physiological factors. Jaspan Physical Therapy does not guarantee specific clinical outcomes.
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

