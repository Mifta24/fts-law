<?php
/**
 * FTS Law – Privacy Policy Page
 * Template for: /privacy-policy
 *
 * @package fts-law
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero page-hero--simple">
    <div class="container">
      <span class="eyebrow"><?php _e('Legal', 'fts-law'); ?></span>
      <h1><?php _e('Privacy Policy', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('How we collect, use, and protect your personal information.', 'fts-law'); ?>
        <?php _e('Last updated:', 'fts-law'); ?> <?php echo date('F Y'); ?>
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       PRIVACY POLICY CONTENT
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-privacy">
    <div class="container">
      <div class="privacy-layout">

        <!-- ── Main Policy Content ── -->
        <article class="privacy-content">

          <!-- Introduction -->
          <div class="privacy-section">
            <h2><?php _e('1. Introduction', 'fts-law'); ?></h2>
            <p>
              <?php _e('This Privacy Policy explains how <strong>LAW OFFICE · SYARIF &amp; PARTNERS</strong> ("we", "our", "the office") collects, uses, stores, and protects personal information provided by visitors to our website at <strong>law.fts.biz.id</strong> and by clients who engage our legal services.', 'fts-law'); ?>
            </p>
            <p>
              <?php _e('We are committed to protecting your privacy and handling your personal data in compliance with applicable Indonesian data protection law, including <strong>Law No. 27 of 2022 on Personal Data Protection</strong> (Undang-Undang Perlindungan Data Pribadi / UU PDP).', 'fts-law'); ?>
            </p>
            <p>
              <?php _e('By using this website or submitting your information through our contact, consultation, or lead generation forms, you consent to the collection and use of your information as described in this Privacy Policy.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Information We Collect -->
          <div class="privacy-section">
            <h2><?php _e('2. Information We Collect', 'fts-law'); ?></h2>
            <p>
              <?php _e('We collect personal information that you voluntarily provide to us through our website forms, email communications, WhatsApp messages, and in-person consultations. This information may include:', 'fts-law'); ?>
            </p>

            <h3><?php _e('2.1 Contact &amp; Inquiry Information', 'fts-law'); ?></h3>
            <ul class="privacy-list">
              <li><?php _e('Full name', 'fts-law'); ?></li>
              <li><?php _e('Email address', 'fts-law'); ?></li>
              <li><?php _e('WhatsApp or phone number', 'fts-law'); ?></li>
              <li><?php _e('Nationality and country of residence', 'fts-law'); ?></li>
              <li><?php _e('Company name (if applicable)', 'fts-law'); ?></li>
              <li><?php _e('Description of your legal matter or inquiry', 'fts-law'); ?></li>
              <li><?php _e('Preferred consultation method', 'fts-law'); ?></li>
            </ul>

            <h3><?php _e('2.2 Free Legal Guide Requests', 'fts-law'); ?></h3>
            <ul class="privacy-list">
              <li><?php _e('Full name', 'fts-law'); ?></li>
              <li><?php _e('Email address', 'fts-law'); ?></li>
              <li><?php _e('Country of residence', 'fts-law'); ?></li>
              <li><?php _e('Legal interest area (optional)', 'fts-law'); ?></li>
            </ul>

            <h3><?php _e('2.3 Website Usage Data', 'fts-law'); ?></h3>
            <p>
              <?php _e('When you visit our website, we may automatically collect certain technical information through cookies and analytics tools, including:', 'fts-law'); ?>
            </p>
            <ul class="privacy-list">
              <li><?php _e('IP address (anonymised where possible)', 'fts-law'); ?></li>
              <li><?php _e('Browser type and version', 'fts-law'); ?></li>
              <li><?php _e('Pages visited and time spent on each page', 'fts-law'); ?></li>
              <li><?php _e('Referring website or search query', 'fts-law'); ?></li>
              <li><?php _e('Device type (desktop, tablet, mobile)', 'fts-law'); ?></li>
            </ul>

            <h3><?php _e('2.4 Client Legal Files', 'fts-law'); ?></h3>
            <p>
              <?php _e('If you engage our legal services, we collect additional information necessary to provide those services, including passport details, immigration documents, company registration documents, financial records, and other documents relevant to your legal matter. This information is subject to full attorney-client confidentiality — see Section 5 below.', 'fts-law'); ?>
            </p>
          </div>


          <!-- How We Use Information -->
          <div class="privacy-section">
            <h2><?php _e('3. How We Use Your Information', 'fts-law'); ?></h2>
            <p>
              <?php _e('We use the personal information we collect for the following purposes:', 'fts-law'); ?>
            </p>

            <div class="privacy-use-grid">

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">📋</span>
                <div>
                  <strong><?php _e('Responding to Inquiries', 'fts-law'); ?></strong>
                  <p><?php _e('To respond to your legal inquiries, consultation requests, and messages submitted through our website or WhatsApp.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">⚖️</span>
                <div>
                  <strong><?php _e('Providing Legal Services', 'fts-law'); ?></strong>
                  <p><?php _e('To provide the legal services you have engaged us for, including visa applications, company registrations, contract drafting, and legal advisory.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">📘</span>
                <div>
                  <strong><?php _e('Free Legal Guide Delivery', 'fts-law'); ?></strong>
                  <p><?php _e('To send you the free legal guide you requested, and occasional relevant legal updates or articles. You may unsubscribe at any time.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">💬</span>
                <div>
                  <strong><?php _e('Communication', 'fts-law'); ?></strong>
                  <p><?php _e('To communicate with you about your legal matter, appointment scheduling, document requests, and case updates.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">📊</span>
                <div>
                  <strong><?php _e('Website Improvement', 'fts-law'); ?></strong>
                  <p><?php _e('To analyse website usage data in aggregate form to improve our website content, navigation, and user experience.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-use-item">
                <span class="privacy-use-item__icon" aria-hidden="true">🏛</span>
                <div>
                  <strong><?php _e('Legal Compliance', 'fts-law'); ?></strong>
                  <p><?php _e('To comply with applicable Indonesian laws and regulations, including any court orders, government requests, or legal obligations.', 'fts-law'); ?></p>
                </div>
              </div>

            </div>
          </div>


          <!-- Information Sharing -->
          <div class="privacy-section">
            <h2><?php _e('4. Information Sharing and Disclosure', 'fts-law'); ?></h2>
            <p>
              <?php _e('We do not sell, rent, or trade your personal information to third parties for marketing or commercial purposes. We may share your information only in the following limited circumstances:', 'fts-law'); ?>
            </p>

            <h3><?php _e('4.1 With Government Agencies (For Legal Service Purposes)', 'fts-law'); ?></h3>
            <p>
              <?php _e('When providing legal services such as visa applications, company registration, or business licensing, we are required to submit your personal information to relevant Indonesian government agencies, including:', 'fts-law'); ?>
            </p>
            <ul class="privacy-list">
              <li><?php _e('Directorate General of Immigration (Imigrasi)', 'fts-law'); ?></li>
              <li><?php _e('Ministry of Law and Human Rights (Kemenkumham)', 'fts-law'); ?></li>
              <li><?php _e('Indonesian Investment Coordinating Board (BKPM / OSS)', 'fts-law'); ?></li>
              <li><?php _e('Directorate General of Taxation (DJP)', 'fts-law'); ?></li>
              <li><?php _e('Ministry of Manpower (Kemnaker)', 'fts-law'); ?></li>
              <li><?php _e('Other relevant government bodies as required', 'fts-law'); ?></li>
            </ul>
            <p>
              <?php _e('Such submissions are made only as necessary and with your knowledge and consent as part of the legal service engagement.', 'fts-law'); ?>
            </p>

            <h3><?php _e('4.2 With Licensed Notaries', 'fts-law'); ?></h3>
            <p>
              <?php _e('For company formation, contract notarisation, and other matters requiring notarial services, we may share relevant personal information with a licensed Indonesian notary (Notaris) as part of the legal process.', 'fts-law'); ?>
            </p>

            <h3><?php _e('4.3 Service Providers', 'fts-law'); ?></h3>
            <p>
              <?php _e('We may share limited technical information with trusted service providers who assist in operating our website (such as web hosting, email delivery, and analytics services). These providers are contractually obligated to protect your information and may not use it for their own purposes.', 'fts-law'); ?>
            </p>

            <h3><?php _e('4.4 Legal Requirements', 'fts-law'); ?></h3>
            <p>
              <?php _e('We may disclose personal information if required by law, court order, or government authority, or if we believe such disclosure is necessary to protect our legal rights or comply with applicable regulations.', 'fts-law'); ?>
            </p>

            <div class="info-box">
              <?php _e('<strong>🔒 Important:</strong> Information shared in the context of legal representation is protected by attorney-client privilege as described in Section 5 below and is treated with the highest level of professional confidentiality.', 'fts-law'); ?>
            </div>
          </div>


          <!-- Client Confidentiality -->
          <div class="privacy-section privacy-section--highlight">
            <h2><?php _e('5. Client Confidentiality &amp; Attorney-Client Privilege', 'fts-law'); ?></h2>

            <div class="confidentiality-band">
              <span class="confidentiality-band__icon" aria-hidden="true">🔐</span>
              <div class="confidentiality-band__content">
                <h3><?php _e('Attorney-Client Privilege', 'fts-law'); ?></h3>
                <p>
                  <?php _e('All information, documents, and communications shared with our licensed Indonesian lawyer in the context of seeking legal advice or engaging our legal services are protected by <strong>attorney-client privilege</strong> (kerahasiaan advokat) under:', 'fts-law'); ?>
                </p>
                <ul class="privacy-list">
                  <li><?php _e('Law No. 18 of 2003 on Advocates (UU Advokat)', 'fts-law'); ?></li>
                  <li><?php _e('PERADI (Indonesian Bar Association) Code of Professional Conduct', 'fts-law'); ?></li>
                  <li><?php _e('Indonesian Professional Secrecy obligations', 'fts-law'); ?></li>
                </ul>
                <p>
                  <?php _e('This means that our lawyer is legally prohibited from disclosing your confidential communications or the content of your legal matter to any third party — including government agencies — without your express consent, except where required by applicable law.', 'fts-law'); ?>
                </p>
                <p>
                  <?php _e('<strong>Attorney-client privilege applies from the moment of your first legal consultation with our office.</strong> This includes preliminary consultations conducted via WhatsApp, email, or our website contact forms where you are seeking legal advice.', 'fts-law'); ?>
                </p>
              </div>
            </div>

            <h3><?php _e('What This Means in Practice', 'fts-law'); ?></h3>
            <ul class="privacy-list">
              <li><?php _e('Your legal matter details are never shared with third parties without your consent', 'fts-law'); ?></li>
              <li><?php _e('Case documents are stored securely and accessible only to authorised staff', 'fts-law'); ?></li>
              <li><?php _e('Our staff are bound by professional secrecy obligations', 'fts-law'); ?></li>
              <li><?php _e('Client files are retained only as long as necessary for legal purposes', 'fts-law'); ?></li>
              <li><?php _e('Physical and digital files are protected against unauthorised access', 'fts-law'); ?></li>
              <li><?php _e('Discussions of your case in our office are conducted confidentially', 'fts-law'); ?></li>
            </ul>
          </div>


          <!-- Data Security -->
          <div class="privacy-section">
            <h2><?php _e('6. Data Security', 'fts-law'); ?></h2>
            <p>
              <?php _e('We implement reasonable technical and organisational measures to protect your personal information against unauthorised access, loss, or misuse. These measures include:', 'fts-law'); ?>
            </p>
            <ul class="privacy-list">
              <li><?php _e('SSL/TLS encryption for all data transmitted through our website', 'fts-law'); ?></li>
              <li><?php _e('Secure server infrastructure with Cloudflare CDN protection', 'fts-law'); ?></li>
              <li><?php _e('Password-protected access to client files and email systems', 'fts-law'); ?></li>
              <li><?php _e('Limited staff access to sensitive client information (need-to-know basis)', 'fts-law'); ?></li>
              <li><?php _e('Regular security reviews of our website and data storage practices', 'fts-law'); ?></li>
            </ul>
            <p>
              <?php _e('While we take reasonable steps to protect your information, no method of transmission over the internet or electronic storage is 100% secure. We cannot guarantee absolute security, but we are committed to protecting your information to the best of our ability.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Data Retention -->
          <div class="privacy-section">
            <h2><?php _e('7. Data Retention', 'fts-law'); ?></h2>
            <p>
              <?php _e('We retain personal information for as long as necessary to fulfil the purposes for which it was collected, including:', 'fts-law'); ?>
            </p>
            <ul class="privacy-list">
              <li>
                <?php _e('<strong>Inquiry / contact form data:</strong> Retained for 12 months after the last communication, unless a legal engagement is established.', 'fts-law'); ?>
              </li>
              <li>
                <?php _e('<strong>Free legal guide registrations:</strong> Retained for as long as you remain subscribed to our mailing list. You may unsubscribe at any time.', 'fts-law'); ?>
              </li>
              <li>
                <?php _e('<strong>Client legal files:</strong> Retained for a minimum of 5 years after the conclusion of legal services, as required by Indonesian legal professional obligations and applicable law.', 'fts-law'); ?>
              </li>
              <li>
                <?php _e('<strong>Website analytics data:</strong> Retained in aggregate, anonymised form for website improvement purposes. Individual session data is not retained long-term.', 'fts-law'); ?>
              </li>
            </ul>
          </div>


          <!-- Cookies -->
          <div class="privacy-section">
            <h2><?php _e('8. Cookies and Tracking Technologies', 'fts-law'); ?></h2>
            <p>
              <?php _e('Our website uses cookies and similar tracking technologies to improve your browsing experience and to analyse website usage. Cookies are small text files stored on your device by your browser.', 'fts-law'); ?>
            </p>

            <h3><?php _e('Types of Cookies We Use', 'fts-law'); ?></h3>
            <div class="cookie-table-wrap">
              <table class="cookie-table">
                <thead>
                  <tr>
                    <th><?php _e('Cookie Type', 'fts-law'); ?></th>
                    <th><?php _e('Purpose', 'fts-law'); ?></th>
                    <th><?php _e('Duration', 'fts-law'); ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong><?php _e('Essential', 'fts-law'); ?></strong></td>
                    <td><?php _e('Required for the website to function properly (e.g., form security tokens, session management)', 'fts-law'); ?></td>
                    <td><?php _e('Session / Short-term', 'fts-law'); ?></td>
                  </tr>
                  <tr>
                    <td><strong><?php _e('Analytics', 'fts-law'); ?></strong></td>
                    <td><?php _e('Used to understand how visitors use the website in aggregate (e.g., Google Analytics — data anonymised)', 'fts-law'); ?></td>
                    <td><?php _e('Up to 2 years', 'fts-law'); ?></td>
                  </tr>
                  <tr>
                    <td><strong><?php _e('Preference', 'fts-law'); ?></strong></td>
                    <td><?php _e('Remembers your preferences such as language or display settings', 'fts-law'); ?></td>
                    <td><?php _e('Up to 1 year', 'fts-law'); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p>
              <?php _e('You can control or disable cookies through your browser settings. Note that disabling certain cookies may affect the functionality of our website forms and contact features.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Your Rights -->
          <div class="privacy-section">
            <h2><?php _e('9. Your Rights Under Indonesian Data Protection Law', 'fts-law'); ?></h2>
            <p>
              <?php _e('Under Indonesia\'s Personal Data Protection Law (UU PDP — Law No. 27 of 2022), you have the following rights regarding your personal data:', 'fts-law'); ?>
            </p>

            <div class="rights-grid">

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">📋</span>
                <div>
                  <strong><?php _e('Right to Access', 'fts-law'); ?></strong>
                  <p><?php _e('You have the right to request access to the personal data we hold about you.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">✏️</span>
                <div>
                  <strong><?php _e('Right to Correction', 'fts-law'); ?></strong>
                  <p><?php _e('You have the right to request correction of inaccurate or incomplete personal data.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">🗑️</span>
                <div>
                  <strong><?php _e('Right to Erasure', 'fts-law'); ?></strong>
                  <p><?php _e('You may request deletion of your personal data, subject to our legal retention obligations.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">⛔</span>
                <div>
                  <strong><?php _e('Right to Object', 'fts-law'); ?></strong>
                  <p><?php _e('You have the right to object to certain uses of your personal data, including marketing communications.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">📤</span>
                <div>
                  <strong><?php _e('Right to Data Portability', 'fts-law'); ?></strong>
                  <p><?php _e('You may request a copy of your personal data in a structured, commonly used format.', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="right-item">
                <span class="right-item__icon" aria-hidden="true">🔕</span>
                <div>
                  <strong><?php _e('Right to Withdraw Consent', 'fts-law'); ?></strong>
                  <p><?php _e('Where processing is based on consent, you may withdraw that consent at any time by contacting us.', 'fts-law'); ?></p>
                </div>
              </div>

            </div>

            <p style="margin-top: 24px;">
              <?php _e('To exercise any of these rights, please contact us using the details provided in Section 10 below. We will respond to your request within a reasonable timeframe in accordance with applicable law.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Third Party Links -->
          <div class="privacy-section">
            <h2><?php _e('10. Third-Party Links', 'fts-law'); ?></h2>
            <p>
              <?php _e('Our website may contain links to third-party websites, including government portals, legal resources, and social media platforms. We are not responsible for the privacy practices or content of those third-party sites. We encourage you to review the privacy policies of any external websites you visit.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Children's Privacy -->
          <div class="privacy-section">
            <h2><?php _e('11. Children\'s Privacy', 'fts-law'); ?></h2>
            <p>
              <?php _e('Our website and legal services are not directed at individuals under the age of 18. We do not knowingly collect personal information from minors. If you believe we have inadvertently collected information from a minor, please contact us immediately so we can remove it.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Changes to Policy -->
          <div class="privacy-section">
            <h2><?php _e('12. Changes to This Privacy Policy', 'fts-law'); ?></h2>
            <p>
              <?php _e('We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or for other operational reasons. When we make material changes, we will update the "Last updated" date at the top of this page.', 'fts-law'); ?>
            </p>
            <p>
              <?php _e('We encourage you to review this Privacy Policy periodically. Your continued use of our website after any changes constitutes your acceptance of the updated Privacy Policy.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Contact for Privacy -->
          <div class="privacy-section privacy-section--contact">
            <h2><?php _e('13. Contact Us for Privacy Requests', 'fts-law'); ?></h2>
            <p>
              <?php _e('If you have any questions about this Privacy Policy, wish to exercise your data protection rights, or have concerns about how we handle your personal information, please contact us:', 'fts-law'); ?>
            </p>

            <div class="privacy-contact-card">

              <div class="privacy-contact-item">
                <span class="privacy-contact-item__icon" aria-hidden="true">🏢</span>
                <div>
                  <strong><?php _e('Office Name', 'fts-law'); ?></strong>
                  <p><?php _e('LAW OFFICE · SYARIF &amp; PARTNERS', 'fts-law'); ?></p>
                </div>
              </div>

              <div class="privacy-contact-item">
                <span class="privacy-contact-item__icon" aria-hidden="true">📍</span>
                <div>
                  <strong><?php _e('Office Address', 'fts-law'); ?></strong>
                  <p><?php echo esc_html( fts_office_address() ); ?></p>
                </div>
              </div>

              <div class="privacy-contact-item">
                <span class="privacy-contact-item__icon" aria-hidden="true">✉️</span>
                <div>
                  <strong><?php _e('Email (Privacy Requests)', 'fts-law'); ?></strong>
                  <p>
                    <a href="mailto:<?php echo esc_attr( fts_office_email() ); ?>">
                      <?php echo esc_html( fts_office_email() ); ?>
                    </a>
                  </p>
                  <p class="privacy-contact-item__note">
                    <?php _e('Please use subject line: <em>"Privacy Request – [Your Name]"</em>', 'fts-law'); ?>
                  </p>
                </div>
              </div>

              <div class="privacy-contact-item">
                <span class="privacy-contact-item__icon" aria-hidden="true">💬</span>
                <div>
                  <strong><?php _e('WhatsApp', 'fts-law'); ?></strong>
                  <p>
                    <a href="<?php echo esc_url( fts_wa_url() ); ?>"
                       target="_blank"
                       rel="noopener noreferrer">
                      <?php _e('Chat on WhatsApp', 'fts-law'); ?>
                    </a>
                  </p>
                </div>
              </div>

              <div class="privacy-contact-item">
                <span class="privacy-contact-item__icon" aria-hidden="true">🌐</span>
                <div>
                  <strong><?php _e('Website', 'fts-law'); ?></strong>
                  <p>
                    <a href="<?php echo esc_url( fts_page_url( 'contact' ) ); ?>">
                      law.fts.biz.id/contact
                    </a>
                  </p>
                </div>
              </div>

            </div>

            <p style="margin-top: 24px;">
              <?php _e('We will acknowledge your privacy request within <strong>3 business days</strong> and endeavour to fulfil it within <strong>14 business days</strong>, or sooner where possible.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Governing Law -->
          <div class="privacy-section">
            <h2><?php _e('14. Governing Law', 'fts-law'); ?></h2>
            <p>
              <?php _e('This Privacy Policy is governed by and construed in accordance with the laws of the <strong>Republic of Indonesia</strong>, including the Personal Data Protection Law (UU No. 27 of 2022) and any implementing regulations issued thereunder. Any disputes arising from this Privacy Policy shall be resolved under Indonesian jurisdiction.', 'fts-law'); ?>
            </p>
          </div>


          <!-- Acknowledgement -->
          <div class="privacy-section privacy-section--ack">
            <div class="info-box">
              <?php _e('<strong>📌 Effective Date:</strong> This Privacy Policy is effective as of', 'fts-law'); ?>
              <?php echo date('F Y'); ?> <?php _e('and applies to all personal information collected through our website at <strong>law.fts.biz.id</strong> and through our legal service engagements.', 'fts-law'); ?>
            </div>
          </div>

        </article><!-- /.privacy-content -->


        <!-- ── Sidebar: Quick Navigation ── -->
        <aside class="privacy-sidebar" aria-label="<?php esc_attr_e('Privacy policy navigation', 'fts-law'); ?>">

          <div class="privacy-nav-card">
            <h4 class="privacy-nav-card__title"><?php _e('In This Policy', 'fts-law'); ?></h4>
            <nav class="privacy-nav" aria-label="<?php esc_attr_e('Privacy sections', 'fts-law'); ?>">
              <a href="#" onclick="return false;"><?php _e('1. Introduction', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('2. Information We Collect', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('3. How We Use Your Information', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('4. Information Sharing', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('5. Client Confidentiality', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('6. Data Security', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('7. Data Retention', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('8. Cookies', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('9. Your Rights', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('10. Third-Party Links', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('11. Children\'s Privacy', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('12. Policy Changes', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('13. Contact for Privacy', 'fts-law'); ?></a>
              <a href="#" onclick="return false;"><?php _e('14. Governing Law', 'fts-law'); ?></a>
            </nav>
          </div>

          <div class="privacy-contact-sidebar">
            <h4><?php _e('Privacy Questions?', 'fts-law'); ?></h4>
            <p>
              <?php _e('Contact us directly for any questions about your personal data or this Privacy Policy.', 'fts-law'); ?>
            </p>
            <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'contact' ) ); ?>">
              <?php _e('Contact Us', 'fts-law'); ?>
            </a>
            <a class="btn btn-green" href="<?php echo esc_url( fts_wa_url() ); ?>"
               target="_blank" rel="noopener noreferrer"
               style="margin-top: 10px;">
              💬 <?php _e('WhatsApp', 'fts-law'); ?>
            </a>
          </div>

          <div class="privacy-related-links">
            <h4><?php _e('Related Pages', 'fts-law'); ?></h4>
            <nav>
              <a href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>"><?php _e('Book Consultation', 'fts-law'); ?></a>
              <a href="<?php echo esc_url( fts_page_url( 'guide' ) ); ?>"><?php _e('Free Legal Guide', 'fts-law'); ?></a>
              <a href="<?php echo esc_url( fts_page_url( 'contact' ) ); ?>"><?php _e('Contact', 'fts-law'); ?></a>
              <a href="<?php echo esc_url( home_url('/') ); ?>"><?php _e('Home', 'fts-law'); ?></a>
            </nav>
          </div>

        </aside><!-- /.privacy-sidebar -->

      </div><!-- /.privacy-layout -->
    </div>
  </section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
