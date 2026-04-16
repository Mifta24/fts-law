<?php
/**
 * FTS Law – Visa Extension Page
 * Template for: /visa-extension
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
      <h1><?php _e('Visa Extension &amp; Stay Permit Renewal', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Legal support for extending or renewing your visa or stay permit in Indonesia before it expires — avoiding overstay fines, deportation risk, and legal complications.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            fts_page_url( 'consultation' ),
        ); ?>"><?php _e('Book Extension Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       URGENCY ALERT
  ══════════════════════════════════════════════════════════════════ -->
  <div class="urgency-bar">
    <div class="container">
      <div class="urgency-bar__inner">
        <span class="urgency-bar__icon" aria-hidden="true">⚠️</span>
        <div class="urgency-bar__text">
          <?php _e('<strong>Important:</strong> Overstaying your visa or stay permit in Indonesia results in <strong>fines of IDR 1,000,000 per day</strong>, possible detention, and deportation. Apply for extension at least <strong>30–60 days before expiry</strong>.', 'fts-law'); ?>
        </div>
        <a class="btn btn-gold urgency-bar__cta"
           href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
          <?php _e('Act Now', 'fts-law'); ?>
        </a>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════
       OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Visa Extension &amp; Stay Permit Renewal in Indonesia', 'fts-law'); ?></h2>
        <p>
          <?php _e('Any foreign national residing in Indonesia on a visa, visit permit, or stay permit must ensure their document remains valid throughout their stay. When your current permit is approaching its expiry date, you have two options:', 'fts-law'); ?>
        </p>
        <ul class="check-list" style="margin-bottom: 20px;">
          <li><?php _e('<strong>Extend</strong> your existing permit (for the same permit type)', 'fts-law'); ?></li>
          <li><?php _e('<strong>Renew / Convert</strong> to a new or upgraded permit type', 'fts-law'); ?></li>
        </ul>
        <p>
          <?php _e('The extension process involves submitting an application to the Indonesian Directorate General of Immigration (Ditjen Imigrasi) <strong>before</strong> the current permit expires. Late applications or expired permits result in significant penalties.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Our licensed lawyer provides full legal support for the extension and renewal process — ensuring your documents are correct, deadlines are met, and your residency status in Indonesia remains legally protected at all times.', 'fts-law'); ?>
        </p>
      </div>

      <div class="info-highlights">

        <div class="info-highlight-card info-highlight-card--warning">
          <span class="info-highlight-card__icon" aria-hidden="true">⚠️</span>
          <div>
            <strong><?php _e('Overstay Fine', 'fts-law'); ?></strong>
            <p><?php _e('IDR 1,000,000 (approx. USD 65) per day of overstay', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="info-highlight-card info-highlight-card--warning">
          <span class="info-highlight-card__icon" aria-hidden="true">✈️</span>
          <div>
            <strong><?php _e('Deportation Risk', 'fts-law'); ?></strong>
            <p><?php _e('Extended overstay can result in detention and forced departure', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="info-highlight-card info-highlight-card--warning">
          <span class="info-highlight-card__icon" aria-hidden="true">🚫</span>
          <div>
            <strong><?php _e('Re-Entry Ban', 'fts-law'); ?></strong>
            <p><?php _e('Serious overstay may result in a ban from re-entering Indonesia', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="info-highlight-card info-highlight-card--safe">
          <span class="info-highlight-card__icon" aria-hidden="true">✅</span>
          <div>
            <strong><?php _e('Apply Early', 'fts-law'); ?></strong>
            <p><?php _e('Submit your extension application 30–60 days before expiry to avoid any risk', 'fts-law'); ?></p>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TYPES OF EXTENSIONS WE HANDLE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-ext-types">
    <div class="container">

      <h2 class="section-title"><?php _e('Types of Visa &amp; Permit Extensions We Handle', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We support extension and renewal for all major visa and stay permit categories for foreign nationals in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Stay Permit', 'fts-law'); ?></span>
          <h3><?php _e('KITAS Extension / Renewal', 'fts-law'); ?></h3>
          <p>
            <?php _e('The most common type. KITAS (Temporary Stay Permit) must be renewed annually. We manage the full renewal process — from document preparation to Immigration Office coordination and card issuance.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Investor KITAS renewal', 'fts-law'); ?></li>
            <li><?php _e('Working KITAS renewal', 'fts-law'); ?></li>
            <li><?php _e('Spouse / Family KITAS renewal', 'fts-law'); ?></li>
            <li><?php _e('Retirement KITAS renewal', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline">
            <span class="card__deadline-icon" aria-hidden="true">📅</span>
            <strong><?php _e('Apply 30–60 days before expiry', 'fts-law'); ?></strong>
          </div>
        </article>

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Permanent Stay', 'fts-law'); ?></span>
          <h3><?php _e('KITAP Renewal', 'fts-law'); ?></h3>
          <p>
            <?php _e('KITAP (Permanent Stay Permit) is valid for 5 years and must be renewed before expiry. We manage the renewal process including updated documentation and Immigration Office submission.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('KITAP validity check', 'fts-law'); ?></li>
            <li><?php _e('Document update &amp; preparation', 'fts-law'); ?></li>
            <li><?php _e('Immigration Office submission', 'fts-law'); ?></li>
            <li><?php _e('Card replacement coordination', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline">
            <span class="card__deadline-icon" aria-hidden="true">📅</span>
            <strong><?php _e('Apply 30 days before expiry', 'fts-law'); ?></strong>
          </div>
        </article>

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Visitor Permit', 'fts-law'); ?></span>
          <h3><?php _e('Visit Visa / VOA Extension', 'fts-law'); ?></h3>
          <p>
            <?php _e('Social Visit Visa (B211A), Visa on Arrival (VOA), and Business Visit Visa holders can extend their stay in Indonesia for an additional 30 days through the immigration office.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('B211A visit visa extension', 'fts-law'); ?></li>
            <li><?php _e('VOA extension support', 'fts-law'); ?></li>
            <li><?php _e('Multiple extension advice', 'fts-law'); ?></li>
            <li><?php _e('Conversion to KITAS advice', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline">
            <span class="card__deadline-icon" aria-hidden="true">📅</span>
            <strong><?php _e('Apply before current visa expires', 'fts-law'); ?></strong>
          </div>
        </article>

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Re-Entry Permit', 'fts-law'); ?></span>
          <h3><?php _e('Multiple Re-Entry Permit (MERP)', 'fts-law'); ?></h3>
          <p>
            <?php _e('KITAS holders who travel internationally require a Multiple Entry Re-entry Permit (MERP) to re-enter Indonesia without losing their KITAS status. We apply for and renew MERP as part of our KITAS management service.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('MERP application &amp; renewal', 'fts-law'); ?></li>
            <li><?php _e('Travel confirmation support', 'fts-law'); ?></li>
            <li><?php _e('KITAS re-entry protection', 'fts-law'); ?></li>
            <li><?php _e('Emergency re-entry advice', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline">
            <span class="card__deadline-icon" aria-hidden="true">📅</span>
            <strong><?php _e('Before any international travel', 'fts-law'); ?></strong>
          </div>
        </article>

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Conversion', 'fts-law'); ?></span>
          <h3><?php _e('Visa-to-KITAS Conversion', 'fts-law'); ?></h3>
          <p>
            <?php _e('If you are currently on a tourist, business, or social visa but wish to remain in Indonesia long-term, we advise on converting to the appropriate KITAS type — depending on your circumstances and eligibility.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Eligibility review for KITAS conversion', 'fts-law'); ?></li>
            <li><?php _e('PT PMA setup for Investor KITAS', 'fts-law'); ?></li>
            <li><?php _e('Sponsor coordination', 'fts-law'); ?></li>
            <li><?php _e('Full application support', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline">
            <span class="card__deadline-icon" aria-hidden="true">📅</span>
            <strong><?php _e('Before visa expires — plan ahead', 'fts-law'); ?></strong>
          </div>
        </article>

        <article class="card card--ext-type">
          <span class="mini-label"><?php _e('Emergency', 'fts-law'); ?></span>
          <h3><?php _e('Emergency Extension Support', 'fts-law'); ?></h3>
          <p>
            <?php _e('Already close to expiry or have concerns about overstay? We provide emergency legal consultation to assess your options and take the fastest possible legal action to protect your residency status.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Urgent case assessment', 'fts-law'); ?></li>
            <li><?php _e('Emergency legal advice', 'fts-law'); ?></li>
            <li><?php _e('Fastest available extension pathway', 'fts-law'); ?></li>
            <li><?php _e('Overstay mitigation strategy', 'fts-law'); ?></li>
          </ul>
          <div class="card__deadline card__deadline--urgent">
            <span class="card__deadline-icon" aria-hidden="true">🚨</span>
            <strong><?php _e('Contact us immediately', 'fts-law'); ?></strong>
          </div>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       OVERSTAY RISKS — DETAILED
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-overstay">
    <div class="container">

      <h2 class="section-title"><?php _e('Understanding Overstay Risks in Indonesia', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Overstaying your visa or stay permit in Indonesia is a serious legal violation. The consequences escalate rapidly with every day of overstay.', 'fts-law'); ?>
      </p>

      <div class="overstay-timeline">

        <div class="overstay-stage overstay-stage--yellow">
          <div class="overstay-stage__period"><?php _e('Day 1–7', 'fts-law'); ?></div>
          <div class="overstay-stage__content">
            <h4><?php _e('Early Overstay', 'fts-law'); ?></h4>
            <ul>
              <li><?php _e('Fine: IDR 1,000,000 per day (total IDR 7,000,000 max for this stage)', 'fts-law'); ?></li>
              <li><?php _e('Fine must be paid at the airport or immigration office before departure', 'fts-law'); ?></li>
              <li><?php _e('No immigration blacklist at this stage (typically)', 'fts-law'); ?></li>
              <li><?php _e('<strong>Action:</strong> Contact our office immediately for emergency extension support', 'fts-law'); ?></li>
            </ul>
          </div>
        </div>

        <div class="overstay-stage overstay-stage--orange">
          <div class="overstay-stage__period"><?php _e('Day 8–60', 'fts-law'); ?></div>
          <div class="overstay-stage__content">
            <h4><?php _e('Moderate Overstay', 'fts-law'); ?></h4>
            <ul>
              <li><?php _e('Daily fine continues to accumulate (max cap may apply — subject to change)', 'fts-law'); ?></li>
              <li><?php _e('Risk of immigration investigation and summons', 'fts-law'); ?></li>
              <li><?php _e('Possible detention by immigration authorities', 'fts-law'); ?></li>
              <li><?php _e('Difficulty in obtaining future Indonesian visas', 'fts-law'); ?></li>
              <li><?php _e('<strong>Action:</strong> Seek urgent legal advice before attempting departure', 'fts-law'); ?></li>
            </ul>
          </div>
        </div>

        <div class="overstay-stage overstay-stage--red">
          <div class="overstay-stage__period"><?php _e('60+ Days', 'fts-law'); ?></div>
          <div class="overstay-stage__content">
            <h4><?php _e('Serious Overstay', 'fts-law'); ?></h4>
            <ul>
              <li><?php _e('High risk of detention and forced deportation', 'fts-law'); ?></li>
              <li><?php _e('Possible immigration <strong>blacklist</strong> — banned from entering Indonesia', 'fts-law'); ?></li>
              <li><?php _e('Criminal charges may be filed in extreme cases', 'fts-law'); ?></li>
              <li><?php _e('Sponsor company may face penalties and compliance issues', 'fts-law'); ?></li>
              <li><?php _e('<strong>Action:</strong> Immediate legal intervention required — contact us now', 'fts-law'); ?></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="info-box info-box--danger" style="margin-top: 28px;">
        <?php _e('<strong>🚨 Already overstaying?</strong> Contact our office immediately via WhatsApp. Do not attempt to leave Indonesia without legal advice — the process for handling overstay correctly is critical to minimising penalties and protecting your ability to return to Indonesia.', 'fts-law'); ?>
        <div style="margin-top: 14px;">
          <a class="btn btn-gold" href="<?php echo esc_url(
              fts_page_url( 'consultation' ),
          ); ?>"><?php _e('Book Emergency Consultation', 'fts-law'); ?></a>
          &nbsp;
          <a class="btn btn-green" href="<?php echo esc_url(
              fts_wa_url(),
          ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Now', 'fts-law'); ?></a>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       REQUIRED DOCUMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-requirements">
    <div class="container">

      <h2 class="section-title"><?php _e('Documents Required for Extension', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The following documents are commonly required for a KITAS extension / renewal. Exact requirements vary by permit type. We provide a precise checklist during consultation.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">👤</span> <?php _e('Applicant Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid passport (with original and copy of current KITAS entry visa)', 'fts-law'); ?></li>
            <li><?php _e('Current KITAS card (original)', 'fts-law'); ?></li>
            <li><?php _e('Recent passport-size photographs', 'fts-law'); ?></li>
            <li><?php _e('Completed extension application form', 'fts-law'); ?></li>
            <li><?php _e('Updated health insurance certificate', 'fts-law'); ?></li>
            <li><?php _e('Police clearance (if required for renewal category)', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">🏢</span> <?php _e('Sponsor / Company Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Updated sponsor guarantee letter', 'fts-law'); ?></li>
            <li><?php _e('Company deed and registration documents (current)', 'fts-law'); ?></li>
            <li><?php _e('NIB and NPWP (company tax ID) copies', 'fts-law'); ?></li>
            <li><?php _e('For Investor KITAS: updated LKPM investment report', 'fts-law'); ?></li>
            <li><?php _e('For Working KITAS: updated IMTA / work permit', 'fts-law'); ?></li>
            <li><?php _e('Director / board resolution authorising renewal', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📝</span> <?php _e('Supporting Documents', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Copy of all previous KITAS / permit cards', 'fts-law'); ?></li>
            <li><?php _e('OSS/BKPM registration confirmation (Investor KITAS)', 'fts-law'); ?></li>
            <li><?php _e('MERP application (if travelling internationally)', 'fts-law'); ?></li>
            <li><?php _e('Administrative fee payment evidence', 'fts-law'); ?></li>
            <li><?php _e('Domicile letter (Surat Keterangan Domisili) from local RT/RW', 'fts-law'); ?></li>
            <li><?php _e('Any additional documents requested by immigration office', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       EXTENSION PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Our Visa Extension Support Process', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A proactive, lawyer-managed process to ensure your permit is always valid.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Expiry Date Check', 'fts-law'); ?></h4>
          <p>
            <?php _e('We review your current permit expiry date and immediately determine the correct extension type and deadline for your specific permit category.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Document Review', 'fts-law'); ?></h4>
          <p>
            <?php _e('We check all required documents for your extension, identify any outdated or missing items, and provide a precise checklist for you to action.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Application Preparation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Our lawyer prepares the complete extension application package — forms, sponsor letters, supporting documents — and reviews everything before submission.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Immigration Submission', 'fts-law'); ?></h4>
          <p>
            <?php _e('We submit the extension application to the Immigration Office and handle all follow-up communication, queries, and additional document requests.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Extension Approved', 'fts-law'); ?></h4>
          <p>
            <?php _e('Once approved, we coordinate the collection of your new KITAS card or updated permit and verify all details are correct.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Next Renewal Reminder', 'fts-law'); ?></h4>
          <p>
            <?php _e('We add your new expiry date to our tracking system and will alert you well in advance of the next renewal deadline.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       DEADLINE CALENDAR / KEY DATES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-deadlines">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Key Extension Deadlines at a Glance', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('When to apply for each type of permit renewal.', 'fts-law'); ?>
      </p>

      <div class="deadline-table-wrap">
        <table class="deadline-table">
          <thead>
            <tr>
              <th><?php _e('Permit Type', 'fts-law'); ?></th>
              <th><?php _e('Validity Period', 'fts-law'); ?></th>
              <th><?php _e('When to Apply for Renewal', 'fts-law'); ?></th>
              <th><?php _e('Overstay Fine', 'fts-law'); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php _e('KITAS (Investor / Working / Family)', 'fts-law'); ?></td>
              <td><?php _e('1 Year', 'fts-law'); ?></td>
              <td><strong><?php _e('30–60 days before expiry', 'fts-law'); ?></strong></td>
              <td><?php _e('IDR 1,000,000 / day', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('KITAP (Permanent Stay)', 'fts-law'); ?></td>
              <td><?php _e('5 Years', 'fts-law'); ?></td>
              <td><strong><?php _e('30 days before expiry', 'fts-law'); ?></strong></td>
              <td><?php _e('IDR 1,000,000 / day', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Social Visit Visa (B211A)', 'fts-law'); ?></td>
              <td><?php _e('60 days (extendable)', 'fts-law'); ?></td>
              <td><strong><?php _e('Before visa expires', 'fts-law'); ?></strong></td>
              <td><?php _e('IDR 1,000,000 / day', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Visa on Arrival (VOA)', 'fts-law'); ?></td>
              <td><?php _e('30 days (extendable +30)', 'fts-law'); ?></td>
              <td><strong><?php _e('Before 30-day period ends', 'fts-law'); ?></strong></td>
              <td><?php _e('IDR 1,000,000 / day', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Multiple Re-Entry Permit (MERP)', 'fts-law'); ?></td>
              <td><?php _e('Tied to KITAS validity', 'fts-law'); ?></td>
              <td><strong><?php _e('Before international travel', 'fts-law'); ?></strong></td>
              <td><?php _e('KITAS at risk of cancellation', 'fts-law'); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Related Visa &amp; Immigration Services', 'fts-law'); ?></h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'kitas' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('KITAS – Temporary Stay Permit', 'fts-law'); ?></h4>
          <p><?php _e('Full information on KITAS types, requirements, and the application process in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'kitap' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏠</span>
          <h4><?php _e('KITAP – Permanent Stay', 'fts-law'); ?></h4>
          <p><?php _e('Upgrade to a Permanent Stay Permit after qualifying with 3+ years of KITAS history.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'investor-visa' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">💼</span>
          <h4><?php _e('Investor KITAS', 'fts-law'); ?></h4>
          <p><?php _e('Stay permit for foreign shareholders of a PT PMA company registered in Indonesia.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      __('Don\'t Wait Until It\'s Too Late', 'fts-law'),
      __('Contact our legal team today to review your visa or stay permit expiry date and start the extension process. We handle the entire process so you can focus on your life and business in Indonesia.', 'fts-law'),
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
