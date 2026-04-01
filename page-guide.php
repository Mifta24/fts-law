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
      <span class="eyebrow">Free Resource</span>
      <h1>Free Legal Guide for Foreign Investors in Indonesia</h1>
      <p class="page-hero__subtitle">
        Download our free legal guide covering Indonesian company law, foreign ownership rules,
        visa basics, and the most common legal mistakes made by foreign investors in Indonesia.
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

          <span class="eyebrow">What's Inside the Guide</span>
          <h2>How to Start &amp; Protect Your Business in Indonesia</h2>
          <p>
            This free legal guide was written by our licensed Indonesian lawyer specifically
            for foreign investors, entrepreneurs, and expatriates who are considering or
            already doing business in Indonesia.
          </p>
          <p>
            Whether you are setting up a PT&nbsp;PMA, applying for an Investor KITAS,
            or reviewing your existing business structure — this guide provides a
            practical legal foundation to help you make informed decisions.
          </p>

          <!-- Guide Content Pills -->
          <div class="pills" style="margin-bottom: 24px;">
            <span class="pill">Foreign Ownership Rules</span>
            <span class="pill">PT PMA Structure</span>
            <span class="pill">Nominee Shareholder Risks</span>
            <span class="pill">Director Removal Risks</span>
            <span class="pill">Visa &amp; KITAS Basics</span>
            <span class="pill">Investment Compliance</span>
            <span class="pill">Contract Protection</span>
            <span class="pill">Common Legal Mistakes</span>
          </div>

          <!-- Chapter List -->
          <div class="guide-chapters">
            <h3 class="guide-chapters__title">Guide Chapters</h3>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">01</span>
              <div>
                <strong>Can Foreigners Own a Business in Indonesia?</strong>
                <p>Overview of foreign ownership rules, the Positive Investment List,
                   and what sectors are open to 100% foreign investment.</p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">02</span>
              <div>
                <strong>Understanding PT PMA – The Foreign Investment Company</strong>
                <p>What a PT PMA is, how it works, minimum investment requirements,
                   and the basic ownership and governance structure.</p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">03</span>
              <div>
                <strong>The Nominee Shareholder Trap</strong>
                <p>Why using an Indonesian nominee shareholder is illegal, how it
                   puts your company at risk, and what to do instead.</p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">04</span>
              <div>
                <strong>Director &amp; Shareholder Rights Protection</strong>
                <p>How foreign investors can be removed from their own company and
                   what legal documents are needed to prevent this.</p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">05</span>
              <div>
                <strong>Visa &amp; KITAS Basics for Foreign Investors</strong>
                <p>Overview of KITAS, KITAP, and Investor KITAS — what you need to
                   legally reside and operate in Indonesia as a business owner.</p>
              </div>
            </div>

            <div class="guide-chapter-item">
              <span class="guide-chapter-item__num">06</span>
              <div>
                <strong>10 Common Legal Mistakes by Foreign Investors</strong>
                <p>The most frequently occurring legal errors that result in business
                   loss, visa problems, or compliance penalties for foreigners in Indonesia.</p>
              </div>
            </div>

          </div><!-- /.guide-chapters -->

        </div><!-- /.download-band__copy -->


        <!-- Right: Lead Form -->
        <div class="download-band__form">
          <div class="form-box">

            <div class="form-box__header">
              <span class="form-box__eyebrow">Free Download</span>
              <h3 class="form-box__title">Get the Free Legal Guide</h3>
              <p class="form-box__desc">
                Enter your details below and we will send you the guide by email
                — no payment required.
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
                <label for="guide_name" class="form-label">Full Name <span class="form-required">*</span></label>
                <input
                  type="text"
                  id="guide_name"
                  name="guide_name"
                  placeholder="Your full name"
                  required
                  autocomplete="name"
                />
              </div>

              <div class="form-field">
                <label for="guide_email" class="form-label">Email Address <span class="form-required">*</span></label>
                <input
                  type="email"
                  id="guide_email"
                  name="guide_email"
                  placeholder="your@email.com"
                  required
                  autocomplete="email"
                />
              </div>

              <div class="form-field">
                <label for="guide_country" class="form-label">Country <span class="form-required">*</span></label>
                <select id="guide_country" name="guide_country" required>
                  <option value="" disabled selected>Select your country</option>
                  <option value="Japan">Japan</option>
                  <option value="South Korea">South Korea</option>
                  <option value="China">China</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Australia">Australia</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Germany">Germany</option>
                  <option value="France">France</option>
                  <option value="Canada">Canada</option>
                  <option value="India">India</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="form-field">
                <label for="guide_topic" class="form-label">I'm most interested in</label>
                <select id="guide_topic" name="guide_topic">
                  <option value="" disabled selected>Select a topic (optional)</option>
                  <option value="Company Setup">Setting up a company in Indonesia</option>
                  <option value="Visa KITAS">Visa / KITAS for Indonesia</option>
                  <option value="Foreign Investment">Foreign investment regulations</option>
                  <option value="Contract Review">Contract drafting / review</option>
                  <option value="Legal Risk">Legal risk review</option>
                  <option value="General">General information</option>
                </select>
              </div>

              <div class="form-field form-field--checkbox">
                <label class="form-checkbox-label">
                  <input type="checkbox" name="guide_consent" value="1" required />
                  <span>
                    I agree to receive the guide and occasional legal updates by email.
                    I understand I can unsubscribe at any time.
                    View our <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>" target="_blank">Privacy Policy</a>.
                  </span>
                </label>
              </div>

              <button class="btn btn-gold guide-submit-btn" type="submit">
                📘 Send Me the Free Guide
              </button>

              <p class="form-disclaimer">
                🔒 Your information is confidential and will not be shared with third parties.
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

      <h2 class="section-title" style="text-align:center;">Who Is This Guide For?</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        This guide is written for foreign nationals who are considering or currently
        involved in business and investment in Indonesia.
      </p>

      <div class="grid-4">

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">🏢</span>
          <h4>Foreign Entrepreneurs</h4>
          <p>
            Considering setting up a PT PMA or already operating a foreign-owned
            business in Indonesia and want to understand your legal rights and risks.
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">💰</span>
          <h4>Foreign Investors</h4>
          <p>
            Investing capital into an Indonesian business or PT PMA and want to
            ensure your investment is legally protected against common risks.
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">✈️</span>
          <h4>Expatriates</h4>
          <p>
            Living or working in Indonesia and wanting to understand your residency
            rights, visa requirements, and legal status as a foreign national.
          </p>
        </div>

        <div class="guide-who-card">
          <span class="guide-who-card__icon" aria-hidden="true">🌏</span>
          <h4>International Business Owners</h4>
          <p>
            Operating an international business and considering Indonesia as a market
            — wanting to understand the legal framework before committing to investment.
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
            <strong>100% Confidential</strong>
            <p>Your name and email are used only to send you the guide. We do not sell or share your data.</p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">⚖️</span>
          <div>
            <strong>Written by a Licensed Lawyer</strong>
            <p>The guide is written by our PERADI-registered Indonesian advocate — not a visa agent or consultant.</p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">📘</span>
          <div>
            <strong>Completely Free</strong>
            <p>No payment, no credit card, no hidden fees. Just enter your email and receive the guide.</p>
          </div>
        </div>

        <div class="guide-trust-band__item">
          <span class="guide-trust-band__icon" aria-hidden="true">🌐</span>
          <div>
            <strong>Written in English</strong>
            <p>The guide is written in clear, plain English for international clients — no legal jargon.</p>
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

      <h2 class="section-title" style="text-align:center;">After the Guide, You May Need</h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url('/pt-pma') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4>PT PMA Setup</h4>
          <p>Ready to set up your foreign-owned company in Indonesia? Our lawyer manages the complete legal process.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/investor-visa') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4>Investor KITAS</h4>
          <p>Get your legal stay permit as a foreign shareholder in a PT PMA. We handle the full application.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/legal-risk') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4>Legal Risk Consultation</h4>
          <p>Already operating in Indonesia? Get a professional legal risk review of your current business structure.</p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    'Prefer to Speak Directly with Our Lawyer?',
    'Skip the guide and book a direct consultation with our licensed Indonesian lawyer. We will assess your specific situation and provide personalised legal advice for your visa, company, or investment matter in Indonesia.'
  ); ?>

</main>

<?php get_footer(); ?>
