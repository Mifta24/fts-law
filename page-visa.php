<?php
/**
 * FTS Law – Visa & Immigration Overview
 * Template: page-visa.php
 * URL: /visa
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero page-hero--visa">
    <div class="container">
      <span class="eyebrow"><?php _e('Immigration Legal Services', 'fts-law'); ?></span>
      <h1><?php _e('Visa &amp; Immigration Support in Indonesia', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Lawyer-supervised assistance for all types of Indonesian stay permits and visas — KITAS, KITAP, Investor Visa, and Visa Extensions.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center; margin-top:24px;">
        <a class="btn btn-gold"
           href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
          <?php _e('Book Visa Consultation', 'fts-law'); ?>
        </a>
        <a class="btn btn-green"
           href="<?php echo esc_url( fts_wa_url() ); ?>"
           target="_blank"
           rel="noopener noreferrer">
          💬 <?php _e('WhatsApp Us', 'fts-law'); ?>
        </a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       TRUST BAR – VISA SPECIFIC
  ══════════════════════════════════════════════════════════════════ -->
  <div class="trust-bar">
    <div class="container trust-grid">
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">⚖️</span>
        <span><?php _e('Lawyer-Supervised Service', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">📋</span>
        <span><?php _e('KITAS &amp; KITAP Specialists', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🌍</span>
        <span><?php _e('Foreign National Clients', 'fts-law'); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-icon" aria-hidden="true">🔒</span>
        <span><?php _e('Confidential Legal Process', 'fts-law'); ?></span>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════
       INTRO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container">
      <div class="intro-two-col">
        <div>
          <h2 class="section-title"><?php _e('Indonesian Visa &amp; Immigration: What You Need to Know', 'fts-law'); ?></h2>
          <p>
            <?php _e('Navigating Indonesia\'s immigration system can be complex for foreign nationals. From choosing the right type of visa to ensuring your documents meet the requirements of the Directorate General of Immigration (Imigrasi), having proper legal guidance can save significant time, cost, and risk.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('Our office provides lawyer-supervised immigration legal services — not visa agent services. This means your case is handled by a licensed Indonesian lawyer who understands the full legal implications of each step, from application to renewal or permanent stay.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('We support foreign investors, expatriate workers, retirees, and spouses of Indonesian citizens. All service types are listed below — select the one most relevant to your situation.', 'fts-law'); ?>
          </p>
        </div>
        <div class="info-sidebar">
          <div class="info-box">
            <h4><?php _e('⚠️ Important: Lawyer vs. Visa Agent', 'fts-law'); ?></h4>
            <p>
              <?php _e('A licensed lawyer provides legal protection and professional accountability for your immigration process. A visa agent does not. We strongly recommend working with a registered advocate for any stay permit matter in Indonesia.', 'fts-law'); ?>
            </p>
          </div>
          <div class="info-box info-box--soft">
            <h4><?php _e('🌐 We Serve Clients From', 'fts-law'); ?></h4>
            <p>
              <?php _e('Japan · South Korea · China · Singapore · Australia · USA · UK · Netherlands · Germany · India · and 40+ other countries.', 'fts-law'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       VISA TYPE CARDS – MAIN 4
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-visa-types">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Our Visa &amp; Immigration Services', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        <?php _e('Select the visa type that matches your situation for detailed information, requirements, and our legal support scope.', 'fts-law'); ?>
      </p>

      <div class="grid-4 visa-cards-grid" style="margin-top: 36px;">

        <!-- KITAS -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">📋</div>
          <span class="mini-label"><?php _e('Temporary Stay Permit', 'fts-law'); ?></span>
          <h3><?php _e('KITAS', 'fts-law'); ?></h3>
          <p class="visa-card-desc">
            <?php _e('The Kartu Izin Tinggal Terbatas (KITAS) is Indonesia\'s temporary stay permit for foreign nationals working, investing, or living in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Investor KITAS (PT PMA shareholders)', 'fts-law'); ?></li>
            <li><?php _e('Working / Employee KITAS', 'fts-law'); ?></li>
            <li><?php _e('Spouse / Family KITAS', 'fts-law'); ?></li>
            <li><?php _e('Retirement KITAS', 'fts-law'); ?></li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ <?php _e('2–6 weeks processing', 'fts-law'); ?></span>
            <span class="visa-meta-badge">📅 <?php _e('Valid 1–2 years, renewable', 'fts-law'); ?></span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'kitas' ) ); ?>">
            <?php _e('KITAS Details &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <!-- KITAP -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">🏠</div>
          <span class="mini-label"><?php _e('Permanent Stay Permit', 'fts-law'); ?></span>
          <h3><?php _e('KITAP', 'fts-law'); ?></h3>
          <p class="visa-card-desc">
            <?php _e('The Kartu Izin Tinggal Tetap (KITAP) is Indonesia\'s permanent stay permit, available to qualifying foreign nationals after a period of holding a KITAS.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Eligibility review (KITAS history)', 'fts-law'); ?></li>
            <li><?php _e('Document preparation &amp; submission', 'fts-law'); ?></li>
            <li><?php _e('Immigration office coordination', 'fts-law'); ?></li>
            <li><?php _e('Permanent stay legal guidance', 'fts-law'); ?></li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ <?php _e('4–8 weeks processing', 'fts-law'); ?></span>
            <span class="visa-meta-badge">📅 <?php _e('Valid 5 years, renewable', 'fts-law'); ?></span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'kitap' ) ); ?>">
            <?php _e('KITAP Details &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <!-- Investor Visa -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">💼</div>
          <span class="mini-label"><?php _e('For Business Owners', 'fts-law'); ?></span>
          <h3><?php _e('Investor KITAS', 'fts-law'); ?></h3>
          <p class="visa-card-desc">
            <?php _e('The Investor KITAS is designed specifically for foreign nationals who own shares in a PT PMA (foreign-owned company) registered in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('PT PMA shareholder verification', 'fts-law'); ?></li>
            <li><?php _e('BKPM / OSS coordination', 'fts-law'); ?></li>
            <li><?php _e('Investor KITAS application', 'fts-law'); ?></li>
            <li><?php _e('Company &amp; visa synchronisation', 'fts-law'); ?></li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⏱ <?php _e('3–6 weeks processing', 'fts-law'); ?></span>
            <span class="visa-meta-badge">📅 <?php _e('Linked to PT PMA validity', 'fts-law'); ?></span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'investor-visa' ) ); ?>">
            <?php _e('Investor Visa Details &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <!-- Visa Extension -->
        <article class="card card--visa">
          <div class="visa-card-icon" aria-hidden="true">🗓</div>
          <span class="mini-label"><?php _e('Stay Permit Renewal', 'fts-law'); ?></span>
          <h3><?php _e('Visa Extension', 'fts-law'); ?></h3>
          <p class="visa-card-desc">
            <?php _e('Legal support for renewing or extending your current visa or stay permit before it expires — avoiding fines, overstay risk, or deportation.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Extension timeline planning', 'fts-law'); ?></li>
            <li><?php _e('Document checklist &amp; review', 'fts-law'); ?></li>
            <li><?php _e('Overstay risk management', 'fts-law'); ?></li>
            <li><?php _e('Emergency extension support', 'fts-law'); ?></li>
          </ul>
          <div class="visa-card-meta">
            <span class="visa-meta-badge">⚠️ <?php _e('Apply 30–60 days before expiry', 'fts-law'); ?></span>
            <span class="visa-meta-badge">💰 <?php _e('Overstay fines apply', 'fts-law'); ?></span>
          </div>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'visa-extension' ) ); ?>">
            <?php _e('Extension Details &rarr;', 'fts-law'); ?>
          </a>
        </article>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       HOW THE IMMIGRATION PROCESS WORKS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('How Our Visa Legal Support Works', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        <?php _e('A structured, lawyer-supervised process from first inquiry to approved permit.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Initial Visa Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Tell us about your situation — nationality, purpose of stay, employment or business status. We identify the right visa type and requirements for you.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Document Review', 'fts-law'); ?></h4>
          <p>
            <?php _e('We review your existing documents, identify any gaps, and provide a complete checklist of what is needed for your specific visa application.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Application &amp; Submission', 'fts-law'); ?></h4>
          <p>
            <?php _e('Our lawyer supervises the preparation and submission of your visa application to the Directorate General of Immigration (Ditjen Imigrasi).', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Follow-up &amp; Delivery', 'fts-law'); ?></h4>
          <p>
            <?php _e('We track your application status, handle any follow-up requests from the immigration office, and coordinate delivery of your permit card.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMMON QUESTIONS / FAQ
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-faq">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Frequently Asked Questions', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center; margin-left:auto; margin-right:auto;">
        <?php _e('Common questions from foreign nationals about Indonesia\'s visa system.', 'fts-law'); ?>
      </p>

      <div class="faq-list">

        <details class="faq-item">
          <summary class="faq-question"><?php _e('What is the difference between KITAS and KITAP?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('<strong>KITAS</strong> (Kartu Izin Tinggal Terbatas) is a temporary stay permit, typically valid for 1–2 years and renewable. <strong>KITAP</strong> (Kartu Izin Tinggal Tetap) is a permanent stay permit, valid for 5 years and renewable, available after a qualifying period of holding a KITAS. KITAP holders have more stable residency rights in Indonesia.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question"><?php _e('Do I need an Investor KITAS to run my PT PMA?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('Not necessarily. You can operate a PT PMA while residing abroad or on a valid business visa. However, if you wish to reside in Indonesia as a shareholder or director of your PT PMA, an <strong>Investor KITAS</strong> is required. This allows you to legally live and manage your business in Indonesia.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question"><?php _e('How long does it take to get a KITAS?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('Processing time varies depending on the type of KITAS and whether all documents are complete. Typically, KITAS processing takes <strong>2–6 weeks</strong> from the time of submission. Working with a lawyer ensures documents are correctly prepared and any immigration office queries are promptly addressed.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question"><?php _e('What happens if my visa or stay permit expires?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('Overstaying your visa or stay permit in Indonesia carries serious consequences, including <strong>daily fines</strong>, possible detention by immigration authorities, and potential <strong>deportation</strong>. In serious cases, you may be blacklisted from re-entering Indonesia. We strongly recommend applying for extension or renewal at least 30–60 days before your permit expires.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question"><?php _e('Can I work in Indonesia on a tourist visa?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('No. Working in Indonesia on a tourist visa (Visa on Arrival or B211A) is illegal and can result in deportation and a re-entry ban. Foreign nationals who intend to work, conduct business, or invest actively in Indonesia must obtain the appropriate stay permit — typically a Working KITAS or Investor KITAS.', 'fts-law'); ?>
            </p>
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-question"><?php _e('Why should I use a lawyer instead of a visa agent?', 'fts-law'); ?></summary>
          <div class="faq-answer">
            <p>
              <?php _e('A licensed lawyer is legally accountable for the services they provide and must adhere to the Indonesian Bar Association (PERADI) code of conduct. A visa agent has no such accountability. If something goes wrong with your visa application or your legal rights are affected, a lawyer can take proper legal steps to protect you — a visa agent cannot.', 'fts-law'); ?>
            </p>
          </div>
        </details>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       INTERNAL LINKS – RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'pt-pma' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Set up a foreign-owned company in Indonesia and get your Investor KITAS at the same time.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Review', 'fts-law'); ?></h4>
          <p><?php _e('Understand the legal risks of your current visa or residency situation before they become problems.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'guide' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">📘</span>
          <h4><?php _e('Free Legal Guide', 'fts-law'); ?></h4>
          <p><?php _e('Download our free guide covering visa basics, foreign investment rules, and common legal mistakes.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      __('Not Sure Which Visa You Need?', 'fts-law'),
      __('Book a consultation with our lawyer. We will review your situation and recommend the correct visa type, documents, and legal steps for your case in Indonesia.', 'fts-law')
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
