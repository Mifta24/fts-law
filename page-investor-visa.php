<?php
/**
 * FTS Law – Investor Visa (Investor KITAS) Page
 * Template for: /investor-visa
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow"><?php _e('Visa &amp; Immigration', 'fts-law'); ?></span>
      <h1><?php _e('Investor KITAS – Stay Permit for Foreign Business Owners', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Legal support for foreign nationals who own shares in a PT&nbsp;PMA and wish to reside legally in Indonesia as an investor. Handled by a licensed Indonesian lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            home_url("/consultation"),
        ); ?>"><?php _e('Book Investor Visa Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT IS INVESTOR KITAS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('What Is an Investor KITAS?', 'fts-law'); ?></h2>
        <p>
          <?php _e('An <strong>Investor KITAS</strong> is a type of KITAS (Kartu Izin Tinggal Terbatas – Temporary Stay Permit) issued specifically to foreign nationals who hold a valid <strong>shareholder position in a PT&nbsp;PMA</strong> (foreign-owned limited liability company) registered in Indonesia.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Unlike a working KITAS — which requires a Work Permit (IMTA) from the Ministry of Manpower — the Investor KITAS is issued based on your registered investment position through the Indonesian Investment Coordinating Board (BKPM) and the Online Single Submission (OSS) system.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('This makes the Investor KITAS one of the most practical residency options for foreign entrepreneurs and business owners who want to live in and actively manage their business in Indonesia.', 'fts-law'); ?>
        </p>

        <div class="info-box">
          <?php _e('<strong>💡 Key Point:</strong> You must have a PT&nbsp;PMA already registered — or set one up simultaneously — to qualify for an Investor KITAS. Our office can assist with both the company setup and the Investor KITAS application as a combined service.', 'fts-law'); ?>
        </div>
      </div>

      <div class="card card--highlight" style="align-self:start;">
        <h3 class="card__highlight-title"><?php _e('Investor KITAS at a Glance', 'fts-law'); ?></h3>
        <ul class="key-facts-list">
          <li>
            <span class="key-facts-list__label"><?php _e('Basis', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('PT PMA Shareholder Position (BKPM/OSS)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Validity', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('1–2 Years (Renewable)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Work Permit Needed?', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('No IMTA required (investor role only)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Multiple Entry', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Yes – with Multiple Re-Entry Permit', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Linked to PT PMA?', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Yes – active company required', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Path to KITAP?', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Yes – after 3+ consecutive years', 'fts-law'); ?></span>
          </li>
        </ul>
        <a class="btn btn-gold" style="width:100%;margin-top:16px;"
           href="<?php echo esc_url(home_url("/consultation")); ?>">
          <?php _e('Get a Free Assessment', 'fts-law'); ?>
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PT PMA CONNECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-pma-link">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('The Investor KITAS &amp; PT PMA Connection', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('The Investor KITAS is directly linked to your PT&nbsp;PMA company registration. Understanding this connection is essential before applying.', 'fts-law'); ?>
      </p>

      <div class="connection-grid">

        <div class="connection-step">
          <div class="connection-step__icon" aria-hidden="true">🏢</div>
          <h4><?php _e('Step 1 – Set Up PT PMA', 'fts-law'); ?></h4>
          <p>
            <?php _e('A PT&nbsp;PMA (foreign-owned company) must be registered with the Indonesian investment authority (BKPM) and the OSS system. The foreign national applying for an Investor KITAS must be a registered shareholder in the company.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/pt-pma"),
          ); ?>" class="connection-step__link">
            <?php _e('PT PMA Setup Guide &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="connection-step connection-step--arrow" aria-hidden="true">→</div>

        <div class="connection-step">
          <div class="connection-step__icon" aria-hidden="true">📋</div>
          <h4><?php _e('Step 2 – Investor Registration (OSS/BKPM)', 'fts-law'); ?></h4>
          <p>
            <?php _e('The shareholder\'s name and investment position must be formally registered in the OSS system. A valid NIB (Business Identity Number) and LKPM investment activity report are required as part of the Investor KITAS eligibility evidence.', 'fts-law'); ?>
          </p>
        </div>

        <div class="connection-step connection-step--arrow" aria-hidden="true">→</div>

        <div class="connection-step">
          <div class="connection-step__icon" aria-hidden="true">🪪</div>
          <h4><?php _e('Step 3 – Apply for Investor KITAS', 'fts-law'); ?></h4>
          <p>
            <?php _e('With the PT&nbsp;PMA documents, OSS registration, and BKPM investor status in place, the Investor KITAS application can be submitted to the Directorate General of Immigration. Our lawyer handles the entire application.', 'fts-law'); ?>
          </p>
        </div>

      </div>

      <div class="info-box" style="margin-top: 28px; max-width: 860px; margin-left: auto; margin-right: auto;">
        <?php _e('<strong>📌 Combined Service Available:</strong> If you do not yet have a PT&nbsp;PMA, our office can assist with both the company registration and Investor KITAS application simultaneously — reducing the total time and coordination required.', 'fts-law'); ?>
        <a href="<?php echo esc_url(
            home_url("/pt-pma"),
        ); ?>"><?php _e('Learn about PT PMA Setup &rarr;', 'fts-law'); ?></a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       REQUIREMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-requirements">
    <div class="container">

      <h2 class="section-title"><?php _e('Investor KITAS Requirements', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The following documents and conditions are typically required for an Investor KITAS application. Our lawyer reviews your specific case during consultation.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">👤</span> <?php _e('Personal Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid passport (min. 18 months remaining validity)', 'fts-law'); ?></li>
            <li><?php _e('Recent passport-size photographs (4×6 cm, white background)', 'fts-law'); ?></li>
            <li><?php _e('Completed immigration application form', 'fts-law'); ?></li>
            <li><?php _e('Health certificate from a recognised clinic', 'fts-law'); ?></li>
            <li><?php _e('Police clearance certificate (from home country)', 'fts-law'); ?></li>
            <li><?php _e('Health insurance valid in Indonesia', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">🏢</span> <?php _e('Company / PT PMA Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Notarised deed of establishment (Akta Pendirian) of PT PMA', 'fts-law'); ?></li>
            <li><?php _e('Ministry of Law and Human Rights approval (SK Kemenkumham)', 'fts-law'); ?></li>
            <li><?php _e('NIB (Business Identity Number) from OSS system', 'fts-law'); ?></li>
            <li><?php _e('NPWP (Company Tax ID)', 'fts-law'); ?></li>
            <li><?php _e('Shareholder register confirming the applicant as a shareholder', 'fts-law'); ?></li>
            <li><?php _e('LKPM investment activity report', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📊</span> <?php _e('Investment / BKPM Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('BKPM foreign investor registration letter', 'fts-law'); ?></li>
            <li><?php _e('OSS investor-level account confirmation', 'fts-law'); ?></li>
            <li><?php _e('Minimum investment fulfilment evidence (IDR 10 billion for PT PMA)', 'fts-law'); ?></li>
            <li><?php _e('Company bank account statement (capital injection proof)', 'fts-law'); ?></li>
            <li><?php _e('Sponsor guarantee letter from the PT PMA', 'fts-law'); ?></li>
            <li><?php _e('Director approval / board resolution for sponsorship', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top:24px;">
        <?php _e('<strong>⚠️ Minimum Investment:</strong> PT&nbsp;PMA companies are generally required to have a minimum investment value of <strong>IDR 10 billion</strong> (approximately USD 650,000) in the investment plan registered with BKPM/OSS. However, specific requirements vary by sector and business type. We advise on the correct structure for your specific business during consultation.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       APPLICATION PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Investor KITAS Application Process', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A structured, lawyer-managed process — from company verification to permit issuance.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Legal Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We review your PT&nbsp;PMA status, shareholder position, and OSS/BKPM registration to confirm Investor KITAS eligibility.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Document Preparation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We provide a complete checklist of company and personal documents required. We guide you in obtaining missing documents and review all submissions.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('VITAS Application', 'fts-law'); ?></h4>
          <p>
            <?php _e('We prepare and submit the VITAS (Limited Stay Visa) application via the Indonesian Embassy or through the Indonesian Immigration Telex system.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Entry to Indonesia', 'fts-law'); ?></h4>
          <p>
            <?php _e('Once VITAS is approved, you enter Indonesia. The KITAS conversion process begins immediately upon arrival through our lawyer\'s coordination.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Immigration Office Visit', 'fts-law'); ?></h4>
          <p>
            <?php _e('We accompany or coordinate your required biometric data capture at the local Immigration Office (Kantor Imigrasi).', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Investor KITAS Issued', 'fts-law'); ?></h4>
          <p>
            <?php _e('Your Investor KITAS card is issued. We verify the card, explain your legal obligations, and set up an annual renewal reminder.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       IMPORTANT NOTES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-notes">
    <div class="container">

      <h2 class="section-title"><?php _e('Important Legal Notes for Foreign Investors', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Understanding these points before applying prevents costly mistakes.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="note-card note-card--warning">
          <span class="note-card__icon" aria-hidden="true">⚠️</span>
          <h4><?php _e('Nominee Shareholder Risk', 'fts-law'); ?></h4>
          <p>
            <?php _e('Some foreign investors use Indonesian nominees (local individuals) as "proxy" shareholders in their company. This practice carries significant legal risk — the company may not truly belong to the foreign investor. Investor KITAS issued through a nominee structure may face complications.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/legal-risk"),
          ); ?>"><?php _e('Learn About Legal Risks &rarr;', 'fts-law'); ?></a>
        </div>

        <div class="note-card note-card--info">
          <span class="note-card__icon" aria-hidden="true">💡</span>
          <h4><?php _e('KITAS is Tied to the Company', 'fts-law'); ?></h4>
          <p>
            <?php _e('If your PT&nbsp;PMA is deregistered, becomes inactive, or your shareholder position is removed, your Investor KITAS will be affected and may be cancelled by immigration authorities. Keeping your company legally active is essential to maintaining your Investor KITAS validity.', 'fts-law'); ?>
          </p>
        </div>

        <div class="note-card note-card--info">
          <span class="note-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('LKPM Reporting Required', 'fts-law'); ?></h4>
          <p>
            <?php _e('PT&nbsp;PMA companies with active Investor KITAS holders are required to submit quarterly LKPM (Investment Activity Report) to BKPM/OSS. Failure to comply may result in penalties and affect the Investor KITAS renewal. Our office monitors and manages LKPM reporting as part of our ongoing legal support.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHO SHOULD APPLY
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Is an Investor KITAS Right for You?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('The Investor KITAS is the best option if any of the following apply to you.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You own shares in a registered PT&nbsp;PMA in Indonesia', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You want to live in Indonesia and actively manage your business', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are setting up a PT&nbsp;PMA and need residency alongside the company', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You want a legally sound residency path without a separate work permit', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are planning to stay in Indonesia for 1 year or longer as a business owner', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You want to build towards a KITAP (Permanent Stay) after 3+ years', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You want full legal protection and a licensed lawyer to manage your application', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are from Japan, Korea, China, Singapore, Australia, Europe, or the Americas', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url(
            home_url("/pt-pma"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Set up your foreign-owned company in Indonesia. Required before applying for Investor KITAS.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/kitas"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('KITAS Overview', 'fts-law'); ?></h4>
          <p><?php _e('Learn about all types of KITAS available to foreign nationals in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/legal-risk"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Identify and prevent legal risks in your company structure and investor visa arrangement.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      __('Ready to Apply for Your Investor KITAS?', 'fts-law'),
      __('Our licensed lawyer will review your PT PMA status, confirm your Investor KITAS eligibility, and manage the complete application process — from VITAS to permit issuance.', 'fts-law'),
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
