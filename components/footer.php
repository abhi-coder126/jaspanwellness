<?php
/**
 * Footer Component: Comprehensive Medical Footer, Disclaimers, & Script Loaders
 */
require_once __DIR__ . '/../config.php';
?>
  <!-- PATIENT CONVERSION TRUST BANNER -->
  <section class="bg-gradient-to-r from-brand-900 via-brand-800 to-slate-900 text-white py-14 px-4 sm:px-6 lg:px-8 border-t border-slate-800 relative overflow-hidden no-print">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#14b8a6_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-7xl mx-auto relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/20 text-teal-300 border border-teal-500/30 mb-3">
          <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Patient-Centered Clinical Care
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white tracking-tight">
          Ready to Begin Your Recovery Journey?
        </h2>
        <p class="text-slate-300 text-sm sm:text-base mt-2 leading-relaxed">
          Whether you were injured in an auto accident, hurt at work, or recovering from surgery, our experienced clinical team is ready to evaluate your condition and craft an evidence-based rehabilitation plan.
        </p>
      </div>

      <div class="flex flex-col sm:flex-row items-center gap-3 w-full lg:w-auto">
        <a href="book-evaluation.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl font-semibold text-sm text-brand-900 bg-white hover:bg-slate-100 shadow-lg shadow-black/20 hover:scale-[1.02] transition-all">
          <i data-lucide="calendar" class="w-4 h-4 text-clinical-teal"></i>
          <span>Schedule an Evaluation</span>
        </a>
        <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-semibold text-sm text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-900/30 transition-all">
          <i data-lucide="message-square" class="w-4 h-4"></i>
          <span>Chat on WhatsApp</span>
        </a>
        <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl font-semibold text-sm text-slate-200 border border-slate-700 hover:border-slate-500 hover:text-white transition-all">
          <i data-lucide="phone" class="w-4 h-4 text-teal-400"></i>
          <span><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
        </a>
      </div>
    </div>
  </section>

  <!-- MASTER CLINICAL FOOTER -->
  <footer class="bg-slate-950 text-slate-300 text-sm border-t border-slate-800 pt-16 pb-12 no-print">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Top Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
        
        <!-- Col 1: Identity & Credentials -->
        <div class="lg:col-span-2 space-y-4">
          <a href="index.php" class="inline-block bg-white p-3 rounded-2xl border border-slate-700/60 shadow-sm hover:opacity-95 transition-opacity">
            <img src="assets/images/logo.png" alt="Jaspan Rehab Physical Therapy &amp; Rehabilitation" class="h-11 w-auto object-contain">
          </a>

          <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
            Dedicated physical therapy and multidisciplinary rehabilitation center providing evidence-based recovery protocols, specialized No-Fault auto accident care, Workers’ Compensation case management, and post-operative functional restoration.
          </p>

          <div class="pt-2 text-sm space-y-2 text-slate-300">
            <div class="flex items-start gap-2.5">
              <i data-lucide="map-pin" class="w-4 h-4 text-clinical-light mt-1 shrink-0"></i>
              <span><?= e(CLINIC_CONFIG['address_full']) ?></span>
            </div>
            <div class="flex items-center gap-2.5">
              <i data-lucide="clock" class="w-4 h-4 text-clinical-light shrink-0"></i>
              <span><?= e(CLINIC_CONFIG['hours_weekday']) ?></span>
            </div>
            <div class="flex items-center gap-2.5">
              <i data-lucide="mail" class="w-4 h-4 text-clinical-light shrink-0"></i>
              <a href="mailto:<?= e(CLINIC_CONFIG['email_intake']) ?>" class="hover:text-white transition-colors"><?= e(CLINIC_CONFIG['email_intake']) ?></a>
            </div>
          </div>
        </div>

        <!-- Col 2: Clinical Services -->
        <div class="space-y-3">
          <h3 class="text-sm font-bold uppercase tracking-wider text-white font-heading">Clinical Services</h3>
          <ul class="space-y-2.5 text-sm">
            <li><a href="services.php#pt" class="hover:text-teal-400 transition-colors">Physical Therapy</a></li>
            <li><a href="services.php#rehab" class="hover:text-teal-400 transition-colors">Comprehensive Rehabilitation</a></li>
            <li><a href="services.php#post-op" class="hover:text-teal-400 transition-colors">Post-Surgical Rehabilitation</a></li>
            <li><a href="services.php#spine" class="hover:text-teal-400 transition-colors">Spine &amp; Joint Restoration</a></li>
            <li><a href="services.php#gait" class="hover:text-teal-400 transition-colors">Gait &amp; Balance Training</a></li>
            <li><a href="rehab-center.php" class="hover:text-teal-400 transition-colors">Rehabilitation Facility Tour</a></li>
          </ul>
        </div>

        <!-- Col 3: Special Programs -->
        <div class="space-y-3">
          <h3 class="text-sm font-bold uppercase tracking-wider text-white font-heading">Specialized Cases</h3>
          <ul class="space-y-2.5 text-sm">
            <li>
              <a href="no-fault-auto-accident.php" class="text-amber-400 hover:text-amber-300 transition-colors flex items-center gap-1.5 font-medium">
                <i data-lucide="shield" class="w-4 h-4"></i> No-Fault Auto Accidents
              </a>
            </li>
            <li>
              <a href="workers-compensation.php" class="text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1.5 font-medium">
                <i data-lucide="briefcase" class="w-4 h-4"></i> Workers' Compensation
              </a>
            </li>
            <li><a href="conditions.php" class="hover:text-teal-400 transition-colors">Conditions We Treat</a></li>
            <li><a href="patient-journey.php" class="hover:text-teal-400 transition-colors">How Rehabilitation Works</a></li>
            <li><a href="testimonials.php" class="hover:text-teal-400 transition-colors">Patient Recovery Stories</a></li>
            <li><a href="faqs.php" class="hover:text-teal-400 transition-colors">Insurance &amp; Referrals FAQ</a></li>
          </ul>
        </div>

        <!-- Col 4: Patient Help & Fast Triage -->
        <div class="space-y-3">
          <h3 class="text-sm font-bold uppercase tracking-wider text-white font-heading">Patient Intake</h3>
          <ul class="space-y-2.5 text-sm">
            <li><a href="book-evaluation.php" class="text-emerald-400 hover:text-emerald-300 font-bold flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4"></i> Request Evaluation</a></li>
            <li><a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-1.5"><i data-lucide="message-square" class="w-4 h-4 text-emerald-400"></i> Direct WhatsApp Desk</a></li>
            <li><a href="resources.php" class="hover:text-teal-400 transition-colors">Patient Guides &amp; Articles</a></li>
            <li><a href="doctors.php" class="hover:text-teal-400 transition-colors">Clinical Leadership</a></li>
            <li><a href="about.php" class="hover:text-teal-400 transition-colors">About Our Institute</a></li>
            <li><a href="contact.php" class="hover:text-teal-400 transition-colors">Directions &amp; Parking</a></li>
          </ul>

          <div class="pt-3">
            <span class="inline-block text-xs text-slate-400 uppercase tracking-wider font-mono">Working Specification v1.0</span>
            <p class="text-xs text-slate-400 mt-1">Medical/service facts subject to clinical confirmation.</p>
          </div>
        </div>

      </div>

      <!-- Legal Disclaimers & Regulatory Notice (Crucial for US Compliance) -->
      <div class="pt-8 pb-4 text-xs sm:text-sm text-slate-400 space-y-4">
        <div class="bg-slate-900/90 rounded-2xl p-5 border border-slate-800">
          <h4 class="font-bold text-slate-200 text-sm flex items-center gap-2 mb-1.5">
            <i data-lucide="shield-alert" class="w-4 h-4 text-amber-400"></i> Medical &amp; Legal Disclaimer
          </h4>
          <p class="leading-relaxed text-slate-400">
            The medical and clinical educational information on this website is provided for general health information and scheduling convenience only. It does not constitute medical advice, diagnosis, or a physician-patient relationship. Individual clinical outcomes vary depending on condition severity and compliance. If you believe you are experiencing a medical emergency, acute trauma, or life-threatening symptoms, immediately dial <strong>911</strong> or visit the nearest hospital emergency room.
          </p>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2 text-slate-400 text-xs sm:text-sm">
          <div>
            &copy; <?= date('Y') ?> <?= e(CLINIC_CONFIG['clinic_name']) ?>. All rights reserved.
          </div>
          <div class="flex items-center gap-4 text-slate-400">
            <a href="privacy-policy.php" class="hover:text-white transition-colors">Privacy Policy</a>
            <span>•</span>
            <a href="terms.php" class="hover:text-white transition-colors">Terms of Use</a>
            <span>•</span>
            <a href="hipaa-disclaimer.php" class="hover:text-white transition-colors">HIPAA Notice</a>
            <span>•</span>
            <a href="admin.php" class="hover:text-slate-300 transition-colors text-slate-500">Staff Portal</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <!-- FLOATING INTERACTIVE WIDGETS -->
  <?php include __DIR__ . '/chatbot.php'; ?>
  <?php include __DIR__ . '/whatsapp-float.php'; ?>
  <?php include __DIR__ . '/exit-modal.php'; ?>

  <!-- Core Scripts -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chatbot.js"></script>
  <script>
    // Initialize Lucide Icons
    if (window.lucide) {
      lucide.createIcons();
    }
  </script>
</body>
</html>

