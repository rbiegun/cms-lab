
<?php
/**
 * Funkcje motywu potomnego Zielony Fotograf.
 */

add_action( 'wp_enqueue_scripts', 'mf_child_enqueue_styles' );

function mf_child_enqueue_styles() {
    wp_enqueue_style(
        'mf-child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'after_setup_theme', 'mf_child_setup' );

function mf_child_setup() {
    load_child_theme_textdomain(
        'mf-child',
        get_stylesheet_directory() . '/languages'
    );
}
add_filter( 'excerpt_length', 'mf_excerpt_length', 20 );

function mf_excerpt_length( $length ) {
    return 25;
}
add_filter( 'the_content', 'mf_add_note' );

function mf_add_note( $content ) {
    if ( is_single() && in_the_loop() && is_main_query() ) {
        $note = esc_html__(
            'Masz pytania? Napisz do nas.',
            'mf-child'
        );

        $content .= '<p class="mf-note">' . $note . '</p>';
    }

    return $content;
}
add_action( 'init', 'mf_register_block_styles' );

function mf_register_block_styles() {
    register_block_style(
        'core/button',
        array(
            'name'         => 'mf-cien',
            'label'        => __( 'Z cieniem', 'mf-child' ),
            'inline_style' => '.wp-block-button.is-style-mf-cien .wp-block-button__link {
                background-color: #245C3A;
                color: #FFFFFF;
                box-shadow: 0 4px 0 #173D27;
            }',
        )
    );
    register_block_style(
    'core/group',
    array(
        'name'         => 'mf-karta',
        'label'        => __( 'Karta', 'mf-child' ),
        'inline_style' => '.wp-block-group.is-style-mf-karta {
            background-color: #FFFFFF;
            color: #1A1A1A;
            border: 1px solid #245C3A;
            border-radius: 16px;
            padding: 24px;
        }',
    )
);
}