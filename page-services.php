<?php
/**
 * FTS Law – Legal Services Overview
 * Template: page-services.php
 * URL: /services
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
      <span class="eyebrow">What We Do</span>
      <h1>Our Legal Services</h1>
      <p class="page-hero__subtitle">
        Comprehensive, lawyer-supervised legal services for foreign investors,
        entrepreneurs, and expatriates in Indonesia.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">Book Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>

  <!-- ═══════════════════════════════════════════════════════════════
       INTRO STATEMENT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container">
      <div class="intro-band">
        <div class="intro-band__text">
          <h2 class="section-title">Full-Spectrum Legal Support for Foreigners in Indonesia</h2>
          <p>
            Whether you are setting up a company, applying for a visa, reviewing a contract,
            or seeking ongoing legal protection for your business — our licensed Indonesian lawyer
            provides direct, transparent, and practical legal support tailored to international clients.
          </p>
          <p>
            We do not operate as a visa agent. All services are supervised by a licensed advocate
            registered with the Indonesian Bar Association (PERADI), ensuring that your legal
            interests are properly protected.
          </p>
        </div>
        <div class="intro-band__trust">
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">⚖️</span>
            <div>
              <strong>Licensed Advocate</strong>
              <p>All services handled or supervised by a registered Indonesian lawyer.</p>
            </div>
          </div>
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">🌐</span>
            <div>
              <strong>English-Language Support</strong>
              <p>Full service in English for foreign national clients.</p>
            </div>
          </div>
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">🔒</span>
            <div>
              <strong>Client Confidentiality</strong>
              <p>All matters handled with full legal professional confidentiality.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICE CATEGORY 1 – VISA & IMMIGRATION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-service-category" id="visa-immigration">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label">Category 01</span>
        <h2 class="section-title">Visa &amp; Immigration Legal Services</h2>
        <p class="section-subtitle">
          Legal assistance for all types of Indonesian stay permits — from initial
          application to renewal, with overstay risk management.
        </p>
      </div>

      <div class="grid-4">

        <article class="card card--service-detail">
          <span class="mini-label">KITAS</span>
          <h3>KITAS – Temporary Stay Permit</h3>
          <p>Legal support for Investor KITAS, Working KITAS, and Spouse KITAS applications.
             Includes document review, submission support, and sponsor coordination.</p>
          <ul class="service-list">
            <li>Document preparation &amp; review</li>
            <li>KITAS application support</li>
            <li>Sponsor company coordination</li>
            <li>Follow-up &amp; tracking</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">KITAS Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">KITAP</span>
          <h3>KITAP – Permanent Stay Permit</h3>
          <p>Legal guidance for foreign nationals applying for a permanent stay permit
             (KITAP), including eligibility review and full application support.</p>
          <ul class="service-list">
            <li>Eligibility assessment</li>
            <li>Document compilation</li>
            <li>Legal procedure guidance</li>
            <li>Immigration office coordination</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">KITAP Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Investor Visa</span>
          <h3>Investor KITAS</h3>
          <p>KITAS for foreign business owners who hold shares in a PT PMA.
             We manage the investor KITAS process alongside company registration.</p>
          <ul class="service-list">
            <li>Investor KITAS eligibility review</li>
            <li>PT PMA share verification</li>
            <li>BKPM / OSS coordination</li>
            <li>Visa &amp; company synchronisation</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">Investor Visa Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Extension</span>
          <h3>Visa Extension Service</h3>
          <p>Timely legal support for visa and stay permit extensions, including
             overstay risk alerts and emergency legal assistance.</p>
          <ul class="service-list">
            <li>Extension timeline planning</li>
            <li>Document preparation</li>
            <li>Overstay risk review</li>
            <li>Emergency extension support</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">Extension Details</a>
        </article>

      </div>

      <div style="text-align:center;margin-top:28px;">
        <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          View All Visa Services &rarr;
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICE CATEGORY 2 – COMPANY SETUP & INVESTMENT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-service-category" id="company-setup">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label">Category 02</span>
        <h2 class="section-title">Company Setup &amp; Foreign Investment</h2>
        <p class="section-subtitle">
          End-to-end legal support for foreign investors setting up and operating
          a business entity in Indonesia.
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label">PT PMA</span>
          <h3>PT PMA Company Formation</h3>
          <p>Complete legal setup of a foreign-owned limited liability company (PT PMA)
             in Indonesia. From deed of establishment to OSS business licensing.</p>
          <ul class="service-list">
            <li>Articles of association drafting</li>
            <li>Notarial deed &amp; AHU registration</li>
            <li>OSS / NIB business licence</li>
            <li>BKPM foreign investment reporting</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>">PT PMA Setup Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Investment Law</span>
          <h3>Foreign Investment Legal Compliance</h3>
          <p>Legal guidance on foreign investment regulations, ownership limits,
             negative investment list (DNI), and ongoing compliance obligations.</p>
          <ul class="service-list">
            <li>Sector eligibility review</li>
            <li>Ownership structure advice</li>
            <li>Negative Investment List analysis</li>
            <li>LKPM compliance reporting</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">Investment Law Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Overview</span>
          <h3>Business Structure Planning</h3>
          <p>Before setting up, understand the right legal structure for your business —
             PT PMA, representative office, or other options available to foreign nationals.</p>
          <ul class="service-list">
            <li>Structure comparison &amp; advice</li>
            <li>Foreign ownership options</li>
            <li>Sector-specific requirements</li>
            <li>Capital planning guidance</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">Company Setup Overview</a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICE CATEGORY 3 – CORPORATE LEGAL SUPPORT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-service-category" id="corporate-legal">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label">Category 03</span>
        <h2 class="section-title">Corporate &amp; Business Legal Services</h2>
        <p class="section-subtitle">
          Ongoing and transactional legal support to protect your business interests
          in Indonesia.
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label">Business Legal</span>
          <h3>Business Legal Advisory</h3>
          <p>Ongoing legal support for foreign-owned businesses, including corporate
             governance, compliance monitoring, and dispute prevention.</p>
          <ul class="service-list">
            <li>Corporate governance advice</li>
            <li>Business compliance monitoring</li>
            <li>Regulatory change notifications</li>
            <li>Director &amp; shareholder rights</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/business-legal' ) ); ?>">Business Legal Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Contracts</span>
          <h3>Contract Drafting &amp; Review</h3>
          <p>Drafting and legal review of business contracts, partnership agreements,
             investor agreements, employment contracts, and MoUs in Indonesia.</p>
          <ul class="service-list">
            <li>Business contract drafting</li>
            <li>Partnership &amp; JV agreements</li>
            <li>Investor shareholder agreements</li>
            <li>Contract risk review</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">Contract Drafting Details</a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label">Legal Risk</span>
          <h3>Legal Risk Consultation</h3>
          <p>Identify and mitigate legal risks before they become costly disputes.
             Risk reviews for foreign investors, business transactions, and operations.</p>
          <ul class="service-list">
            <li>Business risk assessment</li>
            <li>Investment risk review</li>
            <li>Compliance gap analysis</li>
            <li>Preventive legal advisory</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">Legal Risk Details</a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW IT WORKS – PROCESS STEPS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">
      <h2 class="section-title" style="text-align:center;">How Our Legal Support Works</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A simple, transparent process — from first contact to legal resolution.
      </p>
      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Initial Consultation</h4>
          <p>Book a consultation to discuss your legal matter. We review your situation
             and identify the right legal approach.</p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Legal Assessment</h4>
          <p>We assess your documents, requirements, and applicable Indonesian law to
             provide a clear action plan.</p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Service Engagement</h4>
          <p>Once agreed, we proceed with the legal service — visa application,
             company setup, contract drafting, or advisory.</p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Resolution &amp; Follow-up</h4>
          <p>We see the matter through to completion and remain available for
             follow-up legal support as your business grows.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       ALL SERVICES QUICK LINKS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-quick-links">
    <div class="container">
      <h2 class="section-title" style="text-align:center;">All Services at a Glance</h2>
      <div class="quick-links-grid">

        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📋</span>
          <span>Visa &amp; Immigration</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🪪</span>
          <span>KITAS</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏠</span>
          <span>KITAP</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💼</span>
          <span>Investor Visa</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🗓</span>
          <span>Visa Extension</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span>Company Setup</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span>PT PMA Setup</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📈</span>
          <span>Foreign Investment Law</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/business-legal' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span>Business Legal Support</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✍️</span>
          <span>Contract Drafting</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🔍</span>
          <span>Legal Risk Review</span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📞</span>
          <span>Book Consultation</span>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FREE GUIDE PROMO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-guide-promo">
    <div class="container">
      <div class="guide-promo-band">
        <div class="guide-promo-band__copy">
          <span class="eyebrow">Free Resource</span>
          <h2>Download the Free Legal Guide for Foreign Investors</h2>
          <p>
            Before engaging any service, equip yourself with the right knowledge.
            Our free guide covers Indonesian company law, visa basics, foreign
            ownership risks, and common legal mistakes made by international investors.
          </p>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/guide' ) ); ?>">
            Get the Free Guide &rarr;
          </a>
        </div>
        <div class="guide-promo-band__pills">
          <span class="pill">Foreign Ownership Rules</span>
          <span class="pill">PT PMA Structure</span>
          <span class="pill">Visa Basics</span>
          <span class="pill">Nominee Shareholder Risks</span>
          <span class="pill">Director Removal Risks</span>
          <span class="pill">Business Compliance</span>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      'Ready to Get Legal Support in Indonesia?',
      'Speak with a licensed Indonesian lawyer about your visa, company, or business legal matter. First consultation available online.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
