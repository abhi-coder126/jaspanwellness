<?php
/**
 * PRIVACY POLICY & DATA HANDLING
 * Conforms to Brief Section 31
 */

$pageTitle = 'Privacy Policy & Patient Data Practices | Jaspan Clinic';
$pageDescription = 'Privacy Policy for Jaspan Physical Therapy & Rehabilitation Institute. How we protect your contact information and respect digital confidentiality.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/header.php';
?>

<section class="bg-brand-900 text-white py-14">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl font-extrabold font-heading">Privacy Policy</h1>
    <p class="text-sm text-slate-300 mt-2 font-medium">Effective Date: October 2026 • Jaspan Physical Therapy &amp; Rehabilitation</p>
  </div>
</section>

<section class="py-16 bg-white text-slate-700 text-base leading-relaxed">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
    <div>
      <h2 class="text-xl font-bold font-heading text-brand-900 mb-2">1. Introduction</h2>
      <p>
        Jaspan Physical Therapy &amp; Rehabilitation Institute ("we," "our," or "the Clinic") respects your privacy. This Privacy Policy explains how we collect, utilize, and safeguard non-clinical contact information submitted through this website.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold font-heading text-brand-900 mb-2">2. Information Collected Through Website Intake</h2>
      <p>
        When you submit an inquiry through our evaluation form, contact forms, or guided chatbot, we collect minimal intake details necessary to establish initial communication:
      </p>
      <ul class="list-disc pl-5 mt-2 space-y-1">
        <li>Your name, telephone number, and email address.</li>
        <li>General reason for your inquiry (e.g., auto accident, work injury, general physical therapy).</li>
        <li>Preferred contact method (WhatsApp, telephone, or email).</li>
      </ul>
      <p class="mt-2 text-xs text-slate-500">
        We intentionally minimize the collection of detailed Protected Health Information (PHI) across public web forms. Detailed medical histories and diagnostic scans are reviewed during your formal in-person clinical intake.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold font-heading text-brand-900 mb-2">3. How Information Is Used</h2>
      <p>
        We use your submitted contact information exclusively to:
      </p>
      <ul class="list-disc pl-5 mt-2 space-y-1">
        <li>Verify insurance or No-Fault/Workers’ Comp claim authorization details.</li>
        <li>Coordinate your initial physical therapy evaluation.</li>
        <li>Respond to clinical questions via your requested communication channel.</li>
      </ul>
      <p class="mt-2">
        We never sell, rent, or lease your personal contact details to third-party marketing companies or external advertisers.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold font-heading text-brand-900 mb-2">4. Communications via WhatsApp &amp; Text</h2>
      <p>
        If you elect to communicate with our patient coordinators via WhatsApp or SMS, standard cellular carrier rates may apply. While our internal staff maintains clinical confidentiality, please be advised that general commercial messaging platforms are external third parties.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold font-heading text-brand-900 mb-2">5. Contact Our Privacy Officer</h2>
      <p>
        For inquiries regarding our patient privacy practices, you may reach us at:
      </p>
      <div class="mt-2 p-4 bg-slate-50 rounded-xl border border-slate-200 text-xs">
        <strong>Privacy Officer</strong><br>
        Jaspan Physical Therapy &amp; Rehabilitation Institute<br>
        <?= e(CLINIC_CONFIG['address_full']) ?><br>
        Email: <?= e(CLINIC_CONFIG['email_intake']) ?>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/components/footer.php'; ?>

