<?php
/**
 * FTS Law – Business Legal Support Page
 * Template for: /business-legal
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow"><?php _e('Corporate Legal Services', 'fts-law'); ?></span>
      <h1><?php _e('Business Legal Support in Indonesia', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Ongoing and transactional legal support for foreign-owned businesses in Indonesia — corporate governance, compliance monitoring, and dispute prevention, handled by a licensed lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- INTRO -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Why You Need It', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Legal Support Beyond Company Setup', 'fts-law'); ?></h2>
        <p>
          <?php _e('Setting up a PT PMA is only the beginning. Foreign-owned businesses in Indonesia face ongoing legal obligations — from BKPM reporting and corporate governance to contract management, employment law compliance, and dispute prevention.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Without consistent legal support, many foreign-owned businesses develop structural vulnerabilities over time: shareholder disputes, director conflicts, undrafted agreements, and compliance gaps that become costly to resolve.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Our business legal support service provides a licensed Indonesian lawyer as your ongoing legal partner — available for transactional matters, compliance reviews, advisory consultations, and contract work across your business operations in Indonesia.', 'fts-law'); ?>
        </p>
        <div class="info-box">
          <?php _e('<strong>🛡 Proactive Legal Protection:</strong> It is significantly less expensive to prevent a legal dispute than to resolve one. Our ongoing legal support is designed to identify and address legal risks before they become problems.', 'fts-law'); ?>
        </div>
      </div>

      <div>
        <div class="card card--highlight">
          <h3 class="card__highlight-title"><?php _e('Business Legal Support Covers', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Advisory', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Corporate governance &amp; business legal advice', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Compliance', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('LKPM, OSS, tax, and regulatory compliance', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Contracts', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Review, drafting, and negotiation support', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Governance', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Shareholder meetings, board resolutions', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Employment', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Employment agreements &amp; HR legal compliance', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Disputes', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Early dispute identification &amp; prevention', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( home_url('/consultation') ); ?>">
            <?php _e('Discuss Your Legal Needs', 'fts-law'); ?>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- SERVICES GRID -->
  <section class="section-soft">
    <div class="container">

      <h2 class="section-title"><?php _e('Our Business Legal Support Services', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Comprehensive legal services for every aspect of running a foreign-owned business in Indonesia — from day-to-day advisory to complex transactions.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">⚖️</div>
          <span class="mini-label"><?php _e('Advisory', 'fts-law'); ?></span>
          <h3><?php _e('Legal Advisory Services', 'fts-law'); ?></h3>
          <p>
            <?php _e('Direct access to a licensed Indonesian lawyer for legal questions, regulatory interpretation, business decision advice, and risk assessment across all aspects of your business operations in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('On-demand legal consultation', 'fts-law'); ?></li>
            <li><?php _e('Regulatory interpretation advice', 'fts-law'); ?></li>
            <li><?php _e('Business decision legal review', 'fts-law'); ?></li>
            <li><?php _e('Indonesian law guidance in English', 'fts-law'); ?></li>
          </ul>
        </article>

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">🏛</div>
          <span class="mini-label"><?php _e('Governance', 'fts-law'); ?></span>
          <h3><?php _e('Corporate Governance', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legal support for maintaining proper corporate governance in your PT PMA — including shareholder meetings, board resolutions, director appointments, share transfers, and corporate secretary functions.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Annual General Meeting (RUPS) preparation', 'fts-law'); ?></li>
            <li><?php _e('Board resolutions &amp; minutes', 'fts-law'); ?></li>
            <li><?php _e('Director appointment &amp; removal', 'fts-law'); ?></li>
            <li><?php _e('Share transfer documentation', 'fts-law'); ?></li>
          </ul>
        </article>

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">📋</div>
          <span class="mini-label"><?php _e('Compliance', 'fts-law'); ?></span>
          <h3><?php _e('Business Compliance Monitoring', 'fts-law'); ?></h3>
          <p>
            <?php _e('Ongoing monitoring and management of your PT PMA\'s regulatory compliance obligations — BKPM/OSS reporting, licence renewals, tax filings, and employment law compliance.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Quarterly &amp; annual LKPM reporting', 'fts-law'); ?></li>
            <li><?php _e('OSS licence renewal monitoring', 'fts-law'); ?></li>
            <li><?php _e('Regulatory change alerts', 'fts-law'); ?></li>
            <li><?php _e('Tax compliance coordination', 'fts-law'); ?></li>
          </ul>
        </article>

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">🔒</div>
          <span class="mini-label"><?php _e('Protection', 'fts-law'); ?></span>
          <h3><?php _e('Dispute Prevention &amp; Management', 'fts-law'); ?></h3>
          <p>
            <?php _e('Proactive identification of potential disputes between shareholders, directors, employees, and business partners — with legal intervention strategies before conflicts escalate.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Shareholder dispute early warning', 'fts-law'); ?></li>
            <li><?php _e('Director conflict management', 'fts-law'); ?></li>
            <li><?php _e('Business partner dispute prevention', 'fts-law'); ?></li>
            <li><?php _e('Pre-litigation legal strategy', 'fts-law'); ?></li>
          </ul>
        </article>

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">📝</div>
          <span class="mini-label"><?php _e('Contracts', 'fts-law'); ?></span>
          <h3><?php _e('Contract &amp; Agreement Review', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legal review of all incoming contracts, supplier agreements, service agreements, and business documents before signing. We identify unfavorable clauses and recommend protective amendments.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Contract risk review', 'fts-law'); ?></li>
            <li><?php _e('Supplier agreement review', 'fts-law'); ?></li>
            <li><?php _e('Service contract negotiation support', 'fts-law'); ?></li>
            <li><?php _e('MoU &amp; letter of intent review', 'fts-law'); ?></li>
          </ul>
        </article>

        <article class="card card--service-detail">
          <div class="card-icon" aria-hidden="true">👥</div>
          <span class="mini-label"><?php _e('Employment', 'fts-law'); ?></span>
          <h3><?php _e('Employment Legal Compliance', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legal support for Indonesian employment matters — from employment agreement drafting to termination procedures, BPJS compliance, and foreign worker permit management.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Employment agreement drafting', 'fts-law'); ?></li>
            <li><?php _e('Indonesian employment law advice', 'fts-law'); ?></li>
            <li><?php _e('BPJS compliance monitoring', 'fts-law'); ?></li>
            <li><?php _e('Foreign worker permit (IMTA/RPTKA) support', 'fts-law'); ?></li>
          </ul>
        </article>

      </div>

    </div>
  </section>


  <!-- CORPORATE GOVERNANCE DETAIL -->
  <section class="section-governance">
    <div class="container">

      <h2 class="section-title"><?php _e('Corporate Governance for PT PMA', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Proper corporate governance is a legal requirement for PT PMA companies under Indonesian Company Law. We manage the governance obligations on your behalf.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">📅</span>
          <h4><?php _e('Annual GMS (RUPS)', 'fts-law'); ?></h4>
          <p>
            <?php _e('Preparation, notice, agenda, minutes, and notarial documentation for the Annual General Meeting of Shareholders — required within 6 months of fiscal year end.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('Board Resolutions', 'fts-law'); ?></h4>
          <p>
            <?php _e('Drafting of circular resolutions for board decisions that do not require a full GMS — including capital decisions, director actions, and contract approvals.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">🔄</span>
          <h4><?php _e('Share Transfers', 'fts-law'); ?></h4>
          <p>
            <?php _e('Legal management of share transfers between shareholders — including notarial deed of transfer, shareholder register updates, and OSS/BKPM notification.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">👤</span>
          <h4><?php _e('Director Changes', 'fts-law'); ?></h4>
          <p>
            <?php _e('Legal process for appointing or removing directors and commissioners — including GMS documentation, Kemenkumham notification, and OSS system updates.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">📈</span>
          <h4><?php _e('Capital Increases', 'fts-law'); ?></h4>
          <p>
            <?php _e('Legal process for increasing the authorised or paid-up capital of your PT PMA — including shareholder resolution, notarial deed amendment, and BKPM notification.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">📄</span>
          <h4><?php _e('Articles of Association Updates', 'fts-law'); ?></h4>
          <p>
            <?php _e('Amendment of the Articles of Association to reflect changes in business activity, company name, registered address, or ownership structure — through a notarial deed and Kemenkumham approval.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">🏦</span>
          <h4><?php _e('Banking &amp; Signatory Authority', 'fts-law'); ?></h4>
          <p>
            <?php _e('Legal documentation for updating bank signatory authority, adding or removing authorised signatories, and managing corporate bank account governance.', 'fts-law'); ?>
          </p>
        </div>

        <div class="governance-card">
          <span class="governance-card__icon" aria-hidden="true">🗄</span>
          <h4><?php _e('Corporate Records Management', 'fts-law'); ?></h4>
          <p>
            <?php _e('Maintenance of the company\'s legal document archive — deed history, GMS minutes, resolutions, shareholder register, and licence documents — as required by Indonesian Company Law.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- COMPLIANCE CALENDAR -->
  <section class="section-soft section-compliance-calendar">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('PT PMA Annual Compliance Calendar', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Key compliance deadlines for PT PMA companies throughout the year. Our team monitors and manages all of these for our business legal support clients.', 'fts-law'); ?>
      </p>

      <div class="compliance-calendar">

        <div class="compliance-month">
          <div class="compliance-month__header"><?php _e('Q1 (Jan – Mar)', 'fts-law'); ?></div>
          <ul class="compliance-month__items">
            <li><span class="comp-dot comp-dot--red"></span> <?php _e('Annual LKPM submission (full year)', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--blue"></span> <?php _e('Annual GMS preparation (Q4 fiscal year end)', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--orange"></span> <?php _e('BPJS compliance review', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="compliance-month">
          <div class="compliance-month__header"><?php _e('Q2 (Apr – Jun)', 'fts-law'); ?></div>
          <ul class="compliance-month__items">
            <li><span class="comp-dot comp-dot--red"></span> <?php _e('Q1 LKPM submission', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--green"></span> <?php _e('Annual corporate tax return (SPT Badan) — April 30', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--blue"></span> <?php _e('Business licence renewal check', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="compliance-month">
          <div class="compliance-month__header"><?php _e('Q3 (Jul – Sep)', 'fts-law'); ?></div>
          <ul class="compliance-month__items">
            <li><span class="comp-dot comp-dot--red"></span> <?php _e('Q2 LKPM submission', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--orange"></span> <?php _e('Mid-year legal compliance review', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--blue"></span> <?php _e('KITAS renewal check (if applicable)', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="compliance-month">
          <div class="compliance-month__header"><?php _e('Q4 (Oct – Dec)', 'fts-law'); ?></div>
          <ul class="compliance-month__items">
            <li><span class="comp-dot comp-dot--red"></span> <?php _e('Q3 LKPM submission', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--green"></span> <?php _e('Year-end GMS preparation', 'fts-law'); ?></li>
            <li><span class="comp-dot comp-dot--orange"></span> <?php _e('Year-end compliance &amp; governance review', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top:24px;">
        <?php _e('<strong>📌 Never Miss a Deadline:</strong> Our business legal support clients receive automated reminders and proactive management of all compliance deadlines. Missing LKPM reports or corporate filings can result in administrative penalties and may affect your PT PMA\'s investment registration status.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- WHO NEEDS THIS -->
  <section class="section-who">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Who Needs Business Legal Support?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Our ongoing business legal support is most valuable for these client types.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">🏢</span>
          <p><?php _e('<strong>PT PMA Owners</strong> who want ongoing legal protection and compliance management without hiring in-house legal staff.', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">🌍</span>
          <p><?php _e('<strong>Foreign Directors</strong> who are not based in Indonesia full-time and need a local legal partner to manage day-to-day legal matters.', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">🤝</span>
          <p><?php _e('<strong>Foreign-Indonesian JV Companies</strong> where shareholder relationships need independent legal monitoring and governance support.', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">📈</span>
          <p><?php _e('<strong>Growing Foreign Businesses</strong> that are expanding operations, hiring staff, or entering new contracts and need legal review at each step.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- RELATED SERVICES -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url('/contract-drafting') ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h4>
          <p><?php _e('Business contracts, partnership agreements, and investor agreements drafted and reviewed by our lawyer.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/legal-risk') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Identify and manage legal risks in your existing business structure, contracts, and operations.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/foreign-investment') ); ?>">
          <span class="related-card__icon" aria-hidden="true">📈</span>
          <h4><?php _e('Foreign Investment Law', 'fts-law'); ?></h4>
          <p><?php _e('Understand your compliance obligations under Indonesian foreign investment regulations.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- CTA -->
  <?php fts_cta_section(
    __('Need Ongoing Legal Support for Your Business in Indonesia?', 'fts-law'),
    __('Our licensed Indonesian lawyer provides direct, practical legal support for foreign-owned businesses — from day-to-day advisory to compliance management and dispute prevention.', 'fts-law')
  ); ?>

</main>

<?php get_footer(); ?>
