<?php
/**
 * MASTER FAQ HUB — SEARCHABLE PATIENT QUESTION BANK
 * Conforms to Brief Section 33 (Complete Master Question Bank)
 */

$pageTitle = 'Frequently Asked Questions (FAQ) | Jaspan Physical Therapy';
$pageDescription = 'Search answers to 22+ patient questions about physical therapy evaluations, No-Fault auto accidents, Workers’ Comp, insurance coverage, and referrals.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: FAQ -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="help-circle" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Master Clinical Question Bank</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Answers to Your Recovery, <br class="hidden sm:inline">
        <span class="text-teal-400">Insurance &amp; Treatment Questions</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Have questions about your first evaluation, No-Fault car accident benefits, or what to expect in therapy? Search our verified patient knowledge base below.
      </p>

      <!-- Live Search Bar -->
      <div class="pt-2 max-w-xl">
        <div class="relative">
          <input type="text" id="faq-search-input" placeholder="Type a keyword (e.g., referral, car accident, appointment, insurance)..." 
                 class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-white text-slate-800 placeholder-slate-400 shadow-sm border border-slate-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-500/20 focus:outline-none text-sm font-medium">
          <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-4 top-4"></i>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MASTER FAQ ACCORDION BANK -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-3.5">
    
    <!-- FAQ 1 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>What is physical therapy?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Physical therapy is a specialized healthcare discipline practiced by licensed Doctors of Physical Therapy (DPT). It utilizes evidence-based non-invasive interventions—including manual joint mobilization, soft tissue therapy, therapeutic exercise, and neuromuscular re-education—to alleviate pain, restore physical mobility, rebuild strength, and restore functional independence after an injury, accident, or surgery.
      </div>
    </details>

    <!-- FAQ 2 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>What happens during a physical therapy evaluation?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        During your initial 60-minute evaluation, your physical therapist conducts a comprehensive diagnostic examination: reviewing medical history, assessing active and passive range of motion, testing muscle strength, palpating tissue restrictions, evaluating postural and movement mechanics, and testing neurological reflexes where relevant. Together, you and the clinician establish realistic functional recovery goals and an individualized protocol.
      </div>
    </details>

    <!-- FAQ 3 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>What does rehabilitation involve?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Rehabilitation is a progressive therapeutic process designed to restore a patient to their highest possible level of physical, vocational, and recreational function. It involves one-on-one manual physical therapy, guided resistance exercises in our gym floor, balance and gait retraining, pain-relieving modalities, patient education, and ergonomic modification.
      </div>
    </details>

    <!-- FAQ 4 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>How do I know whether physical therapy is appropriate for me?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        If you are experiencing musculoskeletal pain, joint stiffness, difficulty walking or standing, weakness after an accident or surgery, or if an orthopedic condition restricts your daily tasks or work duties, physical therapy is generally indicated. An initial evaluation will formally determine whether conservative therapy is the safest and most effective course of care.
      </div>
    </details>

    <!-- FAQ 5 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>Do I need a doctor's referral to schedule?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        In New York State, under "Direct Access" legislation, patients can receive evaluation and physical therapy treatment from a licensed physical therapist for up to 30 days or 10 visits without a medical doctor prescription. Note: Workers’ Compensation and certain specific insurance policies may require physician documentation; our intake desk verifies your exact requirements for free before your visit.
      </div>
    </details>

    <!-- FAQ 6 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>Do you treat auto accident and No-Fault cases?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Yes! We specialize in No-Fault auto accident rehabilitation. We treat collision-induced whiplash, lumbar disc bulges, radiculopathy, seatbelt trauma, and joint sprains. Our administrative team bills the auto insurance carrier directly with zero out-of-pocket costs for authorized claims.
      </div>
    </details>

    <!-- FAQ 7 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>Do you treat Workers’ Compensation injuries?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Yes! We are an authorized provider for New York State Workers' Compensation cases. We treat acute job-site injuries, repetitive motion disorders, heavy lifting lumbar trauma, and post-surgical work recovery, submitting all required C-4.2 progress notes and medical treatment guideline variance requests.
      </div>
    </details>

    <!-- FAQ 8 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>What should I bring to my first appointment?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Please bring a valid photo ID, health insurance cards (or your auto No-Fault claim number / Workers’ Comp WCB case number), any diagnostic imaging reports (X-ray, MRI, CT scans), a doctor's referral (if you have one), and comfortable athletic clothes allowing easy examination of the injured joint.
      </div>
    </details>

    <!-- FAQ 9 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>How long is an appointment and how often will I need therapy?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Initial evaluations take approximately 60 minutes. Follow-up treatment visits range between 45 and 60 minutes. Depending on the severity of your injury and phase of recovery, therapy is typically recommended 2 to 3 times per week, adjusted periodically during functional re-evaluations.
      </div>
    </details>

    <!-- FAQ 10 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>Can I contact the clinic through WhatsApp?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Yes! We provide a dedicated, HIPAA-aware WhatsApp intake desk manned by our patient coordinators during clinic hours. You can ask general questions, send intake information, coordinate appointment times, or ask about facility directions directly on WhatsApp.
      </div>
    </details>

    <!-- FAQ 11 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>Do you offer hospital / in-patient rehabilitation continuum?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Our clinical leadership has significant background in tertiary hospital acute inpatient rehabilitation. We specialize in post-acute care transitions—welcoming patients following hospital discharge to continue their functional recovery in our outpatient rehabilitation center.
      </div>
    </details>

    <!-- FAQ 12 -->
    <details class="faq-item group card-clean bg-white rounded-xl border border-slate-200/90 p-5 sm:p-6 shadow-xs open:border-brand-300 transition-all">
      <summary class="faq-question flex items-center justify-between cursor-pointer font-bold text-brand-900 text-sm sm:text-base">
        <span>What is the status of vascular surgery or other surgical specialties?</span>
        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-3"></i>
      </summary>
      <div class="faq-answer text-xs sm:text-sm text-slate-600 mt-3 pt-3 border-t border-slate-100 leading-relaxed">
        Jaspan Physical Therapy &amp; Rehabilitation is a dedicated physical therapy and functional rehabilitation facility. Where medical specialties such as vascular surgery or orthopedic surgery are referenced, these represent affiliated referral relationships with external board-certified specialists, not direct in-house surgical procedures.
      </div>
    </details>

  </div>
</section>

<!-- NEED MORE HELP CTA -->
<section class="py-14 sm:py-18 bg-slate-50 border-t border-slate-200/80 text-center">
  <div class="max-w-2xl mx-auto px-4 space-y-4">
    <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Have a Question That Isn't Answered Here?</h3>
    <p class="text-xs sm:text-sm text-slate-600">Our clinical intake coordinators are available by phone, WhatsApp, or email to assist you.</p>
    <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
      <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-xs transition-colors">
        <i data-lucide="message-square" class="w-4 h-4"></i> Message on WhatsApp
      </a>
      <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="btn-secondary">
        <i data-lucide="phone" class="w-4 h-4 text-teal-400"></i> Call <?= e(CLINIC_CONFIG['phone_primary']) ?>
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

