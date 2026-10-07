<?php
/**
 * Exit-Intent & Delayed Consultation Modal Component
 * Compliant with Developer Brief Section 24 (non-intrusive, frequency-capped)
 */
require_once __DIR__ . '/../config.php';
?>
<!-- EXIT / DELAYED CONSULTATION MODAL -->
<div id="exit-intent-modal" class="fixed inset-0 z-50 bg-slate-950/70 backdrop-blur-sm hidden items-center justify-center p-4 transition-opacity duration-300 no-print" aria-modal="true" role="dialog">
  <div class="bg-white rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 transform transition-all scale-95 duration-200" id="exit-modal-card">
    
    <!-- Modal Header Banner -->
    <div class="bg-gradient-to-r from-brand-900 to-clinical-dark text-white p-6 relative">
      <button type="button" id="exit-modal-close" class="absolute top-4 right-4 text-slate-300 hover:text-white p-1 rounded-lg hover:bg-white/10 transition-colors" aria-label="Close modal">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-teal-500/30 text-teal-200 border border-teal-400/30 mb-2">
        <i data-lucide="help-circle" class="w-4 h-4"></i> Patient Guidance
      </span>
      <h3 class="text-2xl sm:text-3xl font-bold font-heading text-white">
        Injured in an Accident or at Work?
      </h3>
      <p class="text-slate-200 text-sm sm:text-base mt-2 leading-relaxed">
        Navigating physical therapy, No-Fault auto claims, and Workers’ Comp can feel overwhelming. Our intake team is here to guide you step-by-step.
      </p>
    </div>

    <!-- Modal Body Form -->
    <div class="p-6 sm:p-8 space-y-5">
      <div class="grid grid-cols-2 gap-3.5 text-sm">
        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center gap-3">
          <div class="w-8 h-8 rounded-lg bg-teal-100 text-clinical-teal flex items-center justify-center shrink-0">
            <i data-lucide="shield-check" class="w-5 h-5"></i>
          </div>
          <span class="font-bold text-slate-800 leading-snug">No-Fault &amp; Work Comp Specialists</span>
        </div>
        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center gap-3">
          <div class="w-8 h-8 rounded-lg bg-teal-100 text-clinical-teal flex items-center justify-center shrink-0">
            <i data-lucide="calendar" class="w-5 h-5"></i>
          </div>
          <span class="font-bold text-slate-800 leading-snug">Prompt Evaluations Available</span>
        </div>
      </div>

      <div class="space-y-3">
        <a href="book-evaluation.php" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-xl font-bold text-base text-white bg-clinical-teal hover:bg-clinical-dark shadow-md transition-colors">
          <i data-lucide="calendar-check" class="w-5 h-5"></i>
          <span>Schedule an Initial Evaluation</span>
        </a>

        <a href="<?= getWhatsAppUrl('general', '- Inquiring via patient assistance desk') ?>" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-xl font-bold text-sm sm:text-base text-emerald-900 bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 transition-colors">
          <i data-lucide="message-square" class="w-5 h-5 text-emerald-600"></i>
          <span>Chat with Patient Coordinator on WhatsApp</span>
        </a>

        <div class="text-center pt-2">
          <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="text-sm text-slate-700 hover:text-brand-900 font-semibold inline-flex items-center gap-1.5">
            <i data-lucide="phone" class="w-4 h-4 text-teal-600"></i> Call us directly: <span class="font-extrabold underline text-slate-900"><?= e(CLINIC_CONFIG['phone_primary']) ?></span>
          </a>
        </div>
      </div>
    </div>

    <!-- Modal Footer -->
    <div class="bg-slate-50 px-6 py-3.5 border-t border-slate-100 flex items-center justify-between text-xs sm:text-sm text-slate-500">
      <span>Jaspan Rehabilitation Intake Center</span>
      <button type="button" id="exit-modal-dismiss" class="text-slate-500 hover:text-slate-800 underline font-medium">
        Maybe later
      </button>
    </div>

  </div>
</div>

