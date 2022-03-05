<?php
/**
 * Template for rendering an `accordion` block in single listing page.
 *
 * @since 1.0
 */
if ( ! defined('ABSPATH') ) {
    exit;
}

$value = $listing->get_field( $block->get_prop( 'show_field' ) );
$cols = $block->get_prop( 'cols' );
$cols_sm = $block->get_prop( 'cols_sm' );
$cols_xs = $block->get_prop( 'cols_xs' );
$gap = $block->get_prop( 'gap' );

if ( empty( $value ) ) {
    return;
}

$style = '';
if ( $gap ) {
    $style .= 'grid-gap:'.esc_attr( $gap ).'px';
}
?>

<div class="<?php echo esc_attr( $block->get_wrapper_classes() ) ?>" id="<?php echo esc_attr( $block->get_wrapper_id() ) ?>">
    <div class="food-menu-items" <?php if ( $style ): ?>style="<?php echo $style ?>"<?php endif ?>>
        <?php foreach ( $value as $key => $row ) : ?>
            <div class="single-menu-item mt-30 element">
                <?php 
                if ( isset( $row['mylisting_accordion_photo'] ) && ! empty( $row['mylisting_accordion_photo'] ) ) : ?>
                    <div class="menu-thumb photoswipe-gallery">
                        <?php 
                        $image_url = c27()->get_resized_image( $row['mylisting_accordion_photo'], 'full' );
                        $attachment_id = c27()->get_attachment_by_guid( $row['mylisting_accordion_photo'] );
                        ?>

                        <a
                            class="photoswipe-item"
                            href="<?php echo esc_url( $image_url ) ?>"
                        >
                            <?php echo wp_get_attachment_image( $attachment_id, 'full' ); ?>
                        </a>
                    </div>
                <?php
                endif; ?>
                <div class="menu-content ml-30">
                    <span><?php echo esc_html( $row['menu-label'] ); ?></span>
                    <?php echo wpautop( $row['menu-description'] ); ?>
                </div>
                <div class="menu-price-btn"><?php echo $row['menu-price']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <style type="text/css">
        <?php if ( $cols ): ?>
            @media only screen and (min-width : 1200px) {
                #<?php echo esc_attr( $block->get_wrapper_id() ) ?> .food-menu-items {
                    grid-template-columns: repeat(<?php echo absint( $cols ) ?>, 1fr);
                }
            }
        <?php endif ?>

        <?php if ( $cols_sm ): ?>
            @media (min-width:768px) and (max-width:1200px) {
                #<?php echo esc_attr( $block->get_wrapper_id() ) ?> .food-menu-items {
                    grid-template-columns: repeat(<?php echo absint( $cols_sm ) ?>, 1fr);
                }
            }
        <?php endif ?>

        <?php if ( $cols_xs ): ?>
            @media only screen and (max-width : 768px) {
                #<?php echo esc_attr( $block->get_wrapper_id() ) ?> .food-menu-items {
                    grid-template-columns: repeat(<?php echo absint( $cols_xs ) ?>, 1fr);
                }
            }
        <?php endif ?>
    </style>
</div>
