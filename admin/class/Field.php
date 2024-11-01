<?php

if (!class_exists('WPGSV_Field')) {
    class WPGSV_Field {

        public static function add($type = "", $name = "", $placeholder = "", $class = "", $value = "", $callback = "" ) 
        {

            global  $wpgsv;
            $wpgsv__options = $wpgsv->wpgsv__options();

            if ($type == "text") {
                
                if( isset($wpgsv__options[$name]) && !empty($wpgsv__options[$name]) ) {
                    $value = $wpgsv__options[$name];
                }
                
                echo "<input type='$type' id='wpgsv-$name' name='$name' value='$value' class='$class' placeholder='$placeholder' $callback />";
            }

            if ($type == 'checkbox') {

                echo "<label class='toggle'><input type='$type' name='$name' ";

                if ( isset($wpgsv__options[$name]) && !empty($wpgsv__options[$name] ) ) echo "checked";
                
                echo " /><span class='toggle-slider toggle-round'></span></label>";
                
            }

            if ($type == "textarea") {

                if( isset($wpgsv__options[$name]) && !empty($wpgsv__options[$name]) ) {
                    $value = $wpgsv__options[$name];
                }
                
                $output = "<textarea id='wpgsv-$name' name='$name' placeholder='$placeholder' class='$class' />$value</textarea>";

                echo $output;
            }

            if ($type == "hidden") {
                
                if( isset($wpgsv__options[$name]) && !empty($wpgsv__options[$name]) ) {
                    $value = $wpgsv__options[$name];
                }
                
                echo "<input type='$type' id='wpgsv-$name' name='$name' value='$value' $callback />";
            }
            
        }

        public static function select($type = "", $name = "", $class = "", $value = array() ) 
        {
            global  $wpgsv;
            $wpgsv__options = $wpgsv->wpgsv__options();
            
            echo "<select name='$name' class='$class'>";
                
                foreach( $value as $key => $val) {
                    echo "<option value='$key'";
                    
                    if ( isset($wpgsv__options[$name]) && $wpgsv__options[$name] == $key) echo "selected";
                    
                    echo ">$val</option>";
                }
                
                echo "</select>";
        }
        
    }

}