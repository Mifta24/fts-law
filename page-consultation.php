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
      <span class="eyebrow">Get Legal Support</span>
      <h1>Book a Legal Consultation</h1>
      <p class="page-hero__subtitle">
        Speak directly with our licensed Indonesian lawyer about your visa,
        company setup, foreign investment, or business legal matter.
        Available online and in-person.
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
        <span>Online Consultation Available</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🏢</span>
        <span>In-Person – Jakarta Office</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">💬</span>
        <span>WhatsApp Consultation</span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🔒</span>
        <span>100% Confidential</span>
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
            <h2 class="consultation-form-card__title">Send Us Your Legal Inquiry</h2>
            <p class="consultation-form-card__desc">
              Fill in the form below and our team will respond within 1 business day
              to confirm your consultation appointment or answer your inquiry.
              All information is treated with full legal confidentiality.
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
              action="<?php echo esc_url( home_url('/consultation') ); ?>"
            >
              <?php wp_nonce_field('fts_consultation_submit', 'fts_consult_nonce'); ?>

              <!-- Name row -->
              <div class="form-row form-row--2col">
                <div class="form-group">
                  <label for="consult_first_name">First Name <span class="req" aria-hidden="true">*</span></label>
                  <input
                    type="text"
                    id="consult_first_name"
                    name="first_name"
                    placeholder="Your first name"
                    required
                    autocomplete="given-name"
                  />
                </div>
                <div class="form-group">
                  <label for="consult_last_name">Last Name</label>
                  <input
                    type="text"
                    id="consult_last_name"
                    name="last_name"
                    placeholder="Your last name"
                    autocomplete="family-name"
                  />
                </div>
              </div>

              <!-- Email + WhatsApp row -->
              <div class="form-row form-row--2col">
                <div class="form-group">
                  <label for="consult_email">Email Address <span class="req" aria-hidden="true">*</span></label>
                  <input
                    type="email"
                    id="consult_email"
                    name="email"
                    placeholder="your@email.com"
                    required
                    autocomplete="email"
                  />
                </div>
                <div class="form-group">
                  <label for="consult_whatsapp">WhatsApp Number</label>
                  <input
                    type="tel"
                    id="consult_whatsapp"
                    name="whatsapp"
                    placeholder="+62 8xx xxxx xxxx"
                    autocomplete="tel"
                  />
                </div>
              </div>

              <!-- Nationality -->
              <div class="form-group">
                <label for="consult_nationality">Nationality <span class="req" aria-hidden="true">*</span></label>
                <select id="consult_nationality" name="nationality" required>
                  <option value="" disabled selected>Select your nationality</option>
                  <option>Japanese</option>
                  <option>South Korean</option>
                  <option>Chinese</option>
                  <option>Singaporean</option>
                  <option>Australian</option>
                  <option>American (US)</option>
                  <option>British (UK)</option>
                  <option>Dutch</option>
                  <option>German</option>
                  <option>French</option>
                  <option>Indian</option>
                  <option>Malaysian</option>
                  <option>Indonesian</option>
                  <option>Other</option>
                </select>
              </div>

              <!-- Legal Issue / Service Type -->
              <div class="form-group">
                <label for="consult_issue">Legal Matter <span class="req" aria-hidden="true">*</span></label>
                <select id="consult_issue" name="legal_issue" required>
                  <option value="" disabled selected>What do you need help with?</option>
                  <optgroup label="Visa &amp; Immigration">
                    <option>KITAS – Temporary Stay Permit</option>
                    <option>KITAP – Permanent Stay Permit</option>
                    <option>Investor KITAS</option>
                    <option>Visa Extension / Renewal</option>
                    <option>Overstay – Urgent Assistance</option>
                    <option>Other Immigration Matter</option>
                  </optgroup>
                  <optgroup label="Company &amp; Business">
                    <option>PT PMA Company Setup</option>
                    <option>Company Structure Advice</option>
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
                  <option>Other Legal Matter</option>
                </select>
              </div>

              <!-- Consultation Preference -->
              <div class="form-group">
                <label for="consult_pref">Preferred Consultation Method</label>
                <select id="consult_pref" name="consult_preference">
                  <option value="" disabled selected>Select preference</option>
                  <option>Online (Zoom / Google Meet)</option>
                  <option>WhatsApp Call</option>
                  <option>WhatsApp Chat</option>
                  <option>In-Person – Jakarta Office</option>
                  <option>Phone Call</option>
                  <option>Email</option>
                </select>
              </div>

              <!-- Message -->
              <div class="form-group">
                <label for="consult_message">Describe Your Legal Situation <span class="req" aria-hidden="true">*</span></label>
                <textarea
                  id="consult_message"
                  name="message"
                  placeholder="Please describe your legal matter in as much detail as you are comfortable sharing. The more context you provide, the more useful our initial response will be."
                  required
                  rows="6"
                ></textarea>
              </div>

              <!-- Consent -->
              <div class="form-group form-group--checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="consent" value="1" required />
                  <span>
                    I understand that submitting this form does not create an attorney-client
                    relationship. All information shared will be kept strictly confidential.
                    I consent to being contacted by the office regarding my inquiry.
                  </span>
                </label>
              </div>

              <button class="btn btn-gold consultation-form__submit" type="submit">
                Send Consultation Request
              </button>

              <p class="consultation-form__note">
                <span aria-hidden="true">🔒</span>
                Your information is protected by attorney-client confidentiality and
                our <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a>.
                We will never share your details with third parties.
              </p>

            </form>

            <?php endif; ?>

          </div><!-- /.consultation-form-card -->
        </div><!-- /.consultation-form-col -->


        <!-- ── Right: Contact & Info Sidebar ── -->
        <aside class="consultation-sidebar" aria-label="Consultation options">

          <!-- WhatsApp Option -->
          <div class="consult-option-card consult-option-card--wa">
            <div class="consult-option-card__header">
              <span class="consult-option-card__icon" aria-hidden="true">💬</span>
              <h3 class="consult-option-card__title">WhatsApp Consultation</h3>
            </div>
            <p class="consult-option-card__desc">
              Prefer a faster response? Send us a message on WhatsApp and our team
              will reply promptly with initial guidance and appointment details.
            </p>
            <a
              class="btn btn-green consult-option-card__btn"
              href="<?php echo esc_url( fts_wa_url() ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="Start WhatsApp consultation"
            >
              💬 Chat on WhatsApp
            </a>
            <p class="consult-option-card__sub">
              <?php echo esc_html( fts_office_hours() ); ?>
            </p>
          </div><!-- /.consult-option-card -->


          <!-- Office Contact Info -->
          <div class="consult-option-card">
            <h3 class="consult-option-card__title">Contact Information</h3>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">📍</span>
              <div>
                <strong>Office Address</strong>
                <p><?php echo esc_html( fts_office_address() ); ?></p>
              </div>
            </div>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">✉️</span>
              <div>
                <strong>Email</strong>
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
                <strong>Office Hours</strong>
                <p><?php echo esc_html( fts_office_hours() ); ?></p>
              </div>
            </div>

            <div class="consult-info-item">
              <span class="consult-info-item__icon" aria-hidden="true">🌐</span>
              <div>
                <strong>Languages</strong>
                <p>English · Indonesian · Japanese (via consultant)</p>
              </div>
            </div>

          </div><!-- /.consult-option-card -->


          <!-- Confidentiality Note -->
          <div class="consult-option-card consult-option-card--trust">
            <span class="consult-trust-icon" aria-hidden="true">🔒</span>
            <h4>Attorney-Client Confidentiality</h4>
            <p>
              All information you share during a legal consultation is protected
              by attorney-client privilege under Indonesian Bar Association (PERADI)
              professional standards. Your legal matters, business details, and personal
              information are never shared with third parties.
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

      <h2 class="section-title" style="text-align:center;">How Our Consultation Process Works</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A simple, transparent process from first contact to legal resolution.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Submit Your Inquiry</h4>
          <p>
            Fill in the consultation form or contact us via WhatsApp. Describe your
            legal matter — visa, company setup, investment, contract, or other issue.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>We Review Your Case</h4>
          <p>
            Our lawyer reviews your inquiry and responds within 1 business day.
            We may ask for additional information before confirming the appointment.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Consultation Session</h4>
          <p>
            We conduct the consultation via video call (Zoom / Google Meet), WhatsApp,
            phone, or in-person at our Jakarta office — according to your preference.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Legal Advice &amp; Proposal</h4>
          <p>
            You receive practical legal advice on your matter and, where appropriate,
            a clear proposal for the legal services needed to resolve your situation.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>Engagement &amp; Action</h4>
          <p>
            If you choose to proceed, we formalise the legal engagement and begin
            work — whether it's visa application, contract drafting, company registration,
            or legal advisory.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>Ongoing Support</h4>
          <p>
            We remain available for follow-up consultations, compliance monitoring,
            and new legal matters as your business and life in Indonesia grows.
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

      <h2 class="section-title" style="text-align:center;">Legal Matters We Consult On</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Our licensed Indonesian lawyer provides consultation across all of the following areas.
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
        <a class="quick-link-item" href="<?php echo esc_url( home_url('/business-legal') ); ?>">
          <span class="quick-link-item__icon" aria-hidden="true">⚖️</span>
          <span>Business Legal Support</span>
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
            <strong>Licensed Advocate</strong>
            <p>PERADI-registered Indonesian lawyer — not a visa agent</p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🌐</span>
          <div>
            <strong>English-Language Service</strong>
            <p>Full consultation and documentation in English</p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🔒</span>
          <div>
            <strong>Fully Confidential</strong>
            <p>Attorney-client privilege applies to all consultations</p>
          </div>
        </div>

        <div class="trust-strip__item">
          <span class="trust-strip__icon" aria-hidden="true">🌍</span>
          <div>
            <strong>International Clients</strong>
            <p>Serving clients from Japan, Korea, EU, US, Australia &amp; more</p>
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
          <span class="eyebrow">Free Resource</span>
          <h3>Not ready to book a consultation yet?</h3>
          <p>
            Download our <strong>Free Legal Guide for Foreign Investors in Indonesia</strong>
            to understand the basics of foreign ownership, visa options, PT PMA structure,
            and common legal risks — before your first consultation.
          </p>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/guide') ); ?>">
            Get the Free Guide &rarr;
          </a>
        </div>
        <div class="guide-inline-band__pills">
          <span class="pill">Foreign Ownership Rules</span>
          <span class="pill">PT PMA Structure</span>
          <span class="pill">Nominee Risks</span>
          <span class="pill">Visa Options</span>
          <span class="pill">Business Compliance</span>
        </div>
      </div>
    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
