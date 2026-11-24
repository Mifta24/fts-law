<?php
/**
 * Okelegal – Our Team Page
 * Template for: /lawyer
 *
 * @package fts-law
 */

get_header();
$fts_groups = fts_team_groups();
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow"><?php _e('Our Team', 'fts-law'); ?></span>
      <h1><?php _e('Meet the Okelegal Team', 'fts-law'); ?></h1>
      <p class="page-hero__subtitle">
        <?php _e('Lawyers, corporate management, and technology experts working together to deliver professional, innovative legal and business solutions.', 'fts-law'); ?>
      </p>
    </div>
  </section>

  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       FOUNDER
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-lawyer-profile">
    <div class="container two-col">

        <div class="profile-photo">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/images/team/syarif.jpg' ); ?>"
            alt="<?php esc_attr_e('Syarif Anis, S.H. – CEO / Founder', 'fts-law'); ?>"
            loading="eager" />
        </div>

        <div class="profile-bio">
          <span class="eyebrow"><?php _e('CEO / Founder', 'fts-law'); ?></span>
          <h2 class="profile-name"><?php _e('Syarif Anis, S.H.', 'fts-law'); ?></h2>
          <p class="profile-title"><?php _e('CEO &amp; Founder, PT. Okelegal Law Office', 'fts-law'); ?></p>
          <p>
            <?php _e('Responsible for guiding the whole team to work professionally and innovatively, and for maximising each member\'s role at PT. Okelegal Law Office.', 'fts-law'); ?>
          </p>
          <p>
            <?php _e('Okelegal Law Office has provided legal and business consulting since 2013 and has served hundreds of domestic and international clients.', 'fts-law'); ?>
          </p>

          <div class="lawyer-info-grid">
            <div class="lawyer-info-item">
              <span class="lawyer-info-item__label"><?php _e('Office', 'fts-law'); ?></span>
              <span class="lawyer-info-item__value"><?php echo esc_html( fts_office_address() ); ?></span>
            </div>
            <div class="lawyer-info-item">
              <span class="lawyer-info-item__label"><?php _e('Availability', 'fts-law'); ?></span>
              <span class="lawyer-info-item__value"><?php _e('Online &amp; In-Person Consultations', 'fts-law'); ?></span>
            </div>
          </div>

          <div class="profile-cta">
            <a class="btn btn-gold" href="<?php echo esc_url( fts_page_url( 'consultation' ) ); ?>">
              <?php _e('Free Consultation', 'fts-law'); ?>
            </a>
            <?php echo fts_wa_btn( __('WhatsApp Chat', 'fts-law') ); ?>
          </div>
        </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       LAWYERS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Lawyers', 'fts-law'); ?></h2>
      <p class="section-subtitle" style="text-align:center;margin-left:auto;margin-right:auto;">
        <?php _e('Backed by lawyers with more than 20 years of experience serving domestic and international clients.', 'fts-law'); ?>
      </p>
      <?php fts_team_cards( $fts_groups['lawyers'] ); ?>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       MANAGEMENT & ADVISORY
  ══════════════════════════════════════════════════════════════════ -->
  <section>
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Technology &amp; Advisory', 'fts-law'); ?></h2>
      <?php fts_team_cards( $fts_groups['management'] ); ?>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       OPERATIONS TEAM
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-soft">
    <div class="container">
      <h2 class="section-title" style="text-align:center;"><?php _e('Operations &amp; Business Team', 'fts-law'); ?></h2>
      <?php fts_team_cards( $fts_groups['staff'] ); ?>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_cta_section(
    __('Ready to Speak with Our Team?', 'fts-law'),
    __('Book a free consultation to discuss your company legality, licensing, legal, intellectual property, or business consulting needs. Online and in-person.', 'fts-law')
  ); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>
