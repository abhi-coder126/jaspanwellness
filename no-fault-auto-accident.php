<?php
/**
 * NO-FAULT / AUTO ACCIDENT REHABILITATION LANDING PAGE
 * Dedicated Case-Intent Patient Acquisition Page (Brief Section 10)
 */

$pageTitle = 'No-Fault Auto Accident Physical Therapy & Rehabilitation | Jaspan Clinic';
$pageDescription = 'Specialized physical therapy and clinical rehabilitation for motor vehicle accidents and No-Fault cases. Prompt evaluations, whiplash recovery, and insurance paperwork assistance.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: NO-FAULT SPECIALIZATION -->
<section class="bg-brand-900 text-white py-12 lg:py-16 border-b border-slate-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl space-y-4">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
        <i data-lucide="shield-check" class="w-3.5 h-3.5 text-amber-400"></i>
        <span>Specialized No-Fault Case Coordination</span>
      </div>

      <h1 class="hero-title text-white">
        Comprehensive Rehabilitation for <br class="hidden sm:inline">
        <span class="text-amber-400">Auto Accident &amp; Collision Injuries</span>
      </h1>

      <p class="section-subtitle text-slate-300 font-light">
        Motor vehicle collisions exert extreme mechanical forces on the spine, joints, and soft tissues. At Jaspan Rehabilitation, our clinical team specializes in early diagnostic evaluation, evidence-based therapy, and direct No-Fault insurance coordination.
      </p>

      <!-- Primary Action Buttons -->
      <div class="flex flex-col sm:flex-row items-center gap-3.5 pt-1">
        <a href="book-evaluation.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-bold text-xs sm:text-sm text-slate-950 bg-amber-400 hover:bg-amber-300 shadow-md transition-all">
          <i data-lucide="calendar" class="w-4 h-4"></i>
          <span>Schedule Accident Evaluation</span>
        </a>

        <a href="<?= getWhatsAppUrl('auto_accident') ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl font-semibold text-xs sm:text-sm text-white bg-emerald-600 hover:bg-emerald-500 shadow-md transition-all">
          <i data-lucide="message-square" class="w-4 h-4"></i>
          <span>Chat on WhatsApp (No-Fault Desk)</span>
        </a>

        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-3.5 rounded-xl font-semibold text-xs sm:text-sm text-slate-300 border border-slate-700 hover:text-white transition-all">
          <i data-lucide="phone" class="w-4 h-4 text-amber-400"></i>
          <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
        </a>
      </div>

      <p class="text-[11px] text-slate-400 italic">
        * No upfront medical costs with valid No-Fault claim authorization. Medical coverage verified directly with insurer.
      </p>

    </div>
  </div>
</section>

<!-- CRITICAL TIMELINE: THE 30-DAY NO-FAULT RULE & 72-HOUR WINDOW -->
<section class="py-12 sm:py-14 bg-amber-50/50 border-b border-amber-200/70">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
      
      <div class="space-y-1.5">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-800">Critical NY Insurance Notice</span>
        <h3 class="text-xl sm:text-2xl font-bold font-heading text-slate-900">Why Prompt Care Matters</h3>
        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
          In New York, No-Fault accident claim notices must generally be filed within <strong>30 days</strong> of the accident date to secure full medical coverage.
        </p>
      </div>

      <div class="p-5 sm:p-6 bg-white rounded-xl border border-amber-200/90 shadow-2xs space-y-2">
        <div class="flex items-center gap-2 text-sm font-bold text-amber-900">
          <i data-lucide="clock" class="w-4 h-4 text-amber-600"></i> The First 72 Hours
        </div>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Adrenaline masks pain. Soft-tissue inflammation and micro-tears in cervical ligaments peak 48–72 hours after impact. Early evaluation prevents chronic fibrous scar tissue.
        </p>
      </div>

      <div class="p-5 sm:p-6 bg-white rounded-xl border border-amber-200/90 shadow-2xs space-y-2">
        <div class="flex items-center gap-2 text-sm font-bold text-amber-900">
          <i data-lucide="file-text" class="w-4 h-4 text-amber-600"></i> Documentation Integrity
        </div>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Our clinic maintains meticulous clinical records, range-of-motion assessments, and daily functional notes necessary for insurance verifications and legal coordination.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- CONDITIONS COMMONLY SEEN IN AUTO ACCIDENTS -->
<section class="py-14 sm:py-20 bg-white border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-14">
      <span class="text-xs font-bold uppercase tracking-wider text-clinical-teal font-heading">Clinical Specialization</span>
      <h2 class="section-title text-slate-900">
        Common Collision Injuries We Treat
      </h2>
      <p class="section-subtitle max-w-2xl mx-auto">
        Car crashes subject the human musculoskeletal structure to unnatural rotational and deceleration forces. We provide specialized rehabilitation protocols for:
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="activity" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Whiplash &amp; Cervical Acceleration</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Rapid back-and-forth movement stretching neck tendons and deep spinal muscles. Symptoms include severe stiffness, headaches, radiating arm pain, and reduced range of motion.
        </p>
      </div>

      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="shield-alert" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Lumbar Spine &amp; Disc Herniations</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Blunt seat-back impact can cause disc bulges, annular tears, and acute sciatica (shooting electrical sensation down the buttocks and legs).
        </p>
      </div>

      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="minimize-2" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Shoulder &amp; Seatbelt Trauma</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Torso restraint tension can induce rotator cuff strains, AC joint separation, clavicle contusions, and myofascial thoracic trigger points.
        </p>
      </div>

      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="move" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Dashboard Knee &amp; Hip Impact</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Impact of the knee against the interior console or steering column frequently causes patellar contusions, meniscus sprains, or posterior hip labrum strains.
        </p>
      </div>

      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="zap" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Radiculopathy &amp; Nerve Compression</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Numbness, tingling, or weakness radiating into hands or feet caused by swollen spinal nerve roots post-collision.
        </p>
      </div>

      <div class="p-6 sm:p-7 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-sm transition-all space-y-2.5">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold border border-amber-200">
          <i data-lucide="heart-pulse" class="w-5 h-5"></i>
        </div>
        <h4 class="font-bold text-lg text-slate-900 font-heading">Post-Concussion &amp; Balance Deficits</h4>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Mild traumatic brain injury (TBI) accompanied by dizziness, equilibrium instability, and neck tension requiring specialized vestibular physical therapy.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- STEP-BY-STEP NO-FAULT INTAKE ROADMAP -->
<section class="py-14 sm:py-20 bg-slate-50/50 border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-14">
      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider text-amber-900 bg-amber-50 border border-amber-200">
        <i data-lucide="route" class="w-3.5 h-3.5 text-amber-600"></i> Seamless Process
      </span>
      <h2 class="section-title text-slate-900">
        How Your No-Fault Care Works
      </h2>
      <p class="section-subtitle max-w-2xl mx-auto">
        We handle the paperwork and direct insurance billing so you can focus 100% on recovery.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="bg-white p-6 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-sm space-y-3.5 flex flex-col justify-between transition-all">
        <div class="space-y-2.5">
          <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-900 font-bold text-base flex items-center justify-center border border-amber-300">
            01
          </div>
          <div class="text-[11px] font-semibold text-amber-800 uppercase tracking-wide">Step 1 • Triage</div>
          <h4 class="font-bold text-base sm:text-lg text-slate-900">Contact &amp; Claim Intake</h4>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Reach out via phone, chatbot, or WhatsApp. Share your accident date, insurance carrier, and claim number if available.
          </p>
        </div>
        <div class="pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-amber-600"></i> Zero upfront paperwork burden
        </div>
      </div>

      <div class="bg-white p-6 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-sm space-y-3.5 flex flex-col justify-between transition-all">
        <div class="space-y-2.5">
          <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-900 font-bold text-base flex items-center justify-center border border-amber-300">
            02
          </div>
          <div class="text-[11px] font-semibold text-amber-800 uppercase tracking-wide">Step 2 • Verification</div>
          <h4 class="font-bold text-base sm:text-lg text-slate-900">Insurance Verification</h4>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Our administrative staff coordinates directly with the auto insurance adjuster to verify coverage and billing guidelines.
          </p>
        </div>
        <div class="pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-amber-600"></i> Direct insurance billing established
        </div>
      </div>

      <div class="bg-white p-6 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-sm space-y-3.5 flex flex-col justify-between transition-all">
        <div class="space-y-2.5">
          <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-900 font-bold text-base flex items-center justify-center border border-teal-300">
            03
          </div>
          <div class="text-[11px] font-semibold text-teal-800 uppercase tracking-wide">Step 3 • In-Clinic</div>
          <h4 class="font-bold text-base sm:text-lg text-slate-900">Clinical Evaluation</h4>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            In-depth 60-minute assessment establishing your medical baseline, joint limitations, and specialized recovery protocol.
          </p>
        </div>
        <div class="pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-teal-600"></i> Baseline metrics mapped
        </div>
      </div>

      <div class="bg-white p-6 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-sm space-y-3.5 flex flex-col justify-between transition-all">
        <div class="space-y-2.5">
          <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-900 font-bold text-base flex items-center justify-center border border-emerald-300">
            04
          </div>
          <div class="text-[11px] font-semibold text-emerald-800 uppercase tracking-wide">Step 4 • Recovery</div>
          <h4 class="font-bold text-base sm:text-lg text-slate-900">Therapy &amp; Progress</h4>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Targeted 1-on-1 manual therapy, modalities, and strengthening with regular 30-day reports sent to treating physicians.
          </p>
        </div>
        <div class="pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-600"></i> Documented functional recovery
        </div>
      </div>

    </div>

  </div>
</section>

<!-- NO-FAULT FAQ SECTION (Brief Section 10 & 33) -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
    <div class="text-center space-y-2">
      <h3 class="section-title text-slate-900">
        No-Fault Patient Questions
      </h3>
      <p class="section-subtitle">Important answers for collision survivors</p>
    </div>

    <div class="space-y-3.5">
      <details class="bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-amber-400/50 open:shadow-xs transition-all">
        <summary class="font-bold text-sm sm:text-base text-slate-900 cursor-pointer flex justify-between items-center">
          <span>Will I have to pay out-of-pocket for physical therapy after a car accident?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
          Under New York State No-Fault regulations, approved medical treatments are covered directly by the auto insurance carrier with no copays or deductibles for eligible patients. We submit all documentation directly to the insurer.
        </p>
      </details>

      <details class="bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-amber-400/50 open:shadow-xs transition-all">
        <summary class="font-bold text-sm sm:text-base text-slate-900 cursor-pointer flex justify-between items-center">
          <span>What if I was a passenger or pedestrian in the collision?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
          You are still entitled to No-Fault medical benefits! If you were a passenger, the vehicle’s insurance policy covers your care. If you were a pedestrian or bicyclist, the policy of the vehicle that hit you covers you. Our intake team will help you determine the proper claim destination.
        </p>
      </details>

      <details class="bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 open:border-amber-400/50 open:shadow-xs transition-all">
        <summary class="font-bold text-sm sm:text-base text-slate-900 cursor-pointer flex justify-between items-center">
          <span>Do you work with my personal injury attorney?</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
        </summary>
        <p class="text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
          Yes. While our primary duty is your clinical recovery, upon your written consent we readily provide timely, objective medical records, bills, narrative reports, and functional re-evaluations to your legal representative.
        </p>
      </details>
    </div>

    <!-- Handoff Call to Action -->
    <div class="mt-10 bg-amber-50/70 border border-amber-200 rounded-2xl p-6 sm:p-8 text-center space-y-3.5">
      <h4 class="font-bold text-base sm:text-lg text-amber-950 font-heading">
        Have Questions About Your Auto Accident Claim?
      </h4>
      <p class="text-xs sm:text-sm text-amber-900 max-w-lg mx-auto">
        Speak directly with our No-Fault intake specialist on WhatsApp or request your clinical evaluation now.
      </p>
      <div class="flex flex-wrap items-center justify-center gap-3 pt-1">
        <a href="<?= getWhatsAppUrl('auto_accident') ?>" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-xl bg-emerald-600 text-white font-bold text-xs hover:bg-emerald-700 flex items-center gap-2 shadow-xs">
          <i data-lucide="message-square" class="w-4 h-4"></i> Chat on WhatsApp
        </a>
        <a href="book-evaluation.php" class="px-5 py-2.5 rounded-xl bg-brand-900 text-white font-bold text-xs hover:bg-slate-800 flex items-center gap-2 shadow-xs">
          <i data-lucide="calendar" class="w-4 h-4"></i> Book Evaluation Online
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

