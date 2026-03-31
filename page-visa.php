<?php
/**
 * FTS Law – Visa & Immigration Overview
 * Template: page-visa.php
 * URL: /visa
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero page-hero--visa">
    <div class="container">
      <span class="eyebrow">Immigration Legal Services</span>
      <h1>Visa &amp; Immigration Support in Indonesia</h1>
      <p class="page-hero__subtitle">
        Lawyer-supervised assistance for all types of Indonesian stay permits and visas —
        KITAS, KITAP, Investor Visa, and Visa Extensions.
      </p>
      <div class="hero-actions" style="justify-content:center; margin-top:24px;">
        <a class="btn btn-gold"
           href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
          Book Visa Consultation
        </a>
        <a class="btn btn-green"
           href="<?php echo esc_url( fts_wa_url() ); ?>"
           target="_blank"
           rel="noopener noreferrer">
          💬 WhatsApp Us
        </a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       TRUST BAR – VISA SPECIFIC
  ══════════════════════════════════════════════════════════════════ -->
  <div class="trust-bar">
    <div class="container trust-grid">
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">⚖️</span>
        <span>Lawyer-Supervised Service</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">📋</span>
        <span>KITAS &amp; KITAP Specialists</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🌍</span>
        <span>Foreign National Clients</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🔒</span>
        <span>Confidential Legal Process</span>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════
       INTRO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container">
      <div class="intro-two-col">
        <div>
          <h2 class="section-title">Indonesian Visa &amp; Immigration: What You Need to Know</h2>
          <p>
            Navigating Indonesia's immigration system can be complex for foreign nationals.
            From choosing the right type of visa to ensuring your documents meet the
            requirements of the Directorate General of Immigration (Imigrasi), having proper
            legal guidance can save significant time, cost, and risk.
          </p>
          <p>
            Our office provides lawyer-supervised immigration legal services — not visa agent
            services. This means your case is handled by a licensed Indonesian lawyer who
            understands the full legal implications of each step, from application to renewal
            or permanent stay.
          </p>
          <p>
            We support foreign investors, expatriate workers, retirees, and spouses of
            Indonesian citizens. All service types are listed below — select the one most
            relevant to your situation.
          </p>
        </div>
        <div class="info-sidebar">
          <div class="info-box">
            <h4>⚠️ Important: Lawyer vs. Visa Agent</h4>
            <p>
              A licensed lawyer provides legal protection and professional accountability
              for your immigration process. A visa agent does not. We strongly recommend
              working with a registered advocate for any stay permit matter in Indonesia.
            </p>
          </div>
          <div class="info-box info-box--soft">
            <h4>🌐 We Serve Clients From</h4>
            <p>
              Japan · South Korea · China · Singapore · Australia · USA · UK · Netherlands ·
              Germany · India · and 40+ other countries.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       VISA TYPE CARDS – MAIN 4
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-visa-types">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Our Visa &amp; Immigration Services</h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        Select the visa type that matches your situation for detailed information,
        requirements, and our legal support scope.
      </p>

      <div class="grid-4 visa-cards-grid" style="margin-top: 36px;">

        <!-- KITAS -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">📋</div>
          <span class="mini-label">Temporary Stay Permit</span>
          <h3>KITAS</h3>
          <p class="visa-card-desc">
            The Kartu Izin Tinggal Terbatas (KITAS) is Indonesia's temporary stay permit
            for foreign nationals working, investing, or living in Indonesia.
          </p>
          <ul class="service-list">
            <li>Investor KITAS (PT PMA shareholders)</li>
            <li>Working / Employee KITAS</li>
            <li>Spouse / Family KITAS</li>
            <li>Retirement KITAS</li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ 2–6 weeks processing</span>
            <span class="visa-meta-badge">📅 Valid 1–2 years, renewable</span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">
            KITAS Details &rarr;
          </a>
        </article>

        <!-- KITAP -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">🏠</div>
          <span class="mini-label">Permanent Stay Permit</span>
          <h3>KITAP</h3>
          <p class="visa-card-desc">
            The Kartu Izin Tinggal Tetap (KITAP) is Indonesia's permanent stay permit,
            available to qualifying foreign nationals after a period of holding a KITAS.
          </p>
          <ul class="service-list">
            <li>Eligibility review (KITAS history)</li>
            <li>Document preparation &amp; submission</li>
            <li>Immigration office coordination</li>
            <li>Permanent stay legal guidance</li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ 4–8 weeks processing</span>
            <span class="visa-meta-badge">📅 Valid 5 years, renewable</span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">
            KITAP Details &rarr;
          </a>
        </article>

        <!-- Investor Visa -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">💼</div>
          <span class="mini-label">For Business Owners</span>
          <h3>Investor KITAS</h3>
          <p class="visa-card-desc">
            The Investor KITAS is designed specifically for foreign nationals who own
            shares in a PT PMA (foreign-owned company) registered in Indonesia.
          </p>
          <ul class="service-list">
            <li>PT PMA shareholder verification</li>
            <li>BKPM / OSS coordination</li>
            <li>Investor KITAS application</li>
            <li>Company &amp; visa synchronisation</li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ 3–6 weeks processing</span>
            <span class="visa-meta-badge">📅 Linked to PT PMA validity</span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
            Investor Visa Details &rarr;
          </a>
        </article>

        <!-- Visa Extension -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">🗓</div>
          <span class="mini-label">Stay Permit Renewal</span>
          <h3>Visa Extension</h3>
          <p class="visa-card-desc">
            Legal support for renewing or extending your current visa or stay permit
            before it expires — avoiding fines, overstay risk, or deportation.
          </p>
          <ul class="service-list">
            <li>Extension timeline planning</li>
            <li>Document checklist &amp; review</li>
            <li>Overstay risk management</li>
            <li>Emergency extension support</li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⚠️ Apply 30–60 days before expiry</span>
            <span class="visa-meta-badge">💰 Overstay fines apply</span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
            Extension Details &rarr;
          </a>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW THE IMMIGRATION PROCESS WORKS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">How Our Visa Legal Support Works</h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        A structured, lawyer-supervised process from first inquiry to approved permit.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Initial Visa Consultation</h4>
          <p>
            Tell us about your situation — nationality, purpose of stay, employment or
            business status. We identify the right visa type and requirements for you.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Document Review</h4>
          <p>
            We review your existing documents, identify any gaps, and provide a
            complete checklist of what is needed for your specific visa application.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Application &amp; Submission</h4>
          <p>
            Our lawyer supervises the preparation and submission of your visa application
            to the Directorate General of Immigration (Ditjen Imigrasi).
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Follow-up &amp; Delivery</h4>
          <p>
            We track your application status, handle any follow-up requests from the
            immigration office, and coordinate delivery of your permit card.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMMON QUESTIONS / FAQ
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-faq">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Frequently Asked Questions</h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        Common questions from foreign nationals about Indonesia's visa system.
      </p>

      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question">What is the difference between KITAS and KITAP?</summary>
          <div class="faq-answer">
            <p>
              <strong>KITAS</strong> (Kartu Izin Tinggal Terbatas) is a temporary stay permit,
              typically valid for 1–2 years and renewable. <strong>KITAP</strong>
              (Kartu Izin Tinggal Tetap) is a permanent stay permit, valid for 5 years and
              renewable, available after a qualifying period of holding a KITAS. KITAP holders
              have more stable residency rights in Indonesia.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">Do I need an Investor KITAS to run my PT PMA?</summary>
          <div class="faq-answer">
            <p>
              Not necessarily. You can operate a PT PMA while residing abroad or on a valid
              business visa. However, if you wish to reside in Indonesia as a shareholder or
              director of your PT PMA, an <strong>Investor KITAS</strong> is required. This
              allows you to legally live and manage your business in Indonesia.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">How long does it take to get a KITAS?</summary>
          <div class="faq-answer">
            <p>
              Processing time varies depending on the type of KITAS and whether all
              documents are complete. Typically, KITAS processing takes <strong>2–6 weeks</strong>
              from the time of submission. Working with a lawyer ensures documents are correctly
              prepared and any immigration office queries are promptly addressed.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">What happens if my visa or stay permit expires?</summary>
          <div class="faq-answer">
            <p>
              Overstaying your visa or stay permit in Indonesia carries serious consequences,
              including <strong>daily fines</strong>, possible detention by immigration
              authorities, and potential <strong>deportation</strong>. In serious cases, you
              may be blacklisted from re-entering Indonesia. We strongly recommend applying
              for extension or renewal at least 30–60 days before your permit expires.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">Can I work in Indonesia on a tourist visa?</summary>
          <div class="faq-answer">
            <p>
              No. Working in Indonesia on a tourist visa (Visa on Arrival or B211A) is
              illegal and can result in deportation and a re-entry ban. Foreign nationals
              who intend to work, conduct business, or invest actively in Indonesia must
              obtain the appropriate stay permit — typically a Working KITAS or Investor KITAS.
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question">Why should I use a lawyer instead of a visa agent?</summary>
          <div class="faq-answer">
            <p>
              A licensed lawyer is legally accountable for the services they provide and
              must adhere to the Indonesian Bar Association (PERADI) code of conduct. A visa
              agent has no such accountability. If something goes wrong with your visa
              application or your legal rights are affected, a lawyer can take proper legal
              steps to protect you — a visa agent cannot.
            </p>
          </div>
        </details>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       INTERNAL LINKS – RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Related Legal Services</h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4>PT PMA Setup</h4>
          <p>Set up a foreign-owned company in Indonesia and get your Investor KITAS at the same time.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4>Legal Risk Review</h4>
          <p>Understand the legal risks of your current visa or residency situation before they become problems.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url( '/guide' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">📘</span>
          <h4>Free Legal Guide</h4>
          <p>Download our free guide covering visa basics, foreign investment rules, and common legal mistakes.</p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      'Not Sure Which Visa You Need?',
      'Book a consultation with our lawyer. We will review your situation and recommend the correct visa type, documents, and legal steps for your case in Indonesia.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
