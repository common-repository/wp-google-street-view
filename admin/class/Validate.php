<?php
if (!class_exists('WPGSV_Validate')) {
    class WPGSV_Validate {
        
        private $data;

        public static $fields = ['type', 'address', 'lat', 'lng', 'zoom', 'animation', 'infoBoxOpen', 'markerIcon', 'infoBoxMaxWidth', 'map_style', 'customStyle', 'mapWidth', 'mapHeight', 'panoheading', 'panopitch', 'panozoom'];

        public static $checkboxes = [
            'marker', 'infoBox', 'openByDefault', 'customInfoBox', 'setInfoBoxMaxWidth', 'bicycleLayer', 'trafficLayer', 'transportLayer', 'remove_settings'];

        public static $textarea = ['infoBoxContent'];

        public static $setting_fields = [
            'google_maps_api', 'website_url', 'org_name', 'site_image', 'site_image_thumbnail', 'price_range', 'telephone', 'latitude', 'longitude', 'country', 'city', 'region', 'postal_code', 'street_address', 'selected_page'];

        public static $setting_checkboxes = [
            'homepage', 'remove_settings'];

        public static $setting_textarea = ['description', 'operation_hours'];

        public function __construct($post_data) {
            $this->data = $post_data;
        }

        public function getData() {
            return $this->data;
        }

    }
}