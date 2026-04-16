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
      <span class="eyebrow"><?php _e('What We Do', 'fts-law'); ?></span>
      <h1><?php _e('Our Legal Services', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Comprehensive, lawyer-supervised legal services for foreign investors, entrepreneurs, and expatriates in Indonesia.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url( '/consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
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
          <h2 class="section-title"><?php _e('Full-Spectrum Legal Support for Foreigners in Indonesia', 'fts-law'); ?></h2>
          <p>
            <?php _e('Whether you are setting up a company, applying for a visa, reviewing a contract, or seeking ongoing legal protection for your business — our licensed Indonesian lawyer provides direct, transparent, and practical legal support tailored to international clients.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('We do not operate as a visa agent. All services are supervised by a licensed advocate registered with the Indonesian Bar Association (PERADI), ensuring that your legal interests are properly protected.', 'fts-law'); ?>
          </p>
        </div>
        <div class="intro-band__trust">
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">⚖️</span>
            <div>
              <strong><?php _e('Licensed Advocate', 'fts-law'); ?></strong>
              <p><?php _e('All services handled or supervised by a registered Indonesian lawyer.', 'fts-law'); ?></p>
            </div>
          </div>
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">🌐</span>
            <div>
              <strong><?php _e('English-Language Support', 'fts-law'); ?></strong>
              <p><?php _e('Full service in English for foreign national clients.', 'fts-law'); ?></p>
            </div>
          </div>
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">🔒</span>
            <div>
              <strong><?php _e('Client Confidentiality', 'fts-law'); ?></strong>
              <p><?php _e('All matters handled with full legal professional confidentiality.', 'fts-law'); ?></p>
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
        <span class="mini-label"><?php _e('Category 01', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Visa &amp; Immigration Legal Services', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Legal assistance for all types of Indonesian stay permits — from initial application to renewal, with overstay risk management.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-4">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('KITAS', 'fts-law'); ?></span>
          <h3><?php _e('KITAS – Temporary Stay Permit', 'fts-law'); ?></h3>
          <p><?php _e('Legal support for Investor KITAS, Working KITAS, and Spouse KITAS applications. Includes document review, submission support, and sponsor coordination.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Document preparation &amp; review', 'fts-law'); ?></li>
            <li><?php _e('KITAS application support', 'fts-law'); ?></li>
            <li><?php _e('Sponsor company coordination', 'fts-law'); ?></li>
            <li><?php _e('Follow-up &amp; tracking', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>"><?php _e('KITAS Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('KITAP', 'fts-law'); ?></span>
          <h3><?php _e('KITAP – Permanent Stay Permit', 'fts-law'); ?></h3>
          <p><?php _e('Legal guidance for foreign nationals applying for a permanent stay permit (KITAP), including eligibility review and full application support.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Eligibility assessment', 'fts-law'); ?></li>
            <li><?php _e('Document compilation', 'fts-law'); ?></li>
            <li><?php _e('Legal procedure guidance', 'fts-law'); ?></li>
            <li><?php _e('Immigration office coordination', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>"><?php _e('KITAP Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Investor Visa', 'fts-law'); ?></span>
          <h3><?php _e('Investor KITAS', 'fts-law'); ?></h3>
          <p><?php _e('KITAS for foreign business owners who hold shares in a PT PMA. We manage the investor KITAS process alongside company registration.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Investor KITAS eligibility review', 'fts-law'); ?></li>
            <li><?php _e('PT PMA share verification', 'fts-law'); ?></li>
            <li><?php _e('BKPM / OSS coordination', 'fts-law'); ?></li>
            <li><?php _e('Visa &amp; company synchronisation', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>"><?php _e('Investor Visa Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Extension', 'fts-law'); ?></span>
          <h3><?php _e('Visa Extension Service', 'fts-law'); ?></h3>
          <p><?php _e('Timely legal support for visa and stay permit extensions, including overstay risk alerts and emergency legal assistance.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Extension timeline planning', 'fts-law'); ?></li>
            <li><?php _e('Document preparation', 'fts-law'); ?></li>
            <li><?php _e('Overstay risk review', 'fts-law'); ?></li>
            <li><?php _e('Emergency extension support', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>"><?php _e('Extension Details', 'fts-law'); ?></a>
        </article>

      </div>

      <div style="text-align:center;margin-top:28px;">
        <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <?php _e('View All Visa Services &rarr;', 'fts-law'); ?>
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
        <span class="mini-label"><?php _e('Category 02', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Company Setup &amp; Foreign Investment', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('End-to-end legal support for foreign investors setting up and operating a business entity in Indonesia.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('PT PMA', 'fts-law'); ?></span>
          <h3><?php _e('PT PMA Company Formation', 'fts-law'); ?></h3>
          <p><?php _e('Complete legal setup of a foreign-owned limited liability company (PT PMA) in Indonesia. From deed of establishment to OSS business licensing.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Articles of association drafting', 'fts-law'); ?></li>
            <li><?php _e('Notarial deed &amp; AHU registration', 'fts-law'); ?></li>
            <li><?php _e('OSS / NIB business licence', 'fts-law'); ?></li>
            <li><?php _e('BKPM foreign investment reporting', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>"><?php _e('PT PMA Setup Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Investment Law', 'fts-law'); ?></span>
          <h3><?php _e('Foreign Investment Legal Compliance', 'fts-law'); ?></h3>
          <p><?php _e('Legal guidance on foreign investment regulations, ownership limits, negative investment list (DNI), and ongoing compliance obligations.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Sector eligibility review', 'fts-law'); ?></li>
            <li><?php _e('Ownership structure advice', 'fts-law'); ?></li>
            <li><?php _e('Negative Investment List analysis', 'fts-law'); ?></li>
            <li><?php _e('LKPM compliance reporting', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>"><?php _e('Investment Law Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Overview', 'fts-law'); ?></span>
          <h3><?php _e('Business Structure Planning', 'fts-law'); ?></h3>
          <p><?php _e('Before setting up, understand the right legal structure for your business — PT PMA, representative office, or other options available to foreign nationals.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Structure comparison &amp; advice', 'fts-law'); ?></li>
            <li><?php _e('Foreign ownership options', 'fts-law'); ?></li>
            <li><?php _e('Sector-specific requirements', 'fts-law'); ?></li>
            <li><?php _e('Capital planning guidance', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>"><?php _e('Company Setup Overview', 'fts-law'); ?></a>
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
        <span class="mini-label"><?php _e('Category 03', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Corporate &amp; Business Legal Services', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Ongoing and transactional legal support to protect your business interests in Indonesia.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Business Legal', 'fts-law'); ?></span>
          <h3><?php _e('Business Legal Advisory', 'fts-law'); ?></h3>
          <p><?php _e('Ongoing legal support for foreign-owned businesses, including corporate governance, compliance monitoring, and dispute prevention.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Corporate governance advice', 'fts-law'); ?></li>
            <li><?php _e('Business compliance monitoring', 'fts-law'); ?></li>
            <li><?php _e('Regulatory change notifications', 'fts-law'); ?></li>
            <li><?php _e('Director &amp; shareholder rights', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/business-legal' ) ); ?>"><?php _e('Business Legal Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Contracts', 'fts-law'); ?></span>
          <h3><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h3>
          <p><?php _e('Drafting and legal review of business contracts, partnership agreements, investor agreements, employment contracts, and MoUs in Indonesia.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Business contract drafting', 'fts-law'); ?></li>
            <li><?php _e('Partnership &amp; JV agreements', 'fts-law'); ?></li>
            <li><?php _e('Investor shareholder agreements', 'fts-law'); ?></li>
            <li><?php _e('Contract risk review', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>"><?php _e('Contract Drafting Details', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Legal Risk', 'fts-law'); ?></span>
          <h3><?php _e('Legal Risk Consultation', 'fts-law'); ?></h3>
          <p><?php _e('Identify and mitigate legal risks before they become costly disputes. Risk reviews for foreign investors, business transactions, and operations.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Business risk assessment', 'fts-law'); ?></li>
            <li><?php _e('Investment risk review', 'fts-law'); ?></li>
            <li><?php _e('Compliance gap analysis', 'fts-law'); ?></li>
            <li><?php _e('Preventive legal advisory', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>"><?php _e('Legal Risk Details', 'fts-law'); ?></a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW IT WORKS – PROCESS STEPS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('How Our Legal Support Works', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A simple, transparent process — from first contact to legal resolution.', 'fts-law'); ?>
      </p>
      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Initial Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Book a consultation to discuss your legal matter. We review your situation and identify the right legal approach.', 'fts-law'); ?></p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Legal Assessment', 'fts-law'); ?></h4>
          <p><?php _e('We assess your documents, requirements, and applicable Indonesian law to provide a clear action plan.', 'fts-law'); ?></p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Service Engagement', 'fts-law'); ?></h4>
          <p><?php _e('Once agreed, we proceed with the legal service — visa application, company setup, contract drafting, or advisory.', 'fts-law'); ?></p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Resolution &amp; Follow-up', 'fts-law'); ?></h4>
          <p><?php _e('We see the matter through to completion and remain available for follow-up legal support as your business grows.', 'fts-law'); ?></p>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       ALL SERVICES QUICK LINKS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-quick-links">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('All Services at a Glance', 'fts-law'); ?></h2>
      <div class="quick-links-grid">

        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📋</span>
          <span><?php _e('Visa &amp; Immigration', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🪪</span>
          <span><?php _e('KITAS', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏠</span>
          <span><?php _e('KITAP', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💼</span>
          <span><?php _e('Investor Visa', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/visa-extension' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🗓</span>
          <span><?php _e('Visa Extension', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span><?php _e('Company Setup', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span><?php _e('PT PMA Setup', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📈</span>
          <span><?php _e('Foreign Investment Law', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/business-legal' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span><?php _e('Business Legal Support', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✍️</span>
          <span><?php _e('Contract Drafting', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🔍</span>
          <span><?php _e('Legal Risk Review', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📞</span>
          <span><?php _e('Book Consultation', 'fts-law'); ?></span>
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
          <span class="eyebrow"><?php _e('Free Resource', 'fts-law'); ?></span>
          <h2><?php _e('Download the Free Legal Guide for Foreign Investors', 'fts-law'); ?></h2>
          <p>
            <?php _e('Before engaging any service, equip yourself with the right knowledge. Our free guide covers Indonesian company law, visa basics, foreign ownership risks, and common legal mistakes made by international investors.', 'fts-law'); ?>
          </p>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/guide' ) ); ?>">
            <?php _e('Get the Free Guide &rarr;', 'fts-law'); ?>
          </a>
        </div>
        <div class="guide-promo-band__pills">
          <span class="pill"><?php _e('Foreign Ownership Rules', 'fts-law'); ?></span>
          <span class="pill"><?php _e('PT PMA Structure', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Visa Basics', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Nominee Shareholder Risks', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Director Removal Risks', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Business Compliance', 'fts-law'); ?></span>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      __('Ready to Get Legal Support in Indonesia?', 'fts-law'),
      __('Speak with a licensed Indonesian lawyer about your visa, company setup, investment, or contract needs in Indonesia. First consultation available online.', 'fts-law')
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
