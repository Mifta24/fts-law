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
        <span class="eyebrow">Foreign Legal &amp; Visa Support</span>
        <h1>Legal Support for<br>Foreigners in Indonesia</h1>
        <p>Professional legal services for foreign investors, companies, and residents.</p>
        <div class="hero-actions">
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/consultation')); ?>">
            Book Consultation
          </a>
          <a class="btn btn-green"
            href="<?php echo esc_url(fts_wa_url()); ?>"
            target="_blank"
            rel="noopener noreferrer">
            💬 WhatsApp Chat
          </a>
        </div>
        <div class="hero-note">
          Lawyer-supervised legal services for visas, company setup, foreign investment,
          contract review, and business advisory in Indonesia.
        </div>
      </div>

      <!-- Right: Lawyer Card -->
      <div class="hero-card" aria-label="Lawyer Profile Card">
        <img
          src="https://law.fts.biz.id/wp-content/uploads/2026/03/IMG_20260331_145741.jpg"
          alt="Syarif – Licensed Indonesian Lawyer"
          loading="eager"
          width="280"
          height="350" />
        <div class="photo-caption">
          <strong>Syarif</strong>
          <span>Licensed Indonesian Lawyer</span>
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
        <span>Licensed Indonesian Lawyer</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🌍</span>
        <span>Foreign Investor Legal Support</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">📄</span>
        <span>Visa &amp; Immigration Services</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💼</span>
        <span>Corporate Law &amp; Business Setup</span>
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
          alt="Syarif – Licensed Indonesian Lawyer"
          loading="lazy" />
      </div>

      <!-- Bio -->
      <div class="profile-bio">
        <h2 class="section-title">Meet Your Lawyer</h2>
        <p class="section-subtitle">
          Trusted legal representation for foreign investors, business owners, and
          expatriates navigating Indonesian law.
        </p>

        <h3 class="profile-name">Syarif</h3>
        <p class="profile-credential"><strong>Licensed Indonesian Lawyer</strong></p>
        <p>
          Experienced in immigration law, corporate law, and foreign investment matters.
          Providing lawyer-supervised legal services for KITAS &amp; KITAP visas,
          PT&nbsp;PMA company setup, shareholder agreements, and business legal advisory.
        </p>

        <p>
          <strong>Yoshi Nakagawa</strong> &mdash; International Legal Consultant<br>
          Supporting international clients with legal coordination and business advisory
          across Japan, Singapore, and Southeast Asia.
        </p>

        <div class="pills">
          <span class="pill">Immigration Law</span>
          <span class="pill">Corporate Law</span>
          <span class="pill">Foreign Investment Law</span>
          <span class="pill">Contract Drafting</span>
        </div>

        <div class="profile-cta">
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/lawyer')); ?>">
            View Full Profile
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(home_url('/consultation')); ?>">
            Book Consultation
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
      <h2 class="section-title">Why Foreign Clients Choose Us</h2>
      <p class="section-subtitle">
        We differentiate from generic visa agents by offering lawyer-supervised services,
        deep investor experience, and transparent legal support.
      </p>
      <div class="grid-4">

        <article class="card">
          <div class="card-icon" aria-hidden="true">⚖️</div>
          <h3>Lawyer-Supervised Services</h3>
          <p>All legal services are handled or directly supervised by a licensed Indonesian lawyer.</p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🏢</div>
          <h3>Foreign Investor Experience</h3>
          <p>Extensive experience supporting international investors and foreign-owned businesses in Indonesia.</p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🔍</div>
          <h3>Transparent Legal Process</h3>
          <p>Clear explanation of Indonesian law before starting a company or visa process. No surprises.</p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🌐</div>
          <h3>International Client Support</h3>
          <p>Practical bilingual support for foreign clients across all legal and business matters.</p>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICES OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-services" id="services">
    <div class="container">
      <h2 class="section-title">Our Legal Services</h2>
      <p class="section-subtitle">
        Comprehensive legal support for every stage of your journey in Indonesia —
        from arrival to business operations.
      </p>
      <div class="grid-4">

        <article class="card card--service">
          <span class="mini-label">Visa</span>
          <h3>Visa &amp; Immigration</h3>
          <ul>
            <li>Investor KITAS</li>
            <li>Working KITAS</li>
            <li>KITAP Permanent Stay</li>
            <li>Visa Extension</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/visa')); ?>">
            Learn More
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label">Business Setup</span>
          <h3>Company Setup</h3>
          <ul>
            <li>PT PMA Registration</li>
            <li>Business Licensing</li>
            <li>OSS &amp; NIB Registration</li>
            <li>Foreign Ownership</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/company-setup')); ?>">
            Learn More
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label">Corporate Legal</span>
          <h3>Corporate Legal Services</h3>
          <ul>
            <li>Shareholder Agreements</li>
            <li>Contract Review</li>
            <li>Legal Advisory</li>
            <li>Corporate Governance</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/business-legal')); ?>">
            Learn More
          </a>
        </article>

        <article class="card card--service">
          <span class="mini-label">Consulting</span>
          <h3>Business Legal Consulting</h3>
          <ul>
            <li>Legal Risk Review</li>
            <li>Investment Compliance</li>
            <li>Contract Drafting</li>
            <li>Market Entry Support</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/services')); ?>">
            Learn More
          </a>
        </article>

      </div>

      <div class="services-more-link">
        <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline-navy">
          View All Services &rarr;
        </a>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       VISA OVERVIEW STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-visa-strip">
    <div class="container">
      <h2 class="section-title">Visa &amp; Immigration Support</h2>
      <p class="section-subtitle">
        We assist foreign nationals with all types of Indonesian stay permits and visas —
        handled by a licensed lawyer.
      </p>
      <div class="grid-4">

        <a class="visa-tile" href="<?php echo esc_url(home_url('/kitas')); ?>">
          <span class="visa-tile__icon" aria-hidden="true">📋</span>
          <h4>KITAS</h4>
          <p>Temporary Stay Permit for foreign nationals working or investing in Indonesia.</p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(home_url('/kitap')); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🏠</span>
          <h4>KITAP</h4>
          <p>Permanent Stay Permit for long-term foreign residents in Indonesia.</p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(home_url('/investor-visa')); ?>">
          <span class="visa-tile__icon" aria-hidden="true">💼</span>
          <h4>Investor Visa</h4>
          <p>KITAS for foreign business owners with a PT PMA company in Indonesia.</p>
        </a>

        <a class="visa-tile" href="<?php echo esc_url(home_url('/visa-extension')); ?>">
          <span class="visa-tile__icon" aria-hidden="true">🗓</span>
          <h4>Visa Extension</h4>
          <p>Legal support for extending your stay permit before it expires.</p>
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
        <span class="eyebrow">Company Setup</span>
        <h2 class="section-title">Start Your Business in Indonesia</h2>
        <p>
          Foreign investors can legally own and operate a business in Indonesia through
          a PT&nbsp;PMA (Penanaman Modal Asing) company. We guide you through the entire
          setup process — from structure planning to government registration.
        </p>
        <ul class="check-list">
          <li>PT PMA company formation</li>
          <li>Foreign ownership structure advice</li>
          <li>OSS / NIB business licensing</li>
          <li>Director &amp; Commissioner setup</li>
          <li>Shareholder agreement drafting</li>
        </ul>
        <div class="hero-actions" style="margin-top:20px;">
          <a class="btn btn-gold" href="<?php echo esc_url(home_url('/pt-pma')); ?>">
            PT PMA Setup Details
          </a>
          <a class="btn btn-outline" href="<?php echo esc_url(home_url('/company-setup')); ?>">
            Company Setup Overview
          </a>
        </div>
      </div>

      <div class="company-strip__cards">
        <div class="stat-card">
          <span class="stat-card__num">PT PMA</span>
          <span class="stat-card__label">Foreign Investment Company</span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num">100%</span>
          <span class="stat-card__label">Foreign ownership in selected sectors</span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num">OSS</span>
          <span class="stat-card__label">Online Single Submission licensing</span>
        </div>
        <div class="stat-card">
          <span class="stat-card__num">NIB</span>
          <span class="stat-card__label">Business Identity Number required</span>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FREE LEGAL GUIDE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="guide-area section-soft" id="guide">
    <div class="container">
      <h2 class="section-title">Foreign Investor Legal Guide</h2>
      <p class="section-subtitle">
        Educational articles to help foreign investors understand Indonesian law
        before making decisions.
      </p>
      <div class="grid-3">

        <article class="card">
          <span class="mini-label">Guide</span>
          <h3>Can Foreigners Own a Company in Indonesia?</h3>
          <p>Understand foreign ownership rules, PT&nbsp;PMA basics, and legal structure
            options available to international investors.</p>
          <a href="<?php echo esc_url(home_url('/foreign-investment')); ?>"
            class="card__read-more">Read Guide &rarr;</a>
        </article>

        <article class="card">
          <span class="mini-label">Guide</span>
          <h3>PT PMA Company Structure Explained</h3>
          <p>Learn about shareholders, directors, commissioners, minimum capital
            requirements, and licensing steps for a PT&nbsp;PMA in Indonesia.</p>
          <a href="<?php echo esc_url(home_url('/pt-pma')); ?>"
            class="card__read-more">Read Guide &rarr;</a>
        </article>

        <article class="card">
          <span class="mini-label">Guide</span>
          <h3>How Foreigners Lose Their Company in Indonesia</h3>
          <p>The legal risks of nominee shareholders, director removal, share dilution,
            and shareholder disputes that every foreign investor must understand.</p>
          <a href="<?php echo esc_url(home_url('/legal-risk')); ?>"
            class="card__read-more">Read Guide &rarr;</a>
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
          <h2>Free Legal Guide for Foreign Investors</h2>
          <p>
            Download our free guide explaining Indonesian company law, foreign ownership
            risks, shareholder protection, and common legal mistakes made by foreign
            investors.
          </p>
          <div class="pills">
            <span class="pill">Foreign Ownership Rules</span>
            <span class="pill">PT PMA Structure</span>
            <span class="pill">Nominee Shareholder Risks</span>
            <span class="pill">Director Removal Risks</span>
            <span class="pill">Visa &amp; Immigration Basics</span>
          </div>
        </div>

        <div class="form-box">
          <h3>Download Free Guide</h3>
          <?php
          $guide_form_id = fts_cf7_guide_form_id();
          if ( shortcode_exists('contact-form-7') && $guide_form_id ) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr( $guide_form_id ) . '" title="Free Legal Guide Form"]');
          else : ?>
            <form class="guide-form" id="guide-download-form" method="post" action="<?php echo esc_url(home_url('/guide')); ?>">
              <?php wp_nonce_field('fts_guide_download', 'fts_guide_nonce'); ?>
              <input type="text" name="guide_name" placeholder="Full Name" required />
              <input type="email" name="guide_email" placeholder="Email Address" required />
              <select name="guide_country" required>
                <option value="" disabled selected>Select Country</option>
                <option>Japan</option>
                <option>South Korea</option>
                <option>China</option>
                <option>Singapore</option>
                <option>Australia</option>
                <option>United States</option>
                <option>United Kingdom</option>
                <option>Netherlands</option>
                <option>Germany</option>
                <option>Other</option>
              </select>
              <button class="btn btn-gold" type="submit">Send Download Link</button>
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
        <h2 class="cta-band__title">Need Legal Advice in Indonesia?</h2>
        <p class="cta-band__desc">
          Contact our legal team for professional assistance with company setup,
          visas, foreign investment, and business legal matters.
          First consultation available online.
        </p>
        <div class="cta-band__actions">
          <a class="btn btn-white"
            href="<?php echo esc_url(home_url('/consultation')); ?>">
            Book Consultation
          </a>
          <a class="btn btn-green"
            href="<?php echo esc_url(fts_wa_url()); ?>"
            target="_blank"
            rel="noopener noreferrer">
            💬 WhatsApp
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
      <h2 class="section-title">Latest Legal Insights</h2>
      <p class="section-subtitle">
        Practical guides and legal updates for foreigners living and investing in Indonesia.
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
              <span class="mini-label">Visa &amp; Immigration</span>
              <h3 class="card__title">How to Get Investor KITAS in Indonesia</h3>
              <p class="card__excerpt">
                A step-by-step guide to applying for an Investor KITAS, including
                eligibility, required documents, and processing time.
              </p>
              <a class="card__read-more" href="<?php echo esc_url(home_url('/blog')); ?>">Read more &rarr;</a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label">Company Setup</span>
              <h3 class="card__title">How to Start a Company in Indonesia as a Foreigner</h3>
              <p class="card__excerpt">
                Everything foreign investors need to know about setting up a PT&nbsp;PMA —
                from minimum capital to business licensing.
              </p>
              <a class="card__read-more" href="<?php echo esc_url(home_url('/blog')); ?>">Read more &rarr;</a>
            </div>
          </article>

          <article class="card card--blog">
            <div class="card__body">
              <span class="mini-label">Business Law</span>
              <h3 class="card__title">Foreign Ownership Rules in Indonesia (2025)</h3>
              <p class="card__excerpt">
                Understanding the Negative Investment List, BKPM regulations, and which
                sectors are open to 100% foreign ownership.
              </p>
              <a class="card__read-more" href="<?php echo esc_url(home_url('/blog')); ?>">Read more &rarr;</a>
            </div>
          </article>

        </div>
      <?php endif; ?>

      <div style="text-align:center;margin-top:32px;">
        <a class="btn btn-outline-navy" href="<?php echo esc_url(home_url('/blog')); ?>">
          View All Articles &rarr;
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
        <h2 class="section-title">Contact Our Office</h2>
        <p class="section-subtitle contact-subtitle-center">
          Connect with our team for legal and visa assistance in Indonesia.
        </p>
      </div>

      <div class="contact-panel-grid">

        <!-- Contact Form -->
        <div class="card-gradient contact-form-card">
          <h3 class="contact-form-title">Send Us a Message</h3>
          <?php
          $contact_form_id = fts_cf7_contact_form_id();
          if ( shortcode_exists('contact-form-7') && $contact_form_id ) :
            echo do_shortcode('[contact-form-7 id="' . esc_attr( $contact_form_id ) . '" title="Contact Form"]');
          else : ?>
            <form class="contact-form" id="homepage-contact-form" method="post">
              <?php wp_nonce_field('fts_contact_form', 'fts_contact_nonce'); ?>
              <div class="contact-form-grid">
                <input type="text" name="first_name" placeholder="First Name" required />
                <input type="text" name="last_name" placeholder="Last Name" />
              </div>
              <div class="contact-form-grid">
                <input type="email" name="email" placeholder="Email Address" required />
                <input type="text" name="whatsapp" placeholder="WhatsApp Number" />
              </div>
              <input type="text" name="company" placeholder="Company Name (Optional)" />
              <select name="legal_matter">
                <option value="" disabled selected>Legal Matter</option>
                <option>Visa &amp; Immigration</option>
                <option>Company Setup (PT PMA)</option>
                <option>Foreign Investment</option>
                <option>Contract Review</option>
                <option>Business Legal Support</option>
                <option>Other</option>
              </select>
              <textarea name="message" placeholder="Please describe your legal matter…" required></textarea>
              <button class="btn btn-gold contact-submit" type="submit">Send Message</button>
            </form>
          <?php endif; ?>
        </div>

        <!-- Contact Info -->
        <div class="card-gradient contact-info-card">
          <h3 class="contact-form-title">Contact Information</h3>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">📍</span>
            <div>
              <h4>Office Address</h4>
              <p><?php echo esc_html(fts_office_address()); ?></p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">✉️</span>
            <div>
              <h4>Email</h4>
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
              <h4>WhatsApp</h4>
              <p>
                <a href="<?php echo esc_url(fts_wa_url()); ?>"
                  target="_blank"
                  rel="noopener noreferrer">
                  Chat on WhatsApp
                </a>
              </p>
            </div>
          </div>

          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🕐</span>
            <div>
              <h4>Office Hours</h4>
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
            alt="Law Office – Jakarta"
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
              title="Law Office Location Map"></iframe>
          <?php else : ?>
            <div class="map-placeholder">
              <p>Please visit <a href="https://www.google.com/maps">Google Maps</a> to view the map. <br />Or use
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.671136651886!2d106.78509397610306!3d-6.174763644527437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7002212556b%3A0xd553386b470af88!2sNEO%20SOHO%20APARTEMENT!5e0!3m2!1sid!2sid!4v1753431520442!5m2!1sid!2sid"
                  loading="lazy"
                  allowfullscreen
                  referrerpolicy="no-referrer-when-downgrade"
                  title="Office Location Map"></iframe>
                <!-- <strong>Appearance → Customize → Contact Information</strong>. -->
              </p>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- /.contact-media-bottom -->

    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>