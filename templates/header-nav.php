<header id="header">
<div class="container">
    <div class="row header-top align-items-center">
        <?php 
        $email = horseclub_opt( 'horseclub_header_left_text', esc_attr( 'info@example.com' ) );

        if( $email ) {
            ?>
            <div class="col-lg-4 col-sm-4 menu-top-left">
                <a href="mailto:<?php echo esc_attr( $email ) ?>"><span class="lnr lnr-location"></span></a>
                <a class="tel" href="mailto:info@horseclub.com"><?php echo esc_html( $email ) ?></a>
            </div>
            <?php
        }

        ?>
        <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <?php 
            // Header Logo
            echo horseclub_theme_logo();
            ?>                        
        </div>
        <?php 
        $phone = horseclub_opt( 'horseclub_header_phone', esc_html( '+880 123 12 658 439' ) );
        if( $phone ) {

            $attrNumber = str_replace(' ', '', $phone);

            ?>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:<?php echo esc_attr( $attrNumber ) ?>"><?php echo esc_html( $phone ); ?></a>
                <a href="tel:<?php echo esc_attr( $attrNumber ) ?>"><span class="lnr lnr-phone-handset"></span></a>
            </div>

            <?php
        }
        ?>
    </div>
</div>  
    <hr>
<div class="container"> 
    <div class="row align-items-center justify-content-center d-flex">
      <nav id="nav-menu-container">
        <?php 
        //
        if( has_nav_menu( 'primary-menu' ) ) {
            $args = array(
                'theme_location' => 'primary-menu',
                'container'      => '',
                'depth'          => 2,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'horseclub_bootstrap_navwalker::fallback',
                'walker'         => new horseclub_bootstrap_navwalker(),
            );  
            wp_nav_menu( $args );
        }
        ?>
      </nav><!-- #nav-menu-container -->                    
    </div>
</div>
</header><!-- #header -->