<div id="wpgsv-metabox">

    <div class="type-selector">
        <h2><?php 
echo __( 'Choose Map Type:', 'wp-google-street-view' );
?> <span><?php 
echo __( '(Google Street View, Google Maps or Synchronized Street view + Maps) Check our DEMO', 'wp-google-street-view' );
?> <a href="https://better-robots.com/wp-google-street-view-samples/" target="_blank">here</a></span></h2>

        <?php 
WPGSV_MetaField::choose(
    $post->ID,
    'type',
    'type',
    array('street', 'map', 'streetmapfree')
);
?>

    </div>

    <div v-if="type === 'map'">
        <div v-show="map" class="wpgsv-map-container">
            <div id="wpgsv-map" style="width: 100%"></div>
        </div>
    </div>

    <div v-if="type === 'street'">
        <div v-show="map" class="wpgsv-map-container">
            <div id="wpgsv-pano" style="width: 100%; height: 100%;"></div>
        </div>
    </div>

    <?php 
?>

        <div v-if="type === 'streetmapfree'">
            <?php 
WPGSV_Notice::add( 'Street View and Map Together', 'warn wpgsv-margin', true );
?>
        </div>

    <?php 
?>
    
    <div class="wpgsv-form">

    <div class="wpgsv-tabs wpgsv-margin">

        <!--- Notices --->
        <div class="wpgsv-notice wpgsv-error" v-show="error">{{ error }}</div>
        
        <div class="wpgsv-notice wpgsv-warn" v-if="type == 'street'"><?php 
echo __( 'With Street View, make sure to "correct" or "adjust" the view displayed with preview tool (Zoom in/out + Point of View), then SAVE.', 'wp-google-street-view' );
?></div>

        <div class="wpgsv-notice wpgsv-warn" v-if="type == 'street'"><?php 
echo __( 'Marker, Info Box, Styles and Layers will not work in Street view only.', 'wp-google-street-view' );
?></div>
        <!--- Notices --->

        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1"><?php 
echo __( 'General Settings', 'wp-google-street-view' );
?></li>
            <li class="tab-link" data-tab="tab-2"><?php 
echo __( 'Marker', 'wp-google-street-view' );
?></li>
            <li class="tab-link" data-tab="tab-3"><?php 
echo __( 'Customize Info Box on Marker', 'wp-google-street-view' );
?></li>
            <li class="tab-link" data-tab="tab-4"><?php 
echo __( 'Styles', 'wp-google-street-view' );
?></li>
            <li class="tab-link" data-tab="tab-5"><?php 
echo __( 'Layers', 'wp-google-street-view' );
?></li>
        </ul>

        <!-- START TAB -->
        <div id="tab-1" class="tab-content current">
            
            <?php 
include WPGSV_PLUGIN_PATH . '/admin/inc/tabs/general-settings.php';
?>

        </div>
        <!-- END Tab -->

        <!-- START TAB -->
        <div id="tab-2" class="tab-content">

            <?php 
include WPGSV_PLUGIN_PATH . '/admin/inc/tabs/marker.php';
?>

        </div>
        <!-- END Tab -->

        <!-- START TAB -->
        <div id="tab-3" class="tab-content">

            <?php 
include WPGSV_PLUGIN_PATH . '/admin/inc/tabs/infobox.php';
?>

        </div>
        <!-- END Tab -->

        <!-- START TAB -->
        <div id="tab-4" class="tab-content">

            <?php 
include WPGSV_PLUGIN_PATH . '/admin/inc/tabs/styles.php';
?>

        </div>
        <!-- END Tab -->

        <!-- START TAB -->
        <div id="tab-5" class="tab-content">

            <?php 
include WPGSV_PLUGIN_PATH . '/admin/inc/tabs/layers.php';
?>

        </div>
        <!-- END Tab -->

        <button class="wpgsv-getMap" @click.prevent="getLocation()"><?php 
echo __( 'Click to Preview Your Map', 'wp-google-street-view' );
?></button>

    </div>
</div>