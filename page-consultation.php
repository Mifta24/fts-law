<?php
/**
 * FTS Law – Consultation Booking Page
 * Template for: /consultation
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
      <span class="eyebrow"><?php _e('Get Legal Support', 'fts-law'); ?></span>
      <h1><?php _e('Book a Legal Consultation', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Speak directly with our licensed Indonesian lawyer about your visa, company setup, foreign investment, or business legal matter. Available online and in-person.', 'fts-law'); ?>
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       CONSULTATION OPTIONS STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <div class="trust-bar">
    <div class="container trust-grid">
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💻</span>
        <span><?php _e('Online Consultation Available', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🏢</span>
        <span><?php _e('In-Person – Jakarta Office', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💬</span>
        <span><?php _e('WhatsApp Consultation', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🔒</span>
        <span><?php _e('100% Confidential', 'fts-law'); ?></span>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════
       MAIN CONTENT: FORM + CONTACT OPTIONS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-consultation-main">
    <div class="container">
      <div class="consultation-layout">

        <!-- ── Left: Booking Form ── -->
        <div class="consultation-form-col">

          <div class="card-gradient consultation-form-card">
            <h2 class="consultation-form-card__title"><?php _e('Send Us Your Legal Inquiry', 'fts-law'); ?></h2>
            <p class="consultation-form-card__desc">
              <?php _e('Fill in the form below and our team will respond within 1 business day to confirm your consultation appointment or answer your inquiry. All information is treated with full legal confidentiality.', 'fts-law'); ?>
            </p>

            <?php
            // ── Replace shortcode ID with your CF7 consultation form ID after setup ──
            // Example: echo do_shortcode('[contact-form-7 id="123" title="Consultation Form"]');
            $consultation_form_id = fts_cf7_consultation_form_id();
            if ( shortcode_exists('contact-form-7') && $consultation_form_id ) :
              echo do_shortcode('[contact-form-7 id="' . esc_attr( $consultation_form_id ) . '" title="Consultation Booking Form"]');
            else : ?>

            <form
              class="consultation-form"
              id="consultation-booking-form"
              method="post"
              action="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"
            >
              <?php wp_nonce_field('fts_consultation_submit', 'fts_consult_nonce'); ?>

              <!-- Name row -->
              <div class="form-row form-row--2col">
                <div class="form-group">
                  <label for="consult_first_name"><?php _e('First Name', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                  <input
                    type="text"
                    id="consult_first_name"
                    name="first_name"
                    placeholder="<?php esc_attr_e('Your first name', 'fts-law'); ?>"
                    required
                    autocomplete="given-name"
                  />
                </div>
                <div class="form-group">
                  <label for="consult_last_name"><?php _e('Last Name', 'fts-law'); ?></label>
                  <input
                    type="text"
                    id="consult_last_name"
                    name="last_name"
                    placeholder="<?php esc_attr_e('Your last name', 'fts-law'); ?>"
                    autocomplete="family-name"
                  />
                </div>
              </div>

              <!-- Email + WhatsApp row -->
              <div class="form-row form-row--2col">
                <div class="form-group">
                  <label for="consult_email"><?php _e('Email Address', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                  <input
                    type="email"
                    id="consult_email"
                    name="email"
                    placeholder="<?php esc_attr_e('your@email.com', 'fts-law'); ?>"
                    required
                    autocomplete="email"
                  />
                </div>
                <div class="form-group">
                  <label for="consult_whatsapp"><?php _e('WhatsApp Number', 'fts-law'); ?></label>
                  <input
                    type="tel"
                    id="consult_whatsapp"
                    name="whatsapp"
                    placeholder="<?php esc_attr_e('+62 8xx xxxx xxxx', 'fts-law'); ?>"
                    autocomplete="tel"
                  />
                </div>
              </div>

              <!-- Nationality -->
              <div class="form-group">
                <label for="consult_nationality"><?php _e('Nationality', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                <select id="consult_nationality" name="nationality" required>
                  <option value="" disabled selected><?php _e('Select your nationality', 'fts-law'); ?></option>
                  <option><?php _e('Japanese', 'fts-law'); ?></option>
                  <option><?php _e('South Korean', 'fts-law'); ?></option>
                  <option><?php _e('Chinese', 'fts-law'); ?></option>
                  <option><?php _e('Singaporean', 'fts-law'); ?></option>
                  <option><?php _e('Australian', 'fts-law'); ?></option>
                  <option><?php _e('American (US)', 'fts-law'); ?></option>
                  <option><?php _e('British (UK)', 'fts-law'); ?></option>
                  <option><?php _e('Dutch', 'fts-law'); ?></option>
                  <option><?php _e('German', 'fts-law'); ?></option>
                  <option><?php _e('French', 'fts-law'); ?></option>
                  <option><?php _e('Indian', 'fts-law'); ?></option>
                  <option><?php _e('Malaysian', 'fts-law'); ?></option>
                  <option><?php _e('Indonesian', 'fts-law'); ?></option>
                  <option><?php _e('Other', 'fts-law'); ?></option>
                </select>
              </div>

              <!-- Legal Issue / Service Type -->
              <div class="form-group">
                <label for="consult_issue"><?php _e('Legal Matter', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                <select id="consult_issue" name="legal_issue" required>
                  <option value="" disabled selected><?php _e('What do you need help with?', 'fts-law'); ?></option>
                  <optgroup label="<?php esc_attr_e('Visa &amp; Immigration', 'fts-law'); ?>">
                    <option><?php _e('KITAS – Temporary Stay Permit', 'fts-law'); ?></option>
                    <option><?php _e('KITAP – Permanent Stay Permit', 'fts-law'); ?></option>
                    <option><?php _e('Investor KITAS', 'fts-law'); ?></option>
                    <option><?php _e('Visa Extension / Renewal', 'fts-law'); ?></option>
                    <option><?php _e('Overstay – Urgent Assistance', 'fts-law'); ?></option>
                    <option><?php _e('Other Immigration Matter', 'fts-law'); ?></option>
                  </optgroup>
                  <optgroup label="<?php esc_attr_e('Company &amp; Business', 'fts-law'); ?>">
                    <option><?php _e('PT PMA Company Setup', 'fts-law'); ?></option>
                    <option><?php _e('Company Structure Advice', 'fts-law'); ?></option>
                    <option><?php _e('Business Licensing', 'fts-law'); ?></option>
                    <option><?php _e('Foreign Investment Compliance', 'fts-law'); ?></option>
                  </optgroup>
                  <optgroup label="<?php esc_attr_e('Legal Services', 'fts-law'); ?>">
                    <option><?php _e('Contract Drafting', 'fts-law'); ?></option>
                    <option><?php _e('Contract Review', 'fts-law'); ?></option>
                    <option><?php _e('Shareholder Agreement', 'fts-law'); ?></option>
                    <option><?php _e('Legal Risk Review', 'fts-law'); ?></option>
                    <option><?php _e('Business Legal Advisory', 'fts-law'); ?></option>
                  </optgroup>
                  <option><?php _e('Other Legal Matter', 'fts-law'); ?></option>
                </select>
              </div>

              <!-- Consultation Preference -->
              <div class="form-group">
                <label for="consult_pref"><?php _e('Preferred Consultation Method', 'fts-law'); ?></label>
                <select id="consult_pref" name="consult_preference">
                  <option value="" disabled selected><?php _e('Select preference', 'fts-law'); ?></option>
                  <option><?php _e('Online (Zoom / Google Meet)', 'fts-law'); ?></option>
                  <option><?php _e('WhatsApp Call', 'fts-law'); ?></option>
                  <option><?php _e('WhatsApp Chat', 'fts-law'); ?></option>
                  <option><?php _e('In-Person – Jakarta Office', 'fts-law'); ?></option>
                  <option><?php _e('Phone Call', 'fts-law'); ?></option>
                  <option><?php _e('Email', 'fts-law'); ?></option>
                </select>
              </div>

              <!-- Message -->
              <div class="form-group">
                <label for="consult_message"><?php _e('Describe Your Legal Situation', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                <textarea
                  id="consult_message"
                  name="message"
                  placeholder="<?php esc_attr_e('Please describe your legal matter in as much detail as you are comfortable sharing. The more context you provide, the more useful our initial response will be.', 'fts-law'); ?>"
                  required
                  rows="6"
                ></textarea>
              </div>

              <!-- Consent -->
              <div class="form-group form-group--checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="consent" value="1" required />
                  <span>
                    <?php _e('I understand that submitting this form does not create an attorney-client relationship. All information shared will be kept strictly confidential. I consent to being contacted by the office regarding my inquiry.', 'fts-law'); ?>
                  </span>
                </label>
              </div>

              <button class="btn btn-gold consultation-form__submit" type="submit">
                <?php _e('Send Consultation Request', 'fts-law'); ?>
              </button>

              <p class="consultation-form__note">
                <span aria-hidden="true">🔒</span>
                <?php _e('Your information is protected by attorney-client confidentiality and our', 'fts-law'); ?> <a href="<?php echo esc_url( fts_page_url( 'privacy-policy' ) ); ?>"><?php _e('Privacy Policy', 'fts-law'); ?></a>.
                <?php _e('We will never share your details with third parties.', 'fts-law'); ?>
              </p>

            </form>

            <?php endif; ?>

          </div><!-- /.consultation-form-card -->
        </div><!-- /.consultation-form-col -->


        <!-- ── Right: Contact & Info Sidebar ── -->
        <aside class="consultation-sidebar" aria-label="<?php esc_attr_e('Consultation options', 'fts-law'); ?>">

          <!-- WhatsApp Option -->
          <div class="consult-option-card consult-option-card--wa">
            <div class="consult-option-card__header">
              <span class="consult-option-card__icon" aria-hidden="true">💬</span>
              <h3 class="consult-option-card__title"><?php _e('WhatsApp Consultation', 'fts-law'); ?></h3>
            </div>
            <p class="consult-option-card__desc">
              <?php _e('Prefer a faster response? Send us a message on WhatsApp and our team will reply promptly with initial guidance and appointment details.', 'fts-law'); ?>
            </p>
            <a
              class="btn btn-green consult-option-card__btn"
              href="<?php echo esc_url( fts_wa_url() ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="<?php esc_attr_e('Start WhatsApp consultation', 'fts-law'); ?>"
            >
              💬 <?php _e('Chat on WhatsApp', 'fts-law'); ?>
            </a>
            <p class="consult-option-card__sub">
              <?php echo esc_html( fts_office_hours() ); ?>
            </p>
          </div><!-- /.consult-option-card -->


          <!-- Office Contact Info -->
          <div class="consult-option-card">
            <h3 class="consult-option-card__title"><?php _e('Contact Information', 'fts-law'); ?></h3>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">📍</span>
              <div>
                <strong><?php _e('Office Address', 'fts-law'); ?></strong>
                <p><?php echo esc_html( fts_office_address() ); ?></p>
              </div>
            </div>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">✉️</span>
              <div>
                <strong><?php _e('Email', 'fts-law'); ?></strong>
                <p>
                  <a href="mailto:<?php echo esc_attr( fts_office_email() ); ?>">
                    <?php echo esc_html( fts_office_email() ); ?>
                  </a>
                </p>
              </div>
            </div>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">🕐</span>
              <div>
                <strong><?php _e('Office Hours', 'fts-law'); ?></strong>
                <p><?php echo esc_html( fts_office_hours() ); ?></p>
              </div>
            </div>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">🌐</span>
              <div>
                <strong><?php _e('Languages', 'fts-law'); ?></strong>
                <p><?php _e('English · Indonesian · Japanese (via consultant)', 'fts-law'); ?></p>
              </div>
            </div>

          </div><!-- /.consult-option-card -->


          <!-- Confidentiality Note -->
          <div class="consult-option-card consult-option-card--trust">
            <span class="consult-trust-icon" aria-hidden="true">🔒</span>
            <h4><?php _e('Attorney-Client Confidentiality', 'fts-law'); ?></h4>
            <p>
              <?php _e('All information you share during a legal consultation is protected by attorney-client privilege under Indonesian Bar Association (PERADI) professional standards. Your legal matters, business details, and personal information are never shared with third parties.', 'fts-law'); ?>
            </p>
          </div>

        </aside><!-- /.consultation-sidebar -->

      </div><!-- /.consultation-layout -->
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW IT WORKS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-how-it-works">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('How Our Consultation Process Works', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A simple, transparent process from first contact to legal resolution.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Submit Your Inquiry', 'fts-law'); ?></h4>
          <p>
            <?php _e('Fill in the consultation form or contact us via WhatsApp. Describe your legal matter — visa, company setup, investment, contract, or other issue.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('We Review Your Case', 'fts-law'); ?></h4>
          <p>
            <?php _e('Our lawyer reviews your inquiry and responds within 1 business day. We may ask for additional information before confirming the appointment.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Consultation Session', 'fts-law'); ?></h4>
          <p>
            <?php _e('We conduct the consultation via video call (Zoom / Google Meet), WhatsApp, phone, or in-person at our Jakarta office — according to your preference.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Legal Advice &amp; Proposal', 'fts-law'); ?></h4>
          <p>
            <?php _e('You receive practical legal advice on your matter and, where appropriate, a clear proposal for the legal services needed to resolve your situation.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Engagement &amp; Action', 'fts-law'); ?></h4>
          <p>
            <?php _e('If you choose to proceed, we formalise the legal engagement and begin work — whether it\'s visa application, contract drafting, company registration, or legal advisory.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Ongoing Support', 'fts-law'); ?></h4>
          <p>
            <?php _e('We remain available for follow-up consultations, compliance monitoring, and new legal matters as your business and life in Indonesia grows.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SERVICES WE CONSULT ON
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-consult-services">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Legal Matters We Consult On', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Our licensed Indonesian lawyer provides consultation across all of the following areas.', 'fts-law'); ?>
      </p>

      <div class="quick-links-grid">

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📋</span>
          <span><?php _e('Visa &amp; Immigration', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'kitas' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🪪</span>
          <span><?php _e('KITAS', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'kitap' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏠</span>
          <span><?php _e('KITAP', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'investor-visa' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💼</span>
          <span><?php _e('Investor Visa', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'visa-extension' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🗓</span>
          <span><?php _e('Visa Extension', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'company-setup' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span><?php _e('Company Setup', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'pt-pma' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span><?php _e('PT PMA Setup', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'foreign-investment' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📈</span>
          <span><?php _e('Foreign Investment Law', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span><?php _e('Business Legal Support', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'contract-drafting' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✍️</span>
          <span><?php _e('Contract Drafting', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🔍</span>
          <span><?php _e('Legal Risk Review', 'fts-law'); ?></span>
        </a>
        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'guide' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📘</span>
          <span><?php _e('Free Legal Guide', 'fts-law'); ?></span>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TRUST / CREDENTIALS STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-trust-strip">
    <div class="container">
      <div class="trust-strip">

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">⚖️</span>
          <div>
            <strong><?php _e('Licensed Advocate', 'fts-law'); ?></strong>
            <p><?php _e('PERADI-registered Indonesian lawyer — not a visa agent', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🌐</span>
          <div>
            <strong><?php _e('English-Language Service', 'fts-law'); ?></strong>
            <p><?php _e('Full consultation and documentation in English', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🔒</span>
          <div>
            <strong><?php _e('Fully Confidential', 'fts-law'); ?></strong>
            <p><?php _e('Attorney-client privilege applies to all consultations', 'fts-law'); ?></p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🌍</span>
          <div>
            <strong><?php _e('International Clients', 'fts-law'); ?></strong>
            <p><?php _e('Serving clients from Japan, Korea, EU, US, Australia &amp; more', 'fts-law'); ?></p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FREE GUIDE PROMO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-guide-inline">
    <div class="container">
      <div class="guide-inline-band">
        <div class="guide-inline-band__copy">
          <span class="eyebrow"><?php _e('Free Resource', 'fts-law'); ?></span>
          <h3><?php _e('Not ready to book a consultation yet?', 'fts-law'); ?></h3>
          <p>
            <?php _e('Download our <strong>Free Legal Guide for Foreign Investors in Indonesia</strong> to understand the basics of foreign ownership, visa options, PT PMA structure, and common legal risks — before your first consultation.', 'fts-law'); ?>
          </p>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'guide' ) ); ?>">
            <?php _e('Get the Free Guide &rarr;', 'fts-law'); ?>
          </a>
        </div>
        <div class="guide-inline-band__pills">
          <span class="pill"><?php _e('Foreign Ownership Rules', 'fts-law'); ?></span>
          <span class="pill"><?php _e('PT PMA Structure', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Nominee Risks', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Visa Options', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Business Compliance', 'fts-law'); ?></span>
        </div>
      </div>
    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
