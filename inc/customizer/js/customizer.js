(function( $ , api) {

    // Customizer about page redirect
    api.section( 'horseclub_fof_options_section' , function( section ) {

        section.expanded.bind( function( isExpanded ) {

            if( isExpanded ) {
                api.previewer.previewUrl.set( api.settings.url.home+'/maybe404page' );
            } else {
                api.previewer.previewUrl.set( api.settings.url.home );
            }
            
        } )

    } );

    // Customizer blog page redirect
    api.section( 'horseclub_blog_options_section' , function( section ) {

        section.expanded.bind( function( isExpanded ) {

            if( isExpanded ) {
                api.previewer.previewUrl.set( horseclubCustomizerdata.blog_page );
            } else {
                api.previewer.previewUrl.set( api.settings.url.home );
            }
            


        } )

    } );


    // Footer section
    api.section( 'horseclub_footer_options_section' , function( section ) {

        section.expanded.bind( function( isExpanded ) {


            // Footer Widget option show/hide
            var $widget_toggle  = $('#horseclub-widget-toggle-settings'),
                $widgettitle    = $('#customize-control-horseclub_footer_widgettitlecolor_settings');

            // Default

            if( $widget_toggle.is( ':checked' ) ) {

                $widgettitle.show('slow');

            } else {

                $widgettitle.hide('slow');

            }

            // on click
            $widget_toggle.on( 'click',  function() {

                var $this =  $( this );

                if( $this.is(':checked') ) {

                    $widgettitle.show('slow');

                } else {

                    $widgettitle.hide('slow');

                }


            } ); 

        } );

    } );

    // colors section
    api.section( 'colors' , function( section ) {

        section.expanded.bind( function( isExpanded ) {


            // Page header overlay option show/hide
            var $overlay_toggle  = $('#horseclub-headeroverlay-toggle-settings'),
                $overlaytitle    = $('#customize-control-horseclub_headeroverlaycolor');

            // Default

            if( $overlay_toggle.is( ':checked' ) ) {

                $overlaytitle.show('slow');

            } else {

                $overlaytitle.hide('slow');

            }

            // on click
            $overlay_toggle.on( 'click',  function() {

                var $this =  $( this );

                if( $this.is(':checked') ) {

                    $overlaytitle.show('slow');

                } else {

                    $overlaytitle.hide('slow');

                }

            } ); 

        } );

    } );


})( jQuery, wp.customize );