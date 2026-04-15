<?php

/**
 * FTS Law – Front Page (Homepage)
 * Template: front-page.php
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="hero" id="home" aria-label="Hero">
    <div class="container hero-grid">

      <!-- Left: Copy -->
      <div class="hero-copy">
        <span class="eyebrow"><?php _e('Foreign Legal &amp; Visa Support', 'fts-law'); ?></span>
        <h1><?php _e('Legal Support for<br>Foreigners in Indonesia', 'fts-law'); ?></h1>
        <p><?php _e('Professional legal services for foreign investors, companies, and residents.', 'fts-law'); ?></p>
        <div class="hero-actions">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Book Consultation', 'fts-law'); ?>
          </a>
          <a class="btn btn-green"
            href="<?php echo esc_url(fts_wa_url()); ?>"
            target="_blank"
            rel="noopener noreferrer">
            💬 <?php _e('WhatsApp Chat', 'fts-law'); ?>
          </a>
        </div>
        <div class="hero-note">
          <?php _e('Lawyer-supervised legal services for visas, company setup, foreign investment, contract review, and business advisory in Indonesia.', 'fts-law'); ?>
        </div>
      </div>

      <!-- Right: Lawyer Card -->
      <div class="hero-card" aria-label="Lawyer Profile Card">
        <img
          src="https://law.fts.biz.id/wp-content/uploads/2026/03/IMG_20260331_145741.jpg"
          alt="<?php esc_attr_e('Syarif – Licensed Indonesian Lawyer', 'fts-law'); ?>"
          loading="eager"
          width="280"
          height="350" />
        <div class="photo-caption">
          <strong><?php _e('Syarif', 'fts-law'); ?></strong>
          <span><?php _e('Licensed Indonesian Lawyer', 'fts-law'); ?></span>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TRUST BAR
  ══════════════════════════════════════════════════════════════════ -->
  <section class="trust-bar" aria-label="Trust indicators">
    <div class="container trust-grid">
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🛡</span>
        <span><?php _e('Licensed Indonesian Lawyer', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🌍</span>
        <span><?php _e('Foreign Investor Legal Support', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">📄</span>
        <span><?php _e('Visa &amp; Immigration Services', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💼</span>
        <span><?php _e('Corporate Law &amp; Business Setup', 'fts-law'); ?></span>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       LAWYER SECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-lawyer" id="lawyer">
    <div class="container two-col">

      <!-- Photo -->
      <div class="profile-photo">
        <img
          src="https://law.fts.biz.id/wp-content/uploads/2026/03/IMG_20260331_145741.jpg"
          alt="<?php esc_attr_e('Syarif – Licensed Indonesian Lawyer', 'fts-law'); ?>"
          loading="lazy" />
      </div>

      <!-- Bio -->
      <div class="profile-bio">
        <h2 class="section-title"><?php _e('Meet Your Lawyer', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('Trusted legal representation for foreign investors, business owners, and expatriates navigating Indonesian law.', 'fts-law'); ?>
        </p>

        <h3 class="profile-name"><?php _e('Syarif', 'fts-law'); ?></h3>
        <p class="profile-credential"><strong><?php _e('Licensed Indonesian Lawyer', 'fts-law'); ?></strong></p>
        <p>
          <?php _e('Experienced in immigration law, corporate law, and foreign investment matters. Providing lawyer-supervised legal services for KITAS &amp; KITAP visas, PT&nbsp;PMA company setup, shareholder agreements, and business legal advisory.', 'fts-law'); ?>
        </p>

        <p>
          <strong><?php _e('Yoshi Nakagawa', 'fts-law'); ?></strong> &mdash; <?php _e('International Legal Consultant', 'fts-law'); ?><br>
          <?php _e('Supporting international clients with legal coordination and business advisory across Japan, Singapore, and Southeast Asia.', 'fts-law'); ?>
        </p>

        <div class="pills">
          <span class="pill"><?php _e('Immigration Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Corporate Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Foreign Investment Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Contract Drafting', 'fts-law'); ?></span>
        </div>

        <div class="profile-cta">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'lawyer' )); ?>">
            <?php _e('View Full Profile', 'fts-law'); ?>
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Book Consultation', 'fts-law'); ?>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHY CHOOSE US
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-why">
    <div class="container">
      <h2 class="section-title"><?php _e('Why Foreign Clients Choose Us', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We differentiate from generic visa agents by offering lawyer-supervised services, deep investor experience, and transparent legal support.', 'fts-law'); ?>
      </p>
      <div class="grid-4">

        <article class="card">
          <div class="card-icon" aria-hidden="true">⚖️</div>
          <h3><?php _e('Lawyer-Supervised Services', 'fts-law'); ?></h3>
          <p><?php _e('All legal services are handled or directly supervised by a licensed Indonesian lawyer.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🏢</div>
          <h3><?php _e('Foreign Investor Experience', 'fts-law'); ?></h3>
          <p><?php _e('Extensive experience supporting international investors and foreign-owned businesses in Indonesia.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🔍</div>
          <h3><?php _e('Transparent Legal Process', 'fts-law'); ?></h3>
          <p><?php _e('Clear explanation of Indonesian law before starting a company or visa process. No surprises.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🌐</div>
          <h3><?php _e('International Client Support', 'fts-law'); ?></h3>
          <p><?php _e('Practical bilingual support for foreign clients across all legal and business matters.', 'fts-law'); ?></p>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICES OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-services" id="services">
    <div class="container">
      <h2 class="section-title"><?php _e('Our Legal Services', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Comprehensive legal support for every stage of your journey in Indonesia — from arrival to business operations.', 'fts-law'); ?>
      </p>
      <div class="grid-4">

        <article class="card card--service">
          <span class="mini-label"><?php _e('Visa', 'fts-law'); ?></span>
          <h3><?php _e('Visa &amp; Immigration', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Investor KITAS', 'fts-law'); ?></li>
            <li><?php _e('Working KITAS', 'fts-law'); ?></li>
            <li><?php _e('KITAP Permanent Stay', 'fts-law'); ?></li>
            <li><?php _e('Visa Extension', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'visa' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('Business Setup', 'fts-law'); ?></span>
          <h3><?php _e('Company Setup', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('PT PMA Registration', 'fts-law'); ?></li>
            <li><?php _e('Business Licensing', 'fts-law'); ?></li>
            <li><?php _e('OSS &amp; NIB Registration', 'fts-law'); ?></li>
            <li><?php _e('Foreign Ownership', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'company-setup' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('Corporate Legal', 'fts-law'); ?></span>
          <h3><?php _e('Corporate Legal Services', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Shareholder Agreements', 'fts-law'); ?></li>
            <li><?php _e('Contract Review', 'fts-law'); ?></li>
            <li><?php _e('Legal Advisory', 'fts-law'); ?></li>
            <li><?php _e('Corporate Governance', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'business-legal' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('Consulting', 'fts-law'); ?></span>
          <h3><?php _e('Business Legal Consulting', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Legal Risk Review', 'fts-law'); ?></li>
            <li><?php _e('Investment Compliance', 'fts-law'); ?></li>
            <li><?php _e('Contract Drafting', 'fts-law'); ?></li>
            <li><?php _e('Market Entry Support', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

      </div>

      <div class="services-more-link">
        <a href="<?php echo esc_url(fts_page_url( 'services' )); ?>" class="btn btn-outline-navy">
          <?php _e('View All Services &rarr;', 'fts-law'); ?>
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       VISA OVERVIEW STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-visa-strip">
    <div class="container">
      <h2 class="section-title"><?php _e('Visa &amp; Immigration Support', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We assist foreign nationals with all types of Indonesian stay permits and visas — handled by a licensed lawyer.', 'fts-law'); ?>
      </p>
      <div class="grid-4">

        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'kitas' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">📋</span>
          <h4><?php _e('KITAS', 'fts-law'); ?></h4>
          <p><?php _e('Temporary Stay Permit for foreign nationals working or investing in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'kitap' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🏠</span>
          <h4><?php _e('KITAP', 'fts-law'); ?></h4>
          <p><?php _e('Permanent Stay Permit for long-term foreign residents in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'investor-visa' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">💼</span>
          <h4><?php _e('Investor Visa', 'fts-law'); ?></h4>
          <p><?php _e('KITAS for foreign business owners with a PT PMA company in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'visa-extension' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🗓</span>
          <h4><?php _e('Visa Extension', 'fts-law'); ?></h4>
          <p><?php _e('Legal support for extending your stay permit before it expires.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMPANY SETUP STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-company-strip" id="company">
    <div class="container two-col two-col--reverse">

      <div class="company-strip__text">
        <span class="eyebrow"><?php _e('Company Setup', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Start Your Business in Indonesia', 'fts-law'); ?></h2>
        <p>
          <?php _e('Foreign investors can legally own and operate a business in Indonesia through a PT&nbsp;PMA (Penanaman Modal Asing) company. We guide you through the entire setup process — from structure planning to government registration.', 'fts-law'); ?>
        </p>
        <ul class="check-list">
          <li><?php _e('PT PMA company formation', 'fts-law'); ?></li>
          <li><?php _e('Foreign ownership structure advice', 'fts-law'); ?></li>
          <li><?php _e('OSS / NIB business licensing', 'fts-law'); ?></li>
          <li><?php _e('Director &amp; Commissioner setup', 'fts-law'); ?></li>
          <li><?php _e('Shareholder agreement drafting', 'fts-law'); ?></li>
        </ul>
        <div class="hero-actions" style="margin-top:20px;">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'pt-pma' )); ?>">
            <?php _e('PT PMA Setup Details', 'fts-law'); ?>
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(fts_page_url( 'company-setup' )); ?>">
            <?php _e('Company Setup Overview', 'fts-law'); ?>
          </a>
        </div>
      </div>

      <div class="company-strip__cards">
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('PT PMA', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Foreign Investment Company', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('100%', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Foreign ownership in selected sectors', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('OSS', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Online Single Submission licensing', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('NIB', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Business Identity Number required', 'fts-law'); ?></span>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FREE LEGAL GUIDE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="guide-area section-soft" id="guide">
    <div class="container">
      <h2 class="section-title"><?php _e('Foreign Investor Legal Guide', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Educational articles to help foreign investors understand Indonesian law before making decisions.', 'fts-law'); ?>
      </p>
      <div class="grid-3">

        <article class="card">
          <span class="mini-label"><?php _e('Guide', 'fts-law'); ?></span>
          <h3><?php _e('Can Foreigners Own a Company in Indonesia?', 'fts-law'); ?></h3>
          <p><?php _e('Understand foreign ownership rules, PT&nbsp;PMA basics, and legal structure options available to international investors.', 'fts-law'); ?></p>
          <a href="<?php echo esc_url(fts_page_url( 'foreign-investment' )); ?>"
            class="card__read-more"><?php _e('Read Guide &rarr;', 'fts-law'); ?></a>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Guide', 'fts-law'); ?></span>
          <h3><?php _e('PT PMA Company Structure Explained', 'fts-law'); ?></h3>
          <p><?php _e('Learn about shareholders, directors, commissioners, minimum capital requirements, and licensing steps for a PT&nbsp;PMA in Indonesia.', 'fts-law'); ?></p>
          <a href="<?php echo esc_url(fts_page_url( 'pt-pma' )); ?>"
            class="card__read-more"><?php _e('Read Guide &rarr;', 'fts-law'); ?></a>
        </article>

        <article class="card">
          <span class="mini-label"><?php _e('Guide', 'fts-law'); ?></span>
          <h3><?php _e('How Foreigners Lose Their Company in Indonesia', 'fts-law'); ?></h3>
          <p><?php _e('The legal risks of nominee shareholders, director removal, share dilution, and shareholder disputes that every foreign investor must understand.', 'fts-law'); ?></p>
          <a href="<?php echo esc_url(fts_page_url( 'legal-risk' )); ?>"
            class="card__read-more"><?php _e('Read Guide &rarr;', 'fts-law'); ?></a>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       DOWNLOAD FREE GUIDE LEAD FORM
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-download">
    <div class="container">
      <div class="download-band">

        <div class="download-band__copy">
          <h2><?php _e('Free Legal Guide for Foreign Investors', 'fts-law'); ?></h2>
          <p>
            <?php _e('Download our free guide explaining Indonesian company law, foreign ownership risks, shareholder protection, and common legal mistakes made by foreign investors.', 'fts-law'); ?>
          </p>
          <div class="pills">
            <span class="pill"><?php _e('Foreign Ownership Rules', 'fts-law'); ?></span>
            <span class="pill"><?php _e('PT PMA Structure', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Nominee Shareholder Risks', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Director Removal Risks', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Visa &amp; Immigration Basics', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="form-box">
          <h3><?php _e('Download Free Guide', 'fts-law'); ?></h3>
          <?php
          $guide_form_id = fts_cf7_guide_form_id();
          if ( shortcode_exists('contact-form-7') && $guide_form_id ) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr( $guide_form_id ) . '" title="Free Legal Guide Form"]');
          else : ?>
            <form class="guide-form" id="guide-download-form" method="post" action="<?php echo esc_url(fts_page_url( 'guide' )); ?>">
              <?php wp_nonce_field('fts_guide_download', 'fts_guide_nonce'); ?>
              <input type="text" name="guide_name" placeholder="<?php esc_attr_e('Full Name', 'fts-law'); ?>" required />
              <input type="email" name="guide_email" placeholder="<?php esc_attr_e('Email Address', 'fts-law'); ?>" required />
              <select name="guide_country" required>
                <option value="" disabled selected><?php _e('Select Country', 'fts-law'); ?></option>
                <option><?php _e('Japan', 'fts-law'); ?></option>
                <option><?php _e('South Korea', 'fts-law'); ?></option>
                <option><?php _e('China', 'fts-law'); ?></option>
                <option><?php _e('Singapore', 'fts-law'); ?></option>
                <option><?php _e('Australia', 'fts-law'); ?></option>
                <option><?php _e('United States', 'fts-law'); ?></option>
                <option><?php _e('United Kingdom', 'fts-law'); ?></option>
                <option><?php _e('Netherlands', 'fts-law'); ?></option>
                <option><?php _e('Germany', 'fts-law'); ?></option>
                <option><?php _e('Other', 'fts-law'); ?></option>
              </select>
              <button class="btn btn-gold" type="submit"><?php _e('Send Download Link', 'fts-law'); ?></button>
            </form>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CONSULTATION CTA BAND
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-cta" id="consultation">
    <div class="container">
      <div class="cta-band">
        <h2 class="cta-band__title"><?php _e('Need Legal Advice in Indonesia?', 'fts-law'); ?></h2>
        <p class="cta-band__desc">
          <?php _e('Contact our legal team for professional assistance with company setup, visas, foreign investment, and business legal matters. First consultation available online.', 'fts-law'); ?>
        </p>
        <div class="cta-band__actions">
          <a class="btn btn-white"
            href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Book Consultation', 'fts-law'); ?>
          </a>
          <a class="btn btn-green"
            href="<?php echo esc_url(fts_wa_url()); ?>"
            target="_blank"
            rel="noopener noreferrer">
            💬 <?php _e('WhatsApp', 'fts-law'); ?>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       BLOG – LATEST POSTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-blog section-soft" id="blog">
    <div class="container">
      <h2 class="section-title"><?php _e('Latest Legal Insights', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Practical guides and legal updates for foreigners living and investing in Indonesia.', 'fts-law'); ?>
      </p>

      <?php
      $blog_query = fts_latest_posts(3);
      if ($blog_query->have_posts()) :
      ?>
        <div class="grid-3">
          <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <?php fts_blog_card(); ?>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      <?php else : ?>
        <!-- Fallback placeholder cards before any posts are published -->
        <div class="grid-3">

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label"><?php _e('Visa &amp; Immigration', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('How to Get Investor KITAS in Indonesia', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('A step-by-step guide to applying for an Investor KITAS, including eligibility, required documents, and processing time.', 'fts-law'); ?>
              </p>
              <a class="card__read-more" href="<?php echo esc_url(fts_blog_url()); ?>"><?php _e('Read more &rarr;', 'fts-law'); ?></a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label"><?php _e('Company Setup', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('How to Start a Company in Indonesia as a Foreigner', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('Everything foreign investors need to know about setting up a PT&nbsp;PMA — from minimum capital to business licensing.', 'fts-law'); ?>
              </p>
              <a class="card__read-more" href="<?php echo esc_url(fts_blog_url()); ?>"><?php _e('Read more &rarr;', 'fts-law'); ?></a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label"><?php _e('Business Law', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('Foreign Ownership Rules in Indonesia (2025)', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('Understanding the Negative Investment List, BKPM regulations, and which sectors are open to 100% foreign ownership.', 'fts-law'); ?>
              </p>
              <a class="card__read-more" href="<?php echo esc_url(fts_blog_url()); ?>"><?php _e('Read more &rarr;', 'fts-law'); ?></a>
            </div>
          </article>

        </div>
      <?php endif; ?>

      <div style="text-align:center;margin-top:32px;">
        <a class="btn btn-outline-navy" href="<?php echo esc_url(fts_blog_url()); ?>">
          <?php _e('View All Articles &rarr;', 'fts-law'); ?>
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CONTACT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-contact" id="contact">
    <div class="container">

      <div class="contact-head">
        <h2 class="section-title"><?php _e('Contact Our Office', 'fts-law'); ?></h2>
        <p class="section-subtitle contact-subtitle-center">
          <?php _e('Connect with our team for legal and visa assistance in Indonesia.', 'fts-law'); ?>
        </p>
      </div>

      <div class="contact-panel-grid">

        <!-- Contact Form -->
        <div class="card-gradient contact-form-card">
          <h3 class="contact-form-title"><?php _e('Send Us a Message', 'fts-law'); ?></h3>
          <?php
          $contact_form_id = fts_cf7_contact_form_id();
          if ( shortcode_exists('contact-form-7') && $contact_form_id ) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr( $contact_form_id ) . '" title="Contact Form"]');
          else : ?>
            <form class="contact-form" id="homepage-contact-form" method="post">
              <?php wp_nonce_field('fts_contact_form', 'fts_contact_nonce'); ?>
              <div class="contact-form-grid">
                <input type="text" name="first_name" placeholder="<?php esc_attr_e('First Name', 'fts-law'); ?>" required />
                <input type="text" name="last_name" placeholder="<?php esc_attr_e('Last Name', 'fts-law'); ?>" />
              </div>
              <div class="contact-form-grid">
                <input type="email" name="email" placeholder="<?php esc_attr_e('Email Address', 'fts-law'); ?>" required />
                <input type="text" name="whatsapp" placeholder="<?php esc_attr_e('WhatsApp Number', 'fts-law'); ?>" />
              </div>
              <input type="text" name="company" placeholder="<?php esc_attr_e('Company Name (Optional)', 'fts-law'); ?>" />
              <select name="legal_matter">
                <option value="" disabled selected><?php _e('Legal Matter', 'fts-law'); ?></option>
                <option><?php _e('Visa &amp; Immigration', 'fts-law'); ?></option>
                <option><?php _e('Company Setup (PT PMA)', 'fts-law'); ?></option>
                <option><?php _e('Foreign Investment', 'fts-law'); ?></option>
                <option><?php _e('Contract Review', 'fts-law'); ?></option>
                <option><?php _e('Business Legal Support', 'fts-law'); ?></option>
                <option><?php _e('Other', 'fts-law'); ?></option>
              </select>
              <textarea name="message" placeholder="<?php esc_attr_e('Please describe your legal matter…', 'fts-law'); ?>" required></textarea>
              <button class="btn btn-gold contact-submit" type="submit"><?php _e('Send Message', 'fts-law'); ?></button>
            </form>
          <?php endif; ?>
        </div>

        <!-- Contact Info -->
        <div class="card-gradient contact-info-card">
          <h3 class="contact-form-title"><?php _e('Contact Information', 'fts-law'); ?></h3>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">📍</span>
            <div>
              <h4><?php _e('Office Address', 'fts-law'); ?></h4>
              <p><?php echo esc_html(fts_office_address()); ?></p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">✉️</span>
            <div>
              <h4><?php _e('Email', 'fts-law'); ?></h4>
              <p>
                <a href="mailto:<?php echo esc_attr(fts_office_email()); ?>">
                  <?php echo esc_html(fts_office_email()); ?>
                </a>
              </p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">💬</span>
            <div>
              <h4><?php _e('WhatsApp', 'fts-law'); ?></h4>
              <p>
                <a href="<?php echo esc_url(fts_wa_url()); ?>"
                  target="_blank"
                  rel="noopener noreferrer">
                  <?php _e('Chat on WhatsApp', 'fts-law'); ?>
                </a>
              </p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🕐</span>
            <div>
              <h4><?php _e('Office Hours', 'fts-law'); ?></h4>
              <p><?php echo esc_html(fts_office_hours()); ?></p>
            </div>
          </div>
        </div>

      </div><!-- /.contact-panel-grid -->

      <!-- Office Photo + Map -->
      <div class="contact-media-bottom">

        <div class="office-photo-card">
          <img
            src="https://law.fts.biz.id/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-16-at-15.54.46.jpeg"
            alt="<?php esc_attr_e('Law Office – Jakarta', 'fts-law'); ?>"
            loading="lazy" />
        </div>

        <div class="map-box">
          <?php
          $maps_url = fts_maps_embed();
          if ($maps_url) :
          ?>
            <iframe
              src="<?php echo esc_url($maps_url); ?>"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="<?php esc_attr_e('Law Office Location Map', 'fts-law'); ?>"></iframe>
          <?php else : ?>
            <div class="map-placeholder">
              <p><?php _e('Please visit <a href="https://www.google.com/maps">Google Maps</a> to view the map. <br />Or use', 'fts-law'); ?>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.671136651886!2d106.78509397610306!3d-6.174763644527437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7002212556b%3A0xd553386b470af88!2sNEO%20SOHO%20APARTEMENT!5e0!3m2!1sid!2sid!4v1753431520442!5m2!1sid!2sid"
                  loading="lazy"
                  allowfullscreen
                  referrerpolicy="no-referrer-when-downgrade"
                  title="Office Location Map"></iframe>
              </p>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- /.contact-media-bottom -->

    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>