<?php
/**
 * FTS Law – KITAS Visa Page
 * Template for: /kitas
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow"><?php _e('Visa &amp; Immigration', 'fts-law'); ?></span>
      <h1><?php _e('KITAS – Temporary Stay Permit', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Legal support for foreign nationals applying for a KITAS (Kartu Izin Tinggal Terbatas) in Indonesia — handled by a licensed Indonesian lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url( '/consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT IS KITAS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-what-is">
    <div class="container two-col">

      <div class="what-is__text">
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('What is KITAS?', 'fts-law'); ?></h2>
        <p>
          <?php _e('<strong>KITAS</strong> (Kartu Izin Tinggal Terbatas) is a Temporary Stay Permit issued by the Indonesian Immigration Authority to foreign nationals who wish to reside in Indonesia for an extended period — typically for work, investment, or family reasons.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('A KITAS is not a visa, but a stay permit that is issued after entering Indonesia on the appropriate visa. It allows the holder to live legally in Indonesia for a specified period (usually 6 or 12 months) and is renewable annually.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Having a valid KITAS is a legal requirement for any foreign national residing in Indonesia beyond a tourist or business visit. Overstaying without a valid permit can result in fines, detention, and deportation.', 'fts-law'); ?>
        </p>

        <div class="info-box">
          <?php _e('<strong>⚠️ Important:</strong> A KITAS must be applied for through a licensed Indonesian sponsor — either a company (employer/PT PMA), a government body, or (for certain categories) an individual sponsor. Our office provides full legal support through the entire process.', 'fts-law'); ?>
        </div>
      </div>

      <div class="what-is__aside">
        <div class="card card--highlight">
          <h3 class="card__highlight-title"><?php _e('KITAS at a Glance', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Full Name', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Kartu Izin Tinggal Terbatas', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Issued By', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Indonesian Immigration Authority (Imigrasi)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Validity', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('6 or 12 months (renewable)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Max Stay', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Up to 5 years (renewed annually)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Multiple Entry', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Yes – with Multiple Re-Entry Permit', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Work Permit', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Required separately for working', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
            <?php _e('Ask About Your KITAS', 'fts-law'); ?>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TYPES OF KITAS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-types">
    <div class="container">

      <h2 class="section-title"><?php _e('Types of KITAS We Handle', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Different KITAS categories apply depending on your purpose of stay in Indonesia. Our office assists with the following types:', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">💼</span>
          <h3><?php _e('Investor KITAS', 'fts-law'); ?></h3>
          <p>
            <?php _e('For foreign nationals who own shares in a PT&nbsp;PMA company registered in Indonesia. Requires a valid investment position through BKPM/OSS.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>" class="type-card__link">
            <?php _e('Investor KITAS Details &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">🏢</span>
          <h3><?php _e('Working KITAS', 'fts-law'); ?></h3>
          <p>
            <?php _e('For foreign workers employed by an Indonesian company. Requires a Work Permit (IMTA/RPTKA) approved by the Ministry of Manpower before application.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            <?php _e('Ask About Working KITAS &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">❤️</span>
          <h3><?php _e('Spouse / Family KITAS', 'fts-law'); ?></h3>
          <p>
            <?php _e('For foreign nationals married to an Indonesian citizen or accompanying a KITAS holder as a dependent. Different documentation is required.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            <?php _e('Ask About Family KITAS &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">🎓</span>
          <h3><?php _e('Student / Social KITAS', 'fts-law'); ?></h3>
          <p>
            <?php _e('For foreign nationals studying, conducting research, or on a social or cultural mission in Indonesia. Requires an appropriate sponsor institution.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            <?php _e('Ask About Student KITAS &rarr;', 'fts-law'); ?>
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       REQUIREMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-requirements">
    <div class="container">

      <h2 class="section-title"><?php _e('KITAS Requirements', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The following documents are generally required for a KITAS application. Exact requirements may vary by KITAS type and applicant nationality. We review your full document list during consultation.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📋</span> <?php _e('Applicant Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid passport (min. 18 months validity)', 'fts-law'); ?></li>
            <li><?php _e('Recent passport-size photographs (4×6 cm)', 'fts-law'); ?></li>
            <li><?php _e('VITAS (Limited Stay Visa) approval letter', 'fts-law'); ?></li>
            <li><?php _e('Health certificate (from recognised clinic)', 'fts-law'); ?></li>
            <li><?php _e('Police clearance certificate (from home country)', 'fts-law'); ?></li>
            <li><?php _e('Marriage certificate (if applicable – translated)', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">🏢</span> <?php _e('Sponsor / Company Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Sponsor\'s deed of establishment (Akta Pendirian)', 'fts-law'); ?></li>
            <li><?php _e('Company registration (NIB / TDP)', 'fts-law'); ?></li>
            <li><?php _e('NPWP (Tax ID) of sponsoring company', 'fts-law'); ?></li>
            <li><?php _e('Sponsor letter / guarantee letter', 'fts-law'); ?></li>
            <li><?php _e('For Investor KITAS: OSS / BKPM investor registration', 'fts-law'); ?></li>
            <li><?php _e('For Working KITAS: IMTA / RPTKA approval', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📝</span> <?php _e('Forms &amp; Applications', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Completed Imigrasi application form', 'fts-law'); ?></li>
            <li><?php _e('Signed sponsor guarantee letter', 'fts-law'); ?></li>
            <li><?php _e('Completed VITAS/KITAS application (online via sistem imigrasi)', 'fts-law'); ?></li>
            <li><?php _e('Administrative fee payment receipt', 'fts-law'); ?></li>
            <li><?php _e('LKPM report (for Investor KITAS – if applicable)', 'fts-law'); ?></li>
            <li><?php _e('Biometric data submission at immigration office', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top: 24px;">
        <?php _e('<strong>📌 Note:</strong> Document requirements are subject to change by the Indonesian Immigration Authority. Our office ensures that your application is prepared with the most up-to-date requirements at the time of submission.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       APPLICATION PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title"><?php _e('KITAS Application Process', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The KITAS process involves multiple government agencies. Our legal team coordinates the entire process on your behalf.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Legal Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We assess your eligibility, identify the correct KITAS type, and review your documents before any application is submitted.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('VITAS Application', 'fts-law'); ?></h4>
          <p>
            <?php _e('We prepare and submit the Limited Stay Visa (VITAS) application to the Indonesian Embassy in your country or through the sponsor in Indonesia.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Entry to Indonesia', 'fts-law'); ?></h4>
          <p>
            <?php _e('Once VITAS is approved, you enter Indonesia on the VITAS. The KITAS conversion process begins immediately after arrival.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Biometric &amp; Immigration', 'fts-law'); ?></h4>
          <p>
            <?php _e('We accompany or coordinate your visit to the Immigration Office for biometric data capture and KITAS card issuance.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('KITAS Card Issued', 'fts-law'); ?></h4>
          <p>
            <?php _e('Your KITAS card is issued and valid for the approved period. We provide a renewal reminder before expiry.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Annual Renewal Support', 'fts-law'); ?></h4>
          <p>
            <?php _e('We manage your KITAS renewal process each year and advise on upgrading to a KITAP after 5 years of continuous stay.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PROCESSING TIMELINE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-timeline">
    <div class="container">

      <h2 class="section-title"><?php _e('Processing Timeline', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Estimated processing times for each stage of the KITAS application. Times may vary based on immigration office workload and applicant nationality.', 'fts-law'); ?>
      </p>

      <div class="timeline-grid">

        <div class="timeline-item">
          <div class="timeline-item__period"><?php _e('1 – 2 weeks', 'fts-law'); ?></div>
          <h4><?php _e('VITAS Application', 'fts-law'); ?></h4>
          <p><?php _e('Preparation and submission of the Limited Stay Visa application to the Indonesian Embassy or via sponsor in Indonesia.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period"><?php _e('2 – 4 weeks', 'fts-law'); ?></div>
          <h4><?php _e('VITAS Approval', 'fts-law'); ?></h4>
          <p><?php _e('Processing time at the Indonesian Embassy / Directorate General of Immigration varies by country and KITAS type.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period"><?php _e('7 – 14 days', 'fts-law'); ?></div>
          <h4><?php _e('KITAS Conversion', 'fts-law'); ?></h4>
          <p><?php _e('After entry to Indonesia, the KITAS conversion at the local Immigration Office typically takes 7–14 working days.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period"><?php _e('1 – 3 days', 'fts-law'); ?></div>
          <h4><?php _e('Card Collection', 'fts-law'); ?></h4>
          <p><?php _e('KITAS card collection at the Immigration Office after processing is completed and fees are paid.', 'fts-law'); ?></p>
        </div>

      </div>

      <div class="info-box" style="margin-top: 28px;">
        <?php _e('<strong>⏱ Total Estimated Time:</strong> 4 – 8 weeks from initial consultation to KITAS card receipt. Investor KITAS timelines may be longer due to OSS/BKPM registration requirements.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       OUR LEGAL SUPPORT SCOPE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-scope">
    <div class="container">

      <h2 class="section-title"><?php _e('What Our KITAS Legal Support Includes', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We provide end-to-end legal support — not just document assistance. All services are supervised by our licensed Indonesian lawyer.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Eligibility Assessment', 'fts-law'); ?></h4>
          <p><?php _e('Review of your personal situation, nationality, and purpose of stay to determine the correct KITAS category.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📄</span>
          <h4><?php _e('Document Review &amp; Preparation', 'fts-law'); ?></h4>
          <p><?php _e('Full review of all required documents. We identify gaps and advise on how to obtain missing documents from your home country.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🏛</span>
          <h4><?php _e('Government Agency Coordination', 'fts-law'); ?></h4>
          <p><?php _e('We liaise with the Immigration Office, Ministry of Manpower, BKPM/OSS, and notary offices on your behalf.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">⚠️</span>
          <h4><?php _e('Overstay Risk Management', 'fts-law'); ?></h4>
          <p><?php _e('We track your visa and KITAS validity dates and alert you well in advance to prevent overstay fines or legal complications.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔄</span>
          <h4><?php _e('Renewal Management', 'fts-law'); ?></h4>
          <p><?php _e('Annual KITAS renewal coordination. We remind you of renewal deadlines and manage the full renewal process.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">⬆️</span>
          <h4><?php _e('KITAP Upgrade Advice', 'fts-law'); ?></h4>
          <p><?php _e('After 5 years of continuous KITAS, we advise on upgrading to a KITAP (Permanent Stay Permit) for long-term residents.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🌍</span>
          <h4><?php _e('Multiple Re-Entry Permit', 'fts-law'); ?></h4>
          <p><?php _e('Assistance with obtaining the Multiple Re-Entry Permit (MERP) so you can travel in and out of Indonesia freely during your KITAS validity.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">💬</span>
          <h4><?php _e('English Communication', 'fts-law'); ?></h4>
          <p><?php _e('All communications, document explanations, and legal advice provided in clear English for our international clients.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FAQ
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-faq">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Frequently Asked Questions', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Common questions from foreign nationals about KITAS in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('Can I apply for a KITAS without a sponsor company?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('In most cases, a KITAS requires an Indonesian sponsor — either a company, government body, or individual (for family KITAS). An Investor KITAS requires a PT PMA company where the applicant holds shares. If you do not yet have a company, we can assist with PT PMA setup as part of the process.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('What is the difference between KITAS and KITAP?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('A KITAS is a Temporary Stay Permit (renewable annually, up to 5 years). A KITAP is a Permanent Stay Permit, available to foreign nationals who have held a KITAS for 5 consecutive years. KITAP is valid for 5 years and is renewable, making it more convenient for long-term residents.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('Can I work in Indonesia with a KITAS?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('A KITAS alone does not automatically authorise you to work in Indonesia. A Working KITAS requires a valid Work Permit (IMTA) and a Manpower Utilisation Plan (RPTKA) approved by the Ministry of Manpower. Investor KITAS holders may participate in company management but are subject to specific restrictions. We advise on the correct permit type for your situation.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('What happens if my KITAS expires?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('If your KITAS expires and you remain in Indonesia, you are subject to overstay fines of IDR 1,000,000 per day. Extended overstay can result in detention, deportation, and a ban from re-entering Indonesia. We provide renewal reminders and emergency extension support to prevent this situation.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('How much does a KITAS application cost?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('KITAS costs include official government fees (set by the Indonesian Immigration Authority) and our legal service fee. Total costs vary depending on the KITAS type, your nationality, and whether company registration is also required. Please contact us for a detailed cost breakdown based on your situation.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            <?php _e('Can I apply for a KITAS while already in Indonesia?', 'fts-law'); ?>
          </summary>
          <div class="faq-item__answer">
            <p>
              <?php _e('In most cases, a KITAS requires a VITAS (Limited Stay Visa) which must be obtained from an Indonesian Embassy abroad before entry. However, in certain circumstances, particularly for Investor KITAS, there may be pathways to apply from within Indonesia. We assess your specific situation during the initial consultation.', 'fts-law'); ?>
            </p>
          </div>
        </details>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Related Services', 'fts-law'); ?></h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏠</span>
          <h4><?php _e('KITAP – Permanent Stay', 'fts-law'); ?></h4>
          <p><?php _e('Upgrade from KITAS to a Permanent Stay Permit after 5 years.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">💼</span>
          <h4><?php _e('Investor KITAS', 'fts-law'); ?></h4>
          <p><?php _e('KITAS for foreign investors holding shares in a PT PMA company.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🗓</span>
          <h4><?php _e('Visa Extension', 'fts-law'); ?></h4>
          <p><?php _e('Extend your stay permit before it expires — avoid overstay fines.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      __('Ready to Apply for Your KITAS?', 'fts-law'),
      __('Speak with our licensed lawyer to assess your KITAS eligibility, review your documents, and start the application process with full legal support.', 'fts-law')
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
