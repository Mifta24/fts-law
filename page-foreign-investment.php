<?php
/**
 * FTS Law – Foreign Investment Law Page
 * Template for: /foreign-investment
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow"><?php _e('Foreign Investment in Indonesia', 'fts-law'); ?></span>
      <h1><?php _e('Foreign Investment Law in Indonesia', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Understanding Indonesia\'s investment regulations, foreign ownership limits, and compliance obligations — essential knowledge for every foreign investor.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- OVERVIEW -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Legal Framework', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Indonesia\'s Foreign Investment Legal Framework', 'fts-law'); ?></h2>
        <p>
          <?php _e('Foreign investment in Indonesia is primarily governed by <strong>Law No. 25 of 2007 on Investment</strong> (UU Penanaman Modal), along with implementing regulations issued by the Indonesian Investment Coordinating Board (BKPM) and the Online Single Submission (OSS) system operated under the Ministry of Investment.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('The 2020 Job Creation Law (Omnibus Law — Law No. 11 of 2020) significantly reformed Indonesia\'s investment framework, opening previously restricted sectors to greater foreign participation and simplifying the business licensing process through the revised OSS system.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('For foreign investors, understanding which sectors are open, what ownership percentages are permitted, and what compliance obligations apply is essential <em>before</em> committing to any business structure or investment in Indonesia. Regulatory non-compliance can result in licence revocation, fines, and legal disputes.', 'fts-law'); ?>
        </p>
        <div class="info-box">
          <?php _e('<strong>💡 Key Point:</strong> Indonesia\'s investment regulations change periodically. The Positive Investment List (Daftar Prioritas Investasi) issued under Government Regulation No. 10 of 2021 is the current reference for sector-specific foreign ownership limits. Our lawyer ensures your investment structure is compliant with the latest regulations.', 'fts-law'); ?>
        </div>
      </div>

      <div>
        <div class="card card--highlight">
          <h3 class="card__highlight-title"><?php _e('Key Legal References', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Primary Law', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Law No. 25 of 2007 on Investment', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Omnibus Reform', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Law No. 11 of 2020 (Job Creation Law)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Investment List', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Government Regulation No. 10 of 2021', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Company Law', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Law No. 40 of 2007 on Limited Liability Companies', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Reporting Body', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('BKPM / OSS System', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Min. Investment Plan', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('IDR 10 Billion per business field', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get Investment Legal Advice', 'fts-law'); ?>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- INVESTMENT REGULATIONS -->
  <section class="section-soft">
    <div class="container">

      <h2 class="section-title"><?php _e('Key Investment Regulations for Foreign Investors', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The following regulatory requirements apply to most foreign investors establishing or operating a business in Indonesia through a PT PMA structure.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card">
          <div class="card-icon" aria-hidden="true">📋</div>
          <h3><?php _e('OSS / NIB Registration', 'fts-law'); ?></h3>
          <p>
            <?php _e('All businesses in Indonesia, including PT PMA companies, must be registered through the Online Single Submission (OSS) system to obtain a Business Identity Number (NIB — Nomor Induk Berusaha). The NIB is the primary business registration document and prerequisite for all further licences.', 'fts-law'); ?>
          </p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">📊</div>
          <h3><?php _e('LKPM Investment Reporting', 'fts-law'); ?></h3>
          <p>
            <?php _e('PT PMA companies are required to submit the <strong>LKPM</strong> (Laporan Kegiatan Penanaman Modal — Investment Activity Report) to BKPM/OSS on a quarterly and annual basis. Failure to submit results in administrative sanctions and may affect the company\'s investment registration status.', 'fts-law'); ?>
          </p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">💰</div>
          <h3><?php _e('Minimum Investment Obligation', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign investment companies (PT PMA) must have a minimum investment plan of <strong>IDR 10 billion</strong> per business field (KBLI code) registered with OSS. Additionally, a minimum paid-up capital of <strong>IDR 2.5 billion</strong> must be injected and evidenced in the company\'s Indonesian bank account.', 'fts-law'); ?>
          </p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🏛</div>
          <h3><?php _e('BKPM Foreign Investment Notification', 'fts-law'); ?></h3>
          <p>
            <?php _e('Certain investment activities and changes to the company (share transfers, capital increases, change of business activity) require formal notification or approval from BKPM. Our office monitors regulatory requirements and manages BKPM notifications on behalf of clients.', 'fts-law'); ?>
          </p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">💼</div>
          <h3><?php _e('Foreign Worker Utilisation (RPTKA)', 'fts-law'); ?></h3>
          <p>
            <?php _e('PT PMA companies that wish to employ foreign workers must obtain approval for a Foreign Worker Utilisation Plan (<strong>RPTKA</strong>) from the Ministry of Manpower. Each foreign worker must then obtain a Work Permit (IMTA) before beginning employment.', 'fts-law'); ?>
          </p>
        </article>

        <article class="card">
          <div class="card-icon" aria-hidden="true">🧾</div>
          <h3><?php _e('Indonesian Tax Obligations', 'fts-law'); ?></h3>
          <p>
            <?php _e('PT PMA companies are subject to Indonesian corporate income tax (25%), Value Added Tax (VAT — 11%), and withholding tax obligations. Annual tax returns must be filed with the Directorate General of Taxation. We advise on tax structure optimisation within the legal framework.', 'fts-law'); ?>
          </p>
        </article>

      </div>

    </div>
  </section>


  <!-- OWNERSHIP LIMITS -->
  <section class="section-ownership-limits">
    <div class="container">

      <h2 class="section-title"><?php _e('Foreign Ownership Limits by Sector', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Under Government Regulation No. 10 of 2021 (implementing the Omnibus Law), Indonesia uses a <strong>Positive Investment List</strong> approach — sectors not specifically listed as restricted are generally open to foreign investment. The following provides a general overview of how ownership limits work.', 'fts-law'); ?>
      </p>

      <div class="ownership-table-wrap">
        <table class="ownership-table">
          <thead>
            <tr>
              <th><?php _e('Ownership Category', 'fts-law'); ?></th>
              <th><?php _e('Foreign Ownership %', 'fts-law'); ?></th>
              <th><?php _e('Examples', 'fts-law'); ?></th>
              <th><?php _e('Notes', 'fts-law'); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="ownership-row--open">
              <td><strong><?php _e('Fully Open', 'fts-law'); ?></strong></td>
              <td><?php _e('Up to 100%', 'fts-law'); ?></td>
              <td><?php _e('Most manufacturing, certain technology, tourism, e-commerce, industrial services', 'fts-law'); ?></td>
              <td><?php _e('Subject to sector-specific conditions in the Positive Investment List', 'fts-law'); ?></td>
            </tr>
            <tr class="ownership-row--partial">
              <td><strong><?php _e('Partially Open', 'fts-law'); ?></strong></td>
              <td><?php _e('67% – 95%', 'fts-law'); ?></td>
              <td><?php _e('Retail trade (certain categories), freight forwarding, certain financial services', 'fts-law'); ?></td>
              <td><?php _e('Indonesian co-investor required for remaining percentage', 'fts-law'); ?></td>
            </tr>
            <tr class="ownership-row--limited">
              <td><strong><?php _e('Limited Foreign Participation', 'fts-law'); ?></strong></td>
              <td><?php _e('Up to 49%', 'fts-law'); ?></td>
              <td><?php _e('Certain media, construction consultancy, certain healthcare services', 'fts-law'); ?></td>
              <td><?php _e('Majority must be held by Indonesian nationals or entities', 'fts-law'); ?></td>
            </tr>
            <tr class="ownership-row--reserved">
              <td><strong><?php _e('Reserved for SMEs / Cooperatives', 'fts-law'); ?></strong></td>
              <td><?php _e('0% (Foreign not permitted)', 'fts-law'); ?></td>
              <td><?php _e('Small-scale retail, traditional markets, certain artisan activities', 'fts-law'); ?></td>
              <td><?php _e('Reserved exclusively for Indonesian SMEs and cooperatives (UMK)', 'fts-law'); ?></td>
            </tr>
            <tr class="ownership-row--closed">
              <td><strong><?php _e('Closed to Foreign Investment', 'fts-law'); ?></strong></td>
              <td><?php _e('0%', 'fts-law'); ?></td>
              <td><?php _e('Certain defence industries, narcotics manufacturing, gambling/casino operations', 'fts-law'); ?></td>
              <td><?php _e('Prohibited by law regardless of structure', 'fts-law'); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="info-box" style="margin-top:24px;">
        <?php _e('<strong>⚠️ Important Disclaimer:</strong> The Positive Investment List is updated periodically by the Indonesian government. Sector-specific rules may also be subject to additional conditions, licences, and partnership requirements. Always confirm current ownership limits for your specific business sector through a legal consultation before committing to an investment structure.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- COMPLIANCE OBLIGATIONS -->
  <section class="section-soft section-compliance">
    <div class="container">

      <h2 class="section-title"><?php _e('Ongoing Compliance Obligations for PT PMA', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Once a PT PMA is established, foreign investors have ongoing legal and regulatory obligations that must be maintained to keep the company in good standing.', 'fts-law'); ?>
      </p>

      <div class="compliance-grid">

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">📅</div>
          <div class="compliance-item__content">
            <h4><?php _e('Quarterly LKPM Reports', 'fts-law'); ?></h4>
            <p>
              <?php _e('Investment activity reports (LKPM) must be submitted through the OSS system every quarter (January, April, July, October). Reports cover investment realization, employment, and production activity.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Deadline: End of each quarter', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">📊</div>
          <div class="compliance-item__content">
            <h4><?php _e('Annual LKPM Report', 'fts-law'); ?></h4>
            <p>
              <?php _e('An annual investment activity report is required in addition to quarterly reports. This provides a full-year summary of investment, workforce, and operational data to BKPM.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Deadline: January of each year', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">🧾</div>
          <div class="compliance-item__content">
            <h4><?php _e('Annual Corporate Tax Return', 'fts-law'); ?></h4>
            <p>
              <?php _e('PT PMA companies must file an annual corporate income tax return (SPT Badan) with the Directorate General of Taxation (DJP). Monthly tax payments may also be required depending on revenue activity.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Deadline: April 30 each year', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">🏛</div>
          <div class="compliance-item__content">
            <h4><?php _e('Annual GMS (General Meeting of Shareholders)', 'fts-law'); ?></h4>
            <p>
              <?php _e('Indonesian company law requires PT PMA companies to hold an Annual General Meeting of Shareholders (RUPS Tahunan) to approve financial statements, ratify director actions, and make key corporate decisions.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Required annually within 6 months of fiscal year end', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">📋</div>
          <div class="compliance-item__content">
            <h4><?php _e('NIB & Licence Renewal', 'fts-law'); ?></h4>
            <p>
              <?php _e('Certain sector-specific business licences obtained through OSS may have validity periods and renewal requirements. Failure to renew on time may result in licence lapse and operational disruption.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Varies by licence type', 'fts-law'); ?></span>
          </div>
        </div>

        <div class="compliance-item">
          <div class="compliance-item__icon" aria-hidden="true">🔄</div>
          <div class="compliance-item__content">
            <h4><?php _e('Capital Realisation Reporting', 'fts-law'); ?></h4>
            <p>
              <?php _e('The progress of capital injection (paid-up capital) must be reported to BKPM as part of the LKPM reporting. Failure to show progress on capital injection may result in queries from BKPM and suspension of investment registration.', 'fts-law'); ?>
            </p>
            <span class="compliance-item__deadline"><?php _e('Via quarterly LKPM reports', 'fts-law'); ?></span>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- FOREIGN INVESTOR RIGHTS -->
  <section class="section-rights">
    <div class="container">

      <h2 class="section-title"><?php _e('Foreign Investor Rights Under Indonesian Law', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Law No. 25 of 2007 on Investment provides specific legal protections and rights for foreign investors in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="rights-card">
          <span class="rights-card__icon" aria-hidden="true">🛡</span>
          <h4><?php _e('Investment Protection', 'fts-law'); ?></h4>
          <p>
            <?php _e('Foreign investors are entitled to legal protection against nationalisation and expropriation without fair compensation, consistent with international investment protection principles.', 'fts-law'); ?>
          </p>
        </div>

        <div class="rights-card">
          <span class="rights-card__icon" aria-hidden="true">💸</span>
          <h4><?php _e('Repatriation of Funds', 'fts-law'); ?></h4>
          <p>
            <?php _e('Foreign investors have the right to repatriate capital, profits, dividends, and other proceeds from their investment in Indonesia, subject to applicable tax obligations being fulfilled.', 'fts-law'); ?>
          </p>
        </div>

        <div class="rights-card">
          <span class="rights-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Equal Treatment', 'fts-law'); ?></h4>
          <p>
            <?php _e('Foreign investors are entitled to equal treatment under Indonesian law as domestic investors, except where specific restrictions apply under the Positive Investment List or sectoral regulations.', 'fts-law'); ?>
          </p>
        </div>

        <div class="rights-card">
          <span class="rights-card__icon" aria-hidden="true">🤝</span>
          <h4><?php _e('Dispute Resolution', 'fts-law'); ?></h4>
          <p>
            <?php _e('Foreign investors may choose Indonesian courts, BANI arbitration, or international arbitration (e.g., SIAC, ICC) for resolving business disputes, subject to agreement in contracts.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- LEGAL RISKS FOR FOREIGN INVESTORS -->
  <section class="section-soft section-investor-risks">
    <div class="container">

      <h2 class="section-title"><?php _e('Legal Risks Every Foreign Investor Must Know', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('These are the most common legal pitfalls that cost foreign investors their businesses in Indonesia. Understanding them prevents costly mistakes.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high"><?php _e('High Risk', 'fts-law'); ?></span>
          <h4><?php _e('Nominee Shareholder Arrangements', 'fts-law'); ?></h4>
          <p>
            <?php _e('Using an Indonesian national as a "nominee" shareholder to hold shares on behalf of a foreign investor is <strong>illegal under Indonesian law</strong>. The nominee can legally take control of the company, transfer shares, or dissolve the business. Foreign investors have no legal recourse in such cases.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>" class="risk-card__link">
            <?php _e('Legal Risk Details &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high"><?php _e('High Risk', 'fts-law'); ?></span>
          <h4><?php _e('Director Removal Without Protection', 'fts-law'); ?></h4>
          <p>
            <?php _e('A foreign director can be removed from their position by a shareholder resolution if the Articles of Association or shareholder agreement do not include adequate protective provisions. This can effectively lock a foreign investor out of their own company.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>" class="risk-card__link">
            <?php _e('Legal Risk Details &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Medium Risk', 'fts-law'); ?></span>
          <h4><?php _e('Sector Restriction Violations', 'fts-law'); ?></h4>
          <p>
            <?php _e('Operating in a sector that is restricted or closed to foreign investment, or exceeding the permitted foreign ownership percentage, can result in licence revocation, forced divestment, and penalties. Always verify sector eligibility before investment.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>" class="risk-card__link">
            <?php _e('Get Legal Advice &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Medium Risk', 'fts-law'); ?></span>
          <h4><?php _e('LKPM Non-Compliance', 'fts-law'); ?></h4>
          <p>
            <?php _e('Failure to file LKPM reports results in administrative warnings and may lead to investment registration suspension. PT PMA companies that fail LKPM compliance may face difficulties renewing business licences and Investor KITAS.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>" class="risk-card__link">
            <?php _e('Compliance Support &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Medium Risk', 'fts-law'); ?></span>
          <h4><?php _e('Inadequate Shareholder Agreements', 'fts-law'); ?></h4>
          <p>
            <?php _e('A PT PMA operating without a comprehensive shareholder agreement leaves the foreign investor\'s rights (dividend rights, voting rights, exit rights) unprotected. Disputes become far more difficult to resolve without this document.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'contract-drafting' ) ); ?>" class="risk-card__link">
            <?php _e('Contract Drafting &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="risk-card risk-card--low">
          <span class="risk-badge risk-badge--low"><?php _e('Compliance Risk', 'fts-law'); ?></span>
          <h4><?php _e('Capital Injection Failure', 'fts-law'); ?></h4>
          <p>
            <?php _e('Failure to properly inject and document the minimum paid-up capital creates compliance issues with BKPM and may trigger a review of the company\'s investment registration — potentially affecting all licences and permits linked to the PT PMA.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url( fts_page_url( 'pt-pma' ) ); ?>" class="risk-card__link">
            <?php _e('PT PMA Setup Details &rarr;', 'fts-law'); ?>
          </a>
        </div>

      </div>

    </div>
  </section>


  <!-- RELATED SERVICES -->
  <section class="section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'pt-pma' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Complete legal support for foreign-owned company registration in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Identify and prevent legal risks in your investment structure before they become problems.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Business Legal Support', 'fts-law'); ?></h4>
          <p><?php _e('Ongoing compliance monitoring, LKPM reporting, and corporate governance support.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- CTA -->
  <?php fts_cta_section(
    __('Need Foreign Investment Legal Advice?', 'fts-law'),
    __('Our licensed Indonesian lawyer advises foreign investors on ownership structure, sector regulations, compliance obligations, and investment risk management in Indonesia.', 'fts-law')
  ); ?>

</main>

<?php get_footer(); ?>
