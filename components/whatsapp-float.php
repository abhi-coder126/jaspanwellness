<?php
/**
 * Persistent WhatsApp Float Widget Component
 * Meets Developer Brief Section 17: Context-aware prefilled messaging
 */
require_once __DIR__ . '/../config.php';

// Detect current page intent
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$intent = 'general';
if ($currentPage === 'no-fault-auto-accident') {
    $intent = 'auto_accident';
} elseif ($currentPage === 'workers-compensation') {
    $intent = 'workers_comp';
} elseif ($currentPage === 'services' || $currentPage === 'conditions') {
    $intent = 'physical_therapy';
} elseif ($currentPage === 'book-evaluation') {
    $intent = 'evaluation';
} elseif ($currentPage === 'rehab-center') {
    $intent = 'rehab_center';
}

$whatsAppUrl = getWhatsAppUrl($intent);
?>

<!-- FLOATING WHATSAPP BUTTON (Bottom Left to complement Chatbot in Bottom Right) -->
<aside id="whatsapp-launcher" class="fixed bottom-6 left-6 z-40 flex items-center gap-3 no-print" aria-label="WhatsApp live chat assistance">
  <a href="<?= $whatsAppUrl ?>" target="_blank" rel="noopener noreferrer" 
     class="group flex items-center gap-2.5 bg-emerald-600 hover:bg-emerald-700 text-white pl-3.5 pr-4 py-2.5 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-200 border border-emerald-400/40">
    <div class="relative flex items-center justify-center">
      <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.634.06-1.503-.306-.921-.387-1.517-1.328-1.562-1.388-.046-.06-1.077-1.434-1.077-2.735 0-1.302.684-1.942.926-2.204.241-.262.525-.328.701-.328.175 0 .351.002.503.01.162.008.379-.062.593.45.22.527.75 1.83.816 1.962.065.132.11.286.022.46-.088.175-.132.285-.262.439-.131.153-.277.342-.395.459-.131.131-.268.274-.115.537.153.263.682 1.123 1.464 1.82 1.006.897 1.854 1.175 2.117 1.306.262.131.416.11.57-.066.154-.176.657-.766.832-1.029.176-.263.351-.219.593-.131.241.088 1.53.722 1.793.854.263.131.439.197.503.307.066.11.066.635-.078 1.04zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.66 1.434 5.176L2 22l4.981-1.307C8.423 21.525 10.154 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/>
      </svg>
      <span class="absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-white live-pulse"></span>
    </div>
    <div class="hidden md:block text-left">
      <div class="text-sm font-bold leading-none">WhatsApp Us</div>
      <div class="text-xs text-emerald-100 font-medium mt-1">Live Staff Responding</div>
    </div>
  </a>
</aside>

