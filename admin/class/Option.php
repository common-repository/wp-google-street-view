<?php 
if (!class_exists('WPGSV_Option')) {
    class WPGSV_Option {
        public static function val($value) {
            
            global  $wpgsv;
            $option = $wpgsv->wpgsv__options();

            return $option[$value];
        }
    }
}