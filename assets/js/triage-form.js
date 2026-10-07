/**
 * Interactive Multi-Step Clinical Triage & Evaluation Request Form
 * Powering book-evaluation.php (P0 Patient Acquisition Funnel)
 */

document.addEventListener('DOMContentLoaded', () => {
  const wizardForm = document.getElementById('clinical-triage-form');
  if (!wizardForm) return;

  let currentStep = 1;
  const totalSteps = 4;

  const stepIndicators = document.querySelectorAll('.wizard-step-indicator');
  const stepPanels = document.querySelectorAll('.wizard-step-panel');
  const prevBtn = document.getElementById('wizard-prev-btn');
  const nextBtn = document.getElementById('wizard-next-btn');
  const submitBtn = document.getElementById('wizard-submit-btn');
  const formSuccess = document.getElementById('wizard-success-screen');
  const formContainer = document.getElementById('wizard-body-container');

  function updateWizardUI() {
    // Show active panel
    stepPanels.forEach(panel => {
      const stepNum = parseInt(panel.getAttribute('data-step'), 10);
      if (stepNum === currentStep) {
        panel.classList.remove('hidden');
      } else {
        panel.classList.add('hidden');
      }
    });

    // Update step numbers at top
    stepIndicators.forEach(ind => {
      const stepNum = parseInt(ind.getAttribute('data-step'), 10);
      const circle = ind.querySelector('.step-circle');
      const label = ind.querySelector('.step-label');

      if (stepNum < currentStep) {
        circle.className = 'step-circle w-8 h-8 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-xs shadow-sm';
        circle.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>';
        if (label) label.className = 'step-label text-xs font-semibold text-emerald-700 hidden sm:block';
      } else if (stepNum === currentStep) {
        circle.className = 'step-circle w-8 h-8 rounded-full bg-brand-900 text-white flex items-center justify-center font-bold text-xs shadow-sm ring-4 ring-teal-100';
        circle.textContent = stepNum;
        if (label) label.className = 'step-label text-xs font-bold text-brand-900 hidden sm:block';
      } else {
        circle.className = 'step-circle w-8 h-8 rounded-full bg-slate-200 text-slate-500 flex items-center justify-center font-bold text-xs';
        circle.textContent = stepNum;
        if (label) label.className = 'step-label text-xs font-medium text-slate-400 hidden sm:block';
      }
    });

    // Navigation buttons
    if (prevBtn) {
      if (currentStep === 1) {
        prevBtn.classList.add('invisible');
      } else {
        prevBtn.classList.remove('invisible');
      }
    }

    if (currentStep === totalSteps) {
      if (nextBtn) nextBtn.classList.add('hidden');
      if (submitBtn) submitBtn.classList.remove('hidden');
    } else {
      if (nextBtn) nextBtn.classList.remove('hidden');
      if (submitBtn) submitBtn.classList.add('hidden');
    }

    if (window.lucide) lucide.createIcons();
    wizardForm.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function validateStep(step) {
    if (step === 1) {
      const selectedCase = document.querySelector('input[name="case_type"]:checked');
      if (!selectedCase) {
        alert('Please select the primary reason for your visit.');
        return false;
      }
    }
    if (step === 2) {
      const painAreas = document.querySelectorAll('input[name="pain_areas[]"]:checked');
      if (painAreas.length === 0) {
        alert('Please select at least one area of discomfort or injury.');
        return false;
      }
    }
    if (step === 4) {
      const name = document.getElementById('patient_name')?.value.trim();
      const phone = document.getElementById('patient_phone')?.value.trim();
      const email = document.getElementById('patient_email')?.value.trim();
      const consent = document.getElementById('patient_consent')?.checked;

      if (!name) {
        alert('Please provide your full legal or preferred name.');
        return false;
      }
      if (!phone && !email) {
        alert('Please provide a telephone number or email address so our intake team can reach you.');
        return false;
      }
      if (!consent) {
        alert('Please check the consent authorization box to proceed.');
        return false;
      }
    }
    return true;
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      if (validateStep(currentStep)) {
        if (currentStep < totalSteps) {
          currentStep++;
          updateWizardUI();
        }
      }
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      if (currentStep > 1) {
        currentStep--;
        updateWizardUI();
      }
    });
  }

  // Handle Card Selection styling on Step 1
  const caseCards = document.querySelectorAll('.case-type-card');
  caseCards.forEach(card => {
    card.addEventListener('click', () => {
      caseCards.forEach(c => {
        c.classList.remove('border-teal-600', 'bg-teal-50/60', 'ring-2', 'ring-teal-500/30');
        c.classList.add('border-slate-200', 'bg-white');
      });
      card.classList.remove('border-slate-200', 'bg-white');
      card.classList.add('border-teal-600', 'bg-teal-50/60', 'ring-2', 'ring-teal-500/30');
      const radio = card.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
    });
  });

  // Handle Final Submission
  wizardForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (!validateStep(4)) return;

    const submitSpinner = submitBtn.querySelector('.spinner-icon');
    const submitText = submitBtn.querySelector('.btn-text');
    if (submitSpinner) submitSpinner.classList.remove('hidden');
    if (submitText) submitText.textContent = 'Securing Intake...';
    submitBtn.disabled = true;

    // Collect data
    const formData = new FormData(wizardForm);
    const painChecked = [];
    document.querySelectorAll('input[name="pain_areas[]"]:checked').forEach(cb => {
      painChecked.push(cb.value);
    });

    const payload = {
      patient_name: formData.get('patient_name'),
      phone: formData.get('patient_phone'),
      email: formData.get('patient_email'),
      case_type: formData.get('case_type'),
      incident_date: formData.get('incident_date') || '',
      pain_area: painChecked.join(', '),
      current_treatment: formData.get('current_treatment') || 'Not specified',
      preferred_contact: formData.get('preferred_contact') || 'WhatsApp',
      preferred_time: formData.get('preferred_time') || 'Morning',
      message: formData.get('patient_notes') || '',
      source_channel: 'website_evaluation_form'
    };

    try {
      const response = await fetch('api/submit-lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      const data = await response.json();

      if (data.success) {
        if (formContainer) formContainer.classList.add('hidden');
        if (formSuccess) {
          formSuccess.classList.remove('hidden');
          const refEl = document.getElementById('success-ref-code');
          const waBtn = document.getElementById('success-whatsapp-btn');
          if (refEl) refEl.textContent = data.ref_code;
          if (waBtn && data.whatsapp_url) {
            waBtn.href = data.whatsapp_url;
          }
        }
        if (window.lucide) lucide.createIcons();
      } else {
        alert(data.error || 'Submission error. Please call our clinic directly at (212) 555-0199.');
        submitBtn.disabled = false;
        if (submitText) submitText.textContent = 'Submit Intake Request';
      }
    } catch (err) {
      alert('Network error. Please call our office at (212) 555-0199 or chat with us on WhatsApp.');
      submitBtn.disabled = false;
      if (submitText) submitText.textContent = 'Submit Intake Request';
    }
  });

  updateWizardUI();
});

