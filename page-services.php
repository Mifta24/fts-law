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
      <h1><?php _e('Okelegal Services', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Business legality, legal consultation, intellectual property, certification, and virtual office services from Okelegal Law Office, Bandung.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
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
          <h2 class="section-title"><?php _e('Easy, Trusted Legal &amp; Business Support', 'fts-law'); ?></h2>
          <p>
            <?php _e('Okelegal Law Office is a legal consulting firm based in Bandung, West Java. Our team helps you with company establishment, business licensing, legal consultation, intellectual property, certification, and business consulting.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('Backed by lawyers with more than 20 years of experience serving domestic and international clients, we provide the best solution for your needs, with affordable services and free initial consultation.', 'fts-law'); ?>
          </p>
        </div>
        <div class="intro-band__trust">
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">⚖️</span>
            <div>
              <strong><?php _e('Professional Lawyers', 'fts-law'); ?></strong>
              <p><?php _e('Experienced lawyers and consultants across legal and business fields.', 'fts-law'); ?></p>
            </div>
          </div>
          <div class="trust-block">
            <span class="trust-block__icon" aria-hidden="true">💬</span>
            <div>
              <strong><?php _e('Free Consultation', 'fts-law'); ?></strong>
              <p><?php _e('Discuss your needs with us first, at no cost.', 'fts-law'); ?></p>
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
       CATEGORY 01
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-service-category" id="legality">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label"><?php _e('Category 01', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Business Legality &amp; Licensing', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Company establishment and business permits, handled from start to finish.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-4">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Company', 'fts-law'); ?></span>
          <h3><?php _e('Company Establishment', 'fts-law'); ?></h3>
          <p><?php _e('Legal establishment of your business entity with complete documents and a clear process.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Limited liability company (PT)', 'fts-law'); ?></li>
            <li><?php _e('CV, cooperative &amp; foundation', 'fts-law'); ?></li>
            <li><?php _e('Foreign investment company (PMA)', 'fts-law'); ?></li>
            <li><?php _e('Micro &amp; small business (UMKM)', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Licensing', 'fts-law'); ?></span>
          <h3><?php _e('Business Licensing', 'fts-law'); ?></h3>
          <p><?php _e('Business registration and permits so your company can operate legally.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('NIB &amp; OSS registration', 'fts-law'); ?></li>
            <li><?php _e('Business permits &amp; licences', 'fts-law'); ?></li>
            <li><?php _e('Document review', 'fts-law'); ?></li>
            <li><?php _e('Compliance guidance', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Notary', 'fts-law'); ?></span>
          <h3><?php _e('Notary / PPAT Services', 'fts-law'); ?></h3>
          <p><?php _e('Our experienced notary team handles business entity deeds, deed amendments and agreements, and legalisation.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Business entity deeds', 'fts-law'); ?></li>
            <li><?php _e('Deed amendments &amp; agreements', 'fts-law'); ?></li>
            <li><?php _e('Legalisation of documents', 'fts-law'); ?></li>
            <li><?php _e('Sale-and-purchase deeds (land &amp; buildings)', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Virtual Office', 'fts-law'); ?></span>
          <h3><?php _e('Virtual Office', 'fts-law'); ?></h3>
          <p><?php _e('Use a business-centre address for your company in Jakarta and Bandung.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Business address in Jakarta &amp; Bandung', 'fts-law'); ?></li>
            <li><?php _e('Expanding to Bali, Surabaya, Aceh, Batam &amp; Kutai', 'fts-law'); ?></li>
            <li><?php _e('Partner offices in Asia, Southeast Asia &amp; Europe', 'fts-law'); ?></li>
            <li><?php _e('Premium office options', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Ask About Virtual Office', 'fts-law'); ?></a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CATEGORY 02
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-service-category" id="legal-consulting">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label"><?php _e('Category 02', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Legal Consultation &amp; Intellectual Property', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Legal advice for individuals and companies, plus protection for your brand and creations.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Consultation', 'fts-law'); ?></span>
          <h3><?php _e('Legal Consultation', 'fts-law'); ?></h3>
          <p><?php _e('Lawyers for companies and individuals: corporate law, arbitration, family matters, and dispute resolution.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Corporate lawyers (corporate law &amp; litigation)', 'fts-law'); ?></li>
            <li><?php _e('Family lawyers (divorce, adoption, guardianship)', 'fts-law'); ?></li>
            <li><?php _e('Disputes (sengketa) &amp; litigation in court', 'fts-law'); ?></li>
            <li><?php _e('Arbitration lawyers', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Intellectual Property', 'fts-law'); ?></span>
          <h3><?php _e('Intellectual Property Rights (HKI)', 'fts-law'); ?></h3>
          <p><?php _e('Our intellectual property consultants protect your business through registration.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Trademark (merek)', 'fts-law'); ?></li>
            <li><?php _e('Copyright (hak cipta)', 'fts-law'); ?></li>
            <li><?php _e('Patent (paten)', 'fts-law'); ?></li>
            <li><?php _e('Industrial design (desain industri)', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Contracts', 'fts-law'); ?></span>
          <h3><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h3>
          <p><?php _e('Drafting and review of agreements to protect your business interests.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Business contracts', 'fts-law'); ?></li>
            <li><?php _e('Partnership agreements', 'fts-law'); ?></li>
            <li><?php _e('Employment contracts', 'fts-law'); ?></li>
            <li><?php _e('Contract risk review', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CATEGORY 03
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-service-category" id="business-consulting">
    <div class="container">

      <div class="service-category-header">
        <span class="mini-label"><?php _e('Category 03', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Business Consulting &amp; Certification', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Support to grow your business to international standards in the Industry 4.0 era.', 'fts-law'); ?>
        </p>
      </div>

      <div class="grid-3">

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Business', 'fts-law'); ?></span>
          <h3><?php _e('Business Consulting', 'fts-law'); ?></h3>
          <p><?php _e('Solutions from senior management consultants for your business needs.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('Start-ups &amp; franchise', 'fts-law'); ?></li>
            <li><?php _e('Business strategy &amp; management', 'fts-law'); ?></li>
            <li><?php _e('Market analysis', 'fts-law'); ?></li>
            <li><?php _e('Business digitalisation', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Certification', 'fts-law'); ?></span>
          <h3><?php _e('Standards &amp; Certification', 'fts-law'); ?></h3>
          <p><?php _e('A certificate means a quality management system that meets recognised standards.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('ISO certification', 'fts-law'); ?></li>
            <li><?php _e('SNI certification', 'fts-law'); ?></li>
            <li><?php _e('Halal MUI certification', 'fts-law'); ?></li>
            <li><?php _e('Other quality certifications', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

        <article class="card card--service-detail">
          <span class="mini-label"><?php _e('Digital', 'fts-law'); ?></span>
          <h3><?php _e('IT System &amp; Social Media', 'fts-law'); ?></h3>
          <p><?php _e('Software development and social media management for your business.', 'fts-law'); ?></p>
          <ul class="service-list">
            <li><?php _e('IT system development', 'fts-law'); ?></li>
            <li><?php _e('Business digitalisation', 'fts-law'); ?></li>
            <li><?php _e('Social media management', 'fts-law'); ?></li>
            <li><?php _e('Online presence', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Consult This Service', 'fts-law'); ?></a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW IT WORKS – PROCESS STEPS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('How Okelegal Works', 'fts-law'); ?></h2>
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
          <p><?php _e('Once agreed, we proceed with the legal service — company establishment, licensing, certification, contract drafting, or advisory.', 'fts-law'); ?></p>
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

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📋</span>
          <span><?php _e('Company Establishment', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span><?php _e('Business Licensing', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🖋️</span>
          <span><?php _e('Notary / PPAT', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span><?php _e('Virtual Office', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span><?php _e('Legal Consultation', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💡</span>
          <span><?php _e('Intellectual Property', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✍️</span>
          <span><?php _e('Contract Drafting', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🚀</span>
          <span><?php _e('Start-up &amp; Franchise', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✅</span>
          <span><?php _e('ISO / SNI / Halal', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💻</span>
          <span><?php _e('IT System &amp; Social Media', 'fts-law'); ?></span>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      __('Ready to Get Started with Okelegal?', 'fts-law'),
      __('Talk to our team about company establishment, licensing, legal consultation, intellectual property, or certification. Free initial consultation.', 'fts-law')
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
