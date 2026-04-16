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
      <span class="eyebrow"><?php _e('Corporate Legal Services', 'fts-law'); ?></span>
      <h1><?php _e('Contract Drafting &amp; Review', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Professional contract drafting and legal review services for foreign investors, businesses, and expatriates in Indonesia — supervised by a licensed Indonesian lawyer.', 'fts-law'); ?>
      </p>
      <div class="hero-actions" style="justify-content:center;margin-top:24px;">
        <a class="btn btn-gold"  href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Book Contract Review', 'fts-law'); ?></a>
        <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>" target="_blank" rel="noopener noreferrer">💬 <?php _e('WhatsApp Chat', 'fts-law'); ?></a>
      </div>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- INTRO -->
  <section class="section-intro">
    <div class="container two-col">

      <div>
        <span class="eyebrow"><?php _e('Why Contracts Matter', 'fts-law'); ?></span>
        <h2 class="section-title"><?php _e('Why Every Foreign Investor Needs Proper Contracts in Indonesia', 'fts-law'); ?></h2>
        <p>
          <?php _e('In Indonesia, a poorly drafted contract — or no contract at all — is one of the leading causes of business disputes involving foreign investors. Whether you are entering a business partnership, hiring staff, signing a lease, or bringing in investors, having a legally sound contract is essential protection.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Indonesian contract law is based on the Indonesian Civil Code (Kitab Undang-Undang Hukum Perdata / KUH Perdata) and is supplemented by sector-specific regulations. Contracts that work in your home country may not be enforceable in Indonesia if they are not structured according to Indonesian legal requirements.', 'fts-law'); ?>
        </p>
        <p>
          <?php _e('Our licensed Indonesian lawyer provides end-to-end contract drafting and review services — ensuring your agreements are legally valid, clearly worded, and designed to protect your interests under Indonesian law.', 'fts-law'); ?>
        </p>
        <div class="info-box">
          <?php _e('<strong>🔒 Attorney-Client Privilege:</strong> All contract matters, business details, and legal strategies discussed with our lawyer are protected by full attorney-client confidentiality.', 'fts-law'); ?>
        </div>
      </div>

      <div>
        <div class="card card--highlight" style="align-self:start;">
          <h3 class="card__highlight-title"><?php _e('Contract Services at a Glance', 'fts-law'); ?></h3>
          <ul class="key-facts-list">
            <li>
              <span class="key-facts-list__label"><?php _e('Languages', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Indonesian &amp; English (bilingual drafts available)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Contract Types', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Business, Corporate, Employment, Investment, Partnership', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Review Service', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Yes – existing contract review &amp; risk assessment', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Notarisation', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Available for contracts requiring notarial deed', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Dispute Clause', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Indonesian courts or arbitration (BANI / international)', 'fts-law'); ?></span>
            </li>
            <li>
              <span class="key-facts-list__label"><?php _e('Jurisdiction', 'fts-law'); ?></span>
              <span class="key-facts-list__value"><?php _e('Indonesia (governed by Indonesian Civil Code)', 'fts-law'); ?></span>
            </li>
          </ul>
          <a class="btn btn-gold" style="width:100%;margin-top:16px;"
             href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Request Contract Review', 'fts-law'); ?>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- CONTRACT TYPES -->
  <section class="section-soft section-contract-types">
    <div class="container">

      <h2 class="section-title"><?php _e('Types of Contracts We Draft &amp; Review', 'fts-law'); ?></h2>
      <p class="section-subtitle">
        <?php _e('We provide drafting and review services for all major contract types relevant to foreign investors, businesses, and expatriates in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Business Contracts', 'fts-law'); ?></span>
          <h3><?php _e('Business &amp; Commercial Contracts', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legally sound commercial agreements covering the full range of business transactions between companies and individuals in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Sale and purchase agreements', 'fts-law'); ?></li>
            <li><?php _e('Service agreements', 'fts-law'); ?></li>
            <li><?php _e('Distribution &amp; agency agreements', 'fts-law'); ?></li>
            <li><?php _e('Supplier and vendor contracts', 'fts-law'); ?></li>
            <li><?php _e('Non-Disclosure Agreements (NDA)', 'fts-law'); ?></li>
            <li><?php _e('Memoranda of Understanding (MoU)', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get a Quote &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Corporate &amp; Investment', 'fts-law'); ?></span>
          <h3><?php _e('Shareholder &amp; Investment Agreements', 'fts-law'); ?></h3>
          <p>
            <?php _e('Critical legal documents for PT PMA companies and foreign investors to protect ownership rights, decision-making powers, and exit arrangements.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Shareholder agreements (SHA)', 'fts-law'); ?></li>
            <li><?php _e('Investment agreements', 'fts-law'); ?></li>
            <li><?php _e('Joint venture (JV) agreements', 'fts-law'); ?></li>
            <li><?php _e('Share subscription agreements', 'fts-law'); ?></li>
            <li><?php _e('Share transfer agreements', 'fts-law'); ?></li>
            <li><?php _e('Buy-sell / exit provisions', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get a Quote &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Partnership', 'fts-law'); ?></span>
          <h3><?php _e('Partnership &amp; Collaboration Agreements', 'fts-law'); ?></h3>
          <p>
            <?php _e('Structured agreements for business partnerships, strategic collaborations, and co-founder arrangements between Indonesian and foreign parties.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Business partnership agreements', 'fts-law'); ?></li>
            <li><?php _e('Co-founder agreements', 'fts-law'); ?></li>
            <li><?php _e('Strategic alliance agreements', 'fts-law'); ?></li>
            <li><?php _e('Collaboration agreements', 'fts-law'); ?></li>
            <li><?php _e('Revenue sharing arrangements', 'fts-law'); ?></li>
            <li><?php _e('Profit participation agreements', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get a Quote &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Employment', 'fts-law'); ?></span>
          <h3><?php _e('Employment &amp; HR Contracts', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legally compliant employment contracts and HR agreements for Indonesian employees and foreign workers employed by PT PMA companies.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Employment agreements (PKWT / PKWTT)', 'fts-law'); ?></li>
            <li><?php _e('Foreign worker employment contracts', 'fts-law'); ?></li>
            <li><?php _e('Director service agreements', 'fts-law'); ?></li>
            <li><?php _e('Non-compete &amp; confidentiality clauses', 'fts-law'); ?></li>
            <li><?php _e('Termination agreements', 'fts-law'); ?></li>
            <li><?php _e('Severance calculation advice', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get a Quote &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Property &amp; Lease', 'fts-law'); ?></span>
          <h3><?php _e('Property &amp; Lease Agreements', 'fts-law'); ?></h3>
          <p>
            <?php _e('Legal review and drafting for property lease, licence, and usage agreements relevant to foreign nationals and businesses operating in Indonesia.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Commercial lease agreements (sewa menyewa)', 'fts-law'); ?></li>
            <li><?php _e('Office / co-working space agreements', 'fts-law'); ?></li>
            <li><?php _e('Land use rights agreements (HGU / HGB)', 'fts-law'); ?></li>
            <li><?php _e('Nominee property arrangement review', 'fts-law'); ?></li>
            <li><?php _e('Property licence agreements', 'fts-law'); ?></li>
            <li><?php _e('Lease renewal terms', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Get a Quote &rarr;', 'fts-law'); ?>
          </a>
        </article>

        <article class="card card--contract">
          <span class="mini-label"><?php _e('Contract Review', 'fts-law'); ?></span>
          <h3><?php _e('Existing Contract Review &amp; Risk Assessment', 'fts-law'); ?></h3>
          <p>
            <?php _e('Already have a contract? Our lawyer reviews existing contracts for legal risk, enforceability under Indonesian law, and hidden legal issues.', 'fts-law'); ?>
          </p>
          <ul class="service-list">
            <li><?php _e('Full contract risk assessment', 'fts-law'); ?></li>
            <li><?php _e('Clause-by-clause legal review', 'fts-law'); ?></li>
            <li><?php _e('Enforceability analysis (Indonesian law)', 'fts-law'); ?></li>
            <li><?php _e('Red flag identification &amp; explanation', 'fts-law'); ?></li>
            <li><?php _e('Suggested amendments and additions', 'fts-law'); ?></li>
            <li><?php _e('Plain-English legal summary', 'fts-law'); ?></li>
          </ul>
          <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
            <?php _e('Submit for Review &rarr;', 'fts-law'); ?>
          </a>
        </article>

      </div>

    </div>
  </section>


  <!-- DRAFTING PROCESS -->
  <section class="section-process">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Our Contract Drafting Process', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('A structured, client-focused process that ensures every contract is legally sound, clearly worded, and tailored to your specific situation in Indonesia.', 'fts-law'); ?>
      </p>

      <div class="steps-grid">

        <div class="step-item">
          <div class="step-number">1</div>
          <h4><?php _e('Initial Consultation', 'fts-law'); ?></h4>
          <p>
            <?php _e('We discuss the purpose of the contract, the parties involved, the key terms you require, and the legal context in Indonesia. We identify any legal issues or regulatory requirements that must be addressed.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">2</div>
          <h4><?php _e('Legal Scope Assessment', 'fts-law'); ?></h4>
          <p>
            <?php _e('We assess the applicable Indonesian laws, regulations, and precedents relevant to your contract type. We identify key legal requirements and potential risks that must be addressed in the drafting.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">3</div>
          <h4><?php _e('Draft Preparation', 'fts-law'); ?></h4>
          <p>
            <?php _e('Our lawyer prepares the initial contract draft, incorporating all agreed terms, legal protections, dispute resolution mechanisms, and governing law provisions consistent with Indonesian law.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">4</div>
          <h4><?php _e('Client Review &amp; Revision', 'fts-law'); ?></h4>
          <p>
            <?php _e('We provide the draft to you with a plain-English explanation of key clauses. You review and provide feedback. We incorporate revisions until you are satisfied with the final terms.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">5</div>
          <h4><?php _e('Counterparty Negotiation (Optional)', 'fts-law'); ?></h4>
          <p>
            <?php _e('If required, our lawyer can assist with negotiating contract terms with the counterparty or their legal representatives, protecting your position throughout the negotiation process.', 'fts-law'); ?>
          </p>
        </div>

        <div class="step-item">
          <div class="step-number">6</div>
          <h4><?php _e('Final Execution', 'fts-law'); ?></h4>
          <p>
            <?php _e('The final contract is prepared for signing. We advise on execution requirements — including witnessing, notarisation, and stamp duty (materai) obligations under Indonesian law where applicable.', 'fts-law'); ?>
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- WHY CONTRACTS FAIL -->
  <section class="section-soft section-contract-risks">
    <div class="container">

      <h2 class="section-title" style="text-align:center;"><?php _e('Why Contracts Fail Under Indonesian Law', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Common reasons why contracts used by foreign businesses in Indonesia are unenforceable or create unintended legal problems.', 'fts-law'); ?>
      </p>

      <div class="grid-3">

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('Foreign Law Governing Clauses', 'fts-law'); ?></h4>
          <p>
            <?php _e('Contracts specifying a foreign jurisdiction (e.g., Singapore, UK, US law) as the governing law may not be enforceable through Indonesian courts for matters that must be governed by Indonesian law. Proper jurisdiction and governing law clauses are essential.', 'fts-law'); ?>
          </p>
        </div>

        <div class="risk-card risk-card--high">
          <span class="risk-badge risk-badge--high"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('Missing Stamp Duty (Materai)', 'fts-law'); ?></h4>
          <p>
            <?php _e('Under Indonesian law, contracts with a commercial value above a certain threshold must be affixed with the appropriate materai (stamp duty) to be legally valid as evidence in Indonesian courts. Many foreign-drafted contracts omit this requirement.', 'fts-law'); ?>
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('No Indonesian Language Version', 'fts-law'); ?></h4>
          <p>
            <?php _e('Under Law No. 24 of 2009, contracts involving Indonesian parties or governed by Indonesian law may require an Indonesian-language version. Courts may give precedence to the Indonesian version in case of dispute.', 'fts-law'); ?>
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('Unenforceable Penalty Clauses', 'fts-law'); ?></h4>
          <p>
            <?php _e('Penalty or liquidated damages clauses that are deemed disproportionate may be reduced or voided by Indonesian courts. Properly calibrated and legally framed penalty clauses are needed for enforceability.', 'fts-law'); ?>
          </p>
        </div>

        <div class="risk-card risk-card--medium">
          <span class="risk-badge risk-badge--medium"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('Vague Dispute Resolution', 'fts-law'); ?></h4>
          <p>
            <?php _e('Contracts without a clear dispute resolution clause — specifying the forum (Indonesian courts, BANI arbitration, or international arbitration) and procedure — leave parties uncertain about how to resolve disagreements, leading to prolonged and costly legal disputes.', 'fts-law'); ?>
          </p>
        </div>

        <div class="risk-card risk-card--low">
          <span class="risk-badge risk-badge--low"><?php _e('Common Issue', 'fts-law'); ?></span>
          <h4><?php _e('Unsigned or Improperly Executed', 'fts-law'); ?></h4>
          <p>
            <?php _e('Contracts that are unsigned, partially signed, or lack proper witness or notarisation (where required) may not be enforceable in Indonesian legal proceedings. Proper execution is as important as proper drafting.', 'fts-law'); ?>
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
          <h2 class="cta-band__title" style="color:var(--navy);"><?php _e('Have a Contract That Needs Review?', 'fts-law'); ?></h2>
          <p class="cta-band__desc" style="color:var(--text);">
            <?php _e('Send us your existing contract for a legal review. Our lawyer will identify legal risks, unenforceable clauses, and missing provisions — and provide specific recommendations for improvement.', 'fts-law'); ?>
          </p>
          <div class="cta-band__actions">
            <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
              <?php _e('Submit Contract for Review', 'fts-law'); ?>
            </a>
            <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>"
               target="_blank" rel="noopener noreferrer">
              💬 <?php _e('WhatsApp Us', 'fts-law'); ?>
            </a>
          </div>
        </div>
        <div class="cta-band__checklist">
          <h4><?php _e('What We Check in a Contract Review:', 'fts-law'); ?></h4>
          <ul class="check-list">
            <li><?php _e('Legal validity under Indonesian law', 'fts-law'); ?></li>
            <li><?php _e('Enforceability of key clauses', 'fts-law'); ?></li>
            <li><?php _e('Governing law &amp; jurisdiction issues', 'fts-law'); ?></li>
            <li><?php _e('Missing essential provisions', 'fts-law'); ?></li>
            <li><?php _e('Dispute resolution mechanism', 'fts-law'); ?></li>
            <li><?php _e('Termination &amp; exit rights', 'fts-law'); ?></li>
            <li><?php _e('Liability and indemnity exposure', 'fts-law'); ?></li>
            <li><?php _e('Materai / execution requirements', 'fts-law'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- RELATED SERVICES -->
  <section class="section-soft section-related">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Related Legal Services', 'fts-law'); ?></h2>
      <div class="grid-3">

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'business-legal' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">⚖️</span>
          <h4><?php _e('Business Legal Support', 'fts-law'); ?></h4>
          <p><?php _e('Ongoing legal advisory for your business operations, compliance, and governance in Indonesia.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'legal-risk' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🔍</span>
          <h4><?php _e('Legal Risk Consultation', 'fts-law'); ?></h4>
          <p><?php _e('Identify and assess legal risks in your current business structure, agreements, and operations.', 'fts-law'); ?></p>
        </a>

        <a class="related-card" href="<?php echo esc_url( fts_page_url( 'pt-pma' ) ); ?>">
          <span class="related-card__icon" aria-hidden="true">🏢</span>
          <h4><?php _e('PT PMA Setup', 'fts-law'); ?></h4>
          <p><?php _e('Company formation including Articles of Association and shareholder agreement drafting.', 'fts-law'); ?></p>
        </a>

      </div>
    </div>
  </section>


  <!-- CTA -->
  <?php fts_cta_section(
    __('Need a Contract Drafted or Reviewed?', 'fts-law'),
    __('Book a consultation with our licensed Indonesian lawyer. We draft, review, and advise on all types of contracts for foreign investors and businesses operating in Indonesia.', 'fts-law')
  ); ?>

</main>

<?php get_footer(); ?>
