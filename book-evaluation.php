<?php
/**
 * BOOK AN EVALUATION — PRIMARY PATIENT ACQUISITION WIZARD
 * Conforms to Brief Section 6, 18, 28, 29
 */

$pageTitle = 'Book an Initial Evaluation | Jaspan Physical Therapy & Rehabilitation';
$pageDescription = 'Schedule your comprehensive physical therapy evaluation. Direct access available, specialized No-Fault auto accident and Workers’ Comp intake triage.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: BOOKING -->
<section class="bg-brand-900 relative text-white py-12 lg:py-16 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
    <div class="max-w-2xl mx-auto space-y-4">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="calendar" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinical Intake Triage</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Schedule Your Comprehensive Evaluation
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Fill out our quick 4-step intake form so our clinical coordinator can verify your insurance or case authorization and match you with the appropriate physical therapist.
      </p>

    </div>
  </div>
</section>

<!-- MAIN WIZARD CONTAINER -->
<section class="py-12 sm:py-20 bg-slate-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Wizard Card -->
    <div class="card-clean bg-white rounded-2xl p-6 sm:p-9 shadow-xs border border-slate-200/90 relative" id="wizard-body-container">
      
      <!-- Progress Bar & Step Indicators -->
      <div class="flex items-center justify-between border-b border-slate-100 pb-7 mb-7">
        <div class="wizard-step-indicator flex items-center gap-2.5" data-step="1">
          <div class="step-circle w-8 h-8 rounded-full bg-brand-900 text-white flex items-center justify-center font-bold text-xs ring-4 ring-teal-100">1</div>
          <span class="step-label text-xs sm:text-sm font-bold text-brand-900 hidden sm:block">Case Reason</span>
        </div>

        <div class="h-0.5 flex-1 bg-slate-200 mx-3"></div>

        <div class="wizard-step-indicator flex items-center gap-2.5" data-step="2">
          <div class="step-circle w-8 h-8 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold text-xs">2</div>
          <span class="step-label text-xs sm:text-sm font-medium text-slate-400 hidden sm:block">Symptoms</span>
        </div>

        <div class="h-0.5 flex-1 bg-slate-200 mx-3"></div>

        <div class="wizard-step-indicator flex items-center gap-2.5" data-step="3">
          <div class="step-circle w-8 h-8 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold text-xs">3</div>
          <span class="step-label text-xs sm:text-sm font-medium text-slate-400 hidden sm:block">Schedule</span>
        </div>

        <div class="h-0.5 flex-1 bg-slate-200 mx-3"></div>

        <div class="wizard-step-indicator flex items-center gap-2.5" data-step="4">
          <div class="step-circle w-8 h-8 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold text-xs">4</div>
          <span class="step-label text-xs sm:text-sm font-medium text-slate-400 hidden sm:block">Contact</span>
        </div>
      </div>

      <!-- FORM -->
      <form id="clinical-triage-form" class="space-y-6">
        
        <!-- Spam honeypot -->
        <input type="text" name="clinic_bot_catcher" class="hidden" tabindex="-1" autocomplete="off">
        <input type="text" name="website_hp" class="hidden" tabindex="-1" autocomplete="off">

        <!-- STEP 1: Case Type Classification -->
        <div class="wizard-step-panel space-y-4" data-step="1">
          <div>
            <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">What brings you to our clinic?</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Select the option that best describes your clinical situation:</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">
            
            <label class="case-type-card cursor-pointer p-4 sm:p-5 rounded-xl border-2 border-teal-600 bg-teal-50/50 flex items-start gap-3.5 transition-all">
              <input type="radio" name="case_type" value="auto_accident" checked class="mt-1 text-teal-600 focus:ring-teal-500">
              <div>
                <div class="text-sm sm:text-base font-bold text-brand-900">No-Fault / Auto Accident</div>
                <div class="text-xs text-slate-500 leading-relaxed mt-0.5">Injured in a car crash or collision within NY</div>
              </div>
            </label>

            <label class="case-type-card cursor-pointer p-4 sm:p-5 rounded-xl border-2 border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3.5 transition-all">
              <input type="radio" name="case_type" value="workers_comp" class="mt-1 text-teal-600 focus:ring-teal-500">
              <div>
                <div class="text-sm sm:text-base font-bold text-brand-900">Workers' Compensation</div>
                <div class="text-xs text-slate-500 leading-relaxed mt-0.5">On-the-job injury or work repetitive strain</div>
              </div>
            </label>

            <label class="case-type-card cursor-pointer p-4 sm:p-5 rounded-xl border-2 border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3.5 transition-all">
              <input type="radio" name="case_type" value="physical_therapy" class="mt-1 text-teal-600 focus:ring-teal-500">
              <div>
                <div class="text-sm sm:text-base font-bold text-brand-900">Outpatient Physical Therapy</div>
                <div class="text-xs text-slate-500 leading-relaxed mt-0.5">Spine, neck, joint pain or sports injury</div>
              </div>
            </label>

            <label class="case-type-card cursor-pointer p-4 sm:p-5 rounded-xl border-2 border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3.5 transition-all">
              <input type="radio" name="case_type" value="post-op" class="mt-1 text-teal-600 focus:ring-teal-500">
              <div>
                <div class="text-sm sm:text-base font-bold text-brand-900">Post-Surgical Rehabilitation</div>
                <div class="text-xs text-slate-500 leading-relaxed mt-0.5">Knee, hip, spine or shoulder surgery recovery</div>
              </div>
            </label>

          </div>
        </div>

        <!-- STEP 2: Clinical Timeline & Affected Area -->
        <div class="wizard-step-panel hidden space-y-6" data-step="2">
          <div>
            <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Symptoms &amp; Clinical Timeline</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Tell us about the areas of your body experiencing pain or limitation:</p>
          </div>

          <!-- Incident Date -->
          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
              Date of Accident, Injury, or Surgery (Approximate)
            </label>
            <input type="date" name="incident_date" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:border-teal-500 focus:outline-none">
          </div>

          <!-- Affected Areas (Multi-select check boxes) -->
          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-2">
              Primary Affected Area(s) *
            </label>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-sm">
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Neck / Cervical / Whiplash" checked class="text-teal-600">
                <span>Neck / Whiplash</span>
              </label>
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Lower Back / Lumbar Spine" class="text-teal-600">
                <span>Lower Back / Lumbar</span>
              </label>
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Shoulder / Rotator Cuff" class="text-teal-600">
                <span>Shoulder / Rotator Cuff</span>
              </label>
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Knee / Patellofemoral" class="text-teal-600">
                <span>Knee / Meniscus / ACL</span>
              </label>
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Hip / Pelvis" class="text-teal-600">
                <span>Hip / Pelvis</span>
              </label>
              <label class="flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer font-medium text-slate-700 text-xs sm:text-sm">
                <input type="checkbox" name="pain_areas[]" value="Neurological / Radiating Tingling" class="text-teal-600">
                <span>Nerve / Radiating Tingling</span>
              </label>
            </div>
          </div>

          <!-- Current Treatment Status -->
          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
              Are you currently receiving treatment elsewhere?
            </label>
            <select name="current_treatment" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none font-medium text-slate-800">
              <option value="No prior treatment started">No, seeking initial physical therapy evaluation</option>
              <option value="Hospital ER / Urgent Care only">Only visited ER or Urgent Care immediately after incident</option>
              <option value="Under doctor care, have prescription">Seeing a physician and have prescription/referral</option>
              <option value="Transferring care from another clinic">Looking to transfer care to Jaspan Rehabilitation</option>
            </select>
          </div>
        </div>

        <!-- STEP 3: Scheduling & Preferences -->
        <div class="wizard-step-panel hidden space-y-6" data-step="3">
          <div>
            <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Preferred Appointment Schedule</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">We offer flexible early morning and evening hours:</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                Preferred Day of Week
              </label>
              <select name="preferred_day" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none font-medium text-slate-800">
                <option value="Earliest Available">First Available (Fastest)</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday Morning</option>
              </select>
            </div>

            <div>
              <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                Preferred Time of Day
              </label>
              <select name="preferred_time" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none font-medium text-slate-800">
                <option value="Morning (7:00 AM – 11:00 AM)">Morning (7:00 AM – 11:00 AM)</option>
                <option value="Midday (11:00 AM – 2:00 PM)">Midday (11:00 AM – 2:00 PM)</option>
                <option value="Afternoon (2:00 PM – 5:00 PM)">Afternoon (2:00 PM – 5:00 PM)</option>
                <option value="Evening (5:00 PM – 7:30 PM)">Evening (5:00 PM – 7:30 PM)</option>
              </select>
            </div>
          </div>

          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
              Additional Notes or Case Details (Optional)
            </label>
            <textarea name="patient_notes" rows="3" placeholder="Briefly describe your goals, pain triggers, or No-Fault claim number if you have one..." class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none"></textarea>
          </div>
        </div>

        <!-- STEP 4: Patient Details & Authorization -->
        <div class="wizard-step-panel hidden space-y-5" data-step="4">
          <div>
            <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Your Contact Information</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Our patient coordinator will review your file and confirm your appointment:</p>
          </div>

          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
              Full Legal or Preferred Name *
            </label>
            <input type="text" id="patient_name" name="patient_name" required placeholder="First & Last Name" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                Phone Number (Mobile / WhatsApp) *
              </label>
              <input type="tel" id="patient_phone" name="patient_phone" required placeholder="(212) 555-0199" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
            </div>

            <div>
              <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                Email Address
              </label>
              <input type="email" id="patient_email" name="patient_email" placeholder="patient@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
            </div>
          </div>

          <div>
            <label class="block text-xs sm:text-sm font-bold text-slate-700 uppercase tracking-wider mb-1.5">
              Preferred Communication Method
            </label>
            <div class="flex flex-wrap gap-5 text-xs sm:text-sm font-medium text-slate-700 pt-1">
              <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="preferred_contact" value="WhatsApp" checked class="text-teal-600">
                <span>WhatsApp Message</span>
              </label>
              <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="preferred_contact" value="Phone Call" class="text-teal-600">
                <span>Phone Call</span>
              </label>
              <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="preferred_contact" value="Email" class="text-teal-600">
                <span>Email</span>
              </label>
            </div>
          </div>

          <div class="pt-2">
            <label class="flex items-start gap-3 cursor-pointer text-xs text-slate-600 leading-relaxed">
              <input type="checkbox" id="patient_consent" name="patient_consent" checked required class="mt-1 text-teal-600 rounded">
              <span>
                I authorize Jaspan Physical Therapy &amp; Rehabilitation coordinators to contact me regarding appointment scheduling and clinical intake. I understand that submitting this inquiry does not establish an emergency clinical relationship.
              </span>
            </label>
          </div>
        </div>

        <!-- NAVIGATION BUTTONS -->
        <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
          <button type="button" id="wizard-prev-btn" class="invisible btn-secondary">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Previous
          </button>

          <button type="button" id="wizard-next-btn" class="btn-primary">
            <span>Continue</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>

          <button type="submit" id="wizard-submit-btn" class="hidden btn-primary">
            <i data-lucide="loader-2" class="w-4 h-4 animate-spin spinner-icon hidden"></i>
            <span class="btn-text">Submit Intake Request</span>
          </button>
        </div>

      </form>

    </div>

    <!-- SUCCESS SCREEN (Shown after submission) -->
    <div id="wizard-success-screen" class="hidden card-clean bg-white rounded-2xl p-7 sm:p-10 shadow-sm border border-emerald-200 text-center space-y-5">
      <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto shadow-inner">
        <i data-lucide="check" class="w-7 h-7 stroke-[2.5]"></i>
      </div>

      <div class="space-y-2">
        <span class="text-xs uppercase tracking-wider font-bold text-emerald-700">Intake Request Verified</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-brand-900">
          Your Intake Has Been Submitted!
        </h2>
        <p class="text-xs sm:text-sm text-slate-600 max-w-md mx-auto leading-relaxed">
          Your unique case reference code is: <strong id="success-ref-code" class="font-mono text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded text-sm font-bold border border-emerald-200">JAS-2026</strong>. Our patient coordinator is reviewing your case right now.
        </p>
      </div>

      <!-- Instant Human Handoff Options -->
      <div class="p-5 sm:p-6 bg-slate-50 rounded-xl border border-slate-200/90 max-w-md mx-auto space-y-3">
        <div class="text-xs font-bold text-slate-800 uppercase tracking-wide">
          Fast-Track Your Appointment Now:
        </div>

        <a id="success-whatsapp-btn" href="<?= getWhatsAppUrl('evaluation') ?>" target="_blank" rel="noopener noreferrer" 
           class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-xs transition-all flex items-center justify-center gap-2">
          <i data-lucide="message-square" class="w-4 h-4"></i>
          <span>Continue Immediately on WhatsApp</span>
        </a>

        <div class="text-xs text-slate-500 pt-1">
          Or call our intake coordinator directly:
        </div>

        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="inline-flex items-center gap-1.5 font-bold text-brand-900 hover:text-teal-700 text-xs sm:text-sm">
          <i data-lucide="phone" class="w-4 h-4 text-teal-600"></i> <?= e(CLINIC_CONFIG['phone_primary']) ?>
        </a>
      </div>

      <div class="pt-2">
        <a href="index.php" class="text-xs font-semibold text-slate-500 hover:text-brand-900">
          Return to Homepage
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Scripts for the multi-step triage form -->
<script src="assets/js/triage-form.js"></script>

<?php require_once __DIR__ . '/components/footer.php'; ?>

