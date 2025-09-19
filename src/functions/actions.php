<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Get icons from admin ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_get_icons' ) ) {
  function csf_get_icons() {

    $nonce = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_icon_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid nonce verification.', 'csf' ) ) );
    }

    ob_start();

    $icon_library = ( apply_filters( 'csf_fa4', false ) ) ? 'fa4' : 'fa5';

    CSF::include_plugin_file( 'fields/icon/'. $icon_library .'-icons.php' );

    $icon_lists = apply_filters( 'csf_field_icon_add_icons', csf_get_default_icons() );

    if ( ! empty( $icon_lists ) ) {

      foreach ( $icon_lists as $list ) {

        echo ( count( $icon_lists ) >= 2 ) ? '<div class="csf-icon-title">'. esc_attr( $list['title'] ) .'</div>' : '';

        foreach ( $list['icons'] as $icon ) {
          echo '<i title="'. esc_attr( $icon ) .'" class="'. esc_attr( $icon ) .'"></i>';
        }

      }

    } else {

      echo '<div class="csf-error-text">'. esc_html__( 'No data available.', 'csf' ) .'</div>';

    }

    $content = ob_get_clean();

    wp_send_json_success( array( 'content' => $content ) );

  }
  add_action( 'wp_ajax_csf-get-icons', 'csf_get_icons' );
}

if (!function_exists('my_custom_icons')) {
    function my_custom_icons($icons) {
        $icons[] = array(
            'title' => 'BXLang',
            'icons' => array(
                'bx lang-ax',
                'bx lang-af',
                'bx lang-al',
                'bx lang-dz',
                'bx lang-ad',
                'bx lang-ao',
                'bx lang-ai',
                'bx lang-aq',
                'bx lang-antigua-barbuda',
                'bx lang-ar',
                'bx lang-am',
                'bx lang-aw',
                'bx lang-au',
                'bx lang-at',
                'bx lang-az',
                'bx lang-bs',
                'bx lang-bh',
                'bx lang-bd',
                'bx lang-bb',
                'bx lang-basque',
                'bx lang-by',
                'bx lang-be',
                'bx lang-bz',
                'bx lang-bj',
                'bx lang-bm',
                'bx lang-bt',
                'bx lang-bo',
                'bx lang-bosnia-herzegovina',
                'bx lang-bw',
                'bx lang-br',
                'bx lang-vg',
                'bx lang-bn',
                'bx lang-bg',
                'bx lang-bf',
                'bx lang-bi',
                'bx lang-kh',
                'bx lang-cm',
                'bx lang-ca',
                'bx lang-canary-islands',
                'bx lang-cv',
                'bx lang-ky',
                'bx lang-cf',
                'bx lang-td',
                'bx lang-cl',
                'bx lang-cn',
                'bx lang-co',
                'bx lang-km',
                'bx lang-ck',
                'bx lang-cr',
                'bx lang-hr',
                'bx lang-cu',
                'bx lang-curacao',
                'bx lang-cy',
                'bx lang-cz',
                'bx lang-democratic-republic-of-congo',
                'bx lang-dk',
                'bx lang-dj',
                'bx lang-dm',
                'bx lang-do',
                'bx lang-east-timor',
                'bx lang-ec',
                'bx lang-eg',
                'bx lang-sv',
                'bx lang-england',
                'bx lang-gq',
                'bx lang-er',
                'bx lang-ee',
                'bx lang-sz',
                'bx lang-et',
                'bx lang-europe',
                'bx lang-fk',
                'bx lang-fo',
                'bx lang-fj',
                'bx lang-fi',
                'bx lang-fr',
                'bx lang-gf',
                'bx lang-pf',
                'bx lang-ga',
                'bx lang-gm',
                'bx lang-ge',
                'bx lang-de',
                'bx lang-gh',
                'bx lang-gi',
                'bx lang-gr',
                'bx lang-gl',
                'bx lang-gd',
                'bx lang-gp',
                'bx lang-gt',
                'bx lang-gg',
                'bx lang-gn',
                'bx lang-guinea-bissau',
                'bx lang-gy',
                'bx lang-ht',
                'bx lang-hawaii',
                'bx lang-hn',
                'bx lang-hk',
                'bx lang-hu',
                'bx lang-is',
                'bx lang-in',
                'bx lang-id',
                'bx lang-ir',
                'bx lang-iq',
                'bx lang-ie',
                'bx lang-isle-of-man',
                'bx lang-il',
                'bx lang-it',
                'bx lang-ci',
                'bx lang-jm',
                'bx lang-jp',
                'bx lang-je',
                'bx lang-jo',
                'bx lang-kz',
                'bx lang-ke',
                'bx lang-ki',
                'bx lang-xk',
                'bx lang-kurdistan',
                'bx lang-kw',
                'bx lang-kg',
                'bx lang-la',
                'bx lang-lv',
                'bx lang-lb',
                'bx lang-ls',
                'bx lang-lr',
                'bx lang-ly',
                'bx lang-li',
                'bx lang-lt',
                'bx lang-lu',
                'bx lang-mo',
                'bx lang-mg',
                'bx lang-mw',
                'bx lang-my',
                'bx lang-mv',
                'bx lang-ml',
                'bx lang-mt',
                'bx lang-mh',
                'bx lang-mq',
                'bx lang-mr',
                'bx lang-mu',
                'bx lang-mx',
                'bx lang-fm',
                'bx lang-md',
                'bx lang-mc',
                'bx lang-mn',
                'bx lang-me',
                'bx lang-ma',
                'bx lang-mozanbique',
                'bx lang-mm',
                'bx lang-na',
                'bx lang-nr',
                'bx lang-np',
                'bx lang-nl',
                'bx lang-netherlands-antilles',
                'bx lang-nc',
                'bx lang-nz',
                'bx lang-ni',
                'bx lang-ne',
                'bx lang-ng',
                'bx lang-nu',
                'bx lang-northen-ireland',
                'bx lang-kp',
                'bx lang-mk',
                'bx lang-no',
                'bx lang-om',
                'bx lang-pk',
                'bx lang-pw',
                'bx lang-ps',
                'bx lang-pa',
                'bx lang-pg',
                'bx lang-py',
                'bx lang-pe',
                'bx lang-ph',
                'bx lang-pl',
                'bx lang-pt',
                'bx lang-pr',
                'bx lang-qa',
                'bx lang-republic-congo',
                'bx lang-ro',
                'bx lang-ru',
                'bx lang-rw',
                'bx lang-saint-kitts-nevis',
                'bx lang-lc',
                'bx lang-saint-vincent-grenadines',
                'bx lang-ws',
                'bx lang-sm',
                'bx lang-sao-tome-principe',
                'bx lang-sa',
                'bx lang-scotland',
                'bx lang-sn',
                'bx lang-rs',
                'bx lang-sc',
                'bx lang-sl',
                'bx lang-sg',
                'bx lang-sx',
                'bx lang-sk',
                'bx lang-si',
                'bx lang-sb',
                'bx lang-so',
                'bx lang-za',
                'bx lang-south-georgia-sandwich-islands',
                'bx lang-kr',
                'bx lang-ss',
                'bx lang-es',
                'bx lang-lk',
                'bx lang-sd',
                'bx lang-sr',
                'bx lang-se',
                'bx lang-ch',
                'bx lang-sy',
                'bx lang-tw',
                'bx lang-tj',
                'bx lang-tz',
                'bx lang-th',
                'bx lang-tg',
                'bx lang-to',
                'bx lang-trinidad-tobago',
                'bx lang-tn',
                'bx lang-turkey',
                'bx lang-tm',
                'bx lang-turks-and-caicos-islands',
                'bx lang-tv',
                'bx lang-ug',
                'bx lang-ua',
                'bx lang-ae',
                'bx lang-gb',
                'bx lang-us',
                'bx lang-usa-virgin-islands',
                'bx lang-uy',
                'bx lang-uz',
                'bx lang-vu',
                'bx lang-va',
                'bx lang-ve',
                'bx lang-vn',
                'bx lang-gb-wls',
                'bx lang-eh',
                'bx lang-ye',
                'bx lang-zm',
                'bx lang-zw'
            )
        );
        $icons = array_reverse($icons);
        return $icons;
    }
}
add_filter('csf_field_icon_add_icons', 'my_custom_icons');
/**
 *
 * Export
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_export' ) ) {
  function csf_export() {

    $nonce  = ( ! empty( $_GET[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_GET[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_GET[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_GET[ 'unique' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      die( esc_html__( 'Error: Invalid nonce verification.', 'csf' ) );
    }

    if ( empty( $unique ) ) {
      die( esc_html__( 'Error: Invalid key.', 'csf' ) );
    }

    // Export
    header('Content-Type: application/json');
    header('Content-disposition: attachment; filename=backup-'. gmdate( 'd-m-Y' ) .'.json');
    header('Content-Transfer-Encoding: binary');
    header('Pragma: no-cache');
    header('Expires: 0');

    echo json_encode( get_option( $unique ) );

    die();

  }
  add_action( 'wp_ajax_csf-export', 'csf_export' );
}

/**
 *
 * Import Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_import_ajax' ) ) {
  function csf_import_ajax() {

    $nonce  = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_POST[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'unique' ] ) ) : '';
    $data   = ( ! empty( $_POST[ 'data' ] ) ) ? wp_kses_post_deep( json_decode( wp_unslash( trim( $_POST[ 'data' ] ) ), true ) ) : array();

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid nonce verification.', 'csf' ) ) );
    }

    if ( empty( $unique ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid key.', 'csf' ) ) );
    }

    if ( empty( $data ) || ! is_array( $data ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: The response is not a valid JSON response.', 'csf' ) ) );
    }

    // Success
    update_option( $unique, $data );

    wp_send_json_success();

  }
  add_action( 'wp_ajax_csf-import', 'csf_import_ajax' );
}

/**
 *
 * Reset Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_reset_ajax' ) ) {
  function csf_reset_ajax() {

    $nonce  = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $unique = ( ! empty( $_POST[ 'unique' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'unique' ] ) ) : '';

    if ( ! wp_verify_nonce( $nonce, 'csf_backup_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid nonce verification.', 'csf' ) ) );
    }

    // Success
    delete_option( $unique );

    wp_send_json_success();

  }
  add_action( 'wp_ajax_csf-reset', 'csf_reset_ajax' );
}

/**
 *
 * Chosen Ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'csf_chosen_ajax' ) ) {
  function csf_chosen_ajax() {

    $nonce = ( ! empty( $_POST[ 'nonce' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : '';
    $type  = ( ! empty( $_POST[ 'type' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'type' ] ) ) : '';
    $term  = ( ! empty( $_POST[ 'term' ] ) ) ? sanitize_text_field( wp_unslash( $_POST[ 'term' ] ) ) : '';
    $query = ( ! empty( $_POST[ 'query_args' ] ) ) ? wp_kses_post_deep( $_POST[ 'query_args' ] ) : array();

    if ( ! wp_verify_nonce( $nonce, 'csf_chosen_ajax_nonce' ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid nonce verification.', 'csf' ) ) );
    }

    if ( empty( $type ) || empty( $term ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: Invalid term ID.', 'csf' ) ) );
    }

    $capability = apply_filters( 'csf_chosen_ajax_capability', 'manage_options' );

    if ( ! current_user_can( $capability ) ) {
      wp_send_json_error( array( 'error' => esc_html__( 'Error: You do not have permission to do that.', 'csf' ) ) );
    }

    // Success
    $options = CSF_Fields::field_data( $type, $term, $query );

    wp_send_json_success( $options );

  }
  add_action( 'wp_ajax_csf-chosen', 'csf_chosen_ajax' );
}
