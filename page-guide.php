<?php
/**
 * FTS Law – Free Legal Guide Download Page
 * Template for: /guide
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero page-hero--guide">
    <div class="container">
      <span class="eyebrow"><?php _e('Free Resource', 'fts-law'); ?></span>
      <h1><?php _e('Free Legal Guide for Foreign Investors in Indonesia', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Download our free legal guide covering Indonesian company law, foreign ownership rules, visa basics, and the most common legal mistakes made by foreign investors in Indonesia.', 'fts-law'); ?>
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       LEAD FORM + GUIDE SUMMARY
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-guide-main">
    <div class="container">
      <div class="download-band">

        <!-- Left: Guide Info -->
        <div class="download-band__copy">

          <span class="eyebrow"><?php _e('What\'s Inside the Guide', 'fts-law'); ?></span>
          <h2><?php _e('How to Start &amp; Protect Your Business in Indonesia', 'fts-law'); ?></h2>
          <p>
            <?php _e('This free legal guide was written by our licensed Indonesian lawyer specifically for foreign investors, entrepreneurs, and expatriates who are considering or already doing business in Indonesia.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('Whether you are setting up a PT&nbsp;PMA, applying for an Investor KITAS, or reviewing your existing business structure — this guide provides a practical legal foundation to help you make informed decisions.', 'fts-law'); ?>
          </p>

          <!-- Guide Content Pills -->
          <div class="pills" style="margin-bottom: 24px;">
            <span class="pill"><?php _e('Foreign Ownership Rules', 'fts-law'); ?></span>
            <span class="pill"><?php _e('PT PMA Structure', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Nominee Shareholder Risks', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Director Removal Risks', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Visa &amp; KITAS Basics', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Investment Compliance', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Contract Protection', 'fts-law'); ?></span>
            <span class="pill"><?php _e('Common Legal Mistakes', 'fts-law'); ?></span>
          </div>

          <!-- Chapter List -->
          <div class="guide-chapters">
            <h3 class="guide-chapters__title"><?php _e('Guide Chapters', 'fts-law'); ?></h3>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">01</span>
              <div>
                <strong><?php _e('Can Foreigners Own a Business in Indonesia?', 'fts-law'); ?></strong>
                <p><?php _e('Overview of foreign ownership rules, the Positive Investment List, and what sectors are open to 100% foreign investment.', 'fts-law'); ?></p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">02</span>
              <div>
                <strong><?php _e('Understanding PT PMA – The Foreign Investment Company', 'fts-law'); ?></strong>
                <p><?php _e('What a PT PMA is, how it works, minimum investment requirements, and the basic ownership and governance structure.', 'fts-law'); ?></p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">03</span>
              <div>
                <strong><?php _e('The Nominee Shareholder Trap', 'fts-law'); ?></strong>
                <p><?php _e('Why using an Indonesian nominee shareholder is illegal, how it puts your company at risk, and what to do instead.', 'fts-law'); ?></p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">04</span>
              <div>
                <strong><?php _e('Director &amp; Shareholder Rights Protection', 'fts-law'); ?></strong>
                <p><?php _e('How foreign investors can be removed from their own company and what legal documents are needed to prevent this.', 'fts-law'); ?></p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">05</span>
              <div>
                <strong><?php _e('Visa &amp; KITAS Basics for Foreign Investors', 'fts-law'); ?></strong>
                <p><?php _e('Overview of KITAS, KITAP, and Investor KITAS — what you need to legally reside and operate in Indonesia as a business owner.', 'fts-law'); ?></p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">06</span>
              <div>
                <strong><?php _e('10 Common Legal Mistakes by Foreign Investors', 'fts-law'); ?></strong>
                <p><?php _e('The most frequently occurring legal errors that result in business loss, visa problems, or compliance penalties for foreigners in Indonesia.', 'fts-law'); ?></p>
              </div>
            </div>

          </div><!-- /.guide-chapters -->

        </div><!-- /.download-band__copy -->


        <!-- Right: Lead Form -->
        <div class="download-band__form">
          <div class="form-box">

            <div class="form-box__header">
              <span class="form-box__eyebrow"><?php _e('Free Download', 'fts-law'); ?></span>
              <h3 class="form-box__title"><?php _e('Get the Free Legal Guide', 'fts-law'); ?></h3>
              <p class="form-box__desc">
                <?php _e('Enter your details below and we will send you the guide by email — no payment required.', 'fts-law'); ?>
              </p>
            </div>

            <?php
            /**
             * CONTACT FORM 7 INTEGRATION
             *
             * After installing Contact Form 7:
             * 1. Create a new form titled "Free Legal Guide Form"
             * 2. Add fields: Name (text), Email (email), Country (select), Message (optional)
             * 3. Configure mail to send the guide PDF link or email it via automation
             * 4. Replace the HTML form below with the CF7 shortcode, e.g.:
             *    echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Free Legal Guide Form"]');
             */
            $guide_form_id = fts_cf7_guide_form_id();
            if ( shortcode_exists('contact-form-7') && $guide_form_id ) :
              echo do_shortcode('[contact-form-7 id="' . esc_attr( $guide_form_id ) . '" title="Free Legal Guide Form"]');
            else :
            ?>

            <form
              class="guide-lead-form"
              id="guide-download-form"
              method="post"
              action="<?php echo esc_url( home_url('/guide') ); ?>"
              novalidate
            >
              <?php wp_nonce_field('fts_guide_download', 'fts_guide_nonce'); ?>

              <div class="form-field">
                <label for="guide_name" class="form-label"><?php _e('Full Name', 'fts-law'); ?> <span class="form-required">*</span></label>
                <input
                  type="text"
                  id="guide_name"
                  name="guide_name"
                  placeholder="<?php esc_attr_e('Your full name', 'fts-law'); ?>"
                  required
                  autocomplete="name"
                />
              </div>

              <div class="form-field">
                <label for="guide_email" class="form-label"><?php _e('Email Address', 'fts-law'); ?> <span class="form-required">*</span></label>
                <input
                  type="email"
                  id="guide_email"
                  name="guide_email"
                  placeholder="<?php esc_attr_e('your@email.com', 'fts-law'); ?>"
                  required
                  autocomplete="email"
                />
              </div>

              <div class="form-field">
                <label for="guide_country" class="form-label"><?php _e('Country', 'fts-law'); ?> <span class="form-required">*</span></label>
                <select id="guide_country" name="guide_country" required>
                  <option value="" disabled selected><?php _e('Select your country', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Japan', 'fts-law'); ?>"><?php _e('Japan', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('South Korea', 'fts-law'); ?>"><?php _e('South Korea', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('China', 'fts-law'); ?>"><?php _e('China', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Singapore', 'fts-law'); ?>"><?php _e('Singapore', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Australia', 'fts-law'); ?>"><?php _e('Australia', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('United States', 'fts-law'); ?>"><?php _e('United States', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('United Kingdom', 'fts-law'); ?>"><?php _e('United Kingdom', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Netherlands', 'fts-law'); ?>"><?php _e('Netherlands', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Germany', 'fts-law'); ?>"><?php _e('Germany', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('France', 'fts-law'); ?>"><?php _e('France', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Canada', 'fts-law'); ?>"><?php _e('Canada', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('India', 'fts-law'); ?>"><?php _e('India', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Malaysia', 'fts-law'); ?>"><?php _e('Malaysia', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Other', 'fts-law'); ?>"><?php _e('Other', 'fts-law'); ?></option>
                </select>
              </div>

              <div class="form-field">
                <label for="guide_topic" class="form-label"><?php _e('I\'m most interested in', 'fts-law'); ?></label>
                <select id="guide_topic" name="guide_topic">
                  <option value="" disabled selected><?php _e('Select a topic (optional)', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Company Setup', 'fts-law'); ?>"><?php _e('Setting up a company in Indonesia', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Visa KITAS', 'fts-law'); ?>"><?php _e('Visa / KITAS for Indonesia', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Foreign Investment', 'fts-law'); ?>"><?php _e('Foreign investment regulations', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Contract Review', 'fts-law'); ?>"><?php _e('Contract drafting / review', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('Legal Risk', 'fts-law'); ?>"><?php _e('Legal risk review', 'fts-law'); ?></option>
                  <option value="<?php esc_attr_e('General', 'fts-law'); ?>"><?php _e('General information', 'fts-law'); ?></option>
                </select>
              </div>

              <div class="form-field form-field--checkbox">
                <label class="form-checkbox-label">
                  <input type="checkbox" name="guide_consent" value="1" required />
                  <span>
                    <?php _e('I agree to receive the guide and occasional legal updates by email. I understand I can unsubscribe at any time. View our', 'fts-law'); ?>
                    <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>" target="_blank"><?php _e('Privacy Policy', 'fts-law'); ?></a>.
                  </span>
                </label>
              </div>

              <button class="btn btn-gold guide-submit-btn" type="submit">
                📘 <?php _e('Send Me the Free Guide', 'fts-law'); ?>
              </button>

              <p class="form-disclaimer">
                🔒 <?php _e('Your information is confidential and will not be shared with third parties.', 'fts-law'); ?>
              </p>

            </form>

            <?php endif; ?>

          </div><!-- /.form-box -->
        </div><!-- /.download-band__form -->

      </div><!-- /.download-band -->
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHO THIS GUIDE IS FOR
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-guide-who">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Who Is This Guide For?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('This guide is written for foreign nationals who are considering or currently involved in business and investment in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('Foreign Entrepreneurs', 'fts-law'); ?></h4>
          <p>
            <?php _e('Considering setting up a PT PMA or already operating a foreign-owned business in Indonesia and want to understand your legal rights and risks.', 'fts-law'); ?>
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">💰</span>
          <h4><?php _e('Foreign Investors', 'fts-law'); ?></h4>
          <p>
            <?php _e('Investing capital into an Indonesian business or PT PMA and want to ensure your investment is legally protected against common risks.', 'fts-law'); ?>
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">✈️</span>
          <h4><?php _e('Expatriates', 'fts-law'); ?></h4>
          <p>
            <?php _e('Living or working in Indonesia and wanting to understand your residency rights, visa requirements, and legal status as a foreign national.', 'fts-law'); ?>
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">🌏</span>
          <h4><?php _e('International Business Owners', 'fts-law'); ?></h4>
          <p>
            <?php _e('Operating an international business and considering Indonesia as a market — wanting to understand the legal framework before committing to investment.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TRUST + CONFIDENTIALITY NOTE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-guide-trust">
    <div class="container">

      <div class="guide-trust-band">

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">🔒</span>
          <div>
            <strong><?php _e('100% Confidential', 'fts-law'); ?></strong>
            <p><?php _e('Your name and email are used only to send you the guide. We do not sell or share your data.', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">⚖️</span>
          <div>
            <strong><?php _e('Written by a Licensed Lawyer', 'fts-law'); ?></strong>
            <p><?php _e('The guide is written by our PERADI-registered Indonesian advocate — not a visa agent or consultant.', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">📘</span>
          <div>
            <strong><?php _e('Completely Free', 'fts-law'); ?></strong>
            <p><?php _e('No payment, no credit card, no hidden fees. Just enter your email and receive the guide.', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">🌐</span>
          <div>
            <strong><?php _e('Written in English', 'fts-law'); ?></strong>
            <p><?php _e('The guide is written in clear, plain English for international clients — no legal jargon.', 'fts-law'); ?></p>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('After the Guide, You May Need', 'fts-law'); ?></h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url('/pt-pma') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Ready to set up your foreign-owned company in Indonesia? Our lawyer manages the complete legal process.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/investor-visa') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4><?php _e('Investor KITAS', 'fts-law'); ?></h4>
          <p><?php _e('Get your legal stay permit as a foreign shareholder in a PT PMA. We handle the full application.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/legal-risk') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Already operating in Indonesia? Get a professional legal risk review of your current business structure.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    __('Prefer to Speak Directly with Our Lawyer?', 'fts-law'),
    __('Skip the guide and book a direct consultation with our licensed Indonesian lawyer. We will assess your specific situation and provide personalised legal advice for your visa, company, or investment matter in Indonesia.', 'fts-law')
  ); ?>

</main>

<?php get_footer(); ?>
