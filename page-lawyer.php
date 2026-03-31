<?php
/**
 * FTS Law – Lawyer Profile Page
 * Template for: /lawyer
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
      <span class="eyebrow">Our Legal Team</span>
      <h1>Meet Your Lawyer</h1>
      <p class="page-hero__subtitle">
        Licensed Indonesian legal professionals dedicated to supporting foreign investors,
        entrepreneurs, and expatriates with trusted, transparent legal services.
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       MAIN LAWYER PROFILE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-lawyer-profile">
    <div class="container two-col">

      <!-- Photo Card -->
      <div class="profile-photo">
        <img
          src="https://law.fts.biz.id/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-16-at-11.45.24.jpeg"
          alt="Syarif – Licensed Indonesian Lawyer"
          loading="eager"
        />
        <div class="profile-photo__meta">
          <div class="profile-badge">
            <span class="profile-badge__icon" aria-hidden="true">⚖️</span>
            <span class="profile-badge__label">Licensed Indonesian Lawyer</span>
          </div>
          <div class="profile-badge">
            <span class="profile-badge__icon" aria-hidden="true">📜</span>
            <span class="profile-badge__label">Indonesian Bar Association (PERADI)</span>
          </div>
        </div>
      </div>

      <!-- Bio -->
      <div class="profile-bio">

        <h2 class="profile-name">Syarif</h2>
        <p class="profile-title">Licensed Indonesian Lawyer &amp; Senior Partner</p>

        <p class="profile-intro">
          With extensive experience in immigration law, corporate law, and foreign investment
          matters, Syarif has helped hundreds of foreign nationals and international businesses
          navigate the Indonesian legal landscape — from visa applications to full PT&nbsp;PMA
          company setups and complex shareholder agreements.
        </p>

        <p>
          Syarif is registered with the <strong>Indonesian Bar Association (PERADI)</strong> and
          holds a valid Advocate License, ensuring all legal services provided by this office
          are fully lawyer-supervised and professionally accountable.
        </p>

        <!-- Key Info Grid -->
        <div class="lawyer-info-grid">

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">License</span>
            <span class="lawyer-info-item__value">PERADI – Indonesian Bar Association</span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Education</span>
            <span class="lawyer-info-item__value">Faculty of Law – Indonesian University</span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Experience</span>
            <span class="lawyer-info-item__value">10+ Years in Corporate &amp; Immigration Law</span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Languages</span>
            <span class="lawyer-info-item__value">Indonesian (Native) · English (Professional)</span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Location</span>
            <span class="lawyer-info-item__value"><?php echo esc_html( fts_office_address() ); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Availability</span>
            <span class="lawyer-info-item__value">Online &amp; In-Person Consultations</span>
          </div>

        </div>

        <!-- Practice Areas Pills -->
        <div class="pills" style="margin-top: 24px;">
          <span class="pill">Immigration Law</span>
          <span class="pill">Corporate Law</span>
          <span class="pill">Foreign Investment Law</span>
          <span class="pill">Contract Drafting</span>
          <span class="pill">PT PMA Setup</span>
          <span class="pill">Business Legal Advisory</span>
        </div>

        <!-- Profile CTAs -->
        <div class="hero-actions" style="margin-top: 28px;">
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
            Book a Consultation
          </a>
          <?php echo fts_wa_btn( 'WhatsApp Chat' ); ?>
        </div>

      </div><!-- /.profile-bio -->

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CREDENTIALS & EXPERIENCE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-credentials">
    <div class="container">

      <h2 class="section-title">Professional Background</h2>
      <p class="section-subtitle">
        A track record of legal excellence serving foreign clients across visa,
        corporate, and investment law in Indonesia.
      </p>

      <div class="grid-3">

        <div class="card">
          <div class="card-icon" aria-hidden="true">🎓</div>
          <h3>Education</h3>
          <ul class="plain-list">
            <li>Bachelor of Law (S.H.) – Indonesian University</li>
            <li>Advocate Specialisation – Immigration &amp; Corporate Law</li>
            <li>PERADI Advocate Training &amp; Certification</li>
          </ul>
        </div>

        <div class="card">
          <div class="card-icon" aria-hidden="true">📋</div>
          <h3>Licenses &amp; Memberships</h3>
          <ul class="plain-list">
            <li>Licensed Advocate – PERADI (Persatuan Advokat Indonesia)</li>
            <li>Registered Corporate Legal Consultant</li>
            <li>Member – Indonesian Corporate Law Association</li>
          </ul>
        </div>

        <div class="card">
          <div class="card-icon" aria-hidden="true">🏆</div>
          <h3>Professional Experience</h3>
          <ul class="plain-list">
            <li>10+ years of legal practice in Jakarta</li>
            <li>100+ PT PMA company setups assisted</li>
            <li>200+ visa &amp; immigration cases handled</li>
            <li>Clients from Japan, Korea, EU, US, Australia</li>
          </ul>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PRACTICE AREAS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-practice-areas">
    <div class="container">

      <h2 class="section-title">Practice Areas</h2>
      <p class="section-subtitle">
        Focused expertise in the areas that matter most to foreign nationals
        and international businesses in Indonesia.
      </p>

      <div class="grid-4">

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">📄</span>
          <h3>Visa &amp; Immigration Law</h3>
          <p>
            KITAS, KITAP, Investor KITAS, visa extensions, and all immigration
            procedures for foreign nationals in Indonesia.
          </p>
          <a href="<?php echo esc_url( home_url( '/visa' ) ); ?>">Visa Services &rarr;</a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">🏢</span>
          <h3>Corporate &amp; Business Law</h3>
          <p>
            PT PMA formation, corporate governance, shareholder agreements,
            directorship, and business licensing in Indonesia.
          </p>
          <a href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">Company Setup &rarr;</a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">💰</span>
          <h3>Foreign Investment Law</h3>
          <p>
            Advising foreign investors on ownership regulations, the Positive
            Investment List, BKPM compliance, and investment risk management.
          </p>
          <a href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">Investment Law &rarr;</a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">📝</span>
          <h3>Contract Drafting &amp; Review</h3>
          <p>
            Drafting and reviewing business contracts, partnership agreements,
            investor agreements, MOUs, and employment contracts in Indonesia.
          </p>
          <a href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">Contract Services &rarr;</a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       INTERNATIONAL CONSULTANT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-consultant">
    <div class="container two-col">

      <div class="consultant-photo">
        <div class="consultant-avatar" aria-label="Yoshi Nakagawa Photo">
          <span class="consultant-avatar__initials" aria-hidden="true">YN</span>
        </div>
      </div>

      <div class="consultant-bio">
        <span class="eyebrow">International Consultant</span>
        <h2 class="section-title">Yoshi Nakagawa</h2>
        <p class="profile-title">International Legal Consultant</p>

        <p>
          Yoshi Nakagawa serves as our International Legal Consultant, providing
          coordination and advisory support for clients from Japan, Singapore, and
          across the Asia-Pacific region. With deep cross-cultural legal experience,
          Yoshi bridges communication between international clients and Indonesian
          legal procedures.
        </p>

        <p>
          Yoshi specialises in supporting Japanese and Korean entrepreneurs establishing
          businesses in Indonesia, and assists with cross-border legal coordination,
          document translation liaising, and investor onboarding.
        </p>

        <div class="pills" style="margin-top: 18px;">
          <span class="pill">Japan</span>
          <span class="pill">Singapore</span>
          <span class="pill">Korea</span>
          <span class="pill">International Advisory</span>
          <span class="pill">Cross-Border Business</span>
        </div>

        <div class="lawyer-info-grid" style="margin-top: 20px;">
          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Languages</span>
            <span class="lawyer-info-item__value">Japanese (Native) · English (Fluent) · Indonesian (Working)</span>
          </div>
          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label">Focus</span>
            <span class="lawyer-info-item__value">International Client Advisory &amp; Business Coordination</span>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHY WORK WITH US
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-trust">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Why Trust Our Legal Team?</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Every legal matter handled with professionalism, confidentiality, and transparency.
      </p>

      <div class="grid-4" style="margin-top: 32px;">

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🛡</span>
          <h4>Fully Licensed</h4>
          <p>All services supervised by a PERADI-registered advocate. Not a visa agent.</p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🔒</span>
          <h4>Confidential</h4>
          <p>Attorney-client privilege applies to all legal consultations and case files.</p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🌐</span>
          <h4>International Experience</h4>
          <p>Clients from 20+ countries. We understand the foreign investor perspective.</p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">💬</span>
          <h4>English Communication</h4>
          <p>Full communication in English — no language barrier for our international clients.</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    'Ready to Speak with Our Lawyer?',
    'Book a legal consultation to discuss your visa, company setup, investment, or contract needs in Indonesia. Available online and in-person.'
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
