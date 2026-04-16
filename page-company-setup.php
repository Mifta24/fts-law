<?php
/**
 * FTS Law – Company Setup Indonesia Overview
 * Template for: /company-setup
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
      <span class="eyebrow"><?php _e('Business Setup in Indonesia', 'fts-law'); ?></span>
      <h1><?php _e('Company Setup for Foreign Investors in Indonesia', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Legal guidance for foreign nationals setting up a business in Indonesia — from structure planning to government registration, handled by a licensed lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            fts_page_url( 'consultation' ),
        ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Can Foreigners Own a Business in Indonesia?', 'fts-law'); ?></h2>
        <p>
          <?php _e('Yes — foreign nationals can legally own and operate a business in Indonesia, but the rules governing foreign ownership are specific and regulated by the Indonesian Investment Coordinating Board (BKPM) and the Indonesian Investment Law (Law No. 25 of 2007).', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('The primary vehicle for foreign business ownership in Indonesia is the', 'fts-law'); ?>
          <?php _e('<strong>PT PMA</strong> (Perseroan Terbatas Penanaman Modal Asing) — a Foreign Investment Limited Liability Company. A PT PMA allows foreign nationals to hold shares in an Indonesian company, subject to sector-specific ownership limits set by the government\'s Positive Investment List.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Setting up a company in Indonesia involves multiple government agencies, legal documents, and registration processes. Having a licensed lawyer manage this process ensures that your company structure is legally sound, your investment is protected, and your business can operate without compliance issues from day one.', 'fts-law'); ?>
        </p>
        <div class="info-box">
          <?php _e('<strong>💡 Important:</strong> Not all business sectors are open to 100% foreign ownership. Some sectors are restricted or require Indonesian co-ownership. We assess your intended business activity during the initial consultation to determine the correct ownership structure for your specific case.', 'fts-law'); ?>
        </div>
      </div>

      <div class="setup-sidebar">

        <div class="card card--highlight">
          <h3 class="card__highlight-title"><?php _e('Company Setup at a Glance', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Main Vehicle', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('PT PMA (Foreign Investment Company)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Min. Investment', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('IDR 10 Billion (investment plan)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Min. Paid-Up Capital', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('IDR 2.5 Billion', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Ownership', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Up to 100% (sector dependent)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Registration Body', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('OSS System / BKPM', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Estimated Timeline', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('4–8 weeks (full setup)', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url(fts_page_url( 'pt-pma' )); ?>">
            <?php _e('PT PMA Full Details &rarr;', 'fts-law'); ?>
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       LEGAL STRUCTURE OPTIONS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-structures">
    <div class="container">

      <h2 class="section-title"><?php _e('Business Structure Options for Foreign Investors', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Understanding the available legal entity types helps you choose the right structure before committing to registration. We advise on the most appropriate structure for your business activity and investment goals.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card card--structure card--structure-recommended">
          <div class="structure-badge"><?php _e('Most Common for Foreigners', 'fts-law'); ?></div>
          <span class="mini-label"><?php _e('Foreign Ownership', 'fts-law'); ?></span>
          <h3><?php _e('PT PMA', 'fts-law'); ?></h3>
          <p class="structure-full-name"><?php _e('Perseroan Terbatas Penanaman Modal Asing', 'fts-law'); ?></p>
          <p>
            <?php _e('The standard legal vehicle for foreign investment in Indonesia. Allows foreign nationals to hold shares and operate a business across most sectors, subject to the Positive Investment List.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Foreign ownership allowed (up to 100% in open sectors)', 'fts-law'); ?></li>
            <li><?php _e('Can hire foreign workers (with proper permits)', 'fts-law'); ?></li>
            <li><?php _e('Eligible for Investor KITAS sponsorship', 'fts-law'); ?></li>
            <li><?php _e('Full legal entity — can sign contracts, own assets', 'fts-law'); ?></li>
            <li><?php _e('Subject to BKPM / OSS registration', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url(
              fts_page_url( 'pt-pma' ),
          ); ?>">
            <?php _e('PT PMA Setup Details &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--structure">
          <span class="mini-label"><?php _e('Domestic Entity', 'fts-law'); ?></span>
          <h3><?php _e('PT (Domestic Company)', 'fts-law'); ?></h3>
          <p class="structure-full-name"><?php _e('Perseroan Terbatas (100% Indonesian Owned)', 'fts-law'); ?></p>
          <p>
            <?php _e('A domestic limited liability company, owned entirely by Indonesian citizens or entities. Foreign nationals cannot legally hold shares in a PT directly. Using a nominee arrangement is illegal and carries serious legal risks.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('100% Indonesian ownership required', 'fts-law'); ?></li>
            <li><?php _e('Simpler registration requirements than PT PMA', 'fts-law'); ?></li>
            <li><?php _e('Lower minimum capital requirements', 'fts-law'); ?></li>
            <li><strong><?php _e('Not suitable for foreign ownership', 'fts-law'); ?></strong></li>
            <li><?php _e('Nominee structures are illegal', 'fts-law'); ?></li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <?php _e('<strong>⚠️ Warning:</strong> Foreigners using nominee shareholders in a PT risk losing their company. See our', 'fts-law'); ?>
            <a href="<?php echo esc_url(
                fts_page_url( 'legal-risk' ),
            ); ?>"><?php _e('Legal Risk page', 'fts-law'); ?></a>.
          </div>
        </article>

        <article class="card card--structure">
          <span class="mini-label"><?php _e('Representative Office', 'fts-law'); ?></span>
          <h3><?php _e('KPPA / KP3A', 'fts-law'); ?></h3>
          <p class="structure-full-name"><?php _e('Kantor Perwakilan Perusahaan Asing', 'fts-law'); ?></p>
          <p>
            <?php _e('A representative office of a foreign company in Indonesia. Allowed only for marketing and liaison activities — <strong>cannot conduct commercial transactions or generate revenue</strong> in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('No revenue-generating activities permitted', 'fts-law'); ?></li>
            <li><?php _e('Marketing and research only', 'fts-law'); ?></li>
            <li><?php _e('Lower setup requirements than PT PMA', 'fts-law'); ?></li>
            <li><?php _e('Suitable for market entry research phase', 'fts-law'); ?></li>
            <li><?php _e('Cannot sponsor Investor KITAS', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url(
              fts_page_url( 'consultation' ),
          ); ?>">
            <?php _e('Ask About KPPA &rarr;', 'fts-law'); ?>
          </a>
        </article>

      </div>

      <div class="structure-recommendation">
        <div class="structure-recommendation__inner">
          <span class="structure-recommendation__icon" aria-hidden="true">✅</span>
          <div>
            <?php _e('<strong>Our Recommendation:</strong> For most foreign investors who want to actively operate, manage, or earn revenue from a business in Indonesia, a <strong>PT PMA is the correct legal structure</strong>. It provides the strongest legal protection, full commercial rights, and eligibility for an Investor KITAS.', 'fts-law'); ?>
          </div>
        </div>
        <a class="btn btn-gold" href="<?php echo esc_url(
            fts_page_url( 'pt-pma' ),
        ); ?>">
          <?php _e('PT PMA Setup Guide &rarr;', 'fts-law'); ?>
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FOREIGN OWNERSHIP BASICS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-ownership">
    <div class="container">

      <h2 class="section-title"><?php _e('Foreign Ownership Rules in Indonesia', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Foreign ownership is regulated by the Positive Investment List (Daftar Prioritas Investasi) issued by BKPM. Understanding these rules is essential before choosing a business sector.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="ownership-card ownership-card--open">
          <span class="ownership-card__icon" aria-hidden="true">✅</span>
          <h4><?php _e('100% Open Sectors', 'fts-law'); ?></h4>
          <p>
            <?php _e('Some business sectors allow 100% foreign ownership through a PT PMA. Examples include certain technology, tourism, industrial, and service sectors.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              fts_page_url( 'foreign-investment' ),
          ); ?>" class="ownership-card__link">
            <?php _e('View Investment Rules &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="ownership-card ownership-card--partial">
          <span class="ownership-card__icon" aria-hidden="true">⚡</span>
          <h4><?php _e('Partially Open Sectors', 'fts-law'); ?></h4>
          <p>
            <?php _e('Some sectors allow foreign ownership up to a specified percentage (e.g., 49%, 67%, or 95%), requiring Indonesian co-ownership for the remainder.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              fts_page_url( 'foreign-investment' ),
          ); ?>" class="ownership-card__link">
            <?php _e('Check Your Sector &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="ownership-card ownership-card--restricted">
          <span class="ownership-card__icon" aria-hidden="true">⛔</span>
          <h4><?php _e('Restricted / Closed Sectors', 'fts-law'); ?></h4>
          <p>
            <?php _e('Certain sectors are closed to foreign ownership entirely or are reserved for Indonesian nationals only. Examples include certain media, defence, and cultural sectors.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              fts_page_url( 'foreign-investment' ),
          ); ?>" class="ownership-card__link">
            <?php _e('View Restrictions &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="ownership-card ownership-card--advice">
          <span class="ownership-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Get Legal Advice First', 'fts-law'); ?></h4>
          <p>
            <?php _e('Before committing to a business structure, our lawyer reviews your intended activity against the current Positive Investment List to confirm your ownership options.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              fts_page_url( 'consultation' ),
          ); ?>" class="ownership-card__link">
            <?php _e('Book Consultation &rarr;', 'fts-law'); ?>
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMPANY SETUP PROCESS OVERVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('General Company Setup Process in Indonesia', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A simplified overview of the steps involved in setting up a PT PMA in Indonesia. Full details and a step-by-step guide are on our PT PMA Setup page.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Legal Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Determine business activity, ownership structure, share allocation, and confirm sector eligibility under the Positive Investment List.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Company Name Reservation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Check and reserve the company name through the Ministry of Law and Human Rights (Kemenkumham) AHU online system.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Deed of Establishment', 'fts-law'); ?></h4>
          <p>
            <?php _e('Prepare and sign the Articles of Association (Akta Pendirian) before a licensed Indonesian notary. This document defines the company structure, shareholders, directors, and commissioners.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Ministry Approval', 'fts-law'); ?></h4>
          <p>
            <?php _e('Submit the deed for approval and ratification by the Ministry of Law and Human Rights. This creates the company as a legal entity.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('OSS / NIB Registration', 'fts-law'); ?></h4>
          <p>
            <?php _e('Register the company through the Online Single Submission (OSS) system to obtain the NIB (Business Identity Number) and business licensing.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('NPWP &amp; Tax Registration', 'fts-law'); ?></h4>
          <p>
            <?php _e('Register for a company Tax ID (NPWP) with the Directorate General of Taxation. Required before any commercial activity begins.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">7</div>
          <h4><?php _e('Business Licence &amp; Sector Permit', 'fts-law'); ?></h4>
          <p>
            <?php _e('Obtain any sector-specific business licences required by the relevant government ministry for your business activity.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">8</div>
          <h4><?php _e('Company Bank Account', 'fts-law'); ?></h4>
          <p>
            <?php _e('Open an Indonesian corporate bank account and fulfil the minimum paid-up capital injection requirement. We assist with bank introduction and capital injection documentation.', 'fts-law'); ?>
          </p>
        </div>

      </div>

      <div style="text-align:center;margin-top:32px;">
        <a class="btn btn-gold" href="<?php echo esc_url(
            fts_page_url( 'pt-pma' ),
        ); ?>">
          <?php _e('See Full PT PMA Setup Guide &rarr;', 'fts-law'); ?>
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHY LEGAL SUPPORT IS ESSENTIAL
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-why-legal">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Why Legal Support Is Essential for Company Setup', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Setting up a PT PMA without legal guidance exposes foreign investors to significant legal and financial risks.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">📜</span>
          <h4><?php _e('Correct Legal Structure', 'fts-law'); ?></h4>
          <p>
            <?php _e('Choosing the wrong ownership structure, share allocation, or director arrangement can make your company legally invalid or result in future disputes.', 'fts-law'); ?>
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">⚠️</span>
          <h4><?php _e('Nominee Shareholder Risk', 'fts-law'); ?></h4>
          <p>
            <?php _e('Using Indonesian nominees to bypass foreign ownership limits is illegal. Foreign investors who do this risk losing their entire company with no legal recourse.', 'fts-law'); ?>
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">🏛</span>
          <h4><?php _e('Government Compliance', 'fts-law'); ?></h4>
          <p>
            <?php _e('PT PMA companies face specific reporting obligations to BKPM, OSS, and tax authorities. Non-compliance results in penalties and may jeopardise your business licence.', 'fts-law'); ?>
          </p>
        </div>

        <div class="why-legal-card">
          <span class="why-legal-card__icon" aria-hidden="true">🔒</span>
          <h4><?php _e('Investor Protection', 'fts-law'); ?></h4>
          <p>
            <?php _e('Properly drafted shareholder agreements, director terms, and corporate governance documents protect your investment from internal disputes and director misconduct.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       PT PMA FEATURE CALLOUT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-pt-pma-callout">
    <div class="container">
      <div class="guide-promo-band">
        <div class="guide-promo-band__copy">
          <span class="eyebrow"><?php _e('Detailed Guide', 'fts-law'); ?></span>
          <h2><?php _e('PT PMA Setup – Step-by-Step', 'fts-law'); ?></h2>
          <p>
            <?php _e('Our PT PMA Setup page provides a complete guide to setting up a foreign-owned company in Indonesia — including investment requirements, government registration steps, licensing, capital injection, and the Investor KITAS application process.', 'fts-law'); ?>
          </p>
          <div class="hero-actions" style="margin-top:20px;">
            <a class="btn btn-gold" href="<?php echo esc_url(
                fts_page_url( 'pt-pma' ),
            ); ?>">
              <?php _e('PT PMA Setup Full Guide', 'fts-law'); ?>
            </a>
            <a class="btn btn-outline" href="<?php echo esc_url(
                fts_page_url( 'consultation' ),
            ); ?>">
              <?php _e('Book Consultation', 'fts-law'); ?>
            </a>
          </div>
        </div>
        <div class="guide-promo-band__pills">
          <span class="pill"><?php _e('PT PMA Registration', 'fts-law'); ?></span>
          <span class="pill"><?php _e('OSS / NIB Licensing', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Shareholder Agreement', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Director Setup', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Capital Injection', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Investor KITAS', 'fts-law'); ?></span>
          <span class="pill"><?php _e('BKPM Reporting', 'fts-law'); ?></span>
          <span class="pill"><?php _e('Tax Registration', 'fts-law'); ?></span>
        </div>
      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-related">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'pt-pma' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📜</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Full step-by-step guide and legal support for setting up a foreign-owned company in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'foreign-investment' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">💹</span>
          <h4><?php _e('Foreign Investment Law', 'fts-law'); ?></h4>
          <p><?php _e('Understand the legal framework, ownership limits, and compliance requirements for foreign investors.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'investor-visa' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4><?php _e('Investor KITAS', 'fts-law'); ?></h4>
          <p><?php _e('Obtain your stay permit as a foreign shareholder in a PT PMA company in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'contract-drafting' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4><?php _e('Contract &amp; Agreement Drafting', 'fts-law'); ?></h4>
          <p><?php _e('Shareholder agreements, director agreements, and business contracts for your PT PMA.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'legal-risk' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Identify and prevent legal risks in your company structure before they become costly problems.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            fts_page_url( 'business-legal' ),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Business Legal Support', 'fts-law'); ?></h4>
          <p><?php _e('Ongoing legal advisory, compliance monitoring, and corporate governance support.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      __('Ready to Set Up Your Business in Indonesia?', 'fts-law'),
      __('Book a consultation with our licensed Indonesian lawyer to discuss your business plan, confirm your ownership structure, and get a step-by-step setup roadmap tailored to your investment goals.', 'fts-law')
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
