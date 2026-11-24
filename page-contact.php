<?php
/**
 * FTS Law – Contact Page
 * Template for: /contact
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
      <span class="eyebrow"><?php _e('Get in Touch', 'fts-law'); ?></span>
      <h1><?php _e('Contact Our Office', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Reach out to the Okelegal team for company establishment, licensing, legal consultation, intellectual property, or business consulting. Free initial consultation.', 'fts-law'); ?>
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       CONTACT PANEL GRID
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-contact-main">
    <div class="container">

      <div class="contact-panel-grid">

        <!-- ── Contact Form ── -->
        <div class="card-gradient contact-form-card">
          <h2 class="contact-form-title"><?php _e('Send Us a Message', 'fts-law'); ?></h2>
          <p style="color:var(--muted);margin-top:0;margin-bottom:20px;">
            <?php _e('Fill in the form and our team will respond within 1 business day. All inquiries are handled with full legal confidentiality.', 'fts-law'); ?>
          </p>

          <?php
          // ── Replace shortcode ID with your CF7 contact form ID after setup ──
          // Example: echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]');
            $contact_form_id = fts_cf7_contact_form_id();
            if ( shortcode_exists('contact-form-7') && $contact_form_id ) :
              echo do_shortcode('[contact-form-7 id="' . esc_attr( $contact_form_id ) . '" title="Contact Form"]');
          else : ?>

          <form
            class="contact-form"
            id="main-contact-form"
            method="post"
            action="<?php echo esc_url( fts_page_url( 'contact' ) ); ?>"
            novalidate
          >
            <?php wp_nonce_field('fts_contact_submit', 'fts_contact_nonce'); ?>

            <!-- Name row -->
            <div class="contact-form-grid">
              <div class="form-group">
                <label for="contact_first_name"><?php _e('First Name', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                <input
                  type="text"
                  id="contact_first_name"
                  name="first_name"
                  placeholder="<?php esc_attr_e('First Name', 'fts-law'); ?>"
                  required
                  autocomplete="given-name"
                />
              </div>
              <div class="form-group">
                <label for="contact_last_name"><?php _e('Last Name', 'fts-law'); ?></label>
                <input
                  type="text"
                  id="contact_last_name"
                  name="last_name"
                  placeholder="<?php esc_attr_e('Last Name', 'fts-law'); ?>"
                  autocomplete="family-name"
                />
              </div>
            </div>

            <!-- Email + WhatsApp row -->
            <div class="contact-form-grid">
              <div class="form-group">
                <label for="contact_email"><?php _e('Email Address', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
                <input
                  type="email"
                  id="contact_email"
                  name="email"
                  placeholder="<?php esc_attr_e('your@email.com', 'fts-law'); ?>"
                  required
                  autocomplete="email"
                />
              </div>
              <div class="form-group">
                <label for="contact_whatsapp"><?php _e('WhatsApp Number', 'fts-law'); ?></label>
                <input
                  type="tel"
                  id="contact_whatsapp"
                  name="whatsapp"
                  placeholder="<?php esc_attr_e('+62 8xx xxxx xxxx', 'fts-law'); ?>"
                  autocomplete="tel"
                />
              </div>
            </div>

            <!-- Company Name -->
            <div class="form-group">
              <label for="contact_company"><?php _e('Company Name (Optional)', 'fts-law'); ?></label>
              <input
                type="text"
                id="contact_company"
                name="company"
                placeholder="<?php esc_attr_e('Your company name', 'fts-law'); ?>"
                autocomplete="organization"
              />
            </div>

            <!-- Legal Matter -->
            <div class="form-group">
              <label for="contact_matter"><?php _e('Legal Matter', 'fts-law'); ?></label>
              <select id="contact_matter" name="legal_matter">
                <option value="" disabled selected><?php _e('What can we help you with?', 'fts-law'); ?></option>
                <optgroup label="<?php esc_attr_e('Company Legality &amp; Licensing', 'fts-law'); ?>">
                  <option><?php _e('PT / CV / UMKM Establishment', 'fts-law'); ?></option>
                  <option><?php _e('Cooperative / Foundation', 'fts-law'); ?></option>
                  <option><?php _e('PMA (Foreign Investment) Company', 'fts-law'); ?></option>
                  <option><?php _e('Business Licensing (NIB / OSS)', 'fts-law'); ?></option>
                </optgroup>
                <optgroup label="<?php esc_attr_e('Legal Services', 'fts-law'); ?>">
                  <option><?php _e('Corporate Lawyer', 'fts-law'); ?></option>
                  <option><?php _e('Dispute / Litigation / Arbitration', 'fts-law'); ?></option>
                  <option><?php _e('Family Law', 'fts-law'); ?></option>
                  <option><?php _e('Notary / PPAT Deed', 'fts-law'); ?></option>
                </optgroup>
                <optgroup label="<?php esc_attr_e('Intellectual Property (HKI)', 'fts-law'); ?>">
                  <option><?php _e('Trademark', 'fts-law'); ?></option>
                  <option><?php _e('Copyright', 'fts-law'); ?></option>
                  <option><?php _e('Patent', 'fts-law'); ?></option>
                  <option><?php _e('Industrial Design', 'fts-law'); ?></option>
                </optgroup>
                <optgroup label="<?php esc_attr_e('Business Consulting', 'fts-law'); ?>">
                  <option><?php _e('Startup &amp; Franchise Consulting', 'fts-law'); ?></option>
                  <option><?php _e('Securities / Crypto / Bappebti Licensing', 'fts-law'); ?></option>
                  <option><?php _e('Tax Consulting', 'fts-law'); ?></option>
                  <option><?php _e('ISO / SNI / Halal MUI Certification', 'fts-law'); ?></option>
                  <option><?php _e('Virtual Office', 'fts-law'); ?></option>
                </optgroup>
                <option><?php _e('General Inquiry', 'fts-law'); ?></option>
                <option><?php _e('Other', 'fts-law'); ?></option>
              </select>
            </div>

            <!-- Message -->
            <div class="form-group">
              <label for="contact_message"><?php _e('Message', 'fts-law'); ?> <span class="req" aria-hidden="true">*</span></label>
              <textarea
                id="contact_message"
                name="message"
                placeholder="<?php esc_attr_e('Please describe your legal matter or inquiry…', 'fts-law'); ?>"
                required
                rows="5"
              ></textarea>
            </div>

            <!-- Consent -->
            <div class="form-group form-group--checkbox">
              <label class="checkbox-label">
                <input type="checkbox" name="consent" value="1" required />
                <span>
                  <?php _e('I consent to being contacted regarding my inquiry. I understand all information shared will be kept strictly confidential.', 'fts-law'); ?>
                  <?php _e('View our', 'fts-law'); ?>
                  <a href="<?php echo esc_url( fts_page_url( 'privacy-policy' ) ); ?>" target="_blank"><?php _e('Privacy Policy', 'fts-law'); ?></a>.
                </span>
              </label>
            </div>

            <button class="btn btn-gold contact-submit" type="submit">
              <?php _e('Send Message', 'fts-law'); ?>
            </button>

            <p class="form-disclaimer" style="margin-top:12px;font-size:.9rem;color:var(--muted);">
              🔒 <?php _e('Protected by attorney-client confidentiality. We never share your details.', 'fts-law'); ?>
            </p>

          </form>

          <?php endif; ?>

        </div><!-- /.contact-form-card -->


        <!-- ── Contact Info ── -->
        <div class="card-gradient contact-info-card">
          <h2 class="contact-form-title"><?php _e('Contact Information', 'fts-law'); ?></h2>

          <!-- Office Address -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">📍</span>
            <div>
              <h4><?php _e('Office Address', 'fts-law'); ?></h4>
              <p><?php echo esc_html( fts_office_address() ); ?></p>
            </div>
          </div>

          <!-- Email -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">✉️</span>
            <div>
              <h4><?php _e('Email', 'fts-law'); ?></h4>
              <p>
                <a href="mailto:<?php echo esc_attr( fts_office_email() ); ?>">
                  <?php echo esc_html( fts_office_email() ); ?>
                </a>
              </p>
            </div>
          </div>

          <!-- WhatsApp -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">💬</span>
            <div>
              <h4><?php _e('WhatsApp', 'fts-law'); ?></h4>
              <p>
                <a
                  href="<?php echo esc_url( fts_wa_url() ); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <?php _e('Chat on WhatsApp', 'fts-law'); ?>
                </a>
              </p>
            </div>
          </div>

          <!-- Office Hours -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🕐</span>
            <div>
              <h4><?php _e('Office Hours', 'fts-law'); ?></h4>
              <p><?php echo esc_html( fts_office_hours() ); ?></p>
            </div>
          </div>

          <!-- Languages -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🌐</span>
            <div>
              <h4><?php _e('Languages', 'fts-law'); ?></h4>
              <p><?php _e('English · Indonesian · Japanese (via consultant)', 'fts-law'); ?></p>
            </div>
          </div>

          <!-- Response Time -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">⚡</span>
            <div>
              <h4><?php _e('Response Time', 'fts-law'); ?></h4>
              <p><?php _e('Within 1 business day for all inquiries', 'fts-law'); ?></p>
            </div>
          </div>

          <!-- WhatsApp CTA -->
          <div style="margin-top: 24px;">
            <a
              class="btn btn-green"
              href="<?php echo esc_url( fts_wa_url() ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              style="width:100%;"
            >
              💬 <?php _e('Chat on WhatsApp Now', 'fts-law'); ?>
            </a>
          </div>

          <!-- Book Consultation CTA -->
          <div style="margin-top: 12px;">
            <a
              class="btn btn-gold"
              href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"
              style="width:100%;"
            >
              <?php _e('Book a Legal Consultation', 'fts-law'); ?>
            </a>
          </div>

          <!-- Confidentiality Note -->
          <div class="info-box" style="margin-top: 24px;">
            <?php _e('<strong>🔒 Confidentiality:</strong> All inquiries and legal matters discussed with our office are protected by attorney-client privilege and our Privacy Policy. We never share client information.', 'fts-law'); ?>
          </div>

        </div><!-- /.contact-info-card -->

      </div><!-- /.contact-panel-grid -->


      <!-- ── Office Photo + Google Maps ── -->
      <div class="contact-media-bottom">

        <!-- Office Photo -->
        <div class="office-photo-card">
          <img
            class="office-photo-card__logo"
            src="<?php echo esc_url( fts_asset( '/images/okelegal-logo.png' ) ); ?>"
            alt="<?php esc_attr_e('Okelegal Law Office', 'fts-law'); ?>"
            loading="lazy" />
        </div>

        <!-- Google Maps Embed -->
        <div class="map-box">
          <?php
          $maps_url = fts_maps_embed();
          if ( $maps_url ) : ?>
            <iframe
              src="<?php echo esc_url( $maps_url ); ?>"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="<?php esc_attr_e('Law Office Location Map – ', 'fts-law'); ?><?php echo esc_attr( fts_office_address() ); ?>"
              width="100%"
              height="100%"
            ></iframe>
          <?php else : ?>
            <div class="map-placeholder">
              <div class="map-placeholder__inner">
                <span class="map-placeholder__icon" aria-hidden="true">📍</span>
                <p>
                  <?php _e('<strong>Google Maps will appear here.</strong><br> To add the map, go to <strong>Appearance → Customize → Contact Information</strong> and paste the Google Maps Embed URL for your office.', 'fts-law'); ?>
                </p>
                <a
                  class="btn btn-outline-navy"
                  href="https://www.google.com/maps"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <?php _e('Open Google Maps', 'fts-law'); ?>
                </a>
              </div>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- /.contact-media-bottom -->

    </div><!-- /.container -->
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CONTACT PERSONS SECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-contact-persons">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Our Contact Team', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('You will be in contact with one of the following team members when you reach out to our office.', 'fts-law'); ?>
      </p>

      <div class="grid-3" style="max-width:860px;margin:0 auto;">
        <div class="contact-person-card">
          <div class="contact-person-card__avatar">
            <img
              src="<?php echo esc_url( fts_asset( '/images/team/syarif.jpg' ) ); ?>"
              alt="<?php esc_attr_e('Syarif Anis, S.H.', 'fts-law'); ?>"
              loading="lazy"
            />
          </div>
          <div class="contact-person-card__info">
            <strong class="contact-person-card__name"><?php _e('Syarif Anis, S.H.', 'fts-law'); ?></strong>
            <span class="contact-person-card__role"><?php _e('CEO / Founder', 'fts-law'); ?></span>
            <p class="contact-person-card__desc">
              <?php _e('Leads the Okelegal team on legal and business consultations.', 'fts-law'); ?>
            </p>
          </div>
        </div>
        <div class="contact-person-card">
          <div class="contact-person-card__avatar contact-person-card__avatar--initials" aria-hidden="true"><span>Z</span></div>
          <div class="contact-person-card__info">
            <strong class="contact-person-card__name"><?php _e('Zulkiply, Sst, Par', 'fts-law'); ?></strong>
            <span class="contact-person-card__role"><?php _e('Business Development Manager', 'fts-law'); ?></span>
            <p class="contact-person-card__desc">
              <?php _e('First contact for new inquiries, service packages, and partnerships.', 'fts-law'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT TO INCLUDE IN YOUR MESSAGE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-contact-tips">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('What to Include in Your Message', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('The more information you share, the better we can prepare for your consultation and provide a faster, more useful response.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">🙋</span>
          <h4><?php _e('Who You Are', 'fts-law'); ?></h4>
          <p>
            <?php _e('Your name, company or organisation, and the best way (WhatsApp or email) and time to reach you.', 'fts-law'); ?>
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('Service You Need', 'fts-law'); ?></h4>
          <p>
            <?php _e('Company establishment, licensing, legal consultation, notary, trademark / IP, certification, or business consulting.', 'fts-law'); ?>
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('Your Business Situation', 'fts-law'); ?></h4>
          <p>
            <?php _e('If it relates to a company — whether you are planning to establish one or already have an existing PT, CV, or other entity.', 'fts-law'); ?>
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">⏰</span>
          <h4><?php _e('Your Timeline', 'fts-law'); ?></h4>
          <p>
            <?php _e('Any deadlines or urgency — for example, a contract signing, a licensing deadline, or a planned business launch.', 'fts-law'); ?>
          </p>
        </div>

      </div>

      <div class="info-box" style="max-width:860px;margin:28px auto 0;">
        <?php _e('<strong>📌 Confidentiality Reminder:</strong> You are communicating with a licensed Indonesian law office. All information you share — whether via our contact form, email, or WhatsApp — is treated with full legal professional confidentiality. We will never share your details without your explicit consent.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       QUICK LINKS TO SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-contact-services">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Not Sure Where to Start?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Browse our services to see what we can help with — then contact us when you\'re ready.', 'fts-law'); ?>
      </p>

      <div class="quick-links-grid">

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span><?php _e('Company Legality &amp; Licensing', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span><?php _e('Legal Consultation', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span><?php _e('Notary / PPAT', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">©️</span>
          <span><?php _e('Intellectual Property (HKI)', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📈</span>
          <span><?php _e('Business Consulting', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'services' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏬</span>
          <span><?php _e('Virtual Office', 'fts-law'); ?></span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( fts_page_url( 'lawyer' ) ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">👥</span>
          <span><?php _e('Our Team', 'fts-law'); ?></span>
        </a>

      </div>

    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
