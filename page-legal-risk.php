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
      <span class="eyebrow"><?php _e('Legal Advisory', 'fts-law'); ?></span>
      <h1><?php _e('Legal Risk Consultation for Foreign Investors', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Identify and prevent legal risks in your business, investment structure, and contracts in Indonesia — before they become costly disputes.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Book Risk Consultation', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
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
        <span class="eyebrow"><?php _e('Why Legal Risk Review Matters', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Prevention Is Cheaper Than Litigation', 'fts-law'); ?></h2>
        <p>
          <?php _e('Many foreign investors and business owners in Indonesia discover legal problems only after they have already caused significant financial loss — a nominee shareholder who takes the company, a contract with no dispute clause, a director who cannot be removed, or a business licence that was never properly obtained.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('A Legal Risk Consultation is a proactive legal review of your current business structure, investment arrangement, contracts, and compliance status — identifying vulnerabilities before they are exploited or triggered by a dispute.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Our licensed Indonesian lawyer reviews your situation, explains the specific legal risks you face under Indonesian law, and provides a practical action plan to strengthen your legal position.', 'fts-law'); ?>
        </p>
        <div class="info-box">
          <?php _e('<strong>⚖️ Lawyer-Supervised Review:</strong> Unlike generic business consultants, our legal risk reviews are conducted by a licensed Indonesian advocate (PERADI), giving you a professional legal assessment with full attorney-client confidentiality.', 'fts-law'); ?>
        </div>
      </div>

      <div>
        <div class="card card--highlight">
          <h3 class="card__highlight-title"><?php _e('Legal Risk Review Covers', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Company Structure', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Ownership, shareholder, director risks', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Investment Compliance', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('BKPM, OSS, LKPM, sector restrictions', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Contracts', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Business, partnership, investor agreements', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Visa / Residency', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('KITAS validity, overstay risk, sponsor issues', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Employment', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Foreign worker permits, employment contracts', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Business Operations', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Licence validity, tax compliance, regulatory', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Book a Risk Review', 'fts-law'); ?>
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

      <h2 class="section-title"><?php _e('Legal Risk Areas We Review', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('Our legal risk consultation covers the most critical areas of exposure for foreign investors and business owners operating in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <!-- Business Structure Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">🏢</span>
            <span class="risk-level risk-level--high"><?php _e('High Priority', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Business Structure &amp; Ownership Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('Your company\'s ownership and governance structure is the foundation of your investment in Indonesia. Weaknesses here can result in losing control of your company entirely.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('Nominee shareholder arrangements and legal exposure', 'fts-law'); ?></li>
            <li><?php _e('Share ownership documentation and transfer restrictions', 'fts-law'); ?></li>
            <li><?php _e('Director and commissioner appointment protections', 'fts-law'); ?></li>
            <li><?php _e('Shareholder agreement completeness and enforceability', 'fts-law'); ?></li>
            <li><?php _e('Articles of Association adequacy for investor protection', 'fts-law'); ?></li>
            <li><?php _e('Voting rights and veto provisions for key decisions', 'fts-law'); ?></li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <?php _e('<strong>⚠️ Common Finding:</strong> Many foreign investors have no shareholder agreement — only an Articles of Association. This leaves critical rights unprotected.', 'fts-law'); ?>
          </div>
        </article>

        <!-- Investment Compliance Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📊</span>
            <span class="risk-level risk-level--high"><?php _e('High Priority', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Investment Compliance Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('PT PMA companies face specific compliance obligations with BKPM, OSS, and the Ministry of Investment. Non-compliance can result in fines, licence revocation, and jeopardise your visa status.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('LKPM quarterly and annual report compliance status', 'fts-law'); ?></li>
            <li><?php _e('Capital injection adequacy and documentation', 'fts-law'); ?></li>
            <li><?php _e('OSS / NIB registration completeness and accuracy', 'fts-law'); ?></li>
            <li><?php _e('KBLI (business activity code) alignment with actual operations', 'fts-law'); ?></li>
            <li><?php _e('Sector-specific foreign ownership limit compliance', 'fts-law'); ?></li>
            <li><?php _e('Pending BKPM notifications or approval requirements', 'fts-law'); ?></li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <?php _e('<strong>⚠️ Common Finding:</strong> Many PT PMA companies have missed LKPM quarterly reports — often without the foreign owner knowing.', 'fts-law'); ?>
          </div>
        </article>

        <!-- Contract Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📝</span>
            <span class="risk-level risk-level--medium"><?php _e('Important', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Contract &amp; Agreement Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('Business contracts, partnership agreements, and investor agreements that lack proper legal protections expose you to unenforceable terms, disputes without resolution mechanisms, and financial loss.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('Business partner and vendor contracts', 'fts-law'); ?></li>
            <li><?php _e('Joint venture and partnership agreements', 'fts-law'); ?></li>
            <li><?php _e('Shareholder and investor agreements', 'fts-law'); ?></li>
            <li><?php _e('Employment contracts for foreign and local staff', 'fts-law'); ?></li>
            <li><?php _e('Property lease agreements (office, commercial space)', 'fts-law'); ?></li>
            <li><?php _e('Dispute resolution and governing law clauses', 'fts-law'); ?></li>
          </ul>
          <div class="info-box info-box--warning" style="margin-top:14px;">
            <?php _e('<strong>⚠️ Common Finding:</strong> Contracts drafted by non-lawyers often lack enforceable dispute resolution clauses under Indonesian law.', 'fts-law'); ?>
          </div>
        </article>

        <!-- Visa / Residency Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">📋</span>
            <span class="risk-level risk-level--high"><?php _e('Time-Sensitive', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Visa &amp; Residency Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('Immigration violations in Indonesia carry serious consequences including fines, detention, deportation, and re-entry bans. Visa and KITAS status must be actively monitored.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('KITAS / KITAP expiry dates and renewal deadlines', 'fts-law'); ?></li>
            <li><?php _e('Sponsor company legal status and KITAS validity link', 'fts-law'); ?></li>
            <li><?php _e('Multiple Re-Entry Permit (MERP) status', 'fts-law'); ?></li>
            <li><?php _e('Investor KITAS alignment with PT PMA shareholder registration', 'fts-law'); ?></li>
            <li><?php _e('Overstay risk and current exposure', 'fts-law'); ?></li>
            <li><?php _e('Any pending immigration issues or violations', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( fts_page_url( 'visa' ) ); ?>" style="margin-top:14px;">
            <?php _e('Visa Services &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <!-- Operational / Business Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">⚙️</span>
            <span class="risk-level risk-level--medium"><?php _e('Important', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Business Operations &amp; Licence Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('Operating without the correct business licences or failing to maintain them exposes your company to regulatory action, fines, and operational shutdown by government authorities.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('NIB validity and business licence completeness', 'fts-law'); ?></li>
            <li><?php _e('Sector-specific permit renewal status', 'fts-law'); ?></li>
            <li><?php _e('NPWP and tax compliance standing', 'fts-law'); ?></li>
            <li><?php _e('Foreign worker permits (IMTA) and RPTKA validity', 'fts-law'); ?></li>
            <li><?php _e('Domicile and operational address compliance', 'fts-law'); ?></li>
            <li><?php _e('Annual company GMS (RUPS) compliance', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>" style="margin-top:14px;">
            <?php _e('Business Legal Support &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <!-- Property / Asset Risk -->
        <article class="card card--risk">
          <div class="risk-card-header">
            <span class="risk-card-icon" aria-hidden="true">🏠</span>
            <span class="risk-level risk-level--medium"><?php _e('Important', 'fts-law'); ?></span>
          </div>
          <h3><?php _e('Property &amp; Asset Risk', 'fts-law'); ?></h3>
          <p>
            <?php _e('Foreign nationals cannot own land in Indonesia directly. Property arrangements involving foreign investors require careful legal structuring to ensure assets are legally protected.', 'fts-law'); ?>
          </p>
          <h4 class="risk-checklist-title"><?php _e('We review:', 'fts-law'); ?></h4>
          <ul class="risk-checklist">
            <li><?php _e('Property ownership and title legality', 'fts-law'); ?></li>
            <li><?php _e('Land rights applicable to foreign nationals (HGB, HGU, HP)', 'fts-law'); ?></li>
            <li><?php _e('Nominee property arrangements and legal risk', 'fts-law'); ?></li>
            <li><?php _e('Commercial lease agreement terms and protections', 'fts-law'); ?></li>
            <li><?php _e('Asset ownership through PT PMA structure', 'fts-law'); ?></li>
            <li><?php _e('Property dispute risk and due diligence', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-outline-navy" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>" style="margin-top:14px;">
            <?php _e('Get Legal Advice &rarr;', 'fts-law'); ?>
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
        <?php _e('The 5 Biggest Legal Risks for Foreign Investors in Indonesia', 'fts-law'); ?>
      </h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('These are the most common and most costly legal mistakes we see foreign investors make in Indonesia. Are you exposed to any of them?', 'fts-law'); ?>
      </p>

      <div class="top-risks-list">

        <div class="top-risk-item">
          <div class="top-risk-item__number">01</div>
          <div class="top-risk-item__content">
            <h3><?php _e('Nominee Shareholder Arrangement', 'fts-law'); ?></h3>
            <p>
              <?php _e('Using an Indonesian national to hold shares "on your behalf" in a PT or PT PMA is <strong>illegal under Indonesian law</strong>. The nominee is legally the real owner of those shares. They can sell them, transfer them, or use them to vote you out of your own company — and you have no legal remedy.', 'fts-law'); ?>
            </p>
            <p>
              <?php _e('This is perhaps the single most common way foreign investors lose their businesses in Indonesia. We conduct full nominee risk assessments and advise on legally compliant alternatives.', 'fts-law'); ?>
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--danger">🚨 <?php _e('Illegal Practice', 'fts-law'); ?></span>
              <span class="verdict-badge verdict-badge--danger">💸 <?php _e('High Financial Loss Risk', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">02</div>
          <div class="top-risk-item__content">
            <h3><?php _e('No Shareholder Agreement', 'fts-law'); ?></h3>
            <p>
              <?php _e('The Articles of Association alone does not adequately protect a foreign investor\'s rights. Without a comprehensive shareholder agreement, your rights to appoint directors, block decisions, receive dividends, and exit the company on your terms may be entirely unprotected.', 'fts-law'); ?>
            </p>
            <p>
              <?php _e('A shareholder agreement is a separate, private legal contract between the shareholders that governs the critical aspects of company management and investor rights beyond the AoA. It is essential for any foreign investor with an Indonesian business partner or co-investor.', 'fts-law'); ?>
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ <?php _e('Very Common', 'fts-law'); ?></span>
              <span class="verdict-badge verdict-badge--warning">🔒 <?php _e('Fixable with Legal Action', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">03</div>
          <div class="top-risk-item__content">
            <h3><?php _e('Director Removal Without Protection', 'fts-law'); ?></h3>
            <p>
              <?php _e('Under Indonesian Company Law, a director can be removed from their position by a shareholder resolution. If the majority of shares are held by an Indonesian partner (or nominee) without adequate protective provisions in the AoA or shareholder agreement, a foreign director can be removed at any time — effectively locking them out of their own business.', 'fts-law'); ?>
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ <?php _e('Common in Joint Ventures', 'fts-law'); ?></span>
              <span class="verdict-badge verdict-badge--danger">💸 <?php _e('Results in Loss of Control', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">04</div>
          <div class="top-risk-item__content">
            <h3><?php _e('Expired KITAS / Immigration Violations', 'fts-law'); ?></h3>
            <p>
              <?php _e('Foreign nationals operating in Indonesia on an expired visa or KITAS face daily fines, possible detention, deportation, and a re-entry ban. In addition, a foreign director of a PT PMA operating without a valid KITAS is in violation of Indonesian immigration law — which may also expose the company to penalties.', 'fts-law'); ?>
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--danger">🚨 <?php _e('Time-Critical', 'fts-law'); ?></span>
              <span class="verdict-badge verdict-badge--danger">⛔ <?php _e('Risk of Deportation', 'fts-law'); ?></span>
            </div>
          </div>
        </div>

        <div class="top-risk-item">
          <div class="top-risk-item__number">05</div>
          <div class="top-risk-item__content">
            <h3><?php _e('LKPM Non-Compliance &amp; Capital Injection Failure', 'fts-law'); ?></h3>
            <p>
              <?php _e('Many foreign investors set up a PT PMA and then neglect the quarterly LKPM investment activity reporting and the capital injection requirements. Over time, accumulated non-compliance results in administrative warnings, investment registration suspension, and — in severe cases — cancellation of the company\'s investment registration, affecting all linked licences and permits.', 'fts-law'); ?>
            </p>
            <div class="top-risk-item__verdict">
              <span class="verdict-badge verdict-badge--warning">⚠️ <?php _e('Very Common', 'fts-law'); ?></span>
              <span class="verdict-badge verdict-badge--warning">📋 <?php _e('Fixable with Legal Action', 'fts-law'); ?></span>
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

      <h2 class="section-title" style="text-align:center;"><?php _e('How Our Legal Risk Consultation Works', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A structured, confidential review of your legal exposure — with a clear action plan.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Book a Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Contact us via our consultation form or WhatsApp. Briefly describe your business situation, the type of review needed, and any specific concerns you have about your legal position in Indonesia.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Document Submission', 'fts-law'); ?></h4>
          <p>
            <?php _e('Share your key legal documents with our lawyer — company deed, shareholder agreement (if any), business licences, contracts, and KITAS/visa documents. All documents are handled with full legal confidentiality.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Legal Risk Assessment', 'fts-law'); ?></h4>
          <p>
            <?php _e('Our licensed lawyer conducts a structured review of your documents, identifies legal vulnerabilities, compliance gaps, and areas of immediate concern under Indonesian law.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Risk Report &amp; Action Plan', 'fts-law'); ?></h4>
          <p>
            <?php _e('We present our findings in a clear, practical format — explaining each risk, its potential consequences, and the specific legal steps we recommend to mitigate or eliminate it.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Legal Remediation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Where risks are identified, we can immediately begin legal remediation — drafting missing agreements, correcting compliance filings, updating company documents, or managing immigration renewals.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Ongoing Monitoring', 'fts-law'); ?></h4>
          <p>
            <?php _e('We offer ongoing legal monitoring for clients who want continued protection — tracking compliance deadlines, KITAS renewals, LKPM reports, and contract review as your business evolves.', 'fts-law'); ?>
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

      <h2 class="section-title" style="text-align:center;"><?php _e('Who Should Request a Legal Risk Review?', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A legal risk consultation is particularly important in the following situations.', 'fts-law'); ?>
      </p>

      <div class="grid-4">

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You own or co-own a PT PMA in Indonesia and want to verify your legal protection', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are considering investing in an existing Indonesian company', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You have an Indonesian business partner and want to review your agreement', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are unsure if your current company structure has a nominee arrangement', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('Your business is operating but you have never had a full legal compliance review', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You have a contract you would like reviewed before signing or renewing', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('Your KITAS, KITAP, or business licence is approaching its expiry date', 'fts-law'); ?></p>
        </div>

        <div class="who-item">
          <span class="who-item__icon" aria-hidden="true">✅</span>
          <p><?php _e('You are experiencing a dispute with a business partner, director, or employee', 'fts-law'); ?></p>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED SERVICES
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'contract-drafting' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">✍️</span>
          <h4><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h4>
          <p><?php _e('Fix vulnerable contracts and agreements — shareholder agreements, business contracts, MoUs.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Business Legal Support', 'fts-law'); ?></h4>
          <p><?php _e('Ongoing legal advisory, compliance monitoring, and corporate governance for your PT PMA.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'foreign-investment' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">📈</span>
          <h4><?php _e('Foreign Investment Law', 'fts-law'); ?></h4>
          <p><?php _e('Understand ownership limits, sector restrictions, and compliance obligations in Indonesia.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    __('Is Your Investment Legally Protected?', 'fts-law'),
    __('Book a legal risk consultation with our licensed Indonesian lawyer. We review your company structure, contracts, compliance status, and visa situation — and provide a clear action plan to protect your investment.', 'fts-law')
  ); ?>

</main>

<?php get_footer(); ?>
