<?php
/*
 * Plugin Name:       Horseclub Companion
 * Plugin URI:        https://colorlib.com/wp/themes/horseclub/
 * Description:       Horseclub Companion is a companion for Horseclub theme.
 * Version:           1.0
 * Author:            Colorlib
 * Author URI:        https://colorlib.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       horseclub
 * Domain Path:       /languages
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'HORSECLUB_COMPANION_VERSION' ) ) {
    define( 'HORSECLUB_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'HORSECLUB_COMPANION_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_DIR_PATH', get_parent_theme_file_path().'/inc/horseclub/' );
}

// Define inc dir path constant
if( ! defined( 'HORSECLUB_COMPANION_INC_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_INC_DIR_PATH', HORSECLUB_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'HORSECLUB_COMPANION_SW_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_SW_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'HORSECLUB_COMPANION_EW_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_EW_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'HORSECLUB_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_DEMO_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'HORSECLUB_COMPANION_DIR_URL' ) ) {
    define( 'HORSECLUB_COMPANION_DIR_URL', get_template_directory_uri().'/' );
}

// Define demo data dir INC constant
if( ! defined( 'HORSECLUB_COMPANION_DIR' ) ) {
    define( 'HORSECLUB_COMPANION_DIR', HORSECLUB_COMPANION_DIR_URL . 'inc/horseclub/' );
}

// Define demo data dir INC constant
if( ! defined( 'HORSECLUB_COMPANION_DIR_INC' ) ) {
    define( 'HORSECLUB_COMPANION_DIR_INC', HORSECLUB_COMPANION_DIR . 'inc/' );
}

// Define demo data dir DEMO DATA constant
if( ! defined( 'HORSECLUB_COMPANION_DEMO_DIR' ) ) {
    define( 'HORSECLUB_COMPANION_DEMO_DIR', HORSECLUB_COMPANION_DIR_INC . 'deno-data/' );
}

// Define demo data dir Elementor Data constant
if( ! defined( 'HORSECLUB_COMPANION_EW_DIR' ) ) {
    define( 'HORSECLUB_COMPANION_EW_DIR', HORSECLUB_COMPANION_DIR_INC . 'elementor-widgets/' );
}

// Define demo data dir Elementor Data constant
if( ! defined( 'HORSECLUB_COMPANION_META_DIR' ) ) {
    define( 'HORSECLUB_COMPANION_META_DIR', HORSECLUB_COMPANION_DIR_INC . 'horseclub-meta/' );
}

// Define demo data dir Elementor Data constant
if( ! defined( 'HORSECLUB_COMPANION_SBW_DIR' ) ) {
    define( 'HORSECLUB_COMPANION_SBW_DIR', HORSECLUB_COMPANION_DIR_INC . 'sidebar-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'HORSECLUB_COMPANION_DEMO_DIR_URL' ) ) {
    define( 'HORSECLUB_COMPANION_DEMO_DIR_URL', HORSECLUB_COMPANION_DIR_INC . 'demo-data/' );
}

$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();

if( ( 'Horseclub' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'Horseclub' == $is_parent->get( 'Name' ) ) ) {
    require_once HORSECLUB_COMPANION_DIR_PATH . 'horseclub-init.php';
} else {

    add_action( 'admin_notices', 'horseclub_companion_admin_notice', 99 );
    function horseclub_companion_admin_notice() {
        $url = 'https://wordpress.org/themes/horseclub/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>Horseclub Companion</strong> plugin you have to also install the %1$sHorseclub Theme%2$s', 'horseclub' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}
