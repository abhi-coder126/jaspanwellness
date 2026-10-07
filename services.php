<?php
/**
 * PHYSICAL THERAPY & CLINICAL SERVICES ARCHITECTURE
 * Conforms to Brief Section 9 (Service Page Architecture & Modalities)
 */

$pageTitle = 'Physical Therapy & Rehabilitation Services | Jaspan Clinic';
$pageDescription = 'Explore our clinical services: outpatient physical therapy, comprehensive rehabilitation, post-surgical recovery, spinal care, and modalities in New York.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: SERVICES -->
<section class="bg-brand-900 text-white py-12 lg:py-16 border-b border-slate-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl space-y-4">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/20 text-teal-300 border border-teal-500/30">
        <i data-lucide="layers" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Evidence-Based Rehabilitation Programs</span>
      </div>

      <h1 class="hero-title text-white">
        Clinical Services &amp; <br class="hidden sm:inline">
        <span class="text-clinical-teal">Therapeutic Modalities</span>
      </h1>

      <p class="section-subtitle text-slate-300 font-light">
        Every recovery protocol at Jaspan is tailored to your unique anatomical diagnosis, lifestyle demands, and functional goals. Explore our core services below.
      </p>

      <div class="flex flex-wrap items-center gap-3.5 pt-1">
        <a href="book-evaluation.php" class="px-6 py-3 rounded-xl font-bold text-xs sm:text-sm text-brand-900 bg-white hover:bg-slate-100 transition-colors shadow-sm">
          Book an Evaluation
        </a>
        <a href="<?= getWhatsAppUrl('physical_therapy') ?>" target="_blank" rel="noopener noreferrer" class="px-5 py-3 rounded-xl font-semibold text-xs sm:text-sm text-white bg-emerald-600 hover:bg-emerald-500 transition-colors flex items-center gap-2 shadow-sm">
          <i data-lucide="message-square" class="w-4 h-4"></i> WhatsApp Intake
        </a>
      </div>

    </div>
  </div>
</section>

<!-- SERVICES DIRECTORY -->
<section class="py-14 sm:py-20 bg-slate-50/50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 sm:space-y-16">
    
    <!-- SERVICE 1: Outpatient Physical Therapy -->
    <div id="pt" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs">
      <div class="lg:col-span-7 space-y-4">
        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full text-xs font-bold bg-teal-50 text-teal-800 border border-teal-200">
          <i data-lucide="stethoscope" class="w-3.5 h-3.5"></i> Core Clinical Discipline
        </div>
        <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">
          Outpatient Physical Therapy
        </h2>
        
        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What It Is</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Doctor-directed evaluation and hands-on treatment targeting the root mechanical causes of musculoskeletal pain, movement restriction, and muscular imbalances.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">Who It May Help</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Individuals experiencing acute back strains, chronic neck stiffness, shoulder impingement, hip or knee osteoarthritis, tennis elbow, sciatica, or tendonitis.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What to Expect</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            A comprehensive 60-minute diagnostic intake, followed by 1-on-1 manual therapy, targeted therapeutic exercise, progressive loading, and home exercise guidance.
          </p>
        </div>

        <div class="pt-1 flex flex-wrap gap-2 text-xs">
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Manual Joint Mobilization</span>
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Myofascial Release</span>
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Neuromuscular Re-education</span>
        </div>

        <div class="pt-3 flex items-center gap-3">
          <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-brand-900 hover:bg-slate-800 text-white font-bold text-xs transition-colors">
            Request PT Evaluation
          </a>
          <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="px-4 py-2.5 rounded-xl border border-slate-300 font-semibold text-xs text-slate-700 hover:bg-slate-50 transition-colors">
            Call (212) 555-0199
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 rounded-xl overflow-hidden shadow-xs border border-slate-200/80 aspect-4/3">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=700&q=80" alt="Physical therapist working with patient shoulder" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- SERVICE 2: Comprehensive Rehabilitation -->
    <div id="rehab" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs">
      <div class="lg:col-span-7 space-y-4">
        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full text-xs font-bold bg-blue-50 text-blue-800 border border-blue-200">
          <i data-lucide="activity" class="w-3.5 h-3.5"></i> Multidisciplinary Program
        </div>
        <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">
          Comprehensive Rehabilitation
        </h2>
        
        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What It Is</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            An intensive, multi-phase clinical program designed to restore full-body function and functional independence after severe polytrauma, hospital discharge, or debilitating injuries.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">Who It May Help</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Patients transitioning from hospital inpatient rehabilitation, severe multi-vehicle collision trauma, traumatic fractures, or complex orthopedic conditions.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What to Expect</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Care coordination across multiple clinical phases: pain management, gait and posture retraining in our gym floor, bodyweight-supported movement, and task re-integration.
          </p>
        </div>

        <div class="pt-1 flex flex-wrap gap-2 text-xs">
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Gait Analysis &amp; Retraining</span>
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Functional Capacity Training</span>
          <span class="px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-lg font-medium text-slate-700">Dynamic Gym Recovery</span>
        </div>

        <div class="pt-3 flex items-center gap-3">
          <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs transition-colors">
            Request Rehab Intake
          </a>
          <a href="rehab-center.php" class="px-4 py-2.5 rounded-xl border border-slate-300 font-semibold text-xs text-slate-700 hover:bg-slate-50 transition-colors">
            Tour Rehab Gym
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 rounded-xl overflow-hidden shadow-xs border border-slate-200/80 aspect-4/3">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=700&q=80" alt="Rehabilitation center gym floor with gait parallel bars" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- SERVICE 3: Post-Surgical Rehabilitation -->
    <div id="post-op" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start p-6 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-xs">
      <div class="lg:col-span-7 space-y-4">
        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full text-xs font-bold bg-emerald-50 text-emerald-800 border border-emerald-200">
          <i data-lucide="heart-pulse" class="w-3.5 h-3.5"></i> Orthopedic Protocol
        </div>
        <h2 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">
          Post-Surgical Rehabilitation
        </h2>
        
        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What It Is</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Surgeon-aligned rehabilitation protocols strictly following tissue healing timelines and orthopedic safety parameters.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">Who It May Help</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Patients following total knee arthroplasty (TKA), total hip replacement (THA), ACL reconstruction, rotator cuff tendon repair, spinal discectomy, or fusion.
          </p>
        </div>

        <div>
          <h4 class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">What to Expect</h4>
          <p class="text-xs sm:text-sm text-slate-700 leading-relaxed mt-0.5">
            Early gentle edema management and passive range of motion, progressing steadily to active-assisted movement, stability strengthening, and full return to recreational and daily activities.
          </p>
        </div>

        <div class="pt-3 flex items-center gap-3">
          <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition-colors">
            Schedule Post-Op Evaluation
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 rounded-xl overflow-hidden shadow-xs border border-slate-200/80 aspect-4/3">
        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=700&q=80" alt="Private clinical treatment room for post-operative recovery" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- MODALITIES & TECHNOLOGY SUMMARY -->
    <div class="p-6 sm:p-8 rounded-2xl bg-brand-900 text-white space-y-6 border border-slate-800 shadow-md">
      <div class="text-center max-w-2xl mx-auto space-y-1.5">
        <span class="text-xs uppercase font-bold text-teal-300 tracking-wider">Evidence-Based Arsenal</span>
        <h3 class="text-xl sm:text-2xl font-bold font-heading">Clinical Modalities Available at Our Center</h3>
        <p class="text-xs sm:text-sm text-slate-300">Used as adjunct therapies alongside active exercise to facilitate tissue recovery:</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-xs sm:text-sm">
        <div class="p-4 sm:p-5 rounded-xl bg-white/5 border border-white/10 text-center space-y-2">
          <i data-lucide="zap" class="w-5 h-5 text-teal-400 mx-auto"></i>
          <div class="font-bold text-white text-sm">Electrical Stimulation (TENS / NMES)</div>
          <p class="text-xs text-slate-300 leading-relaxed">Pain modulation and neuromuscular activation.</p>
        </div>

        <div class="p-4 sm:p-5 rounded-xl bg-white/5 border border-white/10 text-center space-y-2">
          <i data-lucide="radio" class="w-5 h-5 text-teal-400 mx-auto"></i>
          <div class="font-bold text-white text-sm">Therapeutic Ultrasound</div>
          <p class="text-xs text-slate-300 leading-relaxed">Deep thermal acoustic therapy for scar tissue elasticity.</p>
        </div>

        <div class="p-4 sm:p-5 rounded-xl bg-white/5 border border-white/10 text-center space-y-2">
          <i data-lucide="split" class="w-5 h-5 text-teal-400 mx-auto"></i>
          <div class="font-bold text-white text-sm">Spinal Decompression</div>
          <p class="text-xs text-slate-300 leading-relaxed">Cervical &amp; lumbar mechanical traction for pinched nerves.</p>
        </div>

        <div class="p-4 sm:p-5 rounded-xl bg-white/5 border border-white/10 text-center space-y-2">
          <i data-lucide="thermometer-snowflake" class="w-5 h-5 text-teal-400 mx-auto"></i>
          <div class="font-bold text-white text-sm">Cryo &amp; Moist Heat</div>
          <p class="text-xs text-slate-300 leading-relaxed">Vasodilation, inflammation reduction, and muscle relaxation.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

