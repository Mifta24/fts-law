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
      <span class="eyebrow">Visa &amp; Immigration</span>
      <h1>KITAP – Permanent Stay Permit</h1>
      <p class="page-hero__subtitle">
        Legal guidance for foreign nationals applying for a Permanent Stay Permit
        (Kartu Izin Tinggal Tetap) in Indonesia — handled by a licensed lawyer.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">Book Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
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
        <span class="eyebrow">Overview</span>
        <h2 class="section-title">What Is KITAP?</h2>
        <p>
          <strong>KITAP</strong> (Kartu Izin Tinggal Tetap) is Indonesia's
          <strong>Permanent Stay Permit</strong> — the highest level of legal residency
          available to foreign nationals in Indonesia. Unlike KITAS (Temporary Stay Permit),
          KITAP allows you to reside in Indonesia on a long-term basis without needing
          annual renewals.
        </p>
        <p>
          KITAP is typically valid for <strong>5 years</strong> and is renewable. It grants
          foreign holders a level of residency security closer to that of an Indonesian
          permanent resident, making it the preferred option for long-term expatriates,
          retirees, and foreign nationals with deep ties to Indonesia.
        </p>
        <p>
          Once granted, KITAP holders may also use the permit as a <em>re-entry permit</em>,
          removing the need for separate re-entry documentation.
        </p>
      </div>

      <div class="info-highlights">
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">📋</span>
          <div>
            <strong>Full Name</strong>
            <p>Kartu Izin Tinggal Tetap (KITAP)</p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">⏱</span>
          <div>
            <strong>Validity</strong>
            <p>5 Years (Renewable)</p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">🏛</span>
          <div>
            <strong>Issuing Authority</strong>
            <p>Directorate General of Immigration (Imigrasi)</p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">🔄</span>
          <div>
            <strong>Re-entry</strong>
            <p>Included — no separate re-entry permit required</p>
          </div>
        </div>
        <div class="info-highlight-card">
          <span class="info-highlight-card__icon" aria-hidden="true">💼</span>
          <div>
            <strong>Work Rights</strong>
            <p>Does not automatically grant right to work — separate work permit may apply</p>
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

      <h2 class="section-title">Who Can Apply for KITAP?</h2>
      <p class="section-subtitle">
        KITAP is available to specific categories of foreign nationals who have
        already held a valid KITAS for a qualifying period.
      </p>

      <div class="grid-3">

        <article class="card">
          <span class="mini-label">Category 01</span>
          <h3>Spouse of Indonesian Citizen</h3>
          <p>
            A foreign national married to an Indonesian citizen who has held a valid
            KITAS (Spouse KITAS) for a minimum of <strong>2 consecutive years</strong>
            may apply for KITAP.
          </p>
          <div class="info-box">
            <strong>Minimum KITAS period:</strong> 2 years continuously
          </div>
        </article>

        <article class="card">
          <span class="mini-label">Category 02</span>
          <h3>Former Indonesian Citizen</h3>
          <p>
            Foreign nationals who were previously Indonesian citizens and wish to
            re-establish long-term residency in Indonesia may be eligible for KITAP
            under specific regulations.
          </p>
          <div class="info-box">
            <strong>Subject to:</strong> Immigration and citizenship review
          </div>
        </article>

        <article class="card">
          <span class="mini-label">Category 03</span>
          <h3>Long-Term KITAS Holder</h3>
          <p>
            Foreign nationals who have held a valid Investor KITAS or Working KITAS
            continuously for <strong>3 consecutive years</strong> or more may apply
            for conversion to KITAP, subject to eligibility review.
          </p>
          <div class="info-box">
            <strong>Minimum KITAS period:</strong> 3 consecutive years
          </div>
        </article>

        <article class="card">
          <span class="mini-label">Category 04</span>
          <h3>Foreign Retirees</h3>
          <p>
            Foreign nationals aged 55 or older on a Retirement KITAS who have met
            the continuous residency requirements may apply for KITAP as a
            permanent retirement stay permit.
          </p>
          <div class="info-box">
            <strong>Minimum age:</strong> 55 years old
          </div>
        </article>

        <article class="card">
          <span class="mini-label">Category 05</span>
          <h3>Child of KITAP Holder</h3>
          <p>
            A minor child (under 18) of a KITAP holder who was born in Indonesia or
            has grown up in Indonesia may be eligible for a derivative KITAP
            application under family reunification provisions.
          </p>
          <div class="info-box">
            <strong>Subject to:</strong> Age and dependency review
          </div>
        </article>

        <article class="card">
          <span class="mini-label">Category 06</span>
          <h3>Ministerial Decree Holders</h3>
          <p>
            Foreign nationals who have received a specific ministerial decree or
            government recognition may qualify for KITAP on an exceptional basis,
            subject to immigration authority review.
          </p>
          <div class="info-box">
            <strong>Subject to:</strong> Individual government review
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

      <h2 class="section-title">Eligibility Requirements</h2>
      <p class="section-subtitle">
        Before applying for KITAP, the following conditions must generally be satisfied.
        Our lawyer will review your specific eligibility during the consultation.
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">✅</span>
            General Requirements
          </h3>
          <ul class="req-list">
            <li>Valid existing KITAS (active, not expired)</li>
            <li>Minimum continuous KITAS period met (2–3 years depending on category)</li>
            <li>No criminal record in Indonesia</li>
            <li>No outstanding immigration violations or overstay history</li>
            <li>Health insurance coverage applicable in Indonesia</li>
            <li>Sufficient financial means to support stay in Indonesia</li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">📄</span>
            Document Requirements
          </h3>
          <ul class="req-list">
            <li>Valid passport (minimum 18 months remaining validity)</li>
            <li>Current KITAS card (original)</li>
            <li>All previous KITAS cards (full history)</li>
            <li>Sponsor letter or relevant PT PMA documentation</li>
            <li>Marriage certificate (for spouse category) — apostilled</li>
            <li>Indonesian spouse's KTP &amp; family card (KK) if applicable</li>
            <li>SKCK / police clearance certificate</li>
            <li>Passport-size photographs</li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span class="req-block__icon" aria-hidden="true">⚠️</span>
            Important Considerations
          </h3>
          <ul class="req-list">
            <li>KITAP application must be filed <strong>before</strong> KITAS expiry</li>
            <li>Extended absences from Indonesia may break the continuous stay requirement</li>
            <li>Document apostille may be required for foreign-issued documents</li>
            <li>Processing times vary by immigration office and case complexity</li>
            <li>KITAP does NOT automatically grant a right to work</li>
            <li>Legal advice strongly recommended before submission</li>
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

      <h2 class="section-title" style="text-align:center;">KITAP Application Procedure</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        The KITAP process involves multiple government offices and strict documentation
        requirements. Our lawyer manages the process end-to-end.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Legal Consultation</h4>
          <p>
            We assess your eligibility, review your KITAS history, and confirm
            the correct KITAP category for your situation.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Document Preparation</h4>
          <p>
            We provide a complete document checklist and guide you through obtaining
            all required certificates, apostilles, and sponsor letters.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Sponsor Letter &amp; Telex</h4>
          <p>
            Your sponsor company or Indonesian spouse submits an application for
            KITAP via the Immigration Telex system, initiating the official process.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Immigration Interview</h4>
          <p>
            In some cases, a personal interview at the local Immigration Office
            (Kantor Imigrasi) is required. We prepare you for this step.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>Document Submission</h4>
          <p>
            All documents are submitted to the Immigration Office for review.
            We track the progress and follow up with immigration officials on your behalf.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>KITAP Card Issued</h4>
          <p>
            Upon approval, your KITAP card is issued. We verify the card details
            and advise on next steps including Multiple Exit Re-Entry Permit (MERP).
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

      <h2 class="section-title" style="text-align:center;">Processing Time &amp; Key Information</h2>

      <div class="timeline-grid">

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">⏱</span>
          <h4>Processing Time</h4>
          <p>Typically <strong>4–8 weeks</strong> from document submission, depending on
             the Immigration Office workload and case complexity.</p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">📅</span>
          <h4>When to Apply</h4>
          <p>Apply <strong>at least 2–3 months before</strong> your current KITAS expires
             to avoid gaps in legal residency status.</p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🔄</span>
          <h4>KITAP Renewal</h4>
          <p>KITAP is valid for <strong>5 years</strong>. Renewal must be initiated
             at least 30 days before the expiry date to avoid penalty or lapse.</p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🛡</span>
          <h4>Legal Support Scope</h4>
          <p>Our lawyer handles eligibility review, document preparation, government
             liaison, submission tracking, and card verification.</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       KITAP vs KITAS COMPARISON
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-compare">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">KITAP vs KITAS — Key Differences</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Understanding the difference helps you choose the right residency path.
      </p>

      <div class="compare-table-wrap">
        <table class="compare-table">
          <thead>
            <tr>
              <th>Feature</th>
              <th>KITAS</th>
              <th class="compare-table__highlight">KITAP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Validity Period</td>
              <td>1 Year (renewable)</td>
              <td class="compare-table__highlight">5 Years (renewable)</td>
            </tr>
            <tr>
              <td>Annual Renewal</td>
              <td>Required every year</td>
              <td class="compare-table__highlight">Every 5 years only</td>
            </tr>
            <tr>
              <td>Re-entry Permit</td>
              <td>Separate MERP required</td>
              <td class="compare-table__highlight">Included in KITAP</td>
            </tr>
            <tr>
              <td>Residency Security</td>
              <td>Temporary / conditional</td>
              <td class="compare-table__highlight">Permanent (long-term)</td>
            </tr>
            <tr>
              <td>Processing Complexity</td>
              <td>Moderate</td>
              <td class="compare-table__highlight">Higher — requires KITAS history</td>
            </tr>
            <tr>
              <td>Minimum Stay Required</td>
              <td>No minimum stay history</td>
              <td class="compare-table__highlight">2–3 years of KITAS required</td>
            </tr>
            <tr>
              <td>Legal Advice Recommended</td>
              <td>Strongly recommended</td>
              <td class="compare-table__highlight">Essential</td>
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

      <h2 class="section-title" style="text-align:center;">How We Support Your KITAP Application</h2>

      <div class="grid-4" style="margin-top: 32px;">

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🔍</span>
          <h4>Eligibility Review</h4>
          <p>We assess your KITAS history, marital status, and circumstances to confirm
             your eligibility for KITAP before you apply.</p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">📂</span>
          <h4>Document Management</h4>
          <p>We provide a precise checklist and guide you through obtaining every
             required document, translation, and apostille.</p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🏛</span>
          <h4>Immigration Liaison</h4>
          <p>Our lawyer handles direct communication with the Immigration Office
             on your behalf, minimising errors and delays.</p>
        </div>

        <div class="support-item">
          <span class="support-item__icon" aria-hidden="true">🔔</span>
          <h4>Status Tracking</h4>
          <p>We monitor your application progress and notify you immediately at
             every stage, including any requests for additional documents.</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED VISA PAGES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">
      <h3 class="related-title">Related Visa Services</h3>
      <div class="related-links-grid">
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">📋</span>
          <div>
            <strong>KITAS Visa</strong>
            <span>Temporary Stay Permit</span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">💼</span>
          <div>
            <strong>Investor KITAS</strong>
            <span>For Foreign Business Owners</span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">🗓</span>
          <div>
            <strong>Visa Extension</strong>
            <span>Extend Before Expiry</span>
          </div>
        </a>
        <a class="related-link-card" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <span class="related-link-card__icon" aria-hidden="true">📑</span>
          <div>
            <strong>All Visa Services</strong>
            <span>Overview of Immigration Support</span>
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
      'Ready to Apply for KITAP?',
      'Book a consultation with our licensed immigration lawyer. We will review your eligibility, prepare your documents, and guide you through the complete KITAP application process in Indonesia.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
