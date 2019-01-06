<?php 
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'horseclub' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

?>
<div class="footer-bottom d-flex justify-content-between align-items-center">
    <p class="footer-text m-0"><?php echo wp_kses_post( horseclub_opt( 'horseclub-copyright-text-settings', $copyText ) ); ?></p>
</div>