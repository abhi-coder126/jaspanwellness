<?php
/**
 * CONTACT, LOCATION & PHYSICIAN REFERRAL PORTAL
 * Conforms to Brief Section 6 & 18
 */

$pageTitle = 'Contact Us, Directions & Doctor Referrals | Jaspan Clinic';
$pageDescription = 'Contact Jaspan Physical Therapy & Rehabilitation Institute. Clinic address, hours, direct telephone lines, transit directions, and physician referral submission.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/schema-org.php';
?>

<!-- HERO SECTION: CONTACT -->
<section class="bg-brand-900 relative text-white py-14 lg:py-20 border-b border-slate-800 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/15 text-teal-300 border border-teal-500/30">
        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-teal-400"></i>
        <span>Clinic Location &amp; Contact Desk</span>
      </div>

      <h1 class="hero-title text-white tracking-tight">
        Connect With Our Intake Team &amp; <br class="hidden sm:inline">
        <span class="text-teal-400">Visit Our Rehabilitation Center</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        We are conveniently located in New York with dedicated patient parking and ground-level ADA accessibility. Contact us by phone, WhatsApp, or through the inquiry form below.
      </p>

    </div>
  </div>
</section>

<!-- CONTACT DETAILS & FORMS GRID -->
<section class="py-16 sm:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
      
      <!-- Col 1: Clinic Information & Map -->
      <div class="lg:col-span-5 space-y-6">
        
        <div class="card-clean bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-xs space-y-6">
          <h3 class="text-lg sm:text-xl font-bold font-heading text-brand-900">Clinic Headquarters</h3>
          
          <div class="space-y-4 text-xs sm:text-sm text-slate-700">
            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="map-pin" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-brand-900 block font-bold text-sm sm:text-base">Address</strong>
                <span class="text-slate-600 leading-relaxed"><?= e(CLINIC_CONFIG['address_full']) ?></span>
                <div class="text-xs text-slate-500 mt-1">Suite 340 · Ground Level ADA Accessible Entrance</div>
              </div>
            </div>

            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="phone" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-brand-900 block font-bold text-sm sm:text-base">Direct Phone Line</strong>
                <a href="tel:<?= e(CLINIC_CONFIG['phone_raw']) ?>" class="font-bold text-teal-700 hover:underline"><?= e(CLINIC_CONFIG['phone_primary']) ?></a>
                <div class="text-xs text-slate-500 mt-1">Toll Free: <?= e(CLINIC_CONFIG['phone_toll_free']) ?></div>
              </div>
            </div>

            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="message-square" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-brand-900 block font-bold text-sm sm:text-base">WhatsApp Intake Desk</strong>
                <a href="<?= getWhatsAppUrl('general') ?>" target="_blank" rel="noopener noreferrer" class="font-bold text-emerald-700 hover:underline">
                  <?= e(CLINIC_CONFIG['whatsapp_number']) ?>
                </a>
                <div class="text-xs text-slate-500 mt-1">Mon-Sat Live Chat Active with Clinical Staff</div>
              </div>
            </div>

            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-700 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="clock" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-brand-900 block font-bold text-sm sm:text-base">Hours of Operation</strong>
                <div class="text-slate-600"><?= e(CLINIC_CONFIG['hours_weekday']) ?></div>
                <div class="text-slate-600"><?= e(CLINIC_CONFIG['hours_saturday']) ?></div>
                <div class="text-xs text-slate-500 mt-1"><?= e(CLINIC_CONFIG['hours_sunday']) ?></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Transit & Parking Card -->
        <div class="bg-slate-50 p-5 rounded-xl border border-slate-200/90 space-y-2 text-xs sm:text-sm">
          <div class="font-bold text-brand-900 flex items-center gap-2 text-sm sm:text-base">
            <i data-lucide="navigation" class="w-4 h-4 text-teal-600"></i> Parking &amp; Transit Info
          </div>
          <p class="text-slate-600 leading-relaxed">
            Free reserved parking is situated directly in front of the building entrance. We are also accessible by major subway lines (MTA 4, 5, 6, N, R, W) and local bus routes with step-free street level boarding.
          </p>
        </div>

      </div>

      <!-- Col 2: General & Physician Contact Form -->
      <div class="lg:col-span-7">
        <div class="card-clean bg-white rounded-2xl p-6 sm:p-9 border border-slate-200/90 shadow-xs space-y-5">
          
          <div>
            <h3 class="text-xl sm:text-2xl font-bold font-heading text-brand-900">Send an Inquiry or Doctor Referral</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1 leading-relaxed">
              Whether you are a patient seeking physical therapy or a physician referring a case, our intake team will respond promptly.
            </p>
          </div>

          <?php if (!empty($_GET['submitted']) && !empty($_GET['ref'])): ?>
          <div class="p-5 bg-emerald-50 border border-emerald-300 rounded-xl text-emerald-950 space-y-2.5 mb-5">
            <div class="flex items-center gap-2 font-bold text-sm sm:text-base text-emerald-900">
              <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600"></i>
              <span>Thank You! Your Inquiry Has Been Received.</span>
            </div>
            <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">
              Case Reference: <strong class="font-mono bg-white px-2 py-0.5 rounded border border-emerald-300 text-emerald-950"><?= e($_GET['ref']) ?></strong>
            </p>
            <p class="text-xs text-emerald-700">
              Our clinical intake team will reach out to you promptly. You can also connect with us right now on WhatsApp:
            </p>
            <a href="<?= getWhatsAppUrl(e($_GET['case'] ?? 'general'), '- Inquiry Ref: ' . e($_GET['ref'])) ?>" target="_blank" rel="noopener noreferrer" 
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-xs transition-colors">
              <i data-lucide="message-square" class="w-4 h-4"></i>
              <span>Continue on WhatsApp with Intake Desk</span>
            </a>
          </div>
          <?php endif; ?>

          <div id="contact-ajax-success" class="hidden p-5 bg-emerald-50 border border-emerald-300 rounded-xl text-emerald-950 space-y-2.5 mb-5">
            <div class="flex items-center gap-2 font-bold text-sm sm:text-base text-emerald-900">
              <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600"></i>
              <span>Inquiry Received Successfully!</span>
            </div>
            <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">
              Your Reference Code: <strong id="contact-ajax-ref" class="font-mono bg-white px-2 py-0.5 rounded border border-emerald-300 text-emerald-950"></strong>
            </p>
            <p class="text-xs text-emerald-700">
              Our clinical intake team is reviewing your message. You can also chat with our intake coordinator directly on WhatsApp:
            </p>
            <a id="contact-ajax-wa-btn" href="#" target="_blank" rel="noopener noreferrer" 
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-xs transition-colors">
              <i data-lucide="message-square" class="w-4 h-4"></i>
              <span>Open WhatsApp Conversation Now</span>
            </a>
          </div>

          <form id="contact-inquiry-form" action="api/submit-lead.php" method="POST" class="space-y-4 text-sm">
            <input type="text" name="clinic_bot_catcher" class="hidden" tabindex="-1">
            <input type="text" name="website_hp" class="hidden" tabindex="-1">
            <input type="hidden" name="source_channel" value="contact_page">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Your Full Name *</label>
                <input type="text" name="patient_name" id="contact_name" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Phone Number *</label>
                <input type="tel" name="phone" id="contact_phone" required placeholder="(212) 555-0199" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email Address</label>
                <input type="email" name="email" id="contact_email" placeholder="patient@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none">
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Inquiry / Case Type</label>
                <select name="case_type" id="contact_case_type" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none font-medium text-slate-800">
                  <option value="general">General Patient Question</option>
                  <option value="auto_accident">No-Fault Auto Accident Inquiry</option>
                  <option value="workers_comp">Workers' Compensation Case</option>
                  <option value="physical_therapy">Physical Therapy Evaluation</option>
                  <option value="physician_referral">Physician / Attorney Referral</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">How can we assist you?</label>
              <textarea name="message" id="contact_message" rows="4" placeholder="Describe symptoms, insurance details, or referring practice info..." class="w-full px-4 py-3 rounded-xl border border-slate-300 text-xs sm:text-sm focus:border-teal-500 focus:outline-none"></textarea>
            </div>

            <div class="flex items-center justify-between pt-1">
              <label class="flex items-center gap-2.5 cursor-pointer text-xs text-slate-600">
                <input type="checkbox" name="consent" checked required class="text-teal-600 rounded">
                <span>I consent to be contacted by Jaspan Rehabilitation coordinators.</span>
              </label>
            </div>

            <div class="pt-2">
              <button type="submit" id="contact-submit-btn" class="btn-primary w-full py-3.5">
                <i data-lucide="send" class="w-4 h-4"></i>
                <span id="contact-btn-label">Send Intake Message</span>
              </button>
            </div>
          </form>

          <script>
            document.addEventListener('DOMContentLoaded', () => {
              const cForm = document.getElementById('contact-inquiry-form');
              const submitBtn = document.getElementById('contact-submit-btn');
              const btnLabel = document.getElementById('contact-btn-label');
              const successBox = document.getElementById('contact-ajax-success');
              const refSpan = document.getElementById('contact-ajax-ref');
              const waBtn = document.getElementById('contact-ajax-wa-btn');

              if (cForm) {
                cForm.addEventListener('submit', async (e) => {
                  e.preventDefault();
                  if (btnLabel) btnLabel.textContent = 'Transmitting...';
                  if (submitBtn) submitBtn.disabled = true;

                  const payload = {
                    patient_name: document.getElementById('contact_name').value.trim(),
                    phone: document.getElementById('contact_phone').value.trim(),
                    email: document.getElementById('contact_email').value.trim(),
                    case_type: document.getElementById('contact_case_type').value,
                    message: document.getElementById('contact_message').value.trim(),
                    source_channel: 'contact_page'
                  };

                  try {
                    const response = await fetch('api/submit-lead.php', {
                      method: 'POST',
                      headers: { 'Content-Type': 'application/json' },
                      body: JSON.stringify(payload)
                    });
                    const data = await response.json();

                    if (data.success) {
                      cForm.classList.add('hidden');
                      if (successBox) successBox.classList.remove('hidden');
                      if (refSpan) refSpan.textContent = data.ref_code || 'JAS-INQ';
                      if (waBtn && data.whatsapp_url) waBtn.href = data.whatsapp_url;
                      if (window.lucide) lucide.createIcons();
                      successBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    } else {
                      alert(data.error || 'Submission failed. Please call our clinic directly.');
                      if (btnLabel) btnLabel.textContent = 'Send Intake Message';
                      if (submitBtn) submitBtn.disabled = false;
                    }
                  } catch (err) {
                    cForm.submit(); // fallback to standard browser POST
                  }
                });
              }
            });
          </script>

        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

