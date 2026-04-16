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
      <span class="eyebrow"><?php _e('Our Legal Team', 'fts-law'); ?></span>
      <h1><?php _e('Meet Your Lawyer', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Licensed Indonesian legal professionals dedicated to supporting foreign investors, entrepreneurs, and expatriates with trusted, transparent legal services.', 'fts-law'); ?>
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
          alt="<?php esc_attr_e('Syarif – Licensed Indonesian Lawyer', 'fts-law'); ?>"
          loading="eager"
        />
        <div class="profile-photo__meta">
          <div class="profile-badge">
            <span class="profile-badge__icon" aria-hidden="true">⚖️</span>
            <span class="profile-badge__label"><?php _e('Licensed Indonesian Lawyer', 'fts-law'); ?></span>
          </div>
          <div class="profile-badge">
            <span class="profile-badge__icon" aria-hidden="true">📜</span>
            <span class="profile-badge__label"><?php _e('Indonesian Bar Association (PERADI)', 'fts-law'); ?></span>
          </div>
        </div>
      </div>

      <!-- Bio -->
      <div class="profile-bio">

        <h2 class="profile-name"><?php _e('Syarif', 'fts-law'); ?></h2>
        <p class="profile-title"><?php _e('Licensed Indonesian Lawyer &amp; Senior Partner', 'fts-law'); ?></p>

        <p class="profile-intro">
          <?php _e('With extensive experience in immigration law, corporate law, and foreign investment matters, Syarif has helped hundreds of foreign nationals and international businesses navigate the Indonesian legal landscape — from visa applications to full PT&nbsp;PMA company setups and complex shareholder agreements.', 'fts-law'); ?>
        </p>

        <p>
          <?php _e('Syarif is registered with the <strong>Indonesian Bar Association (PERADI)</strong> and holds a valid Advocate License, ensuring all legal services provided by this office are fully lawyer-supervised and professionally accountable.', 'fts-law'); ?>
        </p>

        <!-- Key Info Grid -->
        <div class="lawyer-info-grid">

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('License', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('PERADI – Indonesian Bar Association', 'fts-law'); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Education', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('Faculty of Law – Indonesian University', 'fts-law'); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Experience', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('10+ Years in Corporate &amp; Immigration Law', 'fts-law'); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Languages', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('Indonesian (Native) · English (Professional)', 'fts-law'); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Location', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php echo esc_html( fts_office_address() ); ?></span>
          </div>

          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Availability', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('Online &amp; In-Person Consultations', 'fts-law'); ?></span>
          </div>

        </div>

        <!-- Practice Areas Pills -->
        <div class="pills" style="margin-top: 24px;">
          <span class="pill"><?php _e('Immigration Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Corporate Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Foreign Investment Law', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Contract Drafting', 'fts-law'); ?></span>
          <span class="pill"><?php _e('PT PMA Setup', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Business Legal Advisory', 'fts-law'); ?></span>
        </div>

        <!-- Profile CTAs -->
        <div class="hero-actions" style="margin-top: 28px;">
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Book a Consultation', 'fts-law'); ?>
          </a>
          <?php echo fts_wa_btn( __('WhatsApp Chat', 'fts-law') ); ?>
        </div>

      </div><!-- /.profile-bio -->

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CREDENTIALS & EXPERIENCE
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-credentials">
    <div class="container">

      <h2 class="section-title"><?php _e('Professional Background', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('A track record of legal excellence serving foreign clients across visa, corporate, and investment law in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="card">
          <div class="card-icon" aria-hidden="true">🎓</div>
          <h3><?php _e('Education', 'fts-law'); ?></h3>
          <ul class="plain-list">
            <li><?php _e('Bachelor of Law (S.H.) – Indonesian University', 'fts-law'); ?></li>
            <li><?php _e('Advocate Specialisation – Immigration &amp; Corporate Law', 'fts-law'); ?></li>
            <li><?php _e('PERADI Advocate Training &amp; Certification', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="card">
          <div class="card-icon" aria-hidden="true">📋</div>
          <h3><?php _e('Licenses &amp; Memberships', 'fts-law'); ?></h3>
          <ul class="plain-list">
            <li><?php _e('Licensed Advocate – PERADI (Persatuan Advokat Indonesia)', 'fts-law'); ?></li>
            <li><?php _e('Registered Corporate Legal Consultant', 'fts-law'); ?></li>
            <li><?php _e('Member – Indonesian Corporate Law Association', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="card">
          <div class="card-icon" aria-hidden="true">🏆</div>
          <h3><?php _e('Professional Experience', 'fts-law'); ?></h3>
          <ul class="plain-list">
            <li><?php _e('10+ years of legal practice in Jakarta', 'fts-law'); ?></li>
            <li><?php _e('100+ PT PMA company setups assisted', 'fts-law'); ?></li>
            <li><?php _e('200+ visa &amp; immigration cases handled', 'fts-law'); ?></li>
            <li><?php _e('Clients from Japan, Korea, EU, US, Australia', 'fts-law'); ?></li>
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

      <h2 class="section-title"><?php _e('Practice Areas', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Focused expertise in the areas that matter most to foreign nationals and international businesses in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">📄</span>
          <h3><?php _e('Visa &amp; Immigration Law', 'fts-law'); ?></h3>
          <p>
            <?php _e('KITAS, KITAP, Investor KITAS, visa extensions, and all immigration procedures for foreign nationals in Indonesia.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'visa' ) ); ?>"><?php _e('Visa Services &rarr;', 'fts-law'); ?></a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">🏢</span>
          <h3><?php _e('Corporate &amp; Business Law', 'fts-law'); ?></h3>
          <p>
            <?php _e('PT PMA formation, corporate governance, shareholder agreements, directorship, and business licensing in Indonesia.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'company-setup' ) ); ?>"><?php _e('Company Setup &rarr;', 'fts-law'); ?></a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">💰</span>
          <h3><?php _e('Foreign Investment Law', 'fts-law'); ?></h3>
          <p>
            <?php _e('Advising foreign investors on ownership regulations, the Positive Investment List, BKPM compliance, and investment risk management.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'foreign-investment' ) ); ?>"><?php _e('Investment Law &rarr;', 'fts-law'); ?></a>
        </div>

        <div class="practice-card">
          <span class="practice-card__icon" aria-hidden="true">📝</span>
          <h3><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h3>
          <p>
            <?php _e('Drafting and reviewing business contracts, partnership agreements, investor agreements, MOUs, and employment contracts in Indonesia.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'contract-drafting' ) ); ?>"><?php _e('Contract Services &rarr;', 'fts-law'); ?></a>
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
        <div class="consultant-avatar" aria-label="<?php esc_attr_e('Yoshi Nakagawa Photo', 'fts-law'); ?>">
          <span class="consultant-avatar__initials" aria-hidden="true">YN</span>
        </div>
      </div>

      <div class="consultant-bio">
        <span class="eyebrow"><?php _e('International Consultant', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Yoshi Nakagawa', 'fts-law'); ?></h2>
        <p class="profile-title"><?php _e('International Legal Consultant', 'fts-law'); ?></p>

        <p>
          <?php _e('Yoshi Nakagawa serves as our International Legal Consultant, providing coordination and advisory support for clients from Japan, Singapore, and across the Asia-Pacific region. With deep cross-cultural legal experience, Yoshi bridges communication between international clients and Indonesian legal procedures.', 'fts-law'); ?>
        </p>

        <p>
          <?php _e('Yoshi specialises in supporting Japanese and Korean entrepreneurs establishing businesses in Indonesia, and assists with cross-border legal coordination, document translation liaising, and investor onboarding.', 'fts-law'); ?>
        </p>

        <div class="pills" style="margin-top: 18px;">
          <span class="pill"><?php _e('Japan', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Singapore', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Korea', 'fts-law'); ?></span>
          <span class="pill"><?php _e('International Advisory', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Cross-Border Business', 'fts-law'); ?></span>
        </div>

        <div class="lawyer-info-grid" style="margin-top: 20px;">
          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Languages', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('Japanese (Native) · English (Fluent) · Indonesian (Working)', 'fts-law'); ?></span>
          </div>
          <div class="lawyer-info-item">
            <span class="lawyer-info-item__label"><?php _e('Focus', 'fts-law'); ?></span>
            <span class="lawyer-info-item__value"><?php _e('International Client Advisory &amp; Business Coordination', 'fts-law'); ?></span>
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

      <h2 class="section-title" style="text-align:center;"><?php _e('Why Trust Our Legal Team?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Every legal matter handled with professionalism, confidentiality, and transparency.', 'fts-law'); ?>
      </p>

      <div class="grid-4" style="margin-top: 32px;">

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🛡</span>
          <h4><?php _e('Fully Licensed', 'fts-law'); ?></h4>
          <p><?php _e('All services supervised by a PERADI-registered advocate. Not a visa agent.', 'fts-law'); ?></p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🔒</span>
          <h4><?php _e('Confidential', 'fts-law'); ?></h4>
          <p><?php _e('Attorney-client privilege applies to all legal consultations and case files.', 'fts-law'); ?></p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">🌐</span>
          <h4><?php _e('International Experience', 'fts-law'); ?></h4>
          <p><?php _e('Clients from 20+ countries. We understand the foreign investor perspective.', 'fts-law'); ?></p>
        </div>

        <div class="trust-feature">
          <span class="trust-feature__icon" aria-hidden="true">💬</span>
          <h4><?php _e('English Communication', 'fts-law'); ?></h4>
          <p><?php _e('Full communication in English — no language barrier for our international clients.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    __('Ready to Speak with Our Lawyer?', 'fts-law'),
    __('Book a legal consultation to discuss your visa, company setup, investment, or contract needs in Indonesia. Available online and in-person.', 'fts-law')
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
