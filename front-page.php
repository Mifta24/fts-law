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
        <span class="eyebrow"><?php _e('Law Office · Bandung, Indonesia', 'fts-law'); ?></span>
        <h1><?php _e('Legal &amp; Business Solutions<br>for Your Company', 'fts-law'); ?></h1>
        <p><?php _e('PT. Okelegal Law Office — legal consulting, business licensing, notary services, intellectual property, and business consulting since 2013.', 'fts-law'); ?></p>
        <div class="hero-actions">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Free Consultation', 'fts-law'); ?>
          </a>
          <a class="btn btn-green"
            href="<?php echo esc_url(fts_wa_url()); ?>"
            target="_blank"
            rel="noopener noreferrer">
            💬 <?php _e('WhatsApp Chat', 'fts-law'); ?>
          </a>
        </div>
        <div class="hero-note">
          <?php _e('Serving hundreds of domestic and international clients: government agencies, private companies, political parties, and individuals.', 'fts-law'); ?>
        </div>
      </div>

      <!-- Right: Founder Card -->
      <div class="hero-card" aria-label="Founder Profile Card">
        <img
          src="https://law.fts-tech.co.id/wp-content/uploads/2026/03/IMG_20260331_145741.jpg"
          alt="<?php esc_attr_e('Syarif Anis, S.H. – CEO / Founder', 'fts-law'); ?>"
          loading="eager"
          width="280"
          height="350" />
        <div class="photo-caption">
          <strong><?php _e('Syarif Anis, S.H.', 'fts-law'); ?></strong>
          <span><?php _e('CEO / Founder', 'fts-law'); ?></span>
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
        <span><?php _e('Operating Since 2013', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🤝</span>
        <span><?php _e('Hundreds of Clients Served', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">⚖️</span>
        <span><?php _e('Professional Lawyers &amp; Notaries', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💬</span>
        <span><?php _e('Free Consultation', 'fts-law'); ?></span>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FOUNDER SECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-lawyer" id="lawyer">
    <div class="container two-col">

      <div class="profile-photo">
        <img
          src="https://law.fts-tech.co.id/wp-content/uploads/2026/03/IMG_20260331_145741.jpg"
          alt="<?php esc_attr_e('Syarif Anis, S.H. – CEO / Founder', 'fts-law'); ?>"
          loading="lazy" />
      </div>

      <div class="profile-bio">
        <h2 class="section-title"><?php _e('About Okelegal', 'fts-law'); ?></h2>
        <p class="section-subtitle">
          <?php _e('A law and business consulting firm backed by legal, corporate management, and information technology experts.', 'fts-law'); ?>
        </p>
        <h3 class="profile-name"><?php _e('Syarif Anis, S.H.', 'fts-law'); ?></h3>
        <p class="profile-credential"><strong><?php _e('CEO / Founder', 'fts-law'); ?></strong></p>
        <p>
          <?php _e('Okelegal Law Office has provided legal and business consulting since 2013, serving hundreds of domestic and international clients including government agencies, private companies, political parties, and individuals. Our services cover business consulting, company establishment, legal matters, quality management, and information technology.', 'fts-law'); ?>
        </p>
        <div class="pills">
          <span class="pill"><?php _e('Company Establishment', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Legal Consulting', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Notary / PPAT', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Intellectual Property', 'fts-law'); ?></span>
        </div>
        <div class="profile-cta">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'lawyer' )); ?>">
            <?php _e('Meet Our Team', 'fts-law'); ?>
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Free Consultation', 'fts-law'); ?>
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
      <h2 class="section-title"><?php _e('Why Clients Choose Okelegal', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('A reliable, professional, and affordable partner for your legal and business needs.', 'fts-law'); ?>
      </p>
      <div class="grid-4">

        <article class="card">
          <div class="card-icon" aria-hidden="true">⚖️</div>
          <h3><?php _e('Professional Lawyers', 'fts-law'); ?></h3>
          <p><?php _e('Experienced lawyers with more than 20 years in law, serving domestic and international clients.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">💬</div>
          <h3><?php _e('Free Consultation', 'fts-law'); ?></h3>
          <p><?php _e('Discuss your legal and business needs with us first, at no cost.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🏢</div>
          <h3><?php _e('All-in-One Support', 'fts-law'); ?></h3>
          <p><?php _e('Legal, licensing, notary, intellectual property, certification, tax, and IT services under one roof.', 'fts-law'); ?></p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🎁</div>
          <h3><?php _e('Affordable &amp; Rewarding', 'fts-law'); ?></h3>
          <p><?php _e('Competitive prices with bonuses and benefits — a profitable and sustainable business partner.', 'fts-law'); ?></p>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICES OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-services" id="services">
    <div class="container">
      <h2 class="section-title"><?php _e('Our Services', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Products and services from Okelegal for every stage of your business.', 'fts-law'); ?>
      </p>
      <div class="grid-4">

        <article class="card card--service">
          <span class="mini-label"><?php _e('Licensing', 'fts-law'); ?></span>
          <h3><?php _e('Business Legality &amp; Licensing', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('PT, CV &amp; UMKM establishment', 'fts-law'); ?></li>
            <li><?php _e('Cooperative &amp; Foundation', 'fts-law'); ?></li>
            <li><?php _e('PMA (foreign investment)', 'fts-law'); ?></li>
            <li><?php _e('NIB &amp; business permits', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('Legal', 'fts-law'); ?></span>
          <h3><?php _e('Legal Consulting &amp; Notary', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Corporate lawyers', 'fts-law'); ?></li>
            <li><?php _e('Arbitration &amp; litigation', 'fts-law'); ?></li>
            <li><?php _e('Family lawyers', 'fts-law'); ?></li>
            <li><?php _e('Notary / PPAT deeds', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('IP', 'fts-law'); ?></span>
          <h3><?php _e('Intellectual Property', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Trademark', 'fts-law'); ?></li>
            <li><?php _e('Copyright', 'fts-law'); ?></li>
            <li><?php _e('Patent', 'fts-law'); ?></li>
            <li><?php _e('Industrial design', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
            <?php _e('Learn More', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label"><?php _e('Business', 'fts-law'); ?></span>
          <h3><?php _e('Business Consulting &amp; Certification', 'fts-law'); ?></h3>
          <ul>
            <li><?php _e('Startup &amp; franchise consulting', 'fts-law'); ?></li>
            <li><?php _e('Securities, crypto &amp; Bappebti licensing', 'fts-law'); ?></li>
            <li><?php _e('Tax consulting', 'fts-law'); ?></li>
            <li><?php _e('ISO / SNI / Halal MUI', 'fts-law'); ?></li>
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
       BUSINESS ENTITY TYPES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-visa-strip">
    <div class="container">
      <h2 class="section-title"><?php _e('Business Entity Establishment', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We help you choose and establish the right legal entity for your business.', 'fts-law'); ?>
      </p>
      <div class="grid-3">
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT (Limited Liability Company)', 'fts-law'); ?></h4>
          <p><?php _e('Perseroan Terbatas: a legal entity with share capital.', 'fts-law'); ?></p>
        </a>
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🤝</span>
          <h4><?php _e('CV (Commanditaire Vennootschap)', 'fts-law'); ?></h4>
          <p><?php _e('A partnership for small and medium businesses.', 'fts-law'); ?></p>
        </a>
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🏪</span>
          <h4><?php _e('UMKM', 'fts-law'); ?></h4>
          <p><?php _e('Micro, small, and medium enterprise legality and licensing.', 'fts-law'); ?></p>
        </a>
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">👥</span>
          <h4><?php _e('Cooperative', 'fts-law'); ?></h4>
          <p><?php _e('Koperasi: a member-owned business entity.', 'fts-law'); ?></p>
        </a>
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🕊</span>
          <h4><?php _e('Foundation', 'fts-law'); ?></h4>
          <p><?php _e('Yayasan: for social, humanitarian, and religious purposes.', 'fts-law'); ?></p>
        </a>
        <a class="visa-tile" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🌏</span>
          <h4><?php _e('PMA', 'fts-law'); ?></h4>
          <p><?php _e('Foreign capital investment company (Penanaman Modal Asing).', 'fts-law'); ?></p>
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       VIRTUAL OFFICE STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-company-strip" id="company">
    <div class="container two-col two-col--reverse">

      <div class="company-strip__text">
        <span class="eyebrow"><?php _e('Virtual Office', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Business Address, Without the Overhead', 'fts-law'); ?></h2>
        <p>
          <?php _e('Rent a virtual office and use a business-center address in Jakarta, Bandung, and Bali for your company. More locations are planned in Surabaya, Aceh, Batam, and Kutai, along with partner offices across Asia, Southeast Asia, and Europe.', 'fts-law'); ?>
        </p>
        <ul class="check-list">
          <li><?php _e('Virtual office &amp; premium office', 'fts-law'); ?></li>
          <li><?php _e('Business-center addresses in Jakarta, Bandung, Bali', 'fts-law'); ?></li>
          <li><?php _e('Company legality &amp; licensing support', 'fts-law'); ?></li>
          <li><?php _e('IT system developer &amp; social media management', 'fts-law'); ?></li>
        </ul>
        <div class="hero-actions" style="margin-top:20px;">
          <a class="btn btn-gold" href="<?php echo esc_url(fts_page_url( 'services' )); ?>">
            <?php _e('See All Services', 'fts-law'); ?>
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(fts_page_url( 'contact' )); ?>">
            <?php _e('Contact Us', 'fts-law'); ?>
          </a>
        </div>
      </div>

      <div class="company-strip__cards">
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('2013', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Serving clients since', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('100s', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Domestic &amp; international clients', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('20+', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Years of lawyer experience', 'fts-law'); ?></span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num"><?php _e('3', 'fts-law'); ?></span>
          <span class="stat-card__label"><?php _e('Virtual office cities', 'fts-law'); ?></span>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TEAM PREVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="guide-area section-soft" id="team">
    <div class="container">
      <h2 class="section-title"><?php _e('Our Team', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Lawyers, corporate management, and technology experts working together for your business.', 'fts-law'); ?>
      </p>
      <?php
      $fts_groups = fts_team_groups();
      fts_team_cards( array_merge( $fts_groups['founder'], $fts_groups['lawyers'], $fts_groups['management'] ) );
      ?>
      <div class="services-more-link">
        <a href="<?php echo esc_url(fts_page_url( 'lawyer' )); ?>" class="btn btn-outline-navy">
          <?php _e('Meet the Full Team &rarr;', 'fts-law'); ?>
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CONSULTATION CTA BAND
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-cta" id="consultation">
    <div class="container">
      <div class="cta-band">
        <h2 class="cta-band__title"><?php _e('Need Legal or Business Advice?', 'fts-law'); ?></h2>
        <p class="cta-band__desc">
          <?php _e('Contact the Okelegal team for company establishment, licensing, legal consultation, intellectual property, and business consulting. Free initial consultation.', 'fts-law'); ?>
        </p>
        <div class="cta-band__actions">
          <a class="btn btn-white"
            href="<?php echo esc_url(fts_page_url( 'consultation' )); ?>">
            <?php _e('Free Consultation', 'fts-law'); ?>
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
        <?php _e('Practical guides and legal updates for businesses and individuals in Indonesia.', 'fts-law'); ?>
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
              <span class="mini-label"><?php _e('Company Legality', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('How to Establish a PT in Indonesia', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('A step-by-step guide to establishing a limited liability company, including deeds, NIB, and business permits.', 'fts-law'); ?>
              </p>
              <a class="card__read-more" href="<?php echo esc_url(fts_blog_url()); ?>"><?php _e('Read more &rarr;', 'fts-law'); ?></a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label"><?php _e('Intellectual Property', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('Trademark Registration: Why Your Brand Needs It', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('Understand trademark, copyright, and patent protection, and how to register your brand with DJKI.', 'fts-law'); ?>
              </p>
              <a class="card__read-more" href="<?php echo esc_url(fts_blog_url()); ?>"><?php _e('Read more &rarr;', 'fts-law'); ?></a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label"><?php _e('Business Entity', 'fts-law'); ?></span>
              <h3 class="card__title"><?php _e('Choosing Between PT, CV, and UMKM', 'fts-law'); ?></h3>
              <p class="card__excerpt">
                <?php _e('Compare the main business entity types to find the right structure for your business size and goals.', 'fts-law'); ?>
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
          <?php _e('Connect with our team for legal and business assistance.', 'fts-law'); ?>
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
                <option><?php _e('Company Establishment &amp; Licensing', 'fts-law'); ?></option>
                <option><?php _e('Legal Consultation', 'fts-law'); ?></option>
                <option><?php _e('Notary / PPAT', 'fts-law'); ?></option>
                <option><?php _e('Intellectual Property (HKI)', 'fts-law'); ?></option>
                <option><?php _e('Business Consulting &amp; Certification', 'fts-law'); ?></option>
                <option><?php _e('Virtual Office', 'fts-law'); ?></option>
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
            src="https://law.fts-tech.co.id/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-16-at-15.54.46.jpeg"
            alt="<?php esc_attr_e('Okelegal Law Office – Bandung', 'fts-law'); ?>"
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
                  src="https://www.google.com/maps?q=Pasteur+Gateway,+Jl.+Gn.+Batu+No.203A,+Sukaraja,+Cicendo,+Bandung+40175&amp;output=embed"
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