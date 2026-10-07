<?php
/**
 * Guided Patient Intake Chatbot Widget Component
 * Meets Developer Brief Sections 14, 15, & 16
 */
require_once __DIR__ . '/../config.php';
?>
<!-- CHATBOT LAUNCHER & DIALOG CONTAINER -->
<div id="chatbot-container" class="fixed bottom-6 right-6 z-50 flex flex-col items-end no-print" aria-label="Digital Intake Assistant">
  
  <!-- CHAT WINDOW (Initially collapsed) -->
  <div id="chat-dialog" class="chat-drawer hidden w-[92vw] sm:w-[410px] h-[580px] max-h-[85vh] bg-white rounded-2xl shadow-2xl border border-slate-200/80 flex-col overflow-hidden mb-3 transition-all duration-300">
    
    <!-- Chat Header -->
    <div class="bg-gradient-to-r from-brand-900 to-clinical-dark text-white p-4 flex items-center justify-between shrink-0 shadow-sm">
      <div class="flex items-center gap-3">
        <div class="relative">
          <div class="w-10 h-10 rounded-full bg-clinical-teal flex items-center justify-center text-white border-2 border-teal-300/40">
            <i data-lucide="stethoscope" class="w-5 h-5"></i>
          </div>
          <span class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-emerald-400 border-2 border-brand-900"></span>
        </div>
        <div>
          <div class="font-heading font-bold text-base tracking-tight flex items-center gap-2">
            Clinical Intake Navigator
            <span class="text-xs font-semibold px-2 py-0.5 rounded bg-teal-500/30 text-teal-200">AI Guided</span>
          </div>
          <div class="text-xs text-slate-300 flex items-center gap-1 mt-0.5">
            <span>Jaspan Physical Therapy &amp; Rehab</span>
          </div>
        </div>
      </div>

      <div class="flex items-center gap-1">
        <button type="button" id="chat-reset-btn" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 text-xs transition-colors" title="Restart intake flow">
          <i data-lucide="refresh-cw" class="w-4 h-4"></i>
        </button>
        <button type="button" id="chat-close-btn" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 transition-colors" title="Close chat">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>
    </div>

    <!-- Medical Emergency Banner in Chat -->
    <div class="bg-amber-50 px-4 py-2.5 border-b border-amber-200/80 text-xs text-amber-900 flex items-start gap-2 shrink-0">
      <i data-lucide="info" class="w-4 h-4 text-amber-600 mt-0.5 shrink-0"></i>
      <span class="leading-relaxed">
        Intake triage only. Not for emergency care. If experiencing severe symptoms, call <strong>911</strong> immediately.
      </span>
    </div>

    <!-- Chat Messages Scroll Area -->
    <div id="chat-messages" class="flex-1 p-4 overflow-y-auto space-y-3.5 bg-slate-50/70 text-sm">
      <!-- Dynamic Messages Injected by chatbot.js -->
    </div>

    <!-- Quick Reply / Options Tray -->
    <div id="chat-options-tray" class="p-3 bg-white border-t border-slate-100 flex flex-wrap gap-2 max-h-48 overflow-y-auto shrink-0">
      <!-- Dynamic buttons rendered here -->
    </div>

    <!-- Direct Input & Handoff Footer -->
    <div class="p-3 bg-white border-t border-slate-200 flex items-center gap-2 shrink-0">
      <input type="text" id="chat-user-input" placeholder="Type a question or select an option..." 
             class="flex-1 px-3.5 py-2.5 text-sm rounded-xl border border-slate-300 focus:outline-none focus:border-clinical-teal text-slate-800 placeholder-slate-400">
      <button type="button" id="chat-send-btn" class="p-2.5 rounded-xl bg-clinical-teal hover:bg-clinical-dark text-white transition-colors" title="Send message">
        <i data-lucide="send" class="w-4 h-4"></i>
      </button>
      <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="p-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white transition-colors shrink-0" title="Continue on WhatsApp">
        <i data-lucide="message-circle" class="w-4 h-4"></i>
      </a>
    </div>

  </div>

  <!-- FLOATING LAUNCHER BUTTON -->
  <button type="button" id="chat-launcher-btn" class="group flex items-center gap-3 bg-brand-900 hover:bg-brand-800 text-white px-5 py-3.5 rounded-full shadow-xl hover:shadow-2xl border-2 border-teal-500/40 hover:scale-105 transition-all duration-200">
    <div class="relative flex items-center justify-center">
      <i data-lucide="message-square" class="w-5 h-5 text-teal-300 group-hover:scale-110 transition-transform"></i>
      <span class="absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-emerald-400 live-pulse"></span>
    </div>
    <div class="text-left hidden sm:block">
      <div class="text-sm font-bold leading-none">Need Help? Chat With Intake</div>
      <div class="text-xs text-teal-200/90 mt-1">Auto Accidents • Workers' Comp • PT</div>
    </div>
  </button>

</div>

