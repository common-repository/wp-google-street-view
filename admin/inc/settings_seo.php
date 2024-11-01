<div class="wpgsv-segment">

    <div class="row">

        <h2><?php 
echo __( 'Boost your local ranking with a "Local Business Schema"', 'wp-google-street-view' );
?></h2>
        
        <p><?php 
echo __( 'Schema is a foundation for markup data that allows search engines to better understand location-based structured information like addresses, dates of events, phone numbers, and other information.', 'wp-google-street-view' );
?></p>

        <p><?php 
echo __( 'Local business schema is a type of structured data markup code you can add to your business\'s website to make it easier for search engines to identify what type of organization you are and what you do.', 'wp-google-street-view' );
?></p>

        <p><?php 
echo __( 'Adding Local Business markup to your website translates your human-readable content into the machine-readable language of JSON-LD. This is a helpful way to help optimize <strong>your website for local SEO, as it\'s a major ranking factor.</strong>', 'wp-google-street-view' );
?></p>
        
    </div>

</div>

<form method="post" class="wpgsv-form wpgsv-seo">
                        
    <?php 
if ( function_exists( 'wp_nonce_field' ) ) {
    wp_nonce_field( 'wpgsv__settings', 'wpgsv__nonce' );
}
?>

    <?php 
WPGSV_Notice::add( 'Note: You must enable it for Homepage or Select a page from list (e.g: Contact), otherwise Schema Data will not be added.', 'warn' );
?>
    
    <div class="wpgsv-segment">

        <h3><?php 
echo __( 'Step 1: Add Schema Data on:', 'wp-google-street-view' );
?></h3>

        <div class="row">

            <div class="col-xs-5 field">
                    
                <?php 
?>

                    <label class="toggle"><input type="checkbox" disabled><span class="toggle-slider toggle-round"></span></label>
    
                <?php 
?>

                <label class="checkbox">
                    <?php 
echo __( 'Homepage OR Select a page >', 'wp-google-street-view' );
?>
                </label>

            </div>

            <div class="col-xs field">

                <?php 
?>

                    <select class="wpgsv-select disabled" disabled><option><?php 
_e( 'Select a Page', 'textdomain' );
?></option></select>

                 <?php 
?>

            </div>

        </div>

    </div>

    <div class="wpgsv-segment">

        <h3><?php 
echo __( 'Step 2: Fill Out The Form', 'wp-google-street-view' );
?></h3>
        <br />
        <div class="field">

            <label><?php 
echo __( 'Website Url', 'wp-google-street-view' );
?> *<i>(<?php 
echo __( 'include http:// or https://', 'wp-google-street-view' );
?>)</i></label>
            
            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Organization or Business name *', 'wp-google-street-view' );
?></label>
            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>


        <div class="row">

            <?php 
?>

            <div class="col-xs-9 field">

            <label><?php 
echo __( 'Site Image', 'wp-google-street-view' );
?> *<i>(<?php 
echo __( 'at least 160x90 pixels and at most 1920x1080 pixels', 'wp-google-street-view' );
?>)</i></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

            </div>

            <div class="col-xs field" style="margin: 22px 0 0;">

                <?php 
?>

                    <button class="wpgsv-marker_url wpgsv-btn" disabled><?php 
echo __( 'Upload Image', 'wp-google-street-view' );
?></button>

                <?php 
?>
            </div>

        </div>

        <div class="wpgsv-image"></div>  

        <div class="field">
            <label><?php 
echo __( 'Price Range', 'wp-google-street-view' );
?> *<i>(<?php 
echo __( 'The price range of the business, for example $$$', 'wp-google-street-view' );
?>)</i></label>
            
            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>
        
        </div>

        <div class="field">
            <label><?php 
echo __( 'Telephone', 'wp-google-street-view' );
?> *<i>(<?php 
echo __( 'Your business telephone number', 'wp-google-street-view' );
?>)</i></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Description', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <textarea class="wpgsv-textarea disabled" disabled></textarea>

            <?php 
?>
        </div>
        
        <div class="field">
            <label><?php 
echo __( 'Operation Hours', 'wp-google-street-view' );
?></label>
            <div class="wpgsv-tooltip">
                <span class="dashicons dashicons-editor-help"></span>
                <span class="wpgsv-tooltiptext">
                    <?php 
echo __( '- Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.', 'wp-google-street-view' );
?><br />
                    <?php 
echo __( '- Times are specified using 24:00 time. For example, 3pm is specified as 15:00.', 'wp-google-street-view' );
?><br />
                    <?php 
echo __( '- Add Opening Hours by separate line', 'wp-google-street-view' );
?>
                </span>
            </div>

            <?php 
?>

                <textarea class="wpgsv-textarea disabled" disabled></textarea>

            <?php 
?>
        </div>

    </div>

    <div class="wpgsv-segment">

        <h3><?php 
echo __( 'GeoCoordinates', 'wp-google-street-view' );
?></h3>

        <div class="field">
            <label><?php 
echo __( 'Latitude', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Longitude', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <p><?php 
echo __( 'Refer to map setting page to identify your latitude / longitude', 'wp-google-street-view' );
?></p>

    </div>

    <div class="wpgsv-segment">

        <h3><?php 
echo __( 'Address', 'wp-google-street-view' );
?></h3>

        <div class="field">
            <label><?php 
echo __( 'Country ', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'City', 'wp-google-street-view' );
?><i>(<?php 
echo __( 'i.e New York City', 'wp-google-street-view' );
?>)</i></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Region', 'wp-google-street-view' );
?><i>(<?php 
echo __( 'State (i.e. CA)', 'wp-google-street-view' );
?>)</i></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Postal Code', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="field">
            <label><?php 
echo __( 'Street Address', 'wp-google-street-view' );
?></label>

            <?php 
?>

                <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

    </div>
    
    <div class="wpgsv-segment">

        <div class="row">

            <div class="col-xs-4 field">
                
                <?php 
?>

                    <label class="toggle"><input type="checkbox" disabled><span class="toggle-slider toggle-round"></span></label>
    
                <?php 
?>

                <label class="checkbox">
                    <?php 
echo __( 'Remove Settings', 'wp-google-street-view' );
?>
                </label>

            </div>

            <div class="col-xs-8 field">

                <?php 
?>

                    <input type="submit" class="wpgsv-submit" value="<?php 
echo esc_html__( 'Save Changes', 'wp-google-street-view' );
?>" disabled />
    
                <?php 
?>

                
            </div>

        </div>
    
    </div>

    <?php 
WPGSV_Notice::add( 'Tip: Once you save these structured data schema settings, validate your home page url <a href="https://developers.google.com/structured-data/testing-tool/">here</a>', 'info' );
?>

</form>

<div class="wpgsv-segment">

    <div class="row">

        <h2><?php 
echo __( 'About Schema Markup', 'wp-google-street-view' );
?></h2>
        
        <p>Schema Markup, also known as structured data, is the language of search engines. The vocabulary, officially called <a href="http://schema.org/">schema.org</a>, was created by Google, Yahoo, Bing, and Yandex in 2011 as a global standard vocabulary to help them better understand content on the web.</p>

    </div>

</div>