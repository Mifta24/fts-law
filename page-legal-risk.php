<?php
/**
 * FTS Law – Legal Risk Consultation Page
 * Template for: /legal-risk
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
      <span class="eyebrow">Legal Advisory</span>
      <h1>Legal Risk Consultation for Foreign Investors</h1>
      <p class="page-hero__subtitle">
        Identify and prevent legal risks in your business, investment structure,
        and contracts in Indonesia — before they become costly disputes.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url('/consultation') ); ?>">Book Risk Consultation</a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       INTRO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow">Why Legal Risk Review Matters</span>
        <h2 class="section-title">Prevention Is Cheaper Than Litigation</h2>
        <p>
          Many foreign investors and business owners in Indonesia discover legal
          problems only after they have already caused significant financial loss —
          a nominee shareholder who takes the company, a contract with no dispute
          clause, a director who cannot be removed, or a business licence that
          was never properly obtained.
        </p>
        <p>
          A Legal Risk Consultation is a proactive legal review of your current
          business structure, investment arrangement, contracts, and compliance
          status — identifying vulnerabilities before they are exploited or
          triggered by a dispute.
        </p>
        <p>
          Our licensed Indonesian lawyer reviews your situation, explains the
          specific legal risks you face under Indonesian law, and provides
          a practical action plan to strengthen your legal position.
        </p>
        <div class="info-box">
          <strong>⚖️ Lawyer-Supervised Review:</strong> Unlike generic business consultants,
          our legal risk reviews are conducted by a licensed Indonesian advocate (PERADI),
          giving you a professional legal assessment with full attorney-client confidentiality.
        </div>
      </div>

      <div>
        <div class="card card--highlight">
          <h3 class="card__highlight-title">Legal Risk Review Covers</h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label">Company Structure</span>
              <span class="key-facts-list__value">Ownership, shareholder, director risks</span>
            </li>
            <li>
              <span class="key-facts-list__label">Investment Compliance</span>
              <span class="key-facts-list__value">BKPM, OSS, LKPM, sector restrictions</span>
            </li>
            <li>
              <span class="key-facts-list__label">Contracts</span>
              <span class="key-facts-list__value">Business, partnership, investor agreements</span>
            </li>
            <li>
              <span class="key-facts-list__label">Visa / Residency</span>
              <span class="key-facts-list__value">KITAS validity, overstay risk, sponsor issues</span>
            </li>
            <li>
              <span class="key-facts-list__label">Employment</span>
              <span class="key-facts-list__value">Foreign worker permits, employment contracts</span>
            </li>
            <li>
              <span class="key-facts-list__label">Business Operations</span>
              <span class="key-facts-list__value">Licence validity, tax compliance, regulatory</span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Book a Risk Review
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RISK CATEGORIES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-risk-categories">
    <div class="container">

      <h2 class="section-title">Legal Risk Areas We Review</h2>
      <p class="section-subtitle">
        Our legal risk consultation covers the most critical areas of exposure
        for foreign investors and business owners operating in Indonesia.
      </p>

      <div class="grid-3">

        <!-- Business Structure Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">🏢</span>
            <span class="risk-level risk-level--high">High Priority</span>
          </div>
          <h3>Business Structure &amp; Ownership Risk</h3>
          <p>
            Your company's ownership and governance structure is the foundation of your
            investment in Indonesia. Weaknesses here can result in losing control of
            your company entirely.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>Nominee shareholder arrangements and legal exposure</li>
            <li>Share ownership documentation and transfer restrictions</li>
            <li>Director and commissioner appointment protections</li>
            <li>Shareholder agreement completeness and enforceability</li>
            <li>Articles of Association adequacy for investor protection</li>
            <li>Voting rights and veto provisions for key decisions</li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <strong>⚠️ Common Finding:</strong> Many foreign investors have no shareholder
            agreement — only an Articles of Association. This leaves critical rights unprotected.
          </div>
        </article>

        <!-- Investment Compliance Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📊</span>
            <span class="risk-level risk-level--high">High Priority</span>
          </div>
          <h3>Investment Compliance Risk</h3>
          <p>
            PT PMA companies face specific compliance obligations with BKPM, OSS,
            and the Ministry of Investment. Non-compliance can result in fines,
            licence revocation, and jeopardise your visa status.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>LKPM quarterly and annual report compliance status</li>
            <li>Capital injection adequacy and documentation</li>
            <li>OSS / NIB registration completeness and accuracy</li>
            <li>KBLI (business activity code) alignment with actual operations</li>
            <li>Sector-specific foreign ownership limit compliance</li>
            <li>Pending BKPM notifications or approval requirements</li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <strong>⚠️ Common Finding:</strong> Many PT PMA companies have missed LKPM
            quarterly reports — often without the foreign owner knowing.
          </div>
        </article>

        <!-- Contract Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📝</span>
            <span class="risk-level risk-level--medium">Important</span>
          </div>
          <h3>Contract &amp; Agreement Risk</h3>
          <p>
            Business contracts, partnership agreements, and investor agreements
            that lack proper legal protections expose you to unenforceable terms,
            disputes without resolution mechanisms, and financial loss.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>Business partner and vendor contracts</li>
            <li>Joint venture and partnership agreements</li>
            <li>Shareholder and investor agreements</li>
            <li>Employment contracts for foreign and local staff</li>
            <li>Property lease agreements (office, commercial space)</li>
            <li>Dispute resolution and governing law clauses</li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <strong>⚠️ Common Finding:</strong> Contracts drafted by non-lawyers often
            lack enforceable dispute resolution clauses under Indonesian law.
          </div>
        </article>

        <!-- Visa / Residency Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📋</span>
            <span class="risk-level risk-level--high">Time-Sensitive</span>
          </div>
          <h3>Visa &amp; Residency Risk</h3>
          <p>
            Immigration violations in Indonesia carry serious consequences including
            fines, detention, deportation, and re-entry bans. Visa and KITAS status
            must be actively monitored.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>KITAS / KITAP expiry dates and renewal deadlines</li>
            <li>Sponsor company legal status and KITAS validity link</li>
            <li>Multiple Re-Entry Permit (MERP) status</li>
            <li>Investor KITAS alignment with PT PMA shareholder registration</li>
            <li>Overstay risk and current exposure</li>
            <li>Any pending immigration issues or violations</li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url('/visa') ); ?>" style="margin-top:14px;">
            Visa Services &rarr;
          </a>
        </article>

        <!-- Operational / Business Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">⚙️</span>
            <span class="risk-level risk-level--medium">Important</span>
          </div>
          <h3>Business Operations &amp; Licence Risk</h3>
          <p>
            Operating without the correct business licences or failing to maintain
            them exposes your company to regulatory action, fines, and operational
            shutdown by government authorities.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>NIB validity and business licence completeness</li>
            <li>Sector-specific permit renewal status</li>
            <li>NPWP and tax compliance standing</li>
            <li>Foreign worker permits (IMTA) and RPTKA validity</li>
            <li>Domicile and operational address compliance</li>
            <li>Annual company GMS (RUPS) compliance</li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url('/business-legal') ); ?>" style="margin-top:14px;">
            Business Legal Support &rarr;
          </a>
        </article>

        <!-- Property / Asset Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">🏠</span>
            <span class="risk-level risk-level--medium">Important</span>
          </div>
          <h3>Property &amp; Asset Risk</h3>
          <p>
            Foreign nationals cannot own land in Indonesia directly. Property arrangements
            involving foreign investors require careful legal structuring to ensure
            assets are legally protected.
          </p>
          <h4 class="risk-checklist-title">We review:</h4>
          <ul class="risk-checklist">
            <li>Property ownership and title legality</li>
            <li>Land rights applicable to foreign nationals (HGB, HGU, HP)</li>
            <li>Nominee property arrangements and legal risk</li>
            <li>Commercial lease agreement terms and protections</li>
            <li>Asset ownership through PT PMA structure</li>
            <li>Property dispute risk and due diligence</li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url('/consultation') ); ?>" style="margin-top:14px;">
            Get Legal Advice &rarr;
          </a>
        </article>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       TOP LEGAL RISKS – FEATURED
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-top-risks">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">
        The 5 Biggest Legal Risks for Foreign Investors in Indonesia
      </h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        These are the most common and most costly legal mistakes we see
        foreign investors make in Indonesia. Are you exposed to any of them?
      </p>

      <div class="top-risks-list">

        <div class="top-risk-item">
          <div class="top-risk-item__number">01</div>
          <div class="top-risk-item__content">
            <h3>Nominee Shareholder Arrangement</h3>
            <p>
              Using an Indonesian national to hold shares "on your behalf" in a PT or PT PMA
              is <strong>illegal under Indonesian law</strong>. The nominee is legally the
              real owner of those shares. They can sell them, transfer them, or use them
              to vote you out of your own company — and you have no legal remedy.
            </p>
            <p>
              This is perhaps the single most common way foreign investors lose their
              businesses in Indonesia. We conduct full nominee risk assessments and advise
              on legally compliant alternatives.
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--danger">🚨 Illegal Practice</span>
              <span class="verdict-badge verdict-badge--danger">💸 High Financial Loss Risk</span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">02</div>
          <div class="top-risk-item__content">
            <h3>No Shareholder Agreement</h3>
            <p>
              The Articles of Association alone does not adequately protect a foreign
              investor's rights. Without a comprehensive shareholder agreement, your
              rights to appoint directors, block decisions, receive dividends, and exit
              the company on your terms may be entirely unprotected.
            </p>
            <p>
              A shareholder agreement is a separate, private legal contract between the
              shareholders that governs the critical aspects of company management and
              investor rights beyond the AoA. It is essential for any foreign investor
              with an Indonesian business partner or co-investor.
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ Very Common</span>
              <span class="verdict-badge verdict-badge--warning">🔒 Fixable with Legal Action</span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">03</div>
          <div class="top-risk-item__content">
            <h3>Director Removal Without Protection</h3>
            <p>
              Under Indonesian Company Law, a director can be removed from their position
              by a shareholder resolution. If the majority of shares are held by an
              Indonesian partner (or nominee) without adequate protective provisions in
              the AoA or shareholder agreement, a foreign director can be removed at any
              time — effectively locking them out of their own business.
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ Common in Joint Ventures</span>
              <span class="verdict-badge verdict-badge--danger">💸 Results in Loss of Control</span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">04</div>
          <div class="top-risk-item__content">
            <h3>Expired KITAS / Immigration Violations</h3>
            <p>
              Foreign nationals operating in Indonesia on an expired visa or KITAS face
              daily fines, possible detention, deportation, and a re-entry ban. In addition,
              a foreign director of a PT PMA operating without a valid KITAS is in violation
              of Indonesian immigration law — which may also expose the company to penalties.
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--danger">🚨 Time-Critical</span>
              <span class="verdict-badge verdict-badge--danger">⛔ Risk of Deportation</span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">05</div>
          <div class="top-risk-item__content">
            <h3>LKPM Non-Compliance &amp; Capital Injection Failure</h3>
            <p>
              Many foreign investors set up a PT PMA and then neglect the quarterly LKPM
              investment activity reporting and the capital injection requirements. Over time,
              accumulated non-compliance results in administrative warnings, investment
              registration suspension, and — in severe cases — cancellation of the
              company's investment registration, affecting all linked licences and permits.
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ Very Common</span>
              <span class="verdict-badge verdict-badge--warning">📋 Fixable with Legal Action</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CONSULTATION PROCESS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">How Our Legal Risk Consultation Works</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A structured, confidential review of your legal exposure — with a clear action plan.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Book a Consultation</h4>
          <p>
            Contact us via our consultation form or WhatsApp. Briefly describe your
            business situation, the type of review needed, and any specific concerns
            you have about your legal position in Indonesia.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Document Submission</h4>
          <p>
            Share your key legal documents with our lawyer — company deed, shareholder
            agreement (if any), business licences, contracts, and KITAS/visa documents.
            All documents are handled with full legal confidentiality.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Legal Risk Assessment</h4>
          <p>
            Our licensed lawyer conducts a structured review of your documents, identifies
            legal vulnerabilities, compliance gaps, and areas of immediate concern under
            Indonesian law.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Risk Report &amp; Action Plan</h4>
          <p>
            We present our findings in a clear, practical format — explaining each risk,
            its potential consequences, and the specific legal steps we recommend to
            mitigate or eliminate it.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>Legal Remediation</h4>
          <p>
            Where risks are identified, we can immediately begin legal remediation —
            drafting missing agreements, correcting compliance filings, updating
            company documents, or managing immigration renewals.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>Ongoing Monitoring</h4>
          <p>
            We offer ongoing legal monitoring for clients who want continued protection
            — tracking compliance deadlines, KITAS renewals, LKPM reports, and contract
            review as your business evolves.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       WHO NEEDS A LEGAL RISK REVIEW
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-who-needs">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Who Should Request a Legal Risk Review?</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A legal risk consultation is particularly important in the following situations.
      </p>

      <div class="grid-4">

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You own or co-own a PT PMA in Indonesia and want to verify your legal protection</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You are considering investing in an existing Indonesian company</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You have an Indonesian business partner and want to review your agreement</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You are unsure if your current company structure has a nominee arrangement</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>Your business is operating but you have never had a full legal compliance review</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You have a contract you would like reviewed before signing or renewing</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>Your KITAS, KITAP, or business licence is approaching its expiry date</p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p>You are experiencing a dispute with a business partner, director, or employee</p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;">Related Legal Services</h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url('/contract-drafting') ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4>Contract Drafting &amp; Review</h4>
          <p>Fix vulnerable contracts and agreements — shareholder agreements, business contracts, MoUs.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/business-legal') ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4>Business Legal Support</h4>
          <p>Ongoing legal advisory, compliance monitoring, and corporate governance for your PT PMA.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/foreign-investment') ); ?>">
          <span class="related-card__icon" aria-hidden="true">📈</span>
          <h4>Foreign Investment Law</h4>
          <p>Understand ownership limits, sector restrictions, and compliance obligations in Indonesia.</p>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    'Is Your Investment Legally Protected?',
    'Book a legal risk consultation with our licensed Indonesian lawyer. We review your company structure, contracts, compliance status, and visa situation — and provide a clear action plan to protect your investment.'
  ); ?>

</main>

<?php get_footer(); ?>
