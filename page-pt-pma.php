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
      <span class="eyebrow">Company Setup Indonesia</span>
      <h1>PT PMA – Foreign Investment Company Setup</h1>
      <p class="page-hero__subtitle">
        Complete legal support for setting up a PT PMA (Perseroan Terbatas Penanaman Modal Asing)
        in Indonesia — from deed of establishment to OSS licensing, handled by a licensed lawyer.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url(
            home_url("/consultation"),
        ); ?>">Book PT PMA Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url(
            fts_wa_url(),
        ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
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
        <span class="eyebrow">Overview</span>
        <h2 class="section-title">What Is a PT PMA?</h2>
        <p>
          A <strong>PT PMA</strong> (Perseroan Terbatas Penanaman Modal Asing) is Indonesia's
          official legal vehicle for <strong>foreign investment companies</strong>. It is a
          limited liability company (PT) that is partially or fully owned by foreign nationals
          or foreign legal entities, registered and regulated under Indonesian Investment Law
          (Law No. 25 of 2007) and the Company Law (Law No. 40 of 2007).
        </p>
        <p>
          A PT PMA gives foreign investors the ability to legally own, operate, and earn
          revenue from a business in Indonesia. It can enter into commercial contracts, hire
          employees, hold assets, open bank accounts, and apply for business licences — all
          under the protection of Indonesian law.
        </p>
        <p>
          Unlike using a local Indonesian nominee shareholder (which is illegal and risky),
          a properly structured PT PMA provides genuine, legally-protected ownership rights
          for the foreign investor.
        </p>

        <div class="info-box">
          <strong>🛡 Legal Protection:</strong> A correctly structured PT PMA with properly
          drafted shareholder agreements, director terms, and corporate governance documents
          gives foreign investors genuine legal ownership — not dependent on the goodwill of
          any Indonesian party.
        </div>
      </div>

      <div class="card card--highlight" style="align-self:start;">
        <h3 class="card__highlight-title">PT PMA Key Facts</h3>
        <ul class="key-facts-list">
          <li>
            <span class="key-facts-list__label">Entity Type</span>
            <span class="key-facts-list__value">Limited Liability Company (PT)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Foreign Ownership</span>
            <span class="key-facts-list__value">Up to 100% (sector dependent)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Min. Investment Plan</span>
            <span class="key-facts-list__value">IDR 10 Billion (approx. USD 650K)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Min. Paid-Up Capital</span>
            <span class="key-facts-list__value">IDR 2.5 Billion (approx. USD 165K)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Min. Shareholders</span>
            <span class="key-facts-list__value">2 (can be 2 foreign nationals)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Directors / Commissioners</span>
            <span class="key-facts-list__value">Min. 1 Director, 1 Commissioner</span>
          </li>
          <li>
            <span class="key-facts-list__label">Registration Body</span>
            <span class="key-facts-list__value">OSS System / Kemenkumham / BKPM</span>
          </li>
          <li>
            <span class="key-facts-list__label">Setup Timeline</span>
            <span class="key-facts-list__value">4–8 weeks (full legal setup)</span>
          </li>
          <li>
            <span class="key-facts-list__label">Investor KITAS</span>
            <span class="key-facts-list__value">Eligible (for foreign shareholders)</span>
          </li>
        </ul>
        <a class="btn btn-gold" style="width:100%;margin-top:16px;"
           href="<?php echo esc_url(home_url("/consultation")); ?>">
          Get a Free Assessment
        </a>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       INVESTMENT REQUIREMENTS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-requirements">
    <div class="container">

      <h2 class="section-title">PT PMA Investment Requirements</h2>
      <p class="section-subtitle">
        The Indonesian government sets minimum investment thresholds for PT PMA companies.
        These requirements apply across most sectors and must be met during the registration process.
      </p>

      <div class="grid-3">

        <div class="req-block req-block--gold">
          <h3 class="req-block__title">
            <span aria-hidden="true">💰</span> Capital Requirements
          </h3>
          <ul class="req-list">
            <li>
              <strong>Minimum Investment Plan (DPMPTSP/BKPM):</strong>
              IDR 10 Billion (approx. USD 650,000) — stated in the investment plan registered with OSS
            </li>
            <li>
              <strong>Minimum Paid-Up Capital:</strong>
              IDR 2.5 Billion (approx. USD 165,000) — must be injected into the company bank account
            </li>
            <li>
              <strong>Issued Capital:</strong>
              Minimum 25% of the authorised capital must be paid up at incorporation
            </li>
            <li>
              <strong>Capital Injection Evidence:</strong>
              Bank transfer proof to company account required for BKPM/OSS reporting
            </li>
            <li>
              <strong>Note:</strong> Certain sectors may have higher minimum capital requirements
            </li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">👥</span> Ownership Structure
          </h3>
          <ul class="req-list">
            <li>Minimum 2 shareholders (can both be foreign nationals)</li>
            <li>Foreign ownership percentage subject to Positive Investment List</li>
            <li>At least 1 Director (can be foreign national)</li>
            <li>At least 1 Commissioner (can be foreign national)</li>
            <li>President Director must reside in Indonesia (for active operations)</li>
            <li>Shareholder agreement recommended to protect investor rights</li>
          </ul>
        </div>

        <div class="req-block">
          <h3 class="req-block__title">
            <span aria-hidden="true">📋</span> Registration Requirements
          </h3>
          <ul class="req-list">
            <li>Valid passport copies for all foreign shareholders and directors</li>
            <li>Proposed company name (3 options recommended)</li>
            <li>Business activity / KBLI code (Indonesian Business Classification)</li>
            <li>Registered office address in Indonesia</li>
            <li>Capital structure details (authorised, issued, paid-up)</li>
            <li>Director and Commissioner personal data</li>
            <li>Articles of Association content approval</li>
          </ul>
        </div>

      </div>

      <div class="info-box" style="margin-top: 24px;">
        <strong>📌 Important Note on Capital:</strong> The IDR 10 billion investment plan figure
        refers to the <em>total projected investment</em> registered with BKPM/OSS, not the amount
        that must be deposited on day one. However, the paid-up capital of IDR 2.5 billion must be
        genuinely injected and evidenced. Our lawyer advises on how to structure this correctly for
        your specific business situation.
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       STEP-BY-STEP SETUP PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">PT PMA Setup Process – Step by Step</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Our lawyer manages the entire process across all government agencies — you focus on
        your business while we handle the legal and regulatory work.
      </p>

      <div class="process-timeline">

        <div class="process-step">
          <div class="process-step__number">01</div>
          <div class="process-step__content">
            <h3>Legal Consultation &amp; Structure Planning</h3>
            <p>
              We review your business plan, intended KBLI (business activity code), sector
              eligibility under the Positive Investment List, proposed ownership structure,
              and capital allocation. We advise on the optimal legal structure before any
              registration begins.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–3 days</span>
              <span class="process-step__agency">📍 Our Office</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">02</div>
          <div class="process-step__content">
            <h3>Company Name Reservation</h3>
            <p>
              We check the availability of your proposed company name and reserve it through
              the Ministry of Law and Human Rights (Kemenkumham) AHU Online system. We
              recommend preparing 2–3 name options in order of preference.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–3 business days</span>
              <span class="process-step__agency">📍 Kemenkumham AHU System</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">03</div>
          <div class="process-step__content">
            <h3>Articles of Association Drafting</h3>
            <p>
              We draft the Articles of Association (Anggaran Dasar) of the PT PMA, covering
              company name, registered address, business activities, share capital structure,
              shareholder details, director and commissioner appointments, and key governance provisions.
              This is the foundational legal document of your company.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 2–4 days</span>
              <span class="process-step__agency">📍 Our Office + Notary</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">04</div>
          <div class="process-step__content">
            <h3>Notarial Deed of Establishment (Akta Pendirian)</h3>
            <p>
              The Articles of Association are formalised before a licensed Indonesian notary
              (Notaris) as the Deed of Establishment (Akta Pendirian). All shareholders and
              directors must authorise this step — either in person, through a Power of Attorney,
              or via official representative. We coordinate the notary appointment and prepare
              all required documents.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–2 days (signing)</span>
              <span class="process-step__agency">📍 Licensed Notary Office</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">05</div>
          <div class="process-step__content">
            <h3>Ministry of Law Ratification (SK Kemenkumham)</h3>
            <p>
              The notary submits the deed to the Ministry of Law and Human Rights for official
              ratification as a legal entity (Badan Hukum). This step formally creates the
              PT PMA as a legal entity in Indonesia. The SK (Decision Letter) from Kemenkumham
              is issued once approved.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 5–10 business days</span>
              <span class="process-step__agency">📍 Kemenkumham (Ministry of Law)</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">06</div>
          <div class="process-step__content">
            <h3>OSS Registration &amp; NIB Issuance</h3>
            <p>
              We register the PT PMA through the Online Single Submission (OSS) system to
              obtain the NIB (Nomor Induk Berusaha — Business Identity Number). The NIB
              serves as the company's primary business registration number and is required
              for all subsequent licences and government reporting.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–3 business days</span>
              <span class="process-step__agency">📍 OSS System (BKPM)</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">07</div>
          <div class="process-step__content">
            <h3>Business Licence &amp; Sector Permits</h3>
            <p>
              Depending on your business activity (KBLI code), additional sector-specific licences
              may be required from the relevant government ministry. We identify all required
              permits and manage the application process for each.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–4 weeks (varies by sector)</span>
              <span class="process-step__agency">📍 Relevant Ministry / OSS</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">08</div>
          <div class="process-step__content">
            <h3>NPWP Tax Registration</h3>
            <p>
              The company must be registered for a Tax Identification Number (NPWP — Nomor
              Pokok Wajib Pajak) with the Directorate General of Taxation (DJP). The NPWP
              is required before opening a bank account, hiring employees, or issuing invoices.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–3 business days</span>
              <span class="process-step__agency">📍 Directorate General of Taxation (DJP)</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">09</div>
          <div class="process-step__content">
            <h3>Corporate Bank Account Opening</h3>
            <p>
              We assist with opening a corporate bank account at an Indonesian bank. This is
              required for capital injection, payroll, and business transactions. We provide
              a bank introduction letter and assist with the account opening documentation.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–2 weeks</span>
              <span class="process-step__agency">📍 Indonesian Commercial Bank</span>
            </div>
          </div>
        </div>

        <div class="process-step">
          <div class="process-step__number">10</div>
          <div class="process-step__content">
            <h3>Capital Injection &amp; BKPM Reporting</h3>
            <p>
              The minimum paid-up capital (IDR 2.5 billion) must be transferred to the company
              bank account and evidenced for BKPM/OSS reporting. We prepare the capital injection
              documentation and set up your LKPM (Investment Activity Report) reporting schedule.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 1–2 weeks</span>
              <span class="process-step__agency">📍 Company Bank + OSS/BKPM</span>
            </div>
          </div>
        </div>

        <div class="process-step process-step--final">
          <div class="process-step__number">11</div>
          <div class="process-step__content">
            <h3>Investor KITAS Application (Optional)</h3>
            <p>
              Once the PT PMA is fully registered and the foreign shareholder's position is
              confirmed in OSS, we can proceed with the Investor KITAS application — allowing
              the foreign investor to legally reside in Indonesia as the company shareholder.
              We manage both processes simultaneously to reduce total setup time.
            </p>
            <div class="process-step__meta">
              <span class="process-step__duration">⏱ 3–6 weeks (concurrent with steps 6–10)</span>
              <span class="process-step__agency">📍 Indonesian Immigration Office</span>
            </div>
            <a class="btn btn-gold" href="<?php echo esc_url(
                home_url("/investor-visa"),
            ); ?>" style="margin-top:12px;">
              Investor KITAS Details &rarr;
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

      <h2 class="section-title" style="text-align:center;">PT PMA Setup Timeline</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Estimated total duration from initial consultation to fully operational PT PMA.
      </p>

      <div class="timeline-grid">

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">📋</span>
          <h4>Week 1–2</h4>
          <p>
            Legal consultation, structure planning, company name reservation,
            Articles of Association drafting, and notarial deed signing.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🏛</span>
          <h4>Week 2–3</h4>
          <p>
            Ministry of Law ratification (SK Kemenkumham), OSS registration,
            NIB issuance, and NPWP tax registration.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">🏦</span>
          <h4>Week 3–5</h4>
          <p>
            Corporate bank account opening, capital injection, sector licence
            applications, and BKPM/OSS investment plan registration.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-card__icon" aria-hidden="true">✅</span>
          <h4>Week 4–8</h4>
          <p>
            All licences finalised, LKPM reporting set up, shareholder agreements
            executed, and Investor KITAS application submitted (if required).
          </p>
        </div>

      </div>

      <div class="info-box" style="margin-top: 28px; max-width: 860px; margin-left: auto; margin-right: auto;">
        <strong>⏱ Total Estimated Setup Time:</strong> 4–8 weeks for full PT PMA setup from
        initial consultation to operational status. Timeline varies depending on sector,
        completeness of documents, and government processing times at each agency.
        <br><br>
        <strong>⚡ Combined Service:</strong> The Investor KITAS application can run
        concurrently with company registration steps 6–10, reducing total time for
        foreign investors who need both.
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHAT WE HANDLE FOR YOU
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-scope">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">What Our PT PMA Legal Support Covers</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        End-to-end legal management across all government agencies and legal documents.
      </p>

      <div class="grid-4">

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📝</span>
          <h4>Legal Structure Advice</h4>
          <p>Ownership structure, share allocation, KBLI code selection, and
             sector eligibility under the Positive Investment List.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📜</span>
          <h4>Articles of Association</h4>
          <p>Drafting of complete Articles of Association tailored to your
             business activity, ownership structure, and investor protection needs.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🔏</span>
          <h4>Notarial &amp; Kemenkumham</h4>
          <p>Notarial deed of establishment signing and Ministry of Law ratification
             coordination. We prepare all notary documents.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🖥</span>
          <h4>OSS / NIB Registration</h4>
          <p>Full OSS system registration, NIB issuance, and BKPM foreign investment
             reporting setup for the PT PMA.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">📊</span>
          <h4>Tax &amp; NPWP</h4>
          <p>Company NPWP registration with the Directorate General of Taxation.
             Advice on Indonesian corporate tax obligations.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🏦</span>
          <h4>Bank Account Support</h4>
          <p>Bank introduction, account opening support, and capital injection
             documentation preparation.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🤝</span>
          <h4>Shareholder Agreement</h4>
          <p>Drafting a comprehensive shareholder agreement to protect your
             investment, voting rights, and director appointment powers.</p>
        </div>

        <div class="scope-card">
          <span class="scope-card__icon" aria-hidden="true">🪪</span>
          <h4>Investor KITAS (Optional)</h4>
          <p>Combined application for Investor KITAS alongside the PT PMA registration
             — for foreign shareholders who wish to reside in Indonesia.</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       COMMON MISTAKES – WARNING SECTION
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-mistakes">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Common Legal Mistakes in PT PMA Setup</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        These mistakes are frequently made by foreign investors setting up a company in Indonesia
        without proper legal guidance.
      </p>

      <div class="grid-3">

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>Using Nominee Shareholders</h4>
          <p>
            Placing shares in an Indonesian national's name to bypass foreign ownership limits
            is <strong>illegal under Indonesian law</strong>. The nominee can legally take
            control of your company. There is no legal protection if this happens.
          </p>
          <a href="<?php echo esc_url(
              home_url("/legal-risk"),
          ); ?>" class="mistake-card__link">
            Read: Legal Risks for Foreign Investors &rarr;
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>Wrong KBLI Code</h4>
          <p>
            Registering the wrong business activity code (KBLI) limits what your company
            can legally do, creates licensing problems, and may cause issues with tax
            reporting or visa applications linked to the company.
          </p>
          <a href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>" class="mistake-card__link">
            Get a Consultation &rarr;
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>No Shareholder Agreement</h4>
          <p>
            Many foreign investors skip the shareholder agreement, relying only on the
            Articles of Association. Without a shareholder agreement, your rights to remove
            directors, approve decisions, or exit the company may be unprotected.
          </p>
          <a href="<?php echo esc_url(
              home_url("/contract-drafting"),
          ); ?>" class="mistake-card__link">
            Contract Drafting Services &rarr;
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>Skipping LKPM Reporting</h4>
          <p>
            PT PMA companies must file quarterly and annual LKPM (Investment Activity Reports)
            with BKPM/OSS. Failure to comply results in fines and may jeopardise the
            company's legal standing and Investor KITAS renewal.
          </p>
          <a href="<?php echo esc_url(
              home_url("/business-legal"),
          ); ?>" class="mistake-card__link">
            Business Legal Support &rarr;
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>Insufficient Paid-Up Capital</h4>
          <p>
            Failing to properly inject and evidence the minimum paid-up capital creates
            compliance issues with BKPM and may result in the company's investment registration
            being suspended or cancelled.
          </p>
          <a href="<?php echo esc_url(
              home_url("/consultation"),
          ); ?>" class="mistake-card__link">
            Get Legal Advice &rarr;
          </a>
        </div>

        <div class="mistake-card">
          <span class="mistake-card__icon" aria-hidden="true">❌</span>
          <h4>Foreign Director Without KITAS</h4>
          <p>
            A foreign national acting as a director of a PT PMA who resides in Indonesia
            must have a valid Investor KITAS. Operating without this permit is an immigration
            violation that can result in deportation and company penalties.
          </p>
          <a href="<?php echo esc_url(
              home_url("/investor-visa"),
          ); ?>" class="mistake-card__link">
            Investor KITAS Details &rarr;
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

      <h2 class="section-title" style="text-align:center;">Related Legal Services</h2>

      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url(
            home_url("/investor-visa"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🪪</span>
          <h4>Investor KITAS</h4>
          <p>Stay permit for foreign shareholders. Apply simultaneously with PT PMA setup.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/foreign-investment"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📈</span>
          <h4>Foreign Investment Law</h4>
          <p>Understand ownership limits, sector regulations, and investment compliance in Indonesia.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/contract-drafting"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4>Shareholder Agreement Drafting</h4>
          <p>Protect your ownership rights with a properly drafted shareholder agreement for your PT PMA.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/legal-risk"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4>Legal Risk Review</h4>
          <p>Identify risks in your PT PMA structure before they become costly legal disputes.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/business-legal"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4>Business Legal Support</h4>
          <p>Ongoing legal advisory, LKPM reporting, compliance monitoring for your PT PMA.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url(
            home_url("/guide"),
        ); ?>">
          <span class="related-card__icon" aria-hidden="true">📘</span>
          <h4>Free Legal Guide</h4>
          <p>Download our free guide on PT PMA setup, foreign ownership rules, and investor risks.</p>
        </a>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
      "Ready to Set Up Your PT PMA in Indonesia?",
      "Book a consultation with our licensed lawyer to review your business plan, confirm your ownership structure, and get a complete step-by-step roadmap for your PT PMA registration in Indonesia.",
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
