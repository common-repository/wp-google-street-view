<form method="post" class="wpgsv-form">
                        
    <?php if ( function_exists( 'wp_nonce_field' ) ) { wp_nonce_field( 'wpgsv__settings', 'wpgsv__nonce' ); } ?>

    <div class="wpgsv-segment">

        <div class="field">
            <label><?php echo __('Google Maps Api Key', 'wp-google-street-view'); ?></label>
            <?php WPGSV_Field::add('text', 'google_maps_api', 'Enter Google Maps Api Key', 'wpgsv-input'); ?>
        </div>

        <p><?php echo sprintf( wp_kses( __( 'Please check <a href="%s">HERE</a> to learn how to create a Google Maps API, it takes 2 min. MAX', 'wp-google-street-view' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( 'https://better-robots.com/google-maps-api' ) ); ?></p>

    </div>
    
    <div class="wpgsv-segment">

        <div class="row">

            <div class="col-xs-4 field">
                
                <?php WPGSV_Field::add('checkbox', 'remove_settings'); ?>
                <label class="checkbox">
                    <?php echo __('Remove Settings', 'wp-google-street-view'); ?>
                </label>

            </div>

            <div class="col-xs-8 field">
                <input type="submit" name="update" class="wpgsv-submit" value="<?php echo esc_html__( 'Save Changes', 'wp-google-street-view' ); ?>" />
            </div>

        </div>
    
    </div>

</form>

<div class="wpgsv-segment">

    <div class="row">

            <h2><?php echo __('Get Your Google MAPS API in 3 Steps', 'wp-google-street-view'); ?></h2>
            <ol>
                <li><?php echo __('You need a Google Account (Gsuite, Gmail, ...)', 'wp-google-street-view'); ?></li>
                <li><?php echo __('Then, you have to enable 4 APIs : "Places API, Maps Javascript API, Geocoding API and Directions API".', 'wp-google-street-view'); ?>
                    <ul>
                        <li>First, go <a href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,places_backend&keyType=CLIENT_SIDE&reusekey=true">HERE</a>. You will have to "Select" or "Create" a project (If it's a new project, then give it a name). You should see <a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/create-project.jpg" ?>">this</a> (screenshot). If not, then it means that you are not connected to your Google account).</li>
                        <li>Second, give a name to your API KEY and define <a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/api-key.jpg" ?>">KEY</a> (screenshot) and <a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/api-key2.jpg" ?>">API</a> (screenshot) restrictions.</li>
                        <li>Third, copy your API KEY (<a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/api-key.jpg" ?>">here</a>) and paste it to Wp Google Street View setting page.</li>
                    </ul>
                    Not sure? Check <a href="https://www.youtube.com/watch?v=n1UorU1PALk">HERE</a> (video) or <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">HERE</a> for more details.
                </li>
                <li>Final step; you have to enable "billing" <a href="https://console.cloud.google.com/project/_/billing/enable">HERE</a>. But don't panic! Google provides a Free TRIAL credit of 300$, by default, which is enough (by far) for any website (again, to prevent abuses). Check <a href="https://www.youtube.com/watch?v=uINleRduCWM">HERE</a> for more details.</li>
            </ol>

            <p>We understand that creating a Google Maps API key (or all these steps) could be frustrating but it's absolutely required by Google to keep using their features. Need more info? Click <a href="https://better-robots.com/google-maps-api/">here</a> !</p>

    </div>

</div>

<div class="wpgsv-segment">

    <div class="row">

    <div>
        <h2 id="-wpgsv_map-shortcode"><code>wpgsv_map</code> <?php _e('Dynamic Shortcode', 'wp-google-street-view'); ?></h2>

        <p><?php _e('The', 'wp-google-street-view'); ?> <code>wpgsv_map</code> <?php _e('shortcode is used to display Google Maps in different views on your WordPress site. It supports street view, regular map view, and a combination of both for pro users.', 'wp-google-street-view'); ?></p>

        <h3 id="attributes"><?php _e('Attributes', 'wp-google-street-view'); ?></h3>

        <ul>
            <li><code>lat</code> (string) <em>(<?php _e('required', 'wp-google-street-view'); ?>)</em>: <?php _e('Latitude of the location. Default is an empty string.', 'wp-google-street-view'); ?></li>
            <li><code>lng</code> (string) <em>(<?php _e('required', 'wp-google-street-view'); ?>)</em>: <?php _e('Longitude of the location. Default is an empty string.', 'wp-google-street-view'); ?></li>
            <li><code>info</code> (string) <em>(<?php _e('optional', 'wp-google-street-view'); ?>)</em>: <?php _e('Address or information to display. Default is an empty string.', 'wp-google-street-view'); ?></li>
            <li><code>width</code> (string) <em>(<?php _e('optional', 'wp-google-street-view'); ?>)</em>: <?php _e('Width of the map container. Default is', 'wp-google-street-view'); ?> <code>100%</code>.</li>
            <li><code>height</code> (string) <em>(<?php _e('optional', 'wp-google-street-view'); ?>)</em>: <?php _e('Height of the map container. Default is', 'wp-google-street-view'); ?> <code>450px</code>.</li>
            <li><code>zoom</code> (integer) <em>(<?php _e('optional', 'wp-google-street-view'); ?>)</em>: <?php _e('Zoom level of the map. Default is', 'wp-google-street-view'); ?> <code>10</code>.</li>
            <li><code>type</code> (string) <em>(<?php _e('optional', 'wp-google-street-view'); ?>)</em>: <?php _e('Type of map to display. Possible values are', 'wp-google-street-view'); ?> <code>street</code>, <code>map</code>, <?php _e('and', 'wp-google-street-view'); ?> <code>streetmap</code>. <?php _e('Default is', 'wp-google-street-view'); ?> <code>street</code>.</li>
        </ul>

        <h3 id="usage"><?php _e('Usage', 'wp-google-street-view'); ?></h3>

        <p><?php _e('To use the', 'wp-google-street-view'); ?> <code>wpgsv_map</code> <?php _e('shortcode, add the following to your post or page content:', 'wp-google-street-view'); ?></p>

        <pre><code>[wpgsv_map lat="37.7749" lng="-122.4194" info="San Francisco" width="100%" height="450px" zoom="10" type="street"]</code></pre>

        <h3 id="how-it-works"><?php _e('How It Works', 'wp-google-street-view'); ?></h3>

        <h4 id="type-street-"><?php _e('Type:', 'wp-google-street-view'); ?> <code>street</code></h4>
        <p><?php _e('When', 'wp-google-street-view'); ?> <code>type</code> <?php _e('is set to', 'wp-google-street-view'); ?> <code>street</code>, <?php _e('the shortcode will display the Google Street View map at the specified location.', 'wp-google-street-view'); ?></p>

        <p><?php _e('Example:', 'wp-google-street-view'); ?></p>
        <pre><code>[wpgsv_map lat="37.7749" lng="-122.4194" type="street"]</code></pre>

        <h4 id="type-map-"><?php _e('Type:', 'wp-google-street-view'); ?> <code>map</code></h4>
        <p><?php _e('When', 'wp-google-street-view'); ?> <code>type</code> <?php _e('is set to', 'wp-google-street-view'); ?> <code>map</code>, <?php _e('the shortcode will display a regular 2D map at the specified location.', 'wp-google-street-view'); ?></p>

        <p><?php _e('Example:', 'wp-google-street-view'); ?></p>
        <pre><code>[wpgsv_map lat="37.7749" lng="-122.4194" type="map"]</code></pre>

        <h4 id="type-streetmap-"><?php _e('Type:', 'wp-google-street-view'); ?> <code>streetmap</code></h4>
        <p><?php _e('When', 'wp-google-street-view'); ?> <code>type</code> <?php _e('is set to', 'wp-google-street-view'); ?> <code>streetmap</code>, <?php _e('the shortcode will display both the street view and the regular map side by side. This feature is available only for pro users', 'wp-google-street-view'); ?><sup>1</sup>. <?php _e('If the user is not a pro user, it will default to displaying only the street view.', 'wp-google-street-view'); ?></p>

        <p><?php _e('Example:', 'wp-google-street-view'); ?></p>
        <pre><code>[wpgsv_map lat="37.7749" lng="-122.4194" type="streetmap"]</code></pre>

        <hr />
        <p><sup>1</sup> <?php _e('For non-pro users, when', 'wp-google-street-view'); ?> <code>type</code> <?php _e('is set to', 'wp-google-street-view'); ?> <code>streetmap</code>, <?php _e('only the street view will be displayed. Additionally, a message will be shown, encouraging users to upgrade to the pro version to access the full feature.', 'wp-google-street-view'); ?></p>

    </div>


    </div>

</div>