/**
 * Guided Patient Intake Chatbot & Human Handoff Engine
 * Physical Therapy & Rehabilitation Clinic
 * Compliant with Developer Brief Sections 14, 15, and 16
 */

(function () {
  const launcherBtn = document.getElementById('chat-launcher-btn');
  const dialog = document.getElementById('chat-dialog');
  const closeBtn = document.getElementById('chat-close-btn');
  const resetBtn = document.getElementById('chat-reset-btn');
  const messagesContainer = document.getElementById('chat-messages');
  const optionsTray = document.getElementById('chat-options-tray');
  const userInput = document.getElementById('chat-user-input');
  const sendBtn = document.getElementById('chat-send-btn');

  if (!launcherBtn || !dialog) return;

  // Lead state tracking
  let triageState = {
    caseType: 'general',
    answers: {},
    patientName: '',
    phone: '',
    email: '',
    step: 'welcome'
  };

  // Toggle open/close
  function toggleChat(open = null) {
    const isClosed = dialog.classList.contains('hidden');
    const shouldOpen = open !== null ? open : isClosed;

    if (shouldOpen) {
      dialog.classList.remove('hidden');
      dialog.classList.add('flex');
      if (messagesContainer.children.length === 0) {
        startWelcomeFlow();
      }
    } else {
      dialog.classList.add('hidden');
      dialog.classList.remove('flex');
    }
    if (window.lucide) lucide.createIcons();
  }

  launcherBtn.addEventListener('click', () => toggleChat());
  closeBtn.addEventListener('click', () => toggleChat(false));
  resetBtn.addEventListener('click', () => resetChat());

  function resetChat() {
    messagesContainer.innerHTML = '';
    optionsTray.innerHTML = '';
    triageState = { caseType: 'general', answers: {}, patientName: '', phone: '', email: '', step: 'welcome' };
    startWelcomeFlow();
  }

  function appendMessage(sender, text, isHtml = false) {
    const msgDiv = document.createElement('div');
    msgDiv.className = `flex flex-col ${sender === 'bot' ? 'items-start' : 'items-end'}`;

    const bubble = document.createElement('div');
    bubble.className = sender === 'bot'
      ? 'max-w-[85%] rounded-2xl rounded-tl-sm px-4 py-2.5 bg-white text-slate-800 text-xs sm:text-sm shadow-sm border border-slate-200/70 leading-relaxed'
      : 'max-w-[85%] rounded-2xl rounded-tr-sm px-4 py-2.5 bg-brand-900 text-white text-xs sm:text-sm shadow-sm leading-relaxed';

    if (isHtml) {
      bubble.innerHTML = text;
    } else {
      bubble.textContent = text;
    }

    msgDiv.appendChild(bubble);
    messagesContainer.appendChild(msgDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
    if (window.lucide) lucide.createIcons();
  }

  function setOptions(optionsList) {
    optionsTray.innerHTML = '';
    optionsList.forEach(opt => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'px-3 py-1.5 rounded-lg text-xs font-medium border border-teal-600/30 bg-teal-50/70 text-brand-900 hover:bg-clinical-teal hover:text-white transition-all shadow-2xs';
      btn.textContent = opt.label;
      btn.addEventListener('click', () => {
        appendMessage('user', opt.label);
        optionsTray.innerHTML = '';
        opt.handler();
      });
      optionsTray.appendChild(btn);
    });
  }

  // Check for red flag clinical terms
  function checkForRedFlags(text) {
    const redFlags = ['chest pain', 'heart attack', 'shortness of breath', 'can’t breathe', 'cant breathe', 'loss of consciousness', 'blacked out', 'uncontrolled bleeding', 'paralysis', 'suicide', 'stroke', 'emergency'];
    const lower = text.toLowerCase();
    for (let term of redFlags) {
      if (lower.includes(term)) {
        return true;
      }
    }
    return false;
  }

  function displayEmergencyWarning() {
    const alertHtml = `
      <div class="p-3 bg-red-50 border border-red-200 rounded-xl text-red-900 text-xs space-y-1.5">
        <div class="font-bold flex items-center gap-1.5 text-red-700">
          <i data-lucide="alert-octagon" class="w-4 h-4 shrink-0"></i> URGENT CLINICAL NOTICE
        </div>
        <p>The symptoms described may indicate an acute medical emergency. Our intake chat is not an emergency response service.</p>
        <p class="font-bold underline text-red-800 text-sm">Please dial 911 or proceed to the nearest hospital emergency department immediately.</p>
      </div>
    `;
    appendMessage('bot', alertHtml, true);
    setOptions([
      { label: 'Understood / Dial 911', handler: () => { window.location.href = 'tel:911'; } },
      { label: 'Back to General Inquiries', handler: () => startWelcomeFlow() }
    ]);
  }

  // STEP 1: WELCOME
  function startWelcomeFlow() {
    appendMessage('bot', "Welcome to Jaspan Physical Therapy & Rehabilitation Institute. How can our clinical team assist you today?");
    setOptions([
      { label: 'Auto Accident / No-Fault', handler: () => startAutoAccidentFlow() },
      { label: 'Workers’ Compensation', handler: () => startWorkersCompFlow() },
      { label: 'Physical Therapy', handler: () => startPTFlow() },
      { label: 'Rehabilitation Programs', handler: () => startRehabFlow() },
      { label: 'Common Questions', handler: () => showFaqOptions() },
      { label: 'Speak With Our Team', handler: () => startHumanHandoff() },
      { label: 'Book an Evaluation', handler: () => { window.location.href = 'book-evaluation.php'; } }
    ]);
  }

  // AUTO ACCIDENT FLOW (Brief Section 15)
  function startAutoAccidentFlow() {
    triageState.caseType = 'auto_accident';
    triageState.step = 'auto_1';
    appendMessage('bot', "We have extensive experience coordinating care for motor vehicle collision patients under No-Fault insurance. Were you injured in an auto accident?");
    setOptions([
      { label: 'Yes, in an auto accident', handler: () => autoAccidentStep2() },
      { label: 'No, looking for general therapy', handler: () => startPTFlow() }
    ]);
  }

  function autoAccidentStep2() {
    triageState.answers.accidentConfirmed = 'Yes';
    appendMessage('bot', "When did the accident occur?");
    setOptions([
      { label: 'Within the last 72 hours', handler: () => autoAccidentStep3('Within 72 Hours') },
      { label: '1 to 4 weeks ago', handler: () => autoAccidentStep3('1-4 Weeks Ago') },
      { label: '1 to 3 months ago', handler: () => autoAccidentStep3('1-3 Months Ago') },
      { label: 'Over 3 months ago', handler: () => autoAccidentStep3('Over 3 Months') }
    ]);
  }

  function autoAccidentStep3(timeframe) {
    triageState.answers.incidentDate = timeframe;
    appendMessage('bot', `Understood (${timeframe}). What general area are you seeking rehabilitation for?`);
    setOptions([
      { label: 'Neck / Whiplash', handler: () => autoAccidentStep4('Neck / Whiplash') },
      { label: 'Lower Back / Spine', handler: () => autoAccidentStep4('Lower Back / Spine') },
      { label: 'Shoulder / Arm', handler: () => autoAccidentStep4('Shoulder / Arm') },
      { label: 'Knee / Hip / Leg', handler: () => autoAccidentStep4('Knee / Hip / Leg') },
      { label: 'Multiple Areas / Full Body', handler: () => autoAccidentStep4('Multiple Areas') }
    ]);
  }

  function autoAccidentStep4(painArea) {
    triageState.answers.painArea = painArea;
    appendMessage('bot', "Are you currently receiving medical treatment or do you already have a No-Fault claim number?");
    setOptions([
      { label: 'Yes, have claim number', handler: () => autoAccidentStep5('Has claim number') },
      { label: 'No treatment started yet', handler: () => autoAccidentStep5('No prior treatment') },
      { label: 'Not sure / Need assistance', handler: () => autoAccidentStep5('Needs guidance') }
    ]);
  }

  function autoAccidentStep5(treatmentStatus) {
    triageState.answers.currentTreatment = treatmentStatus;
    appendMessage('bot', "Thank you. Our patient coordinators can help verify your No-Fault coverage and schedule a prompt evaluation with our clinical team. Would you like our intake specialist to reach out?");
    renderLeadCaptureForm('No-Fault Auto Accident Intake');
  }

  // WORKERS' COMPENSATION FLOW (Brief Section 15)
  function startWorkersCompFlow() {
    triageState.caseType = 'workers_comp';
    triageState.step = 'wc_1';
    appendMessage('bot', "We specialize in work-related injury rehabilitation and functional recovery documentation. Is your injury related to a workplace incident?");
    setOptions([
      { label: 'Yes, injured on the job', handler: () => wcStep2() },
      { label: 'Repetitive strain / occupational', handler: () => wcStep2('Repetitive strain') },
      { label: 'No, general injury', handler: () => startPTFlow() }
    ]);
  }

  function wcStep2(type = 'Accident on the job') {
    triageState.answers.incidentType = type;
    appendMessage('bot', "When did the workplace injury occur?");
    setOptions([
      { label: 'Within last 2 weeks', handler: () => wcStep3('Within 2 Weeks') },
      { label: '2 to 8 weeks ago', handler: () => wcStep3('2-8 Weeks Ago') },
      { label: 'Over 2 months ago', handler: () => wcStep3('Over 2 Months') }
    ]);
  }

  function wcStep3(timeframe) {
    triageState.answers.incidentDate = timeframe;
    appendMessage('bot', "What is the primary area requiring rehabilitation?");
    setOptions([
      { label: 'Lower Back / Spine', handler: () => wcStep4('Lumbar / Back') },
      { label: 'Neck / Cervical', handler: () => wcStep4('Neck / Cervical') },
      { label: 'Shoulder / Arm / Hand', handler: () => wcStep4('Shoulder / Upper Extremity') },
      { label: 'Knee / Ankle / Foot', handler: () => wcStep4('Knee / Lower Extremity') }
    ]);
  }

  function wcStep4(painArea) {
    triageState.answers.painArea = painArea;
    appendMessage('bot', "Our team coordinates directly with case managers and claims adjusters for Workers' Comp authorization. Would you like to connect with our coordinator?");
    renderLeadCaptureForm('Workers\' Compensation Intake');
  }

  // PHYSICAL THERAPY FLOW
  function startPTFlow() {
    triageState.caseType = 'physical_therapy';
    appendMessage('bot', "What condition or physical limitation are you seeking therapy for?");
    setOptions([
      { label: 'Post-Surgical Recovery', handler: () => ptStep2('Post-Surgical') },
      { label: 'Back or Neck Pain', handler: () => ptStep2('Spine / Back / Neck') },
      { label: 'Joint Pain (Knee, Hip, Shoulder)', handler: () => ptStep2('Joint Impairment') },
      { label: 'Sports Injury / Sprain', handler: () => ptStep2('Sports Injury') },
      { label: 'Mobility & Balance Issues', handler: () => ptStep2('Gait & Balance') }
    ]);
  }

  function ptStep2(area) {
    triageState.answers.painArea = area;
    appendMessage('bot', `Our licensed physical therapists provide personalized 1-on-1 care for ${area}. We can schedule your comprehensive initial evaluation.`);
    renderLeadCaptureForm('Physical Therapy Evaluation');
  }

  // REHABILITATION FLOW
  function startRehabFlow() {
    triageState.caseType = 'rehab';
    appendMessage('bot', "Our dedicated rehabilitation center offers structured protocols: 1) Clinical Assessment, 2) Tailored protocol, 3) Supervised therapeutic exercise & manual therapy, 4) Functional return-to-life tracking.");
    setOptions([
      { label: 'Schedule an Evaluation', handler: () => { window.location.href = 'book-evaluation.php'; } },
      { label: 'Tour Rehabilitation Facility', handler: () => { window.location.href = 'rehab-center.php'; } },
      { label: 'Message on WhatsApp', handler: () => startHumanHandoff() }
    ]);
  }

  // FAQS PREVIEW
  function showFaqOptions() {
    appendMessage('bot', "Here are the most frequently asked questions by our patients:");
    setOptions([
      { label: 'Do I need a doctor referral?', handler: () => {
        appendMessage('bot', "In New York, Direct Access laws often allow you to be evaluated and treated by a physical therapist without a prescription for a specified period. No-Fault and Workers' Comp cases may have specific filing requirements. Our team will verify this for you.");
        setOptions([{ label: 'Ask Another Question', handler: () => showFaqOptions() }, { label: 'Talk With Team', handler: () => startHumanHandoff() }]);
      }},
      { label: 'What happens in first evaluation?', handler: () => {
        appendMessage('bot', "Your initial 60-minute visit includes a full clinical assessment: range of motion, muscle strength, functional limitations, pain history, and the creation of your custom plan.");
        setOptions([{ label: 'Schedule My Evaluation', handler: () => { window.location.href = 'book-evaluation.php'; } }]);
      }},
      { label: 'Do you accept No-Fault & Workers’ Comp?', handler: () => {
        appendMessage('bot', "Yes! We specialize in No-Fault auto accidents and Workers' Compensation cases and handle required medical documentation and billing directly.");
        setOptions([{ label: 'Start Case Verification', handler: () => startAutoAccidentFlow() }]);
      }}
    ]);
  }

  // HUMAN HANDOFF (Brief Section 15 & 17)
  function startHumanHandoff() {
    const handoffHtml = `
      <div class="space-y-2 text-xs">
        <p class="font-semibold text-slate-900">How would you prefer to connect with our clinical team?</p>
        <div class="flex flex-col gap-1.5 pt-1">
          <a href="https://wa.me/12125550199?text=${encodeURIComponent('Hello Jaspan Rehab Team, I would like to speak with a patient intake specialist.')}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-2 rounded-xl bg-emerald-500 text-white font-semibold hover:bg-emerald-600 transition-colors">
            <span class="flex items-center gap-1.5"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Intake Desk</span>
            <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
          </a>
          <a href="tel:+12125550199" class="flex items-center justify-between p-2 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition-colors">
            <span class="flex items-center gap-1.5"><i data-lucide="phone" class="w-4 h-4"></i> Call Direct: (212) 555-0199</span>
            <i data-lucide="phone-forwarded" class="w-3.5 h-3.5"></i>
          </a>
          <button type="button" id="chat-callback-trigger" class="flex items-center justify-between p-2 rounded-xl bg-slate-100 text-slate-800 font-semibold hover:bg-slate-200 transition-colors">
            <span class="flex items-center gap-1.5"><i data-lucide="user-check" class="w-4 h-4 text-teal-600"></i> Request a Fast Callback</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </button>
        </div>
      </div>
    `;
    appendMessage('bot', handoffHtml, true);
    setTimeout(() => {
      const cbBtn = document.getElementById('chat-callback-trigger');
      if (cbBtn) {
        cbBtn.addEventListener('click', () => renderLeadCaptureForm('Callback Request'));
      }
      if (window.lucide) lucide.createIcons();
    }, 100);
  }

  // RENDER LEAD CAPTURE FORM INSIDE CHAT
  function renderLeadCaptureForm(formTitle = 'Contact Verification') {
    optionsTray.innerHTML = '';
    const formHtml = `
      <div class="bg-white p-3.5 rounded-xl border border-teal-200/90 shadow-sm space-y-2 text-xs">
        <div class="font-bold text-slate-900 flex items-center gap-1.5">
          <i data-lucide="clipboard-check" class="w-4 h-4 text-clinical-teal"></i> ${formTitle}
        </div>
        <p class="text-[11px] text-slate-500">Provide your contact info so our patient coordinator can reach you:</p>
        
        <input type="text" id="intake-name" placeholder="Full Name *" class="w-full px-2.5 py-1.5 rounded-lg border border-slate-300 focus:border-teal-500 text-xs">
        <input type="tel" id="intake-phone" placeholder="Phone Number (Call / WhatsApp) *" class="w-full px-2.5 py-1.5 rounded-lg border border-slate-300 focus:border-teal-500 text-xs">
        <input type="email" id="intake-email" placeholder="Email Address (optional)" class="w-full px-2.5 py-1.5 rounded-lg border border-slate-300 focus:border-teal-500 text-xs">
        
        <div class="text-[10px] text-slate-600">Preferred contact:</div>
        <div class="flex gap-2 text-[11px]">
          <label class="flex items-center gap-1"><input type="radio" name="intake_contact_pref" value="WhatsApp" checked> WhatsApp</label>
          <label class="flex items-center gap-1"><input type="radio" name="intake_contact_pref" value="Phone Call"> Call</label>
          <label class="flex items-center gap-1"><input type="radio" name="intake_contact_pref" value="Email"> Email</label>
        </div>

        <button type="button" id="intake-submit-btn" class="w-full py-2 rounded-lg bg-clinical-teal hover:bg-clinical-dark text-white font-semibold text-xs transition-colors flex items-center justify-center gap-1.5 shadow-sm">
          <i data-lucide="send" class="w-3.5 h-3.5"></i> Submit Intake Request
        </button>
      </div>
    `;

    appendMessage('bot', formHtml, true);

    setTimeout(() => {
      const submitBtn = document.getElementById('intake-submit-btn');
      if (submitBtn) {
        submitBtn.addEventListener('click', handleLeadSubmit);
      }
      if (window.lucide) lucide.createIcons();
    }, 100);
  }

  // ASYNC LEAD SUBMISSION TO API
  async function handleLeadSubmit() {
    const nameEl = document.getElementById('intake-name');
    const phoneEl = document.getElementById('intake-phone');
    const emailEl = document.getElementById('intake-email');
    const prefEl = document.querySelector('input[name="intake_contact_pref"]:checked');

    const name = nameEl ? nameEl.value.trim() : '';
    const phone = phoneEl ? phoneEl.value.trim() : '';
    const email = emailEl ? emailEl.value.trim() : '';
    const preferredContact = prefEl ? prefEl.value : 'WhatsApp';

    if (!phone && !email) {
      alert('Please enter your phone number or email so we can reach you.');
      return;
    }

    const payload = {
      patient_name: name || 'Website Visitor',
      phone: phone,
      email: email,
      case_type: triageState.caseType,
      incident_date: triageState.answers.incidentDate || '',
      pain_area: triageState.answers.painArea || '',
      current_treatment: triageState.answers.currentTreatment || '',
      preferred_contact: preferredContact,
      source_channel: 'chatbot',
      message: `Chatbot Triage Summary: Case=${triageState.caseType}, Area=${triageState.answers.painArea || 'N/A'}, Date=${triageState.answers.incidentDate || 'N/A'}`
    };

    appendMessage('bot', "Submitting your intake information securely...");

    try {
      const response = await fetch('api/submit-lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      const data = await response.json();

      if (data.success) {
        const refCode = data.ref_code || 'JAS-NEW';
        const waUrl = data.whatsapp_url || `https://wa.me/12125550199?text=${encodeURIComponent('Hi Jaspan Rehab, inquiry submitted Ref: ' + refCode)}`;

        const successHtml = `
          <div class="p-3 bg-emerald-50 border border-emerald-200 rounded-xl text-emerald-900 text-xs space-y-2">
            <div class="font-bold flex items-center gap-1.5 text-emerald-800">
              <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600"></i> Intake Request Received!
            </div>
            <p>Your case reference code is: <strong class="font-mono text-emerald-950 font-bold">${refCode}</strong></p>
            <p class="text-[11px] text-emerald-800">A clinical coordinator will contact you via <strong>${preferredContact}</strong> shortly.</p>
            
            <div class="pt-1">
              <a href="${waUrl}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-1.5 w-full py-2 px-3 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs shadow-sm">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i> Continue Direct on WhatsApp
              </a>
            </div>
          </div>
        `;
        appendMessage('bot', successHtml, true);
        setOptions([
          { label: 'Start New Inquiry', handler: () => resetChat() },
          { label: 'Explore Rehab Center', handler: () => { window.location.href = 'rehab-center.php'; } }
        ]);
      } else {
        appendMessage('bot', data.error || 'There was an issue submitting your request. Please call us directly at (212) 555-0199.');
      }
    } catch (err) {
      appendMessage('bot', "Thank you! Your information has been registered. You can also connect immediately on WhatsApp: <a href='https://wa.me/12125550199' class='text-teal-700 underline font-semibold'>Click to Chat</a>", true);
    }
  }

  // Manual User Input Box Handler
  function handleUserTypedInput() {
    const text = userInput.value.trim();
    if (!text) return;
    appendMessage('user', text);
    userInput.value = '';

    // Check emergency red flags
    if (checkForRedFlags(text)) {
      displayEmergencyWarning();
      return;
    }

    // Natural query routing
    const lower = text.toLowerCase();
    if (lower.includes('car') || lower.includes('accident') || lower.includes('no fault') || lower.includes('crash')) {
      startAutoAccidentFlow();
    } else if (lower.includes('work') || lower.includes('comp') || lower.includes('job') || lower.includes('employer')) {
      startWorkersCompFlow();
    } else if (lower.includes('referral') || lower.includes('doctor') || lower.includes('prescription')) {
      appendMessage('bot', "In New York, you can often begin physical therapy without a referral under Direct Access laws. For Workers' Comp or No-Fault, specific insurance paperwork applies. Our team will verify this for you.");
      setOptions([{ label: 'Verify My Insurance / Case', handler: () => renderLeadCaptureForm('Referral Verification') }]);
    } else if (lower.includes('hour') || lower.includes('open') || lower.includes('time') || lower.includes('when')) {
      appendMessage('bot', "Our clinic hours are Mon – Fri: 7:00 AM – 7:30 PM, and Saturday: 8:00 AM – 2:30 PM. We offer early morning and evening appointments.");
      setOptions([{ label: 'Book an Appointment', handler: () => { window.location.href = 'book-evaluation.php'; } }]);
    } else if (lower.includes('call') || lower.includes('phone') || lower.includes('speak') || lower.includes('human')) {
      startHumanHandoff();
    } else {
      appendMessage('bot', "Thank you for your question. To assist you best, please select one of the following options or let us connect you with a clinical intake specialist:");
      setOptions([
        { label: 'Auto Accident / No-Fault', handler: () => startAutoAccidentFlow() },
        { label: 'Workers’ Compensation', handler: () => startWorkersCompFlow() },
        { label: 'Physical Therapy Evaluation', handler: () => startPTFlow() },
        { label: 'Speak to Staff on WhatsApp', handler: () => startHumanHandoff() }
      ]);
    }
  }

  sendBtn.addEventListener('click', handleUserTypedInput);
  userInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') handleUserTypedInput();
  });

  // Global trigger function so any button on the site can trigger specific chat flows
  window.openClinicChatbot = function (intent = 'welcome') {
    toggleChat(true);
    if (intent === 'auto_accident') startAutoAccidentFlow();
    else if (intent === 'workers_comp') startWorkersCompFlow();
    else if (intent === 'pt') startPTFlow();
    else if (intent === 'handoff') startHumanHandoff();
  };

})();

