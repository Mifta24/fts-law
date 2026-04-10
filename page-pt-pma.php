<?php
/**
 * FTS Law – PT PMA Setup Page
 * Template for: /pt-pma
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
      <span class="eyebrow"><?php _e('Company Setup Indonesia', 'fts-law'); ?></span>
      <h1><?php _e('PT PMA – Foreign Investment Company Setup', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Complete legal support for setting up a PT PMA (Perseroan Terbatas Penanaman Modal Asing) in Indonesia — from deed of establishment to OSS licensing, handled by a licensed lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            home_url("/consultation"),
        ); ?>"><?php _e('Book PT PMA Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT IS PT PMA
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Overview', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('What Is a PT PMA?', 'fts-law'); ?></h2>
        <p>
          <?php _e('A <strong>PT PMA</strong> (Perseroan Terbatas Penanaman Modal Asing) is Indonesia\'s official legal vehicle for <strong>foreign investment companies</strong>. It is a limited liability company (PT) that is partially or fully owned by foreign nationals or foreign legal entities, registered and regulated under Indonesian Investment Law (Law No. 25 of 2007) and the Company Law (Law No. 40 of 2007).', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('A PT PMA gives foreign investors the ability to legally own, operate, and earn revenue from a business in Indonesia. It can enter into commercial contracts, hire employees, hold assets, open bank accounts, and apply for business licences — all under the protection of Indonesian law.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Unlike using a local Indonesian nominee shareholder (which is illegal and risky), a properly structured PT PMA provides genuine, legally-protected ownership rights for the foreign investor.', 'fts-law'); ?>
        </p>

        <div class="info-box">
          <?php _e('<strong>🛡 Legal Protection:</strong> A correctly structured PT PMA with properly drafted shareholder agreements, director terms, and corporate governance documents gives foreign investors genuine legal ownership — not dependent on the goodwill of any Indonesian party.', 'fts-law'); ?>
        </div>
      </div>

      <div class="card card--highlight" style="align-self:start;">
        <h3 class="card__highlight-title"><?php _e('PT PMA Key Facts', 'fts-law'); ?></h3>
        <ul class="key-facts-list">
          <li>
            <span class="key-facts-list__label"><?php _e('Entity Type', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Limited Liability Company (PT)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Foreign Ownership', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Up to 100% (sector dependent)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Min. Investment Plan', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('IDR 10 Billion (approx. USD 650K)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Min. Paid-Up Capital', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('IDR 2.5 Billion (approx. USD 165K)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Min. Shareholders', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('2 (can be 2 foreign nationals)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Directors / Commissioners', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Min. 1 Director, 1 Commissioner', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Registration Body', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('OSS System / Kemenkumham / BKPM', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Setup Timeline', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('4–8 weeks (full legal setup)', 'fts-law'); ?></span>
          </li>
          <li>
            <span class="key-facts-list__label"><?php _e('Investor KITAS', 'fts-law'); ?></span>
            <span class="key-facts-list__value"><?php _e('Eligible (for foreign shareholders)', 'fts-law'); ?></span>
          </li>
        </ul>
        <a class="btn btn-gold" style="width:100%;margin-top:16px;"
           href="<?php echo esc_url(home_url("/consultation")); ?>">
          <?php _e('Get a Free Assessment', 'fts-law'); ?>
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       INVESTMENT REQUIREMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-requirements">
    <div class="container">

      <h2 class="section-title"><?php _e('PT PMA Investment Requirements', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('The Indonesian government sets minimum investment thresholds for PT PMA companies. These requirements apply across most sectors and must be met during the registration process.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="req-block req-block--gold">
          <h3 class="req-block__title">
            <span aria-hidden="true">💰</span> <?php _e('Capital Requirements', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li>
              <strong><?php _e('Minimum Investment Plan (DPMPTSP/BKPM):', 'fts-law'); ?></strong>
              <?php _e('IDR 10 Billion (approx. USD 650,000) — stated in the investment plan registered with OSS', 'fts-law'); ?>
            </li>
            <li>
              <strong><?php _e('Minimum Paid-Up Capital:', 'fts-law'); ?></strong>
              <?php _e('IDR 2.5 Billion (approx. USD 165,000) — must be injected into the company bank account', 'fts-law'); ?>
            </li>
            <li>
              <strong><?php _e('Issued Capital:', 'fts-law'); ?></strong>
              <?php _e('Minimum 25% of the authorised capital must be paid up at incorporation', 'fts-law'); ?>
            </li>
            <li>
              <strong><?php _e('Capital Injection Evidence:', 'fts-law'); ?></strong>
              <?php _e('Bank transfer proof to company account required for BKPM/OSS reporting', 'fts-law'); ?>
            </li>
            <li>
              <?php _e('<strong>Note:</strong> Certain sectors may have higher minimum capital requirements', 'fts-law'); ?>
            </li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">👥</span> <?php _e('Ownership Structure', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Minimum 2 shareholders (can both be foreign nationals)', 'fts-law'); ?></li>
            <li><?php _e('Foreign ownership percentage subject to Positive Investment List', 'fts-law'); ?></li>
            <li><?php _e('At least 1 Director (can be foreign national)', 'fts-law'); ?></li>
            <li><?php _e('At least 1 Commissioner (can be foreign national)', 'fts-law'); ?></li>
            <li><?php _e('President Director must reside in Indonesia (for active operations)', 'fts-law'); ?></li>
            <li><?php _e('Shareholder agreement recommended to protect investor rights', 'fts-law'); ?></li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📋</span> <?php _e('Registration Requirements', 'fts-law'); ?>
          </h3>
          <ul class="req-list">
            <li><?php _e('Valid passport copies for all foreign shareholders and directors', 'fts-law'); ?></li>
            <li><?php _e('Proposed company name (3 options recommended)', 'fts-law'); ?></li>
            <li><?php _e('Business activity / KBLI code (Indonesian Business Classification)', 'fts-law'); ?></li>
            <li><?php _e('Registered office address in Indonesia', 'fts-law'); ?></li>
            <li><?php _e('Capital structure details (authorised, issued, paid-up)', 'fts-law'); ?></li>
            <li><?php _e('Director and Commissioner personal data', 'fts-law'); ?></li>
            <li><?php _e('Articles of Association content approval', 'fts-law'); ?></li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top: 24px;">
        <?php _e('<strong>📌 Important Note on Capital:</strong> The IDR 10 billion investment plan figure refers to the <em>total projected investment</em> registered with BKPM/OSS, not the amount that must be deposited on day one. However, the paid-up capital of IDR 2.5 billion must be genuinely injected and evidenced. Our lawyer advises on how to structure this correctly for your specific business situation.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       STEP-BY-STEP SETUP PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('PT PMA Setup Process – Step by Step', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Our lawyer manages the entire process across all government agencies — you focus on your business while we handle the legal and regulatory work.', 'fts-law'); ?>
      </p>

      <div class="process-timeline">

        <div class="process-step">
          <div class="process-step__number">01</div>
          <div class="process-step__content">
            <h3><?php _e('Legal Consultation &amp; Structure Planning', 'fts-law'); ?></h3>
            <p>
              <?php _e('We review your business plan, intended KBLI (business activity code), sector eligibility under the Positive Investment List, proposed ownership structure, and capital allocation. We advise on the optimal legal structure before any registration begins.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–3 days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Our Office', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">02</div>
          <div class="process-step__content">
            <h3><?php _e('Company Name Reservation', 'fts-law'); ?></h3>
            <p>
              <?php _e('We check the availability of your proposed company name and reserve it through the Ministry of Law and Human Rights (Kemenkumham) AHU Online system. We recommend preparing 2–3 name options in order of preference.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–3 business days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Kemenkumham AHU System', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">03</div>
          <div class="process-step__content">
            <h3><?php _e('Articles of Association Drafting', 'fts-law'); ?></h3>
            <p>
              <?php _e('We draft the Articles of Association (Anggaran Dasar) of the PT PMA, covering company name, registered address, business activities, share capital structure, shareholder details, director and commissioner appointments, and key governance provisions. This is the foundational legal document of your company.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('2–4 days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Our Office + Notary', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">04</div>
          <div class="process-step__content">
            <h3><?php _e('Notarial Deed of Establishment (Akta Pendirian)', 'fts-law'); ?></h3>
            <p>
              <?php _e('The Articles of Association are formalised before a licensed Indonesian notary (Notaris) as the Deed of Establishment (Akta Pendirian). All shareholders and directors must authorise this step — either in person, through a Power of Attorney, or via official representative. We coordinate the notary appointment and prepare all required documents.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–2 days (signing)', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Licensed Notary Office', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">05</div>
          <div class="process-step__content">
            <h3><?php _e('Ministry of Law Ratification (SK Kemenkumham)', 'fts-law'); ?></h3>
            <p>
              <?php _e('The notary submits the deed to the Ministry of Law and Human Rights for official ratification as a legal entity (Badan Hukum). This step formally creates the PT PMA as a legal entity in Indonesia. The SK (Decision Letter) from Kemenkumham is issued once approved.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('5–10 business days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Kemenkumham (Ministry of Law)', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">06</div>
          <div class="process-step__content">
            <h3><?php _e('OSS Registration &amp; NIB Issuance', 'fts-law'); ?></h3>
            <p>
              <?php _e('We register the PT PMA through the Online Single Submission (OSS) system to obtain the NIB (Nomor Induk Berusaha — Business Identity Number). The NIB serves as the company\'s primary business registration number and is required for all subsequent licences and government reporting.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–3 business days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('OSS System (BKPM)', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">07</div>
          <div class="process-step__content">
            <h3><?php _e('Business Licence &amp; Sector Permits', 'fts-law'); ?></h3>
            <p>
              <?php _e('Depending on your business activity (KBLI code), additional sector-specific licences may be required from the relevant government ministry. We identify all required permits and manage the application process for each.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–4 weeks (varies by sector)', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Relevant Ministry / OSS', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">08</div>
          <div class="process-step__content">
            <h3><?php _e('NPWP Tax Registration', 'fts-law'); ?></h3>
            <p>
              <?php _e('The company must be registered for a Tax Identification Number (NPWP — Nomor Pokok Wajib Pajak) with the Directorate General of Taxation (DJP). The NPWP is required before opening a bank account, hiring employees, or issuing invoices.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–3 business days', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Directorate General of Taxation (DJP)', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">09</div>
          <div class="process-step__content">
            <h3><?php _e('Corporate Bank Account Opening', 'fts-law'); ?></h3>
            <p>
              <?php _e('We assist with opening a corporate bank account at an Indonesian bank. This is required for capital injection, payroll, and business transactions. We provide a bank introduction letter and assist with the account opening documentation.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–2 weeks', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Indonesian Commercial Bank', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">10</div>
          <div class="process-step__content">
            <h3><?php _e('Capital Injection &amp; BKPM Reporting', 'fts-law'); ?></h3>
            <p>
              <?php _e('The minimum paid-up capital (IDR 2.5 billion) must be transferred to the company bank account and evidenced for BKPM/OSS reporting. We prepare the capital injection documentation and set up your LKPM (Investment Activity Report) reporting schedule.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('1–2 weeks', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Company Bank + OSS/BKPM', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="process-step process-step--final">
          <div class="process-step__number">11</div>
          <div class="process-step__content">
            <h3><?php _e('Investor KITAS Application (Optional)', 'fts-law'); ?></h3>
            <p>
              <?php _e('Once the PT PMA is fully registered and the foreign shareholder\'s position is confirmed in OSS, we can proceed with the Investor KITAS application — allowing the foreign investor to legally reside in Indonesia as the company shareholder. We manage both processes simultaneously to reduce total setup time.', 'fts-law'); ?>
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ <?php _e('3–6 weeks (concurrent with steps 6–10)', 'fts-law'); ?></span>
              <span class="process-step__agency">📍 <?php _e('Indonesian Immigration Office', 'fts-law'); ?></span>
            </div>
            <a class="btn btn-gold" href="<?php echo esc_url(
                home_url("/investor-visa"),
            ); ?>" style="margin-top:12px;">
              <?php _e('Investor KITAS Details &rarr;', 'fts-law'); ?>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TIMELINE SUMMARY
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-timeline-summary">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('PT PMA Setup Timeline', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Estimated total duration from initial consultation to fully operational PT PMA.', 'fts-law'); ?>
      </p>

      <div class="timeline-grid">

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">📋</span>
          <h4><?php _e('Week 1–2', 'fts-law'); ?></h4>
          <p>
            <?php _e('Legal consultation, structure planning, company name reservation, Articles of Association drafting, and notarial deed signing.', 'fts-law'); ?>
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🏛</span>
          <h4><?php _e('Week 2–3', 'fts-law'); ?></h4>
          <p>
            <?php _e('Ministry of Law ratification (SK Kemenkumham), OSS registration, NIB issuance, and NPWP tax registration.', 'fts-law'); ?>
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🏦</span>
          <h4><?php _e('Week 3–5', 'fts-law'); ?></h4>
          <p>
            <?php _e('Corporate bank account opening, capital injection, sector licence applications, and BKPM/OSS investment plan registration.', 'fts-law'); ?>
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">✅</span>
          <h4><?php _e('Week 4–8', 'fts-law'); ?></h4>
          <p>
            <?php _e('All licences finalised, LKPM reporting set up, shareholder agreements executed, and Investor KITAS application submitted (if required).', 'fts-law'); ?>
          </p>
        </div>

      </div>

      <div class="info-box" style="margin-top: 28px; max-width: 860px; margin-left: auto; margin-right: auto;">
        <?php _e('<strong>⏱ Total Estimated Setup Time:</strong> 4–8 weeks for full PT PMA setup from initial consultation to operational status. Timeline varies depending on sector, completeness of documents, and government processing times at each agency.', 'fts-law'); ?>
        <br><br>
        <?php _e('<strong>⚡ Combined Service:</strong> The Investor KITAS application can run concurrently with company registration steps 6–10, reducing total time for foreign investors who need both.', 'fts-law'); ?>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT WE HANDLE FOR YOU
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-scope">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('What Our PT PMA Legal Support Covers', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('End-to-end legal management across all government agencies and legal documents.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📝</span>
          <h4><?php _e('Legal Structure Advice', 'fts-law'); ?></h4>
          <p><?php _e('Ownership structure, share allocation, KBLI code selection, and sector eligibility under the Positive Investment List.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📜</span>
          <h4><?php _e('Articles of Association', 'fts-law'); ?></h4>
          <p><?php _e('Drafting of complete Articles of Association tailored to your business activity, ownership structure, and investor protection needs.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔏</span>
          <h4><?php _e('Notarial &amp; Kemenkumham', 'fts-law'); ?></h4>
          <p><?php _e('Notarial deed of establishment signing and Ministry of Law ratification coordination. We prepare all notary documents.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🖥</span>
          <h4><?php _e('OSS / NIB Registration', 'fts-law'); ?></h4>
          <p><?php _e('Full OSS system registration, NIB issuance, and BKPM foreign investment reporting setup for the PT PMA.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📊</span>
          <h4><?php _e('Tax &amp; NPWP', 'fts-law'); ?></h4>
          <p><?php _e('Company NPWP registration with the Directorate General of Taxation. Advice on Indonesian corporate tax obligations.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🏦</span>
          <h4><?php _e('Bank Account Support', 'fts-law'); ?></h4>
          <p><?php _e('Bank introduction, account opening support, and capital injection documentation preparation.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🤝</span>
          <h4><?php _e('Shareholder Agreement', 'fts-law'); ?></h4>
          <p><?php _e('Drafting a comprehensive shareholder agreement to protect your investment, voting rights, and director appointment powers.', 'fts-law'); ?></p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🪪</span>
          <h4><?php _e('Investor KITAS (Optional)', 'fts-law'); ?></h4>
          <p><?php _e('Combined application for Investor KITAS alongside the PT PMA registration — for foreign shareholders who wish to reside in Indonesia.', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMMON MISTAKES – WARNING SECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-mistakes">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Common Legal Mistakes in PT PMA Setup', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('These mistakes are frequently made by foreign investors setting up a company in Indonesia without proper legal guidance.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('Using Nominee Shareholders', 'fts-law'); ?></h4>
          <p>
            <?php _e('Placing shares in an Indonesian national\'s name to bypass foreign ownership limits is <strong>illegal under Indonesian law</strong>. The nominee can legally take control of your company. There is no legal protection if this happens.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/legal-risk"),
          ); ?>" class="mistake-card__link">
            <?php _e('Read: Legal Risks for Foreign Investors &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('Wrong KBLI Code', 'fts-law'); ?></h4>
          <p>
            <?php _e('Registering the wrong business activity code (KBLI) limits what your company can legally do, creates licensing problems, and may cause issues with tax reporting or visa applications linked to the company.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>" class="mistake-card__link">
            <?php _e('Get a Consultation &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('No Shareholder Agreement', 'fts-law'); ?></h4>
          <p>
            <?php _e('Many foreign investors skip the shareholder agreement, relying only on the Articles of Association. Without a shareholder agreement, your rights to remove directors, approve decisions, or exit the company may be unprotected.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/contract-drafting"),
          ); ?>" class="mistake-card__link">
            <?php _e('Contract Drafting Services &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('Skipping LKPM Reporting', 'fts-law'); ?></h4>
          <p>
            <?php _e('PT PMA companies must file quarterly and annual LKPM (Investment Activity Reports) with BKPM/OSS. Failure to comply results in fines and may jeopardise the company\'s legal standing and Investor KITAS renewal.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/business-legal"),
          ); ?>" class="mistake-card__link">
            <?php _e('Business Legal Support &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('Insufficient Paid-Up Capital', 'fts-law'); ?></h4>
          <p>
            <?php _e('Failing to properly inject and evidence the minimum paid-up capital creates compliance issues with BKPM and may result in the company\'s investment registration being suspended or cancelled.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>" class="mistake-card__link">
            <?php _e('Get Legal Advice &rarr;', 'fts-law'); ?>
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4><?php _e('Foreign Director Without KITAS', 'fts-law'); ?></h4>
          <p>
            <?php _e('A foreign national acting as a director of a PT PMA who resides in Indonesia must have a valid Investor KITAS. Operating without this permit is an immigration violation that can result in deportation and company penalties.', 'fts-law'); ?>
          </p>
          <a href="<?php echo esc_url(
              home_url("/investor-visa"),
          ); ?>" class="mistake-card__link">
            <?php _e('Investor KITAS Details &rarr;', 'fts-law'); ?>
          </a>
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
            home_url("/investor-visa"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4><?php _e('Investor KITAS', 'fts-law'); ?></h4>
          <p><?php _e('Stay permit for foreign shareholders. Apply simultaneously with PT PMA setup.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/foreign-investment"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📈</span>
          <h4><?php _e('Foreign Investment Law', 'fts-law'); ?></h4>
          <p><?php _e('Understand ownership limits, sector regulations, and investment compliance in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/contract-drafting"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4><?php _e('Shareholder Agreement Drafting', 'fts-law'); ?></h4>
          <p><?php _e('Protect your ownership rights with a properly drafted shareholder agreement for your PT PMA.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/legal-risk"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Review', 'fts-law'); ?></h4>
          <p><?php _e('Identify risks in your PT PMA structure before they become costly legal disputes.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/business-legal"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Business Legal Support', 'fts-law'); ?></h4>
          <p><?php _e('Ongoing legal advisory, LKPM reporting, compliance monitoring for your PT PMA.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/guide"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📘</span>
          <h4><?php _e('Free Legal Guide', 'fts-law'); ?></h4>
          <p><?php _e('Download our free guide on PT PMA setup, foreign ownership rules, and investor risks.', 'fts-law'); ?></p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      __('Ready to Set Up Your PT PMA in Indonesia?', 'fts-law'),
      __('Book a consultation with our licensed lawyer to review your business plan, confirm your ownership structure, and get a complete step-by-step roadmap for your PT PMA registration in Indonesia.', 'fts-law')
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
