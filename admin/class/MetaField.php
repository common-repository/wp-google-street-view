<?php

if (!class_exists('WPGSV_MetaField')) {
    class WPGSV_MetaField {

        public static function add($postid, $type = "", $name = "", $placeholder = "", $class = "", $vmodel = "", $callback = "", $value = "", $checked = "") 
        {
            $meta = get_post_meta($postid);

            if ($type == "text") {

                $vmodel_output = (empty($vmodel)) ? "" : "v-model='$vmodel'";
                $value_output = (empty($value)) ? "" : "value='$value'";
                
                $output = "<input type='$type' id='wpgsv-$name' name='$name' placeholder='$placeholder' class='$class' $vmodel_output $value_output/>";

                echo $output;
            }

            if ($type == "textarea") {
                
                $output = "<textarea id='wpgsv-$name' name='$name' placeholder='$placeholder' class='$class' v-model='$vmodel'/></textarea>";

                echo $output;
            }

            if ($type == 'checkbox') {

                $output_callback = (!empty($callback) ? "@change='$callback'" : "");

                echo "<label class='toggle'><input type='$type' name='$name'  $checked v-model='$vmodel' $output_callback /><span class='toggle-slider toggle-round'></span></label>";
            }

            if ($type == 'range') {

                echo "<input type='$type' name='$name' min='0' max='19' step='1' class='$class'  v-model='$vmodel' />";
            }

            if ($type == "hidden") {

                $vmodel_output = (empty($vmodel)) ? "" : "v-model='$vmodel'";
                $output = "<input type='$type' id='wpgsv-$name' name='$name' $vmodel_output/>";

                echo $output;
            }
            
        }

        public static function select($postid, $type = "", $name = "", $class = "", $vmodel = "", $value = array() ) 
        {
            $meta = get_post_meta($postid);
            
            echo "<select name='$name' class='$class' v-model='$vmodel'>";
                
                foreach( $value as $key => $val) {
                    echo "<option value='$key'";
                    
                    if ( isset($meta[$name]) && $meta[$name][0] == $key) echo "selected";
                    
                    echo ">$val</option>";
                }
                
                echo "</select>";
        }

        public static function choose($postid, $name = "", $vmodel = "", $value = array(), $disabled = false ) 
        {
            foreach( $value as $val) {

                $disabled_output = "";

                if($disabled == true) {
                    $disabled_output = "disabled";
                }

                echo "<input type='radio' name='$name' v-model='$vmodel' id='$val' value='$val' class='input-hidden' @change='getLocation()'  $disabled_output /><label for='$val'><img src='".WPGSV_PLUGIN_DIR."/assets/img/$val.png' alt='$val' /></label>";

            }
        }
        
    }

}