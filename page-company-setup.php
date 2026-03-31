<?php
/**
 * FTS Law – Company Setup Indonesia Overview
 * Template for: /company-setup
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
      <span class="eyebrow">Business Setup in Indonesia</span>
      <h1>Company Setup for Foreign Investors in Indonesia</h1>
      <p class="page-hero__subtitle">
        Legal guidance for foreign nationals setting up a business in Indonesia —
        from structure planning to government registration, handled by a licensed lawyer.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            home_url("/consultation"),
        ); ?>">Book Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow">Overview</span>
        <h2 class="section-title">Can Foreigners Own a Business in Indonesia?</h2>
        <p>
          Yes — foreign nationals can legally own and operate a business in Indonesia,
          but the rules governing foreign ownership are specific and regulated by the
          Indonesian Investment Coordinating Board (BKPM) and the Indonesian Investment
          Law (Law No. 25 of 2007).
        </p>
        <p>
          The primary vehicle for foreign business ownership in Indonesia is the
          <strong>PT PMA</strong> (Perseroan Terbatas Penanaman Modal Asing) — a
          Foreign Investment Limited Liability Company. A PT PMA allows foreign nationals
          to hold shares in an Indonesian company, subject to sector-specific ownership limits
          set by the government's Positive Investment List.
        </p>
        <p>
          Setting up a company in Indonesia involves multiple government agencies, legal
          documents, and registration processes. Having a licensed lawyer manage this process
          ensures that your company structure is legally sound, your investment is protected,
          and your business can operate without compliance issues from day one.
        </p>
        <div class="info-box">
          <strong>💡 Important:</strong> Not all business sectors are open to 100% foreign
          ownership. Some sectors are restricted or require Indonesian co-ownership. We assess
          your intended business activity during the initial consultation to determine the
          correct ownership structure for your specific case.
        </div>
      </div>

      <div class="setup-sidebar">

        <div class="card card--highlight">
          <h3 class="card__highlight-title">Company Setup at a Glance</h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label">Main Vehicle</span>
              <span class="key-facts-list__value">PT PMA (Foreign Investment Company)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Min. Investment</span>
              <span class="key-facts-list__value">IDR 10 Billion (investment plan)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Min. Paid-Up Capital</span>
              <span class="key-facts-list__value">IDR 2.5 Billion</span>
            </li>
            <li>
              <span class="key-facts-list__label">Ownership</span>
              <span class="key-facts-list__value">Up to 100% (sector dependent)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Registration Body</span>
              <span class="key-facts-list__value">OSS System / BKPM</span>
            </li>
            <li>
              <span class="key-facts-list__label">Estimated Timeline</span>
              <span class="key-facts-list__value">4–8 weeks (full setup)</span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url(home_url("/pt-pma")); ?>">
            PT PMA Full Details &rarr;
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       LEGAL STRUCTURE OPTIONS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-structures">
    <div class="container">

      <h2 class="section-title">Business Structure Options for Foreign Investors</h2>
      <p class="section-subtitle">
        Understanding the available legal entity types helps you choose the right structure
        before committing to registration. We advise on the most appropriate structure
        for your business activity and investment goals.
      </p>

      <div class="grid-3">

        <article class="card card--structure card--structure-recommended">
          <div class="structure-badge">Most Common for Foreigners</div>
          <span class="mini-label">Foreign Ownership</span>
          <h3>PT PMA</h3>
          <p class="structure-full-name">Perseroan Terbatas Penanaman Modal Asing</p>
          <p>
            The standard legal vehicle for foreign investment in Indonesia. Allows foreign
            nationals to hold shares and operate a business across most sectors, subject to
            the Positive Investment List.
          </p>
          <ul class="service-list">
            <li>Foreign ownership allowed (up to 100% in open sectors)</li>
            <li>Can hire foreign workers (with proper permits)</li>
            <li>Eligible for Investor KITAS sponsorship</li>
            <li>Full legal entity — can sign contracts, own assets</li>
            <li>Subject to BKPM / OSS registration</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(
              home_url("/pt-pma"),
          ); ?>">
            PT PMA Setup Details &rarr;
          </a>
        </article>

        <article class="card card--structure">
          <span class="mini-label">Domestic Entity</span>
          <h3>PT (Domestic Company)</h3>
          <p class="structure-full-name">Perseroan Terbatas (100% Indonesian Owned)</p>
          <p>
            A domestic limited liability company, owned entirely by Indonesian citizens or
            entities. Foreign nationals cannot legally hold shares in a PT directly.
            Using a nominee arrangement is illegal and carries serious legal risks.
          </p>
          <ul class="service-list">
            <li>100% Indonesian ownership required</li>
            <li>Simpler registration requirements than PT PMA</li>
            <li>Lower minimum capital requirements</li>
            <li><strong>Not suitable for foreign ownership</strong></li>
            <li>Nominee structures are illegal</li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <strong>⚠️ Warning:</strong> Foreigners using nominee shareholders in a PT
            risk losing their company. See our
            <a href="<?php echo esc_url(
                home_url("/legal-risk"),
            ); ?>">Legal Risk page</a>.
          </div>
        </article>

        <article class="card card--structure">
          <span class="mini-label">Representative Office</span>
          <h3>KPPA / KP3A</h3>
          <p class="structure-full-name">Kantor Perwakilan Perusahaan Asing</p>
          <p>
            A representative office of a foreign company in Indonesia. Allowed only for
            marketing and liaison activities — <strong>cannot conduct commercial transactions
            or generate revenue</strong> in Indonesia.
          </p>
          <ul class="service-list">
            <li>No revenue-generating activities permitted</li>
            <li>Marketing and research only</li>
            <li>Lower setup requirements than PT PMA</li>
            <li>Suitable for market entry research phase</li>
            <li>Cannot sponsor Investor KITAS</li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>">
            Ask About KPPA &rarr;
          </a>
        </article>

      </div>

      <div class="structure-recommendation">
        <div class="structure-recommendation__inner">
          <span class="structure-recommendation__icon" aria-hidden="true">✅</span>
          <div>
            <strong>Our Recommendation:</strong> For most foreign investors who want to
            actively operate, manage, or earn revenue from a business in Indonesia,
            a <strong>PT PMA is the correct legal structure</strong>. It provides the
            strongest legal protection, full commercial rights, and eligibility for
            an Investor KITAS.
          </div>
        </div>
        <a class="btn btn-gold" href="<?php echo esc_url(
            home_url("/pt-pma"),
        ); ?>">
          PT PMA Setup Guide &rarr;
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FOREIGN OWNERSHIP BASICS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-ownership">
    <div class="container">

      <h2 class="section-title">Foreign Ownership Rules in Indonesia</h2>
      <p class="section-subtitle">
        Foreign ownership is regulated by the Positive Investment List (Daftar Prioritas
        Investasi) issued by BKPM. Understanding these rules is essential before choosing
        a business sector.
      </p>

      <div class="grid-4">

        <div class="ownership-card ownership-card--open">
          <span class="ownership-card__icon" aria-hidden="true">✅</span>
          <h4>100% Open Sectors</h4>
          <p>
            Some business sectors allow 100% foreign ownership through a PT PMA.
            Examples include certain technology, tourism, industrial, and service sectors.
          </p>
          <a href="<?php echo esc_url(
              home_url("/foreign-investment"),
          ); ?>" class="ownership-card__link">
            View Investment Rules &rarr;
          </a>
        </div>

        <div class="ownership-card ownership-card--partial">
          <span class="ownership-card__icon" aria-hidden="true">⚡</span>
          <h4>Partially Open Sectors</h4>
          <p>
            Some sectors allow foreign ownership up to a specified percentage
            (e.g., 49%, 67%, or 95%), requiring Indonesian co-ownership for the remainder.
          </p>
          <a href="<?php echo esc_url(
              home_url("/foreign-investment"),
          ); ?>" class="ownership-card__link">
            Check Your Sector &rarr;
          </a>
        </div>

        <div class="ownership-card ownership-card--restricted">
          <span class="ownership-card__icon" aria-hidden="true">⛔</span>
          <h4>Restricted / Closed Sectors</h4>
          <p>
            Certain sectors are closed to foreign ownership entirely or are reserved
            for Indonesian nationals only. Examples include certain media, defence,
            and cultural sectors.
          </p>
          <a href="<?php echo esc_url(
              home_url("/foreign-investment"),
          ); ?>" class="ownership-card__link">
            View Restrictions &rarr;
          </a>
        </div>

        <div class="ownership-card ownership-card--advice">
          <span class="ownership-card__icon" aria-hidden="true">⚖️</span>
          <h4>Get Legal Advice First</h4>
          <p>
            Before committing to a business structure, our lawyer reviews your intended
            activity against the current Positive Investment List to confirm your
            ownership options.
          </p>
          <a href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>" class="ownership-card__link">
            Book Consultation &rarr;
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMPANY SETUP PROCESS OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">General Company Setup Process in Indonesia</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A simplified overview of the steps involved in setting up a PT PMA in Indonesia.
        Full details and a step-by-step guide are on our PT PMA Setup page.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Legal Consultation</h4>
          <p>
            Determine business activity, ownership structure, share allocation,
            and confirm sector eligibility under the Positive Investment List.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Company Name Reservation</h4>
          <p>
            Check and reserve the company name through the Ministry of Law and Human Rights
            (Kemenkumham) AHU online system.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Deed of Establishment</h4>
          <p>
            Prepare and sign the Articles of Association (Akta Pendirian) before a
            licensed Indonesian notary. This document defines the company structure,
            shareholders, directors, and commissioners.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Ministry Approval</h4>
          <p>
            Submit the deed for approval and ratification by the Ministry of Law and
            Human Rights. This creates the company as a legal entity.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>OSS / NIB Registration</h4>
          <p>
            Register the company through the Online Single Submission (OSS) system
            to obtain the NIB (Business Identity Number) and business licensing.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>NPWP &amp; Tax Registration</h4>
          <p>
            Register for a company Tax ID (NPWP) with the Directorate General of Taxation.
            Required before any commercial activity begins.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">7</div>
          <h4>Business Licence &amp; Sector Permit</h4>
          <p>
            Obtain any sector-specific business licences required by the relevant
            government ministry for your business activity.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">8</div>
          <h4>Company Bank Account</h4>
          <p>
            Open an Indonesian corporate bank account and fulfil the minimum paid-up
            capital injection requirement. We assist with bank introduction and
            capital injection documentation.
          </p>
        </div>

      </div>

      <div style="text-align:center;margin-top:32px;">
        <a class="btn btn-gold" href="<?php echo esc_url(
            home_url("/pt-pma"),
        ); ?>">
          See Full PT PMA Setup Guide &rarr;
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHY LEGAL SUPPORT IS ESSENTIAL
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-why-legal">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Why Legal Support Is Essential for Company Setup</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Setting up a PT PMA without legal guidance exposes foreign investors to significant
        legal and financial risks.
      </p>

      <div class="grid-4">

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">📜</span>
          <h4>Correct Legal Structure</h4>
          <p>
            Choosing the wrong ownership structure, share allocation, or director arrangement
            can make your company legally invalid or result in future disputes.
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">⚠️</span>
          <h4>Nominee Shareholder Risk</h4>
          <p>
            Using Indonesian nominees to bypass foreign ownership limits is illegal.
            Foreign investors who do this risk losing their entire company with no
            legal recourse.
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">🏛</span>
          <h4>Government Compliance</h4>
          <p>
            PT PMA companies face specific reporting obligations to BKPM, OSS, and tax
            authorities. Non-compliance results in penalties and may jeopardise your
            business licence.
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">🔒</span>
          <h4>Investor Protection</h4>
          <p>
            Properly drafted shareholder agreements, director terms, and corporate
            governance documents protect your investment from internal disputes
            and director misconduct.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PT PMA FEATURE CALLOUT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-pt-pma-callout">
    <div class="container">
      <div class="guide-promo-band">
        <div class="guide-promo-band__copy">
          <span class="eyebrow">Detailed Guide</span>
          <h2>PT PMA Setup – Step-by-Step</h2>
          <p>
            Our PT PMA Setup page provides a complete guide to setting up a foreign-owned
            company in Indonesia — including investment requirements, government registration
            steps, licensing, capital injection, and the Investor KITAS application process.
          </p>
          <div class="hero-actions" style="margin-top:20px;">
            <a class="btn btn-gold" href="<?php echo esc_url(
                home_url("/pt-pma"),
            ); ?>">
              PT PMA Setup Full Guide
            </a>
            <a class="btn btn-outline" href="<?php echo esc_url(
                home_url("/consultation"),
            ); ?>">
              Book Consultation
            </a>
          </div>
        </div>
        <div class="guide-promo-band__pills">
          <span class="pill">PT PMA Registration</span>
          <span class="pill">OSS / NIB Licensing</span>
          <span class="pill">Shareholder Agreement</span>
          <span class="pill">Director Setup</span>
          <span class="pill">Capital Injection</span>
          <span class="pill">Investor KITAS</span>
          <span class="pill">BKPM Reporting</span>
          <span class="pill">Tax Registration</span>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Related Legal Services</h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url(
            home_url("/pt-pma"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📜</span>
          <h4>PT PMA Setup</h4>
          <p>Full step-by-step guide and legal support for setting up a foreign-owned company in Indonesia.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/foreign-investment"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">💹</span>
          <h4>Foreign Investment Law</h4>
          <p>Understand the legal framework, ownership limits, and compliance requirements for foreign investors.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/investor-visa"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4>Investor KITAS</h4>
          <p>Obtain your stay permit as a foreign shareholder in a PT PMA company in Indonesia.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/contract-drafting"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4>Contract &amp; Agreement Drafting</h4>
          <p>Shareholder agreements, director agreements, and business contracts for your PT PMA.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/legal-risk"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4>Legal Risk Consultation</h4>
          <p>Identify and prevent legal risks in your company structure before they become costly problems.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/business-legal"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4>Business Legal Support</h4>
          <p>Ongoing legal advisory, compliance monitoring, and corporate governance support.</p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      "Ready to Set Up Your Business in Indonesia?",
      "Book a consultation with our licensed Indonesian lawyer to discuss your business plan, confirm your ownership structure, and get a step-by-step setup roadmap tailored to your investment goals.",
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
