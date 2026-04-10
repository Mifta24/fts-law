<?php
/**
 * FTS Law – KITAP Visa Page
 * Template for: /kitap
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
      <h1><?php _e('KITAP – Permanent Stay Permit', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Legal guidance for foreign nationals applying for a Permanent Stay Permit (Kartu Izin Tinggal Tetap) in Indonesia — handled by a licensed lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT IS KITAP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('What Is KITAP?', 'fts-law'); ?></h2>
        <p>
          <?php _e('<strong>KITAP</strong> (Kartu Izin Tinggal Tetap) is Indonesia\'s <strong>Permanent Stay Permit</strong> — the highest level of legal residency available to foreign nationals in Indonesia. Unlike KITAS (Temporary Stay Permit), KITAP allows you to reside in Indonesia on a long-term basis without needing annual renewals.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('KITAP is typically valid for <strong>5 years</strong> and is renewable. It grants foreign holders a level of residency security closer to that of an Indonesian permanent resident, making it the preferred option for long-term expatriates, retirees, and foreign nationals with deep ties to Indonesia.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Once granted, KITAP holders may also use the permit as a <em>re-entry permit</em>, removing the need for separate re-entry documentation.', 'fts-law'); ?>
        </p>
      </div>

      <div class="info-highlights">
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">📋</span>
          <div>
            <strong><?php _e('Full Name', 'fts-law'); ?></strong>
            <p><?php _e('Kartu Izin Tinggal Tetap (KITAP)', 'fts-law'); ?></p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">⏱</span>
          <div>
            <strong><?php _e('Validity', 'fts-law'); ?></strong>
            <p><?php _e('5 Years (Renewable)', 'fts-law'); ?></p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">🏛</span>
          <div>
            <strong><?php _e('Issuing Authority', 'fts-law'); ?></strong>
            <p><?php _e('Directorate General of Immigration (Imigrasi)', 'fts-law'); ?></p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">🔄</span>
          <div>
            <strong><?php _e('Re-entry', 'fts-law'); ?></strong>
            <p><?php _e('Included — no separate re-entry permit required', 'fts-law'); ?></p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">💼</span>
          <div>
            <strong><?php _e('Work Rights', 'fts-law'); ?></strong>
            <p><?php _e('Does not automatically grant right to work — separate work permit may apply', 'fts-law'); ?></p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       KITAP TYPES / CATEGORIES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft">
    <div class="container">

      <h2 class="section-title"><?php _e('Who Can Apply for KITAP?', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('KITAP is available to specific categories of foreign nationals who have already held a valid KITAS for a qualifying period.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card">
          <span class="mini-label"><?php _e('Category 01', 'fts-law'); ?></span>
          <h3><?php _e('Spouse of Indonesian Citizen', 'fts-law'); ?></h3>
          <p>
            <?php _e('A foreign national married to an Indonesian citizen who has held a valid KITAS (Spouse KITAS) for a minimum of <strong>2 consecutive years</strong> may apply for KITAP.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Minimum KITAS period:</strong> 2 years continuously', 'fts-law'); ?>
          </div>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Category 02', 'fts-law'); ?></span>
          <h3><?php _e('Former Indonesian Citizen', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign nationals who were previously Indonesian citizens and wish to re-establish long-term residency in Indonesia may be eligible for KITAP under specific regulations.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Subject to:</strong> Immigration and citizenship review', 'fts-law'); ?>
          </div>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Category 03', 'fts-law'); ?></span>
          <h3><?php _e('Long-Term KITAS Holder', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign nationals who have held a valid Investor KITAS or Working KITAS continuously for <strong>3 consecutive years</strong> or more may apply for conversion to KITAP, subject to eligibility review.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Minimum KITAS period:</strong> 3 consecutive years', 'fts-law'); ?>
          </div>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Category 04', 'fts-law'); ?></span>
          <h3><?php _e('Foreign Retirees', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign nationals aged 55 or older on a Retirement KITAS who have met the continuous residency requirements may apply for KITAP as a permanent retirement stay permit.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Minimum age:</strong> 55 years old', 'fts-law'); ?>
          </div>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Category 05', 'fts-law'); ?></span>
          <h3><?php _e('Child of KITAP Holder', 'fts-law'); ?></h3>
          <p>
            <?php _e('A minor child (under 18) of a KITAP holder who was born in Indonesia or has grown up in Indonesia may be eligible for a derivative KITAP application under family reunification provisions.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Subject to:</strong> Age and dependency review', 'fts-law'); ?>
          </div>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Category 06', 'fts-law'); ?></span>
          <h3><?php _e('Ministerial Decree Holders', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign nationals who have received a specific ministerial decree or government recognition may qualify for KITAP on an exceptional basis, subject to immigration authority review.', 'fts-law'); ?>
          </p>
          <div class="info-box">
            <?php _e('<strong>Subject to:</strong> Individual government review', 'fts-law'); ?>
          </div>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       ELIGIBILITY REQUIREMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-requirements">
    <div class="container">

      <h2 class="section-title"><?php _e('Eligibility Requirements', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Before applying for KITAP, the following conditions must generally be satisfied. Our lawyer will review your specific eligibility during the consultation.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">✅</span>
            <?php _e('General Requirements', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid existing KITAS (active, not expired)', 'fts-law'); ?></li>
            <li><?php _e('Minimum continuous KITAS period met (2–3 years depending on category)', 'fts-law'); ?></li>
            <li><?php _e('No criminal record in Indonesia', 'fts-law'); ?></li>
            <li><?php _e('No outstanding immigration violations or overstay history', 'fts-law'); ?></li>
            <li><?php _e('Health insurance coverage applicable in Indonesia', 'fts-law'); ?></li>
            <li><?php _e('Sufficient financial means to support stay in Indonesia', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">📄</span>
            <?php _e('Document Requirements', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid passport (minimum 18 months remaining validity)', 'fts-law'); ?></li>
            <li><?php _e('Current KITAS card (original)', 'fts-law'); ?></li>
            <li><?php _e('All previous KITAS cards (full history)', 'fts-law'); ?></li>
            <li><?php _e('Sponsor letter or relevant PT PMA documentation', 'fts-law'); ?></li>
            <li><?php _e('Marriage certificate (for spouse category) — apostilled', 'fts-law'); ?></li>
            <li><?php _e('Indonesian spouse\'s KTP &amp; family card (KK) if applicable', 'fts-law'); ?></li>
            <li><?php _e('SKCK / police clearance certificate', 'fts-law'); ?></li>
            <li><?php _e('Passport-size photographs', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">⚠️</span>
            <?php _e('Important Considerations', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('KITAP application must be filed <strong>before</strong> KITAS expiry', 'fts-law'); ?></li>
            <li><?php _e('Extended absences from Indonesia may break the continuous stay requirement', 'fts-law'); ?></li>
            <li><?php _e('Document apostille may be required for foreign-issued documents', 'fts-law'); ?></li>
            <li><?php _e('Processing times vary by immigration office and case complexity', 'fts-law'); ?></li>
            <li><?php _e('KITAP does NOT automatically grant a right to work', 'fts-law'); ?></li>
            <li><?php _e('Legal advice strongly recommended before submission', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       APPLICATION PROCEDURE STEPS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('KITAP Application Procedure', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('The KITAP process involves multiple government offices and strict documentation requirements. Our lawyer manages the process end-to-end.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Legal Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We assess your eligibility, review your KITAS history, and confirm the correct KITAP category for your situation.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Document Preparation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We provide a complete document checklist and guide you through obtaining all required certificates, apostilles, and sponsor letters.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Sponsor Letter &amp; Telex', 'fts-law'); ?></h4>
          <p>
            <?php _e('Your sponsor company or Indonesian spouse submits an application for KITAP via the Immigration Telex system, initiating the official process.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Immigration Interview', 'fts-law'); ?></h4>
          <p>
            <?php _e('In some cases, a personal interview at the local Immigration Office (Kantor Imigrasi) is required. We prepare you for this step.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Document Submission', 'fts-law'); ?></h4>
          <p>
            <?php _e('All documents are submitted to the Immigration Office for review. We track the progress and follow up with immigration officials on your behalf.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('KITAP Card Issued', 'fts-law'); ?></h4>
          <p>
            <?php _e('Upon approval, your KITAP card is issued. We verify the card details and advise on next steps including Multiple Exit Re-Entry Permit (MERP).', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PROCESSING TIME & COSTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-timeline">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Processing Time &amp; Key Information', 'fts-law'); ?></h2>

      <div class="timeline-grid">

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">⏱</span>
          <h4><?php _e('Processing Time', 'fts-law'); ?></h4>
          <p><?php _e('Typically <strong>4–8 weeks</strong> from document submission, depending on the Immigration Office workload and case complexity.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">📅</span>
          <h4><?php _e('When to Apply', 'fts-law'); ?></h4>
          <p><?php _e('Apply <strong>at least 2–3 months before</strong> your current KITAS expires to avoid gaps in legal residency status.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🔄</span>
          <h4><?php _e('KITAP Renewal', 'fts-law'); ?></h4>
          <p><?php _e('KITAP is valid for <strong>5 years</strong>. Renewal must be initiated at least 30 days before the expiry date to avoid penalty or lapse.', 'fts-law'); ?></p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🛡</span>
          <h4><?php _e('Legal Support Scope', 'fts-law'); ?></h4>
          <p><?php _e('Our lawyer handles eligibility review, document preparation, government liaison, submission tracking, and card verification.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       KITAP vs KITAS COMPARISON
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-compare">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('KITAP vs KITAS — Key Differences', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Understanding the difference helps you choose the right residency path.', 'fts-law'); ?>
      </p>

      <div class="compare-table-wrap">
        <table class="compare-table">
          <thead>
            <tr>
              <th><?php _e('Feature', 'fts-law'); ?></th>
              <th><?php _e('KITAS', 'fts-law'); ?></th>
              <th class="compare-table__highlight"><?php _e('KITAP', 'fts-law'); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php _e('Validity Period', 'fts-law'); ?></td>
              <td><?php _e('1 Year (renewable)', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('5 Years (renewable)', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Annual Renewal', 'fts-law'); ?></td>
              <td><?php _e('Required every year', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('Every 5 years only', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Re-entry Permit', 'fts-law'); ?></td>
              <td><?php _e('Separate MERP required', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('Included in KITAP', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Residency Security', 'fts-law'); ?></td>
              <td><?php _e('Temporary / conditional', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('Permanent (long-term)', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Processing Complexity', 'fts-law'); ?></td>
              <td><?php _e('Moderate', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('Higher — requires KITAS history', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Minimum Stay Required', 'fts-law'); ?></td>
              <td><?php _e('No minimum stay history', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('2–3 years of KITAS required', 'fts-law'); ?></td>
            </tr>
            <tr>
              <td><?php _e('Legal Advice Recommended', 'fts-law'); ?></td>
              <td><?php _e('Strongly recommended', 'fts-law'); ?></td>
              <td class="compare-table__highlight"><?php _e('Essential', 'fts-law'); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       LEGAL SUPPORT SCOPE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-support-scope">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('How We Support Your KITAP Application', 'fts-law'); ?></h2>

      <div class="grid-4" style="margin-top: 32px;">

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Eligibility Review', 'fts-law'); ?></h4>
          <p><?php _e('We assess your KITAS history, marital status, and circumstances to confirm your eligibility for KITAP before you apply.', 'fts-law'); ?></p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">📂</span>
          <h4><?php _e('Document Management', 'fts-law'); ?></h4>
          <p><?php _e('We provide a precise checklist and guide you through obtaining every required document, translation, and apostille.', 'fts-law'); ?></p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🏛</span>
          <h4><?php _e('Immigration Liaison', 'fts-law'); ?></h4>
          <p><?php _e('Our lawyer handles direct communication with the Immigration Office on your behalf, minimising errors and delays.', 'fts-law'); ?></p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🔔</span>
          <h4><?php _e('Status Tracking', 'fts-law'); ?></h4>
          <p><?php _e('We monitor your application progress and notify you immediately at every stage, including any requests for additional documents.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED VISA PAGES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">
      <h3 class="related-title"><?php _e('Related Visa Services', 'fts-law'); ?></h3>
      <div class="related-links-grid">
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">📋</span>
          <div>
            <strong><?php _e('KITAS Visa', 'fts-law'); ?></strong>
            <span><?php _e('Temporary Stay Permit', 'fts-law'); ?></span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">💼</span>
          <div>
            <strong><?php _e('Investor KITAS', 'fts-law'); ?></strong>
            <span><?php _e('For Foreign Business Owners', 'fts-law'); ?></span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">🗓</span>
          <div>
            <strong><?php _e('Visa Extension', 'fts-law'); ?></strong>
            <span><?php _e('Extend Before Expiry', 'fts-law'); ?></span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">📑</span>
          <div>
            <strong><?php _e('All Visa Services', 'fts-law'); ?></strong>
            <span><?php _e('Overview of Immigration Support', 'fts-law'); ?></span>
          </div>
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      __('Ready to Apply for KITAP?', 'fts-law'),
      __('Book a consultation with our licensed immigration lawyer. We will review your eligibility, prepare your documents, and guide you through the complete KITAP application process in Indonesia.', 'fts-law')
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
