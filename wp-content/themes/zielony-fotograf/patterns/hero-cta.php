
<?php
/**
 * Title: Hero – Zielony Fotograf
 * Slug: zielony-fotograf/hero-cta
 * Categories: featured, banner
 * Description: Sekcja otwierająca z hasłem firmy i przyciskiem kontaktowym.
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">

  <!-- wp:heading {"level":1,"textAlign":"center"} -->
  <h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Zdjęcia z życia wzięte', 'zielony-fotograf' ); ?></h1>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center"><?php echo esc_html__( 'Naturalne sesje portretowe, rodzinne i dla par.', 'zielony-fotograf' ); ?></p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
    <div class="wp-block-button">
      <a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="/kontakt/"><?php echo esc_html__( 'Umów sesję', 'zielony-fotograf' ); ?></a>
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
