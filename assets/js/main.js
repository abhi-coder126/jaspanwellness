/**
 * Main Client Application Logic
 * Mobile nav, exit intent, tab switchers, and FAQ filtering
 */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Mobile Menu Toggles
  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileBtnSm = document.getElementById('mobile-menu-btn-sm');
  const drawer = document.getElementById('mobile-nav-drawer');

  function toggleMobileMenu() {
    if (drawer) {
      drawer.classList.toggle('hidden');
    }
  }

  if (mobileBtn) mobileBtn.addEventListener('click', toggleMobileMenu);
  if (mobileBtnSm) mobileBtnSm.addEventListener('click', toggleMobileMenu);

  // 2. Exit Intent / Delayed Consultation Modal (Frequency Capped)
  const exitModal = document.getElementById('exit-intent-modal');
  const exitClose = document.getElementById('exit-modal-close');
  const exitDismiss = document.getElementById('exit-modal-dismiss');
  const modalCard = document.getElementById('exit-modal-card');

  function showExitModal() {
    if (sessionStorage.getItem('jaspan_exit_modal_shown')) return;
    if (!exitModal) return;

    exitModal.classList.remove('hidden');
    exitModal.classList.add('flex');
    sessionStorage.setItem('jaspan_exit_modal_shown', 'true');

    if (modalCard) {
      setTimeout(() => {
        modalCard.classList.remove('scale-95');
        modalCard.classList.add('scale-100');
      }, 50);
    }
  }

  function hideExitModal() {
    if (!exitModal) return;
    if (modalCard) {
      modalCard.classList.remove('scale-100');
      modalCard.classList.add('scale-95');
    }
    setTimeout(() => {
      exitModal.classList.add('hidden');
      exitModal.classList.remove('flex');
    }, 150);
  }

  if (exitClose) exitClose.addEventListener('click', hideExitModal);
  if (exitDismiss) exitDismiss.addEventListener('click', hideExitModal);

  // Mouseleave trigger for exit intent (desktop)
  document.addEventListener('mouseleave', (e) => {
    if (e.clientY <= 10) {
      showExitModal();
    }
  });

  // Delayed trigger (35 seconds of browsing)
  setTimeout(() => {
    showExitModal();
  }, 35000);

  // 3. Condition Explorer Tabs (if on page with tabs)
  const conditionTabs = document.querySelectorAll('.condition-tab-btn');
  const conditionPanels = document.querySelectorAll('.condition-content-panel');

  if (conditionTabs.length > 0) {
    conditionTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const targetId = tab.getAttribute('data-target');

        conditionTabs.forEach(t => {
          t.classList.remove('bg-brand-900', 'text-white', 'border-brand-900');
          t.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
        });

        tab.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
        tab.classList.add('bg-brand-900', 'text-white', 'border-brand-900');

        conditionPanels.forEach(panel => {
          if (panel.id === targetId) {
            panel.classList.remove('hidden');
          } else {
            panel.classList.add('hidden');
          }
        });

        if (window.lucide) lucide.createIcons();
      });
    });
  }

  // 4. Testimonial Filter Tabs
  const testTabs = document.querySelectorAll('.test-filter-btn');
  const testCards = document.querySelectorAll('.testimonial-card');

  if (testTabs.length > 0) {
    testTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const category = tab.getAttribute('data-category');

        testTabs.forEach(t => {
          t.classList.remove('bg-clinical-teal', 'text-white');
          t.classList.add('bg-slate-100', 'text-slate-700');
        });

        tab.classList.remove('bg-slate-100', 'text-slate-700');
        tab.classList.add('bg-clinical-teal', 'text-white');

        testCards.forEach(card => {
          if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 5. FAQ Live Search & Accordion
  const faqSearchInput = document.getElementById('faq-search-input');
  const faqItems = document.querySelectorAll('.faq-item');

  if (faqSearchInput && faqItems.length > 0) {
    faqSearchInput.addEventListener('input', (e) => {
      const term = e.target.value.toLowerCase().trim();
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question')?.textContent.toLowerCase() || '';
        const answer = item.querySelector('.faq-answer')?.textContent.toLowerCase() || '';

        if (question.includes(term) || answer.includes(term)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  }

  // 6. Smooth anchor scrolling for header links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#' && href.startsWith('#')) {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });

});

