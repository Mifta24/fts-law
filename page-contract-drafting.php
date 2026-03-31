<?php
/**
 * FTS Law – Contract Drafting & Review Service
 * Template for: /contract-drafting
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow">Corporate Legal Services</span>
      <h1>Contract Drafting &amp; Review</h1>
      <p class="page-hero__subtitle">
        Professional contract drafting and legal review services for foreign investors,
        businesses, and expatriates in Indonesia — supervised by a licensed Indonesian lawyer.
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( home_url('/consultation') ); ?>">Book Contract Review</a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp Chat</a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- INTRO -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow">Why Contracts Matter</span>
        <h2 class="section-title">Why Every Foreign Investor Needs Proper Contracts in Indonesia</h2>
        <p>
          In Indonesia, a poorly drafted contract — or no contract at all — is one of the
          leading causes of business disputes involving foreign investors. Whether you are
          entering a business partnership, hiring staff, signing a lease, or bringing in
          investors, having a legally sound contract is essential protection.
        </p>
        <p>
          Indonesian contract law is based on the Indonesian Civil Code (Kitab Undang-Undang
          Hukum Perdata / KUH Perdata) and is supplemented by sector-specific regulations.
          Contracts that work in your home country may not be enforceable in Indonesia if
          they are not structured according to Indonesian legal requirements.
        </p>
        <p>
          Our licensed Indonesian lawyer provides end-to-end contract drafting and review
          services — ensuring your agreements are legally valid, clearly worded, and designed
          to protect your interests under Indonesian law.
        </p>
        <div class="info-box">
          <strong>🔒 Attorney-Client Privilege:</strong> All contract matters, business details,
          and legal strategies discussed with our lawyer are protected by full attorney-client
          confidentiality.
        </div>
      </div>

      <div>
        <div class="card card--highlight" style="align-self:start;">
          <h3 class="card__highlight-title">Contract Services at a Glance</h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label">Languages</span>
              <span class="key-facts-list__value">Indonesian &amp; English (bilingual drafts available)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Contract Types</span>
              <span class="key-facts-list__value">Business, Corporate, Employment, Investment, Partnership</span>
            </li>
            <li>
              <span class="key-facts-list__label">Review Service</span>
              <span class="key-facts-list__value">Yes – existing contract review &amp; risk assessment</span>
            </li>
            <li>
              <span class="key-facts-list__label">Notarisation</span>
              <span class="key-facts-list__value">Available for contracts requiring notarial deed</span>
            </li>
            <li>
              <span class="key-facts-list__label">Dispute Clause</span>
              <span class="key-facts-list__value">Indonesian courts or arbitration (BANI / international)</span>
            </li>
            <li>
              <span class="key-facts-list__label">Jurisdiction</span>
              <span class="key-facts-list__value">Indonesia (governed by Indonesian Civil Code)</span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Request Contract Review
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- CONTRACT TYPES -->
  <section class="section-soft section-contract-types">
    <div class="container">

      <h2 class="section-title">Types of Contracts We Draft &amp; Review</h2>
      <p class="section-subtitle">
        We provide drafting and review services for all major contract types relevant
        to foreign investors, businesses, and expatriates in Indonesia.
      </p>

      <div class="grid-3">

        <article class="card card--contract">
          <span class="mini-label">Business Contracts</span>
          <h3>Business &amp; Commercial Contracts</h3>
          <p>
            Legally sound commercial agreements covering the full range of business
            transactions between companies and individuals in Indonesia.
          </p>
          <ul class="service-list">
            <li>Sale and purchase agreements</li>
            <li>Service agreements</li>
            <li>Distribution &amp; agency agreements</li>
            <li>Supplier and vendor contracts</li>
            <li>Non-Disclosure Agreements (NDA)</li>
            <li>Memoranda of Understanding (MoU)</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Get a Quote &rarr;
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label">Corporate &amp; Investment</span>
          <h3>Shareholder &amp; Investment Agreements</h3>
          <p>
            Critical legal documents for PT PMA companies and foreign investors to
            protect ownership rights, decision-making powers, and exit arrangements.
          </p>
          <ul class="service-list">
            <li>Shareholder agreements (SHA)</li>
            <li>Investment agreements</li>
            <li>Joint venture (JV) agreements</li>
            <li>Share subscription agreements</li>
            <li>Share transfer agreements</li>
            <li>Buy-sell / exit provisions</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Get a Quote &rarr;
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label">Partnership</span>
          <h3>Partnership &amp; Collaboration Agreements</h3>
          <p>
            Structured agreements for business partnerships, strategic collaborations,
            and co-founder arrangements between Indonesian and foreign parties.
          </p>
          <ul class="service-list">
            <li>Business partnership agreements</li>
            <li>Co-founder agreements</li>
            <li>Strategic alliance agreements</li>
            <li>Collaboration agreements</li>
            <li>Revenue sharing arrangements</li>
            <li>Profit participation agreements</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Get a Quote &rarr;
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label">Employment</span>
          <h3>Employment &amp; HR Contracts</h3>
          <p>
            Legally compliant employment contracts and HR agreements for Indonesian
            employees and foreign workers employed by PT PMA companies.
          </p>
          <ul class="service-list">
            <li>Employment agreements (PKWT / PKWTT)</li>
            <li>Foreign worker employment contracts</li>
            <li>Director service agreements</li>
            <li>Non-compete &amp; confidentiality clauses</li>
            <li>Termination agreements</li>
            <li>Severance calculation advice</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Get a Quote &rarr;
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label">Property &amp; Lease</span>
          <h3>Property &amp; Lease Agreements</h3>
          <p>
            Legal review and drafting for property lease, licence, and usage agreements
            relevant to foreign nationals and businesses operating in Indonesia.
          </p>
          <ul class="service-list">
            <li>Commercial lease agreements (sewa menyewa)</li>
            <li>Office / co-working space agreements</li>
            <li>Land use rights agreements (HGU / HGB)</li>
            <li>Nominee property arrangement review</li>
            <li>Property licence agreements</li>
            <li>Lease renewal terms</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Get a Quote &rarr;
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label">Contract Review</span>
          <h3>Existing Contract Review &amp; Risk Assessment</h3>
          <p>
            Already have a contract? Our lawyer reviews existing contracts for legal
            risk, enforceability under Indonesian law, and hidden legal issues.
          </p>
          <ul class="service-list">
            <li>Full contract risk assessment</li>
            <li>Clause-by-clause legal review</li>
            <li>Enforceability analysis (Indonesian law)</li>
            <li>Red flag identification &amp; explanation</li>
            <li>Suggested amendments and additions</li>
            <li>Plain-English legal summary</li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
            Submit for Review &rarr;
          </a>
        </article>

      </div>

    </div>
  </section>


  <!-- DRAFTING PROCESS -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Our Contract Drafting Process</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        A structured, client-focused process that ensures every contract is legally sound,
        clearly worded, and tailored to your specific situation in Indonesia.
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4>Initial Consultation</h4>
          <p>
            We discuss the purpose of the contract, the parties involved, the key terms
            you require, and the legal context in Indonesia. We identify any legal issues
            or regulatory requirements that must be addressed.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4>Legal Scope Assessment</h4>
          <p>
            We assess the applicable Indonesian laws, regulations, and precedents relevant
            to your contract type. We identify key legal requirements and potential risks
            that must be addressed in the drafting.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4>Draft Preparation</h4>
          <p>
            Our lawyer prepares the initial contract draft, incorporating all agreed terms,
            legal protections, dispute resolution mechanisms, and governing law provisions
            consistent with Indonesian law.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4>Client Review &amp; Revision</h4>
          <p>
            We provide the draft to you with a plain-English explanation of key clauses.
            You review and provide feedback. We incorporate revisions until you are
            satisfied with the final terms.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4>Counterparty Negotiation (Optional)</h4>
          <p>
            If required, our lawyer can assist with negotiating contract terms with the
            counterparty or their legal representatives, protecting your position
            throughout the negotiation process.
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4>Final Execution</h4>
          <p>
            The final contract is prepared for signing. We advise on execution requirements
            — including witnessing, notarisation, and stamp duty (materai) obligations
            under Indonesian law where applicable.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- WHY CONTRACTS FAIL -->
  <section class="section-soft section-contract-risks">
    <div class="container">

      <h2 class="section-title" style="text-align:center;">Why Contracts Fail Under Indonesian Law</h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        Common reasons why contracts used by foreign businesses in Indonesia are unenforceable
        or create unintended legal problems.
      </p>

      <div class="grid-3">

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high">Common Issue</span>
          <h4>Foreign Law Governing Clauses</h4>
          <p>
            Contracts specifying a foreign jurisdiction (e.g., Singapore, UK, US law) as
            the governing law may not be enforceable through Indonesian courts for matters
            that must be governed by Indonesian law. Proper jurisdiction and governing law
            clauses are essential.
          </p>
        </div>

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high">Common Issue</span>
          <h4>Missing Stamp Duty (Materai)</h4>
          <p>
            Under Indonesian law, contracts with a commercial value above a certain threshold
            must be affixed with the appropriate materai (stamp duty) to be legally valid
            as evidence in Indonesian courts. Many foreign-drafted contracts omit this requirement.
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium">Common Issue</span>
          <h4>No Indonesian Language Version</h4>
          <p>
            Under Law No. 24 of 2009, contracts involving Indonesian parties or governed by
            Indonesian law may require an Indonesian-language version. Courts may give
            precedence to the Indonesian version in case of dispute.
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium">Common Issue</span>
          <h4>Unenforceable Penalty Clauses</h4>
          <p>
            Penalty or liquidated damages clauses that are deemed disproportionate may
            be reduced or voided by Indonesian courts. Properly calibrated and legally
            framed penalty clauses are needed for enforceability.
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium">Common Issue</span>
          <h4>Vague Dispute Resolution</h4>
          <p>
            Contracts without a clear dispute resolution clause — specifying the forum
            (Indonesian courts, BANI arbitration, or international arbitration) and
            procedure — leave parties uncertain about how to resolve disagreements,
            leading to prolonged and costly legal disputes.
          </p>
        </div>

        <div class="risk-card risk-card--low">
          <span class="risk-badge risk-badge--low">Common Issue</span>
          <h4>Unsigned or Improperly Executed</h4>
          <p>
            Contracts that are unsigned, partially signed, or lack proper witness or
            notarisation (where required) may not be enforceable in Indonesian legal
            proceedings. Proper execution is as important as proper drafting.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- CONTRACT REVIEW CTA BAND -->
  <section class="section-review-band">
    <div class="container">
      <div class="cta-band cta-band--light">
        <div class="cta-band__copy">
          <h2 class="cta-band__title" style="color:var(--navy);">Have a Contract That Needs Review?</h2>
          <p class="cta-band__desc" style="color:var(--text);">
            Send us your existing contract for a legal review. Our lawyer will identify
            legal risks, unenforceable clauses, and missing provisions — and provide
            specific recommendations for improvement.
          </p>
          <div class="cta-band__actions">
            <a class="btn btn-gold" href="<?php echo esc_url( home_url('/consultation') ); ?>">
              Submit Contract for Review
            </a>
            <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>"
               target="_blank" rel="noopener noreferrer">
              💬 WhatsApp Us
            </a>
          </div>
        </div>
        <div class="cta-band__checklist">
          <h4>What We Check in a Contract Review:</h4>
          <ul class="check-list">
            <li>Legal validity under Indonesian law</li>
            <li>Enforceability of key clauses</li>
            <li>Governing law &amp; jurisdiction issues</li>
            <li>Missing essential provisions</li>
            <li>Dispute resolution mechanism</li>
            <li>Termination &amp; exit rights</li>
            <li>Liability and indemnity exposure</li>
            <li>Materai / execution requirements</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- RELATED SERVICES -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;">Related Legal Services</h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( home_url('/business-legal') ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4>Business Legal Support</h4>
          <p>Ongoing legal advisory for your business operations, compliance, and governance in Indonesia.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/legal-risk') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4>Legal Risk Consultation</h4>
          <p>Identify and assess legal risks in your current business structure, agreements, and operations.</p>
        </a>

        <a class="related-card" href="<?php echo esc_url( home_url('/pt-pma') ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4>PT PMA Setup</h4>
          <p>Company formation including Articles of Association and shareholder agreement drafting.</p>
        </a>

      </div>
    </div>
  </section>


  <!-- CTA -->
  <?php fts_cta_section(
    'Need a Contract Drafted or Reviewed?',
    'Book a consultation with our licensed Indonesian lawyer. We draft, review, and advise on all types of contracts for foreign investors and businesses operating in Indonesia.'
  ); ?>

</main>

<?php get_footer(); ?>
