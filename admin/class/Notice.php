<?php 

if (!class_exists('WPGSV_Notice')) {

    class WPGSV_Notice {

        public static function add( $text, $class, $pro = false ) {

            $get_pro = sprintf( wp_kses( __( '<a href="%s">Get Pro version</a> to enable', 'bulk-image-alt-text-with-yoast' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'edit.php?post_type=wpgsv&page=settings-pricing' ) );
            
            $output = "<div class='wpgsv-notice wpgsv-$class'>";
            
            if($pro == true) {
                $output .= $get_pro . " ";
            }

            $output .= __( $text, 'wp-google-street-view');
            $output .= '</div>';

            echo $output;

        }

    }

}