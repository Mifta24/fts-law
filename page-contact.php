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
      <span class="eyebrow">Get in Touch</span>
      <h1>Contact Our Office</h1>
      <p class="page-hero__subtitle">
        Reach out to our legal team for assistance with visa &amp; immigration,
        company setup, foreign investment, or any other legal matter in Indonesia.
        We respond within 1 business day.
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
          <h2 class="contact-form-title">Send Us a Message</h2>
          <p style="color:var(--muted);margin-top:0;margin-bottom:20px;">
            Fill in the form and our team will respond within 1 business day.
            All inquiries are handled with full legal confidentiality.
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
            action="<?php echo esc_url( home_url('/contact') ); ?>"
            novalidate
          >
            <?php wp_nonce_field('fts_contact_submit', 'fts_contact_nonce'); ?>

            <!-- Name row -->
            <div class="contact-form-grid">
              <div class="form-group">
                <label for="contact_first_name">First Name <span class="req" aria-hidden="true">*</span></label>
                <input
                  type="text"
                  id="contact_first_name"
                  name="first_name"
                  placeholder="First Name"
                  required
                  autocomplete="given-name"
                />
              </div>
              <div class="form-group">
                <label for="contact_last_name">Last Name</label>
                <input
                  type="text"
                  id="contact_last_name"
                  name="last_name"
                  placeholder="Last Name"
                  autocomplete="family-name"
                />
              </div>
            </div>

            <!-- Email + WhatsApp row -->
            <div class="contact-form-grid">
              <div class="form-group">
                <label for="contact_email">Email Address <span class="req" aria-hidden="true">*</span></label>
                <input
                  type="email"
                  id="contact_email"
                  name="email"
                  placeholder="your@email.com"
                  required
                  autocomplete="email"
                />
              </div>
              <div class="form-group">
                <label for="contact_whatsapp">WhatsApp Number</label>
                <input
                  type="tel"
                  id="contact_whatsapp"
                  name="whatsapp"
                  placeholder="+62 8xx xxxx xxxx"
                  autocomplete="tel"
                />
              </div>
            </div>

            <!-- Company Name -->
            <div class="form-group">
              <label for="contact_company">Company Name (Optional)</label>
              <input
                type="text"
                id="contact_company"
                name="company"
                placeholder="Your company or PT PMA name"
                autocomplete="organization"
              />
            </div>

            <!-- Legal Matter -->
            <div class="form-group">
              <label for="contact_matter">Legal Matter</label>
              <select id="contact_matter" name="legal_matter">
                <option value="" disabled selected>What can we help you with?</option>
                <optgroup label="Visa &amp; Immigration">
                  <option>KITAS – Temporary Stay Permit</option>
                  <option>KITAP – Permanent Stay Permit</option>
                  <option>Investor KITAS</option>
                  <option>Visa Extension / Renewal</option>
                  <option>Overstay – Urgent Assistance</option>
                </optgroup>
                <optgroup label="Company &amp; Business">
                  <option>PT PMA Company Setup</option>
                  <option>Company Structure / Advice</option>
                  <option>Business Licensing</option>
                  <option>Foreign Investment Compliance</option>
                </optgroup>
                <optgroup label="Legal Services">
                  <option>Contract Drafting</option>
                  <option>Contract Review</option>
                  <option>Shareholder Agreement</option>
                  <option>Legal Risk Review</option>
                  <option>Business Legal Advisory</option>
                </optgroup>
                <option>General Inquiry</option>
                <option>Other</option>
              </select>
            </div>

            <!-- Message -->
            <div class="form-group">
              <label for="contact_message">Message <span class="req" aria-hidden="true">*</span></label>
              <textarea
                id="contact_message"
                name="message"
                placeholder="Please describe your legal matter or inquiry…"
                required
                rows="5"
              ></textarea>
            </div>

            <!-- Consent -->
            <div class="form-group form-group--checkbox">
              <label class="checkbox-label">
                <input type="checkbox" name="consent" value="1" required />
                <span>
                  I consent to being contacted regarding my inquiry. I understand all
                  information shared will be kept strictly confidential.
                  View our
                  <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>" target="_blank">Privacy Policy</a>.
                </span>
              </label>
            </div>

            <button class="btn btn-gold contact-submit" type="submit">
              Send Message
            </button>

            <p class="form-disclaimer" style="margin-top:12px;font-size:.9rem;color:var(--muted);">
              🔒 Protected by attorney-client confidentiality. We never share your details.
            </p>

          </form>

          <?php endif; ?>

        </div><!-- /.contact-form-card -->


        <!-- ── Contact Info ── -->
        <div class="card-gradient contact-info-card">
          <h2 class="contact-form-title">Contact Information</h2>

          <!-- Office Address -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">📍</span>
            <div>
              <h4>Office Address</h4>
              <p><?php echo esc_html( fts_office_address() ); ?></p>
            </div>
          </div>

          <!-- Email -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">✉️</span>
            <div>
              <h4>Email</h4>
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
              <h4>WhatsApp</h4>
              <p>
                <a
                  href="<?php echo esc_url( fts_wa_url() ); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Chat on WhatsApp
                </a>
              </p>
            </div>
          </div>

          <!-- Office Hours -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🕐</span>
            <div>
              <h4>Office Hours</h4>
              <p><?php echo esc_html( fts_office_hours() ); ?></p>
            </div>
          </div>

          <!-- Languages -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">🌐</span>
            <div>
              <h4>Languages</h4>
              <p>English · Indonesian · Japanese (via consultant)</p>
            </div>
          </div>

          <!-- Response Time -->
          <div class="info-item">
            <span class="info-icon" aria-hidden="true">⚡</span>
            <div>
              <h4>Response Time</h4>
              <p>Within 1 business day for all inquiries</p>
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
              💬 Chat on WhatsApp Now
            </a>
          </div>

          <!-- Book Consultation CTA -->
          <div style="margin-top: 12px;">
            <a
              class="btn btn-gold"
              href="<?php echo esc_url( home_url('/consultation') ); ?>"
              style="width:100%;"
            >
              Book a Legal Consultation
            </a>
          </div>

          <!-- Confidentiality Note -->
          <div class="info-box" style="margin-top: 24px;">
            <strong>🔒 Confidentiality:</strong> All inquiries and legal matters
            discussed with our office are protected by attorney-client privilege
            and our Privacy Policy. We never share client information.
          </div>

        </div><!-- /.contact-info-card -->

      </div><!-- /.contact-panel-grid -->


      <!-- ── Office Photo + Google Maps ── -->
      <div class="contact-media-bottom">

        <!-- Office Photo -->
        <div class="office-photo-card">
          <img
            src="https://law.fts.biz.id/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-16-at-15.54.46.jpeg"
            alt="Law Office – <?php echo esc_attr( fts_office_address() ); ?>"
            loading="lazy"
            width="800"
            height="500"
          />
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
              title="Law Office Location Map – <?php echo esc_attr( fts_office_address() ); ?>"
              width="100%"
              height="100%"
            ></iframe>
          <?php else : ?>
            <div class="map-placeholder">
              <div class="map-placeholder__inner">
                <span class="map-placeholder__icon" aria-hidden="true">📍</span>
                <p>
                  <strong>Google Maps will appear here.</strong><br>
                  To add the map, go to
                  <strong>Appearance → Customize → Contact Information</strong>
                  and paste the Google Maps Embed URL for your office.
                </p>
                <a
                  class="btn btn-outline-navy"
                  href="https://www.google.com/maps"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Open Google Maps
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

      <h2 class="section-title" style="text-align:center;">Our Contact Team</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        You will be in contact with one of the following team members
        when you reach out to our office.
      </p>

      <div class="grid-3" style="max-width:860px;margin:0 auto;">

        <div class="contact-person-card">
          <div class="contact-person-card__avatar" aria-label="Syarif">
            <img
              src="https://law.fts.biz.id/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-16-at-11.45.24.jpeg"
              alt="Syarif – Licensed Indonesian Lawyer"
              loading="lazy"
            />
          </div>
          <div class="contact-person-card__info">
            <strong class="contact-person-card__name">Syarif</strong>
            <span class="contact-person-card__role">Licensed Indonesian Lawyer</span>
            <p class="contact-person-card__desc">
              Lead lawyer for all legal consultations — visa, company, and investment matters.
            </p>
          </div>
        </div>

        <div class="contact-person-card">
          <div class="contact-person-card__avatar contact-person-card__avatar--initials" aria-label="Yoshi Nakagawa">
            <span>YN</span>
          </div>
          <div class="contact-person-card__info">
            <strong class="contact-person-card__name">Yoshi Nakagawa</strong>
            <span class="contact-person-card__role">International Legal Consultant</span>
            <p class="contact-person-card__desc">
              International client coordinator for Japanese, Korean, and Singapore clients.
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

      <h2 class="section-title" style="text-align:center;">What to Include in Your Message</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        The more information you share, the better we can prepare for your consultation
        and provide a faster, more useful response.
      </p>

      <div class="grid-4">

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">🌍</span>
          <h4>Your Nationality</h4>
          <p>
            Your country of citizenship helps us identify the correct visa type
            and any bilateral treaty provisions that may apply to your situation.
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">📋</span>
          <h4>Your Visa / Permit Status</h4>
          <p>
            Whether you are currently in Indonesia, abroad, or planning to visit —
            and what type of visa or permit you currently hold (if any).
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">🏢</span>
          <h4>Your Business Situation</h4>
          <p>
            If your inquiry relates to a company — whether you have an existing PT PMA,
            are planning to set one up, or are reviewing an existing structure.
          </p>
        </div>

        <div class="contact-tip-card">
          <span class="contact-tip-card__icon" aria-hidden="true">⏰</span>
          <h4>Your Timeline</h4>
          <p>
            Any deadlines, urgency, or time constraints — for example, a visa expiry date,
            pending contract signing, or business registration deadline.
          </p>
        </div>

      </div>

      <div class="info-box" style="max-width:860px;margin:28px auto 0;">
        <strong>📌 Confidentiality Reminder:</strong> You are communicating with a licensed
        Indonesian law office. All information you share — whether via our contact form,
        email, or WhatsApp — is treated with full legal professional confidentiality.
        We will never share your details without your explicit consent.
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       QUICK LINKS TO SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-contact-services">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Not Sure Where to Start?</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Browse our service pages to understand what we can help with —
        then contact us when you're ready.
      </p>

      <div class="quick-links-grid">

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/visa') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📋</span>
          <span>Visa &amp; Immigration</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/kitas') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🪪</span>
          <span>KITAS</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/kitap') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏠</span>
          <span>KITAP</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/investor-visa') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">💼</span>
          <span>Investor Visa</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/visa-extension') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🗓</span>
          <span>Visa Extension</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/company-setup') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🏢</span>
          <span>Company Setup</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/pt-pma') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📜</span>
          <span>PT PMA Setup</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/foreign-investment') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📈</span>
          <span>Foreign Investment Law</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/contract-drafting') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">✍️</span>
          <span>Contract Drafting</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/legal-risk') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">🔍</span>
          <span>Legal Risk Review</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/guide') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">📘</span>
          <span>Free Legal Guide</span>
        </a>

        <a class="quick-link-item" href="<?php echo esc_url( home_url('/lawyer') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span>About Our Lawyer</span>
        </a>

      </div>

    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
