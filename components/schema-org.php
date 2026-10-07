<?php
/**
 * Schema.org JSON-LD Structured Data Component
 * Compliant with MedicalBusiness, PhysicalTherapy, Physician, and FAQPage schemas
 */
require_once __DIR__ . '/../config.php';

$schemaType = $schemaType ?? 'MedicalClinic';
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "@id": "https://jaspanrehab.com/#clinic",
      "name": "<?= addslashes(CLINIC_CONFIG['clinic_name']) ?>",
      "alternateName": "Jaspan Rehabilitation",
      "description": "Premier physical therapy, multidisciplinary rehabilitation, No-Fault auto accident recovery, and Workers' Compensation clinic.",
      "url": "https://jaspanrehab.com",
      "telephone": "<?= addslashes(CLINIC_CONFIG['phone_primary']) ?>",
      "email": "<?= addslashes(CLINIC_CONFIG['email_intake']) ?>",
      "priceRange": "$$",
      "medicalSpecialty": [
        "Physiotherapy",
        "PhysicalTherapy",
        "OccupationalTherapy"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= addslashes(CLINIC_CONFIG['address_street']) ?>",
        "addressLocality": "<?= addslashes(CLINIC_CONFIG['address_city']) ?>",
        "addressRegion": "<?= addslashes(CLINIC_CONFIG['address_state']) ?>",
        "postalCode": "<?= addslashes(CLINIC_CONFIG['address_zip']) ?>",
        "addressCountry": "US"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "07:00",
          "closes": "19:30"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Saturday"],
          "opens": "08:00",
          "closes": "14:30"
        }
      ]
    },
    {
      "@type": "Physician",
      "@id": "https://jaspanrehab.com/#dr-jaspan",
      "name": "Dr. Robert Jaspan, PT, DPT, OCS",
      "jobTitle": "Lead Clinical Director & Orthopedic Physical Therapist",
      "medicalSpecialty": "OrthopedicPhysicalTherapy",
      "worksFor": {
        "@id": "https://jaspanrehab.com/#clinic"
      }
    }
  ]
}
</script>

