<?php
/**
 * CONDITIONS WE TREAT — CLINICAL DIRECTORY
 * Conforms to Brief Section 6, 21 (Condition-based Patient Information)
 */

$pageTitle = 'Conditions We Treat | Jaspan Physical Therapy & Rehabilitation';
$pageDescription = 'Comprehensive guide to conditions treated at Jaspan Clinic: spine and neck pain, shoulder and knee injuries, post-surgical recovery, auto accident whiplash, and occupational trauma.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: CONDITIONS -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="check-circle" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinical Specialization Guide</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Conditions We Treat with <br class="hidden sm:inline">
        <span class="text-teal-400">Targeted Clinical Protocols</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Pain and functional limitations stem from complex mechanical, neurological, and inflammatory factors. Discover how our licensed physical therapists address your specific condition with evidence-based care.
      </p>

      <div class="flex flex-wrap items-center gap-3 pt-2">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule an Evaluation</span>
        </a>
        <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
          <i data-lucide="message-square" class="w-4 h-4 text-teal-400"></i>
          <span>Ask About Your Symptoms</span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- CONDITIONS DIRECTORY WITH ANATOMICAL TABS -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Tab Navigation -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 mb-12">
      <button type="button" class="condition-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm border border-brand-900 bg-brand-900 text-white transition-all shadow-xs" data-target="cond-spine">
        Spine, Neck &amp; Lower Back
      </button>
      <button type="button" class="condition-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 transition-all shadow-xs" data-target="cond-shoulder">
        Shoulder &amp; Upper Extremity
      </button>
      <button type="button" class="condition-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 transition-all shadow-xs" data-target="cond-knee">
        Knee, Hip &amp; Lower Extremity
      </button>
      <button type="button" class="condition-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 transition-all shadow-xs" data-target="cond-surgery">
        Post-Surgical Joint &amp; Spine
      </button>
      <button type="button" class="condition-tab-btn px-4 sm:px-5 py-2.5 rounded-xl font-semibold text-xs sm:text-sm border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 transition-all shadow-xs" data-target="cond-trauma">
        Collision &amp; Work Trauma
      </button>
    </div>

    <!-- PANEL 1: SPINE & BACK -->
    <div id="cond-spine" class="condition-content-panel grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Cervical Whiplash</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Hyperextension-hyperflexion trauma stretching anterior and posterior neck musculature. Managed with gentle manual mobilization, isometric cervical stabilization, and deep postural re-education.
        </p>
        <span class="inline-block text-xs font-semibold text-teal-800 bg-teal-50 border border-teal-200/80 px-2.5 py-1 rounded-md">Common in Auto Accidents</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Lumbar Disc Herniation &amp; Sciatica</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Disc protrusions compressing exiting lumbar nerve roots, causing sharp shooting pain down the leg. Treated with mechanical decompression, nerve glides, and directional preference exercise.
        </p>
        <span class="inline-block text-xs font-semibold text-blue-800 bg-blue-50 border border-blue-200/80 px-2.5 py-1 rounded-md">Lifting &amp; Impact Injury</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Spinal Stenosis &amp; Spondylosis</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Degenerative narrowing of the spinal canal causing leg cramping and back fatigue with walking. Addressed through flexion-based conditioning, core stability, and pelvic alignment.
        </p>
        <span class="inline-block text-xs font-semibold text-slate-800 bg-slate-100 border border-slate-200 px-2.5 py-1 rounded-md">Degenerative Condition</span>
      </div>

    </div>

    <!-- PANEL 2: SHOULDER & ARM -->
    <div id="cond-shoulder" class="condition-content-panel hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Rotator Cuff Tendinopathy &amp; Tears</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Inflammation or tearing of supraspinatus and infraspinatus tendons. Treated with progressive eccentric loading, scapular stabilizer strengthening, and manual glenohumeral mobilization.
        </p>
        <span class="inline-block text-xs font-semibold text-amber-800 bg-amber-50 border border-amber-200/80 px-2.5 py-1 rounded-md">Shoulder Mechanics</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Shoulder Impingement Syndrome</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Subacromial space compression causing pinching pain with overhead arm movements. Relieved through thoracic extension exercises, posterior capsule stretching, and posture correction.
        </p>
        <span class="inline-block text-xs font-semibold text-teal-800 bg-teal-50 border border-teal-200/80 px-2.5 py-1 rounded-md">Overhead Mobility</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Carpal Tunnel Syndrome &amp; Epicondylitis</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Median nerve entrapment and forearm tendonitis resulting from repetitive manual work. Managed through tendon glides, ergonomic splinting advice, and myofascial forearm release.
        </p>
        <span class="inline-block text-xs font-semibold text-blue-800 bg-blue-50 border border-blue-200/80 px-2.5 py-1 rounded-md">Repetitive Work Injury</span>
      </div>

    </div>

    <!-- PANEL 3: KNEE & HIP -->
    <div id="cond-knee" class="condition-content-panel hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Meniscus Tears &amp; Ligament Sprains</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Knee cartilage or ligament strains (ACL, MCL, LCL) caused by twisting or direct impact. Guided through non-weight-bearing swelling control, quadriceps reactivation, and proprioceptive balance drills.
        </p>
        <span class="inline-block text-xs font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2.5 py-1 rounded-md">Knee Joint Rehab</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Patellofemoral Pain Syndrome</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Anterior knee pain and maltracking during stair climbing or squatting. Resolved by strengthening the vastus medialis obliquus (VMO) and gluteal hip abductors.
        </p>
        <span class="inline-block text-xs font-semibold text-teal-800 bg-teal-50 border border-teal-200/80 px-2.5 py-1 rounded-md">Anterior Knee Care</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Hip Labral Tears &amp; Impingement (FAI)</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Groin catching and deep acetabular pain. Managed with deep hip rotator stabilization, pelvic control exercises, and joint mobilization.
        </p>
        <span class="inline-block text-xs font-semibold text-purple-800 bg-purple-50 border border-purple-200/80 px-2.5 py-1 rounded-md">Hip Biomechanics</span>
      </div>

    </div>

    <!-- PANEL 4: POST-SURGICAL -->
    <div id="cond-surgery" class="condition-content-panel hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Total Knee Replacement (TKA)</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Post-operative knee recovery targeting full knee extension, 110–120 degrees of flexion, patellar mobility, and independent gait without walking aids.
        </p>
        <span class="inline-block text-xs font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2.5 py-1 rounded-md">Orthopedic Protocol</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Total Hip Replacement (THA)</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Rehabilitation following anterior or posterior approach hip arthroplasty, focusing on dislocation precautions, abductor strength, and safe stair climbing.
        </p>
        <span class="inline-block text-xs font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2.5 py-1 rounded-md">Orthopedic Protocol</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Spinal Fusion &amp; Discectomy</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Surgeon-protocol rehabilitation focusing on log-rolling safety, neutral spine stabilization, gradual walking progression, and back musculature restoration.
        </p>
        <span class="inline-block text-xs font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2.5 py-1 rounded-md">Spine Post-Op Care</span>
      </div>

    </div>

    <!-- PANEL 5: COLLISION & WORK TRAUMA -->
    <div id="cond-trauma" class="condition-content-panel hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Seatbelt Contusions &amp; Thoracic Sprain</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Chest wall trauma and rib cage stiffness following vehicle restraint force. Managed with breathing expansion therapy, gentle myofascial work, and thoracic mobility.
        </p>
        <span class="inline-block text-xs font-semibold text-amber-800 bg-amber-50 border border-amber-200/80 px-2.5 py-1 rounded-md">No-Fault Auto Care</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Slip &amp; Fall Polytrauma</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Multiple contusions and sprains across wrist, hip, and back from work floor or sidewalk falls. Integrated care plan addressing balance, fear of falling, and joint rehabilitation.
        </p>
        <span class="inline-block text-xs font-semibold text-blue-800 bg-blue-50 border border-blue-200/80 px-2.5 py-1 rounded-md">Workers' Comp Care</span>
      </div>

      <div class="card-clean p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brand-300 transition-all space-y-3">
        <h4 class="font-bold text-base sm:text-lg text-brand-900 font-heading">Occupational Heavy Lifting Injuries</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Sacroiliac joint dysfunction and acute spinal spasms sustained during warehouse, construction, or transport work. Targeted for prompt return to duty.
        </p>
        <span class="inline-block text-xs font-semibold text-blue-800 bg-blue-50 border border-blue-200/80 px-2.5 py-1 rounded-md">Industrial Recovery</span>
      </div>

    </div>

    <!-- Triage Form Banner -->
    <div class="mt-16 bg-brand-900 text-white rounded-2xl p-7 sm:p-10 border border-slate-800 shadow-xl text-center space-y-4">
      <h3 class="text-xl sm:text-2xl font-bold font-heading text-white">Don’t See Your Specific Condition Listed?</h3>
      <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mx-auto leading-relaxed">
        Our physical therapists evaluate and treat a broad spectrum of musculoskeletal and neuromuscular conditions. Contact our clinical intake desk to discuss your symptoms and get scheduled.
      </p>
      <div class="pt-2 flex flex-wrap items-center justify-center gap-3">
        <a href="book-evaluation.php" class="btn-primary">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule Clinical Evaluation</span>
        </a>
        <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
          <i data-lucide="message-square" class="w-4 h-4 text-teal-400"></i>
          <span>Ask Our Team on WhatsApp</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

