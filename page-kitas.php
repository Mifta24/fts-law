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
      <span class="eyebrow">Visa &amp; Immigration</span>
      <h1>KITAS – Temporary Stay Permit</h1>
      <p class="page-hero__subtitle">
        Legal support for foreign nationals applying for a KITAS (Kartu Izin Tinggal Terbatas)
        in Indonesia — handled by a licensed Indonesian lawyer.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">Book Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
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
        <span class="eyebrow">Overview</span>
        <h2 class="section-title">What is KITAS?</h2>
        <p>
          <strong>KITAS</strong> (Kartu Izin Tinggal Terbatas) is a Temporary Stay Permit issued
          by the Indonesian Immigration Authority to foreign nationals who wish to reside in
          Indonesia for an extended period — typically for work, investment, or family
          reasons.
        </p>
        <p>
          A KITAS is not a visa, but a stay permit that is issued after entering Indonesia
          on the appropriate visa. It allows the holder to live legally in Indonesia for
          a specified period (usually 6 or 12 months) and is renewable annually.
        </p>
        <p>
          Having a valid KITAS is a legal requirement for any foreign national residing in
          Indonesia beyond a tourist or business visit. Overstaying without a valid permit
          can result in fines, detention, and deportation.
        </p>

        <div class="info-box">
          <strong>⚠️ Important:</strong> A KITAS must be applied for through a licensed
          Indonesian sponsor — either a company (employer/PT PMA), a government body,
          or (for certain categories) an individual sponsor. Our office provides full
          legal support through the entire process.
        </div>
      </div>

      <div class="what-is__aside">
        <div class="card card--highlight">
          <h3 class="card__highlight-title">KITAS at a Glance</h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label">Full Name</span>
              <span class="key-facts-list__value">Kartu Izin Tinggal Terbatas</span>
            </li>
            <li>
              <span class="key-facts-list__label">Issued By</span>
              <span class="key-facts-list__value">Indonesian Immigration Authority (Imigrasi)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Validity</span>
              <span class="key-facts-list__value">6 or 12 months (renewable)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Max Stay</span>
              <span class="key-facts-list__value">Up to 5 years (renewed annually)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Multiple Entry</span>
              <span class="key-facts-list__value">Yes – with Multiple Re-Entry Permit</span>
            </li>
            <li>
              <span class="key-facts-list__label">Work Permit</span>
              <span class="key-facts-list__value">Required separately for working</span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
            Ask About Your KITAS
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

      <h2 class="section-title">Types of KITAS We Handle</h2>
      <p class="section-subtitle">
        Different KITAS categories apply depending on your purpose of stay in Indonesia.
        Our office assists with the following types:
      </p>

      <div class="grid-4">

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">💼</span>
          <h3>Investor KITAS</h3>
          <p>
            For foreign nationals who own shares in a PT&nbsp;PMA company registered
            in Indonesia. Requires a valid investment position through BKPM/OSS.
          </p>
          <a href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>" class="type-card__link">
            Investor KITAS Details &rarr;
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">🏢</span>
          <h3>Working KITAS</h3>
          <p>
            For foreign workers employed by an Indonesian company. Requires a Work
            Permit (IMTA/RPTKA) approved by the Ministry of Manpower before application.
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            Ask About Working KITAS &rarr;
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">❤️</span>
          <h3>Spouse / Family KITAS</h3>
          <p>
            For foreign nationals married to an Indonesian citizen or accompanying
            a KITAS holder as a dependent. Different documentation is required.
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            Ask About Family KITAS &rarr;
          </a>
        </div>

        <div class="type-card">
          <span class="type-card__icon" aria-hidden="true">🎓</span>
          <h3>Student / Social KITAS</h3>
          <p>
            For foreign nationals studying, conducting research, or on a social or
            cultural mission in Indonesia. Requires an appropriate sponsor institution.
          </p>
          <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>" class="type-card__link">
            Ask About Student KITAS &rarr;
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

      <h2 class="section-title">KITAS Requirements</h2>
      <p class="section-subtitle">
        The following documents are generally required for a KITAS application.
        Exact requirements may vary by KITAS type and applicant nationality.
        We review your full document list during consultation.
      </p>

      <div class="grid-3">

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📋</span> Applicant Documents
          </h3>
          <ul class="req-list">
            <li>Valid passport (min. 18 months validity)</li>
            <li>Recent passport-size photographs (4×6 cm)</li>
            <li>VITAS (Limited Stay Visa) approval letter</li>
            <li>Health certificate (from recognised clinic)</li>
            <li>Police clearance certificate (from home country)</li>
            <li>Marriage certificate (if applicable – translated)</li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">🏢</span> Sponsor / Company Documents
          </h3>
          <ul class="req-list">
            <li>Sponsor's deed of establishment (Akta Pendirian)</li>
            <li>Company registration (NIB / TDP)</li>
            <li>NPWP (Tax ID) of sponsoring company</li>
            <li>Sponsor letter / guarantee letter</li>
            <li>For Investor KITAS: OSS / BKPM investor registration</li>
            <li>For Working KITAS: IMTA / RPTKA approval</li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📝</span> Forms &amp; Applications
          </h3>
          <ul class="req-list">
            <li>Completed Imigrasi application form</li>
            <li>Signed sponsor guarantee letter</li>
            <li>Completed VITAS/KITAS application (online via sistem imigrasi)</li>
            <li>Administrative fee payment receipt</li>
            <li>LKPM report (for Investor KITAS – if applicable)</li>
            <li>Biometric data submission at immigration office</li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top: 24px;">
        <strong>📌 Note:</strong> Document requirements are subject to change by the Indonesian
        Immigration Authority. Our office ensures that your application is prepared with the
        most up-to-date requirements at the time of submission.
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       APPLICATION PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title">KITAS Application Process</h2>
      <p class="section-subtitle">
        The KITAS process involves multiple government agencies. Our legal team
        coordinates the entire process on your behalf.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Legal Consultation</h4>
          <p>
            We assess your eligibility, identify the correct KITAS type, and review
            your documents before any application is submitted.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>VITAS Application</h4>
          <p>
            We prepare and submit the Limited Stay Visa (VITAS) application to
            the Indonesian Embassy in your country or through the sponsor in Indonesia.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Entry to Indonesia</h4>
          <p>
            Once VITAS is approved, you enter Indonesia on the VITAS. The KITAS
            conversion process begins immediately after arrival.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Biometric &amp; Immigration</h4>
          <p>
            We accompany or coordinate your visit to the Immigration Office for
            biometric data capture and KITAS card issuance.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>KITAS Card Issued</h4>
          <p>
            Your KITAS card is issued and valid for the approved period. We provide
            a renewal reminder before expiry.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>Annual Renewal Support</h4>
          <p>
            We manage your KITAS renewal process each year and advise on upgrading
            to a KITAP after 5 years of continuous stay.
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

      <h2 class="section-title">Processing Timeline</h2>
      <p class="section-subtitle">
        Estimated processing times for each stage of the KITAS application.
        Times may vary based on immigration office workload and applicant nationality.
      </p>

      <div class="timeline-grid">

        <div class="timeline-item">
          <div class="timeline-item__period">1 – 2 weeks</div>
          <h4>VITAS Application</h4>
          <p>Preparation and submission of the Limited Stay Visa application to the
             Indonesian Embassy or via sponsor in Indonesia.</p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period">2 – 4 weeks</div>
          <h4>VITAS Approval</h4>
          <p>Processing time at the Indonesian Embassy / Directorate General of
             Immigration varies by country and KITAS type.</p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period">7 – 14 days</div>
          <h4>KITAS Conversion</h4>
          <p>After entry to Indonesia, the KITAS conversion at the local Immigration
             Office typically takes 7–14 working days.</p>
        </div>

        <div class="timeline-item">
          <div class="timeline-item__period">1 – 3 days</div>
          <h4>Card Collection</h4>
          <p>KITAS card collection at the Immigration Office after
             processing is completed and fees are paid.</p>
        </div>

      </div>

      <div class="info-box" style="margin-top: 28px;">
        <strong>⏱ Total Estimated Time:</strong> 4 – 8 weeks from initial consultation
        to KITAS card receipt. Investor KITAS timelines may be longer due to
        OSS/BKPM registration requirements.
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       OUR LEGAL SUPPORT SCOPE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-scope">
    <div class="container">

      <h2 class="section-title">What Our KITAS Legal Support Includes</h2>
      <p class="section-subtitle">
        We provide end-to-end legal support — not just document assistance.
        All services are supervised by our licensed Indonesian lawyer.
      </p>

      <div class="grid-4">

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔍</span>
          <h4>Eligibility Assessment</h4>
          <p>Review of your personal situation, nationality, and purpose of stay to
             determine the correct KITAS category.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📄</span>
          <h4>Document Review &amp; Preparation</h4>
          <p>Full review of all required documents. We identify gaps and advise on
             how to obtain missing documents from your home country.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🏛</span>
          <h4>Government Agency Coordination</h4>
          <p>We liaise with the Immigration Office, Ministry of Manpower, BKPM/OSS,
             and notary offices on your behalf.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">⚠️</span>
          <h4>Overstay Risk Management</h4>
          <p>We track your visa and KITAS validity dates and alert you well in advance
             to prevent overstay fines or legal complications.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔄</span>
          <h4>Renewal Management</h4>
          <p>Annual KITAS renewal coordination. We remind you of renewal deadlines and
             manage the full renewal process.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">⬆️</span>
          <h4>KITAP Upgrade Advice</h4>
          <p>After 5 years of continuous KITAS, we advise on upgrading to a KITAP
             (Permanent Stay Permit) for long-term residents.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🌍</span>
          <h4>Multiple Re-Entry Permit</h4>
          <p>Assistance with obtaining the Multiple Re-Entry Permit (MERP) so you can
             travel in and out of Indonesia freely during your KITAS validity.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">💬</span>
          <h4>English Communication</h4>
          <p>All communications, document explanations, and legal advice provided in
             clear English for our international clients.</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FAQ
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-faq">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Frequently Asked Questions</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Common questions from foreign nationals about KITAS in Indonesia.
      </p>

      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-item__question">
            Can I apply for a KITAS without a sponsor company?
          </summary>
          <div class="faq-item__answer">
            <p>
              In most cases, a KITAS requires an Indonesian sponsor — either a company,
              government body, or individual (for family KITAS). An Investor KITAS requires
              a PT PMA company where the applicant holds shares. If you do not yet have a
              company, we can assist with PT PMA setup as part of the process.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            What is the difference between KITAS and KITAP?
          </summary>
          <div class="faq-item__answer">
            <p>
              A KITAS is a Temporary Stay Permit (renewable annually, up to 5 years).
              A KITAP is a Permanent Stay Permit, available to foreign nationals who have
              held a KITAS for 5 consecutive years. KITAP is valid for 5 years and is
              renewable, making it more convenient for long-term residents.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            Can I work in Indonesia with a KITAS?
          </summary>
          <div class="faq-item__answer">
            <p>
              A KITAS alone does not automatically authorise you to work in Indonesia.
              A Working KITAS requires a valid Work Permit (IMTA) and a Manpower Utilisation
              Plan (RPTKA) approved by the Ministry of Manpower. Investor KITAS holders
              may participate in company management but are subject to specific restrictions.
              We advise on the correct permit type for your situation.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            What happens if my KITAS expires?
          </summary>
          <div class="faq-item__answer">
            <p>
              If your KITAS expires and you remain in Indonesia, you are subject to
              overstay fines of IDR 1,000,000 per day. Extended overstay can result in
              detention, deportation, and a ban from re-entering Indonesia. We provide
              renewal reminders and emergency extension support to prevent this situation.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            How much does a KITAS application cost?
          </summary>
          <div class="faq-item__answer">
            <p>
              KITAS costs include official government fees (set by the Indonesian
              Immigration Authority) and our legal service fee. Total costs vary depending
              on the KITAS type, your nationality, and whether company registration is also
              required. Please contact us for a detailed cost breakdown based on your situation.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-item__question">
            Can I apply for a KITAS while already in Indonesia?
          </summary>
          <div class="faq-item__answer">
            <p>
              In most cases, a KITAS requires a VITAS (Limited Stay Visa) which must be
              obtained from an Indonesian Embassy abroad before entry. However, in certain
              circumstances, particularly for Investor KITAS, there may be pathways to
              apply from within Indonesia. We assess your specific situation during the
              initial consultation.
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
      <h2 class="section-title" style="text-align:center;">Related Services</h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏠</span>
          <h4>KITAP – Permanent Stay</h4>
          <p>Upgrade from KITAS to a Permanent Stay Permit after 5 years.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">💼</span>
          <h4>Investor KITAS</h4>
          <p>KITAS for foreign investors holding shares in a PT PMA company.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🗓</span>
          <h4>Visa Extension</h4>
          <p>Extend your stay permit before it expires — avoid overstay fines.</p>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      'Ready to Apply for Your KITAS?',
      'Speak with our licensed lawyer to assess your KITAS eligibility, review your documents, and start the application process with full legal support.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
