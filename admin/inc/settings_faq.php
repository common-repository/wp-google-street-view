<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('What does it mean: "This API projects is not authorized to use with this API"?', 'wp-google-street-view'); ?> <a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/restrictions.jpg" ?>">Screenshot</a></h2>
            
            <p><?php echo __('This message could mean 2 things: either you did not enable all required APIs (you need 4 APIs to make plugin work properly), or you are limited by key restrictions/API restrictions. Please go to your account, https://console.developers.google.com/, click on "Credentials" (left sade bar) > API Key (your project), then check your Key restrictions (None, Http referrers, Ip adresses, ...) or your API restrictions. You may need to copy-paste, once again, your API KEY on WpGoogle Street View setting page, then Save to make plugin work properly. Please wait a few minutes before you try again.', 'wp-google-street-view'); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('Why do I have to apply restrictions with my API KEY?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __('The main reason why its recommended to apply restrictions is to help prevent unauthorised use of your quota ! We recommend to restrict your API key to specific websites (HTTP referrers). For example, if you want to limit this API key to all pages of your website (mysite.com), then select "HTTP referrers" (Key restrictions), then enter your website, with a * : mysite.com/* (* for all pages on mysite.com). If you want to limit the use of specific APIs on this website, then, in API restrictions, select "Restrict Key" & identify these APIs (4 with Wp Google Street View).', 'wp-google-street-view'); ?></p>

            <ul><li><strong><?php echo __('I have this message: "You must enable Billing on the Google Cloud Project at https://console.cloud.google.com/project/_/billing/enable ... "', 'wp-google-street-view'); ?> (<a href="<?php echo WPGSV_PLUGIN_DIR . "/assets/img/ss/billing.jpg" ?>">Screenshot</a>)</strong></li></ul>

            <p><?php echo __('It means that you did not enable "Billing" (https://www.youtube.com/watch?v=uINleRduCWM) on Google Cloud Platform. Since July 16, 2018, Google has changed its policy. You need to add billing information to use Google Maps API. Once your API KEY is created, make sure to enable "Billing" (https://console.cloud.google.com/project/_/billing/enable). Google will activate a Free TRIAL credit of 300$ (no need to pay anything). If ever you see a warning message on Map like “This page can’t load Google Maps correctly“, please have a look on google developers documentation.  Please wait a few minutes before you try again.', 'wp-google-street-view'); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('How to use Google Street View with Google Maps ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo sprintf( wp_kses( __( 'Free version allows you to use either Google Street View or Google Maps. If you want to have both features available on a single map so  synchronized Street View and Maps, then you need to upgrade to <a href="%s">PRO</a>. Please note that Google maps options (markers, styles, etc.) do not work with Google Street View.', 'wp-google-street-view' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( 'https://checkout.freemius.com/mode/dialog/plugin/6039/plan/9988/' ) ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('Once created, how do I use this shortcode ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'The easiest part! Once your map is created and optimized (with markers, styles, ...), Wp Google Street View will generate a shortcode (on top of the page) to copy-paste where ever needed. These maps will adjust automatically according to your layout and settings (grid, full width, ...)', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('How to adjust or modifiy a map (height, width, marker, infobox, ...) once created ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'Once your map is created and your shortsoce added to your website, you can always modify all details (style, address, etc.) by editing this shortcode on Wp Google Street View / All items. They will apply automatically on your page/post. If not, clear your cache.', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('How to locate my current position ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'We have integrated, in the "Address (Coordinates)" section of settings page, a tool allowing you to geolocalize you via Google Maps (and Google Autocomplete). Once your location is found, Wp Google Street View will automatically deploys the corresponding address as well as longitude and latitude.', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('How to correct or adjust the view on Google Street View ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'Over time, we realized that Google Street View did not always provide the exact view for a location. Also, there can be a situation where the "view" to be shown is inside a store (360 ° virtual tour). This is why, whether with Google Street View only, or Google Maps and Google Street View, it is now possible to adjust the view, the zoom and even the precise location to be displayed and save these parameters. So when creating your "maps", be sure to adjust Street View to show your visitors exactly what you want them to see.', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('Can I customize Marker Icon ?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'Of course. By default, we provide the standard Google Map marker. However, if you want to customize it, you just need to upload it to your site (Media Library), identify its URL and paste it into the "Marker" section of your map.', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('How can I style the maps?', 'wp-google-street-view'); ?></h2>
            
            <p><?php echo __( 'Just go to the "Styles" section of your map and select from the existing ones. If you don not find the one you need, you can code it yourself in "Custom map style".', 'wp-google-street-view' ); ?></p>
    </div>
</div>

<div class="wpgsv-segment">
    <div class="row">
            <h2><?php echo __('Is WP Google Street View responsive?', 'wp-google-street-view'); ?></h2>&nbsp;
            <p> <?php echo __( 'Wp Google Street View is 100% responsive and Mobile-Friendly.', 'wp-google-street-view' ); ?></p>
    </div>
</div>