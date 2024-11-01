<?php

add_action('media_buttons', 'add_my_media_button', 15);
function add_my_media_button() {
    echo '<button type="button" id="wpgsv-add-shortcode" class="thickbox button wpgsv-add-button">Add WP Google Street View</button>';
}

function wpgsv__insert_shortcode() { ?>
    <div id="wpgsv__shortcode" style="display: none;">
        <div id="wpgsv-content-box">
            <h2><?php _e('Select Google Street View / Map', 'textdomain'); ?></h2>
            <div class="wpgsv-container">
                <select class="wpgsv-select post-selector">
                    <option value='0'><?php _e('Select Google Street View / Map', 'wp-google-street-view'); ?></option>
                    <?php $posts = get_posts( array( 
                        'post_type' => 'wpgsv',
                        'posts_per_page'   => -1, 
                    )); ?>
                    <?php foreach( $posts as $post ) { ?>
                        <option value='<?php echo $post->ID; ?>'><?php echo $post->post_title; ?></option>
                    <?php }; ?>
                </select>
            </div>
            <div class="wpgsv-container">
                <button id="wpgsv_insert_shortcode" class="button button-primary button-large">Insert Shortcode</button>
            </div>
            
            <div class="wpgsv-btn-error"></div>
        
        </div>
    </div>
<?php }
add_action('admin_footer','wpgsv__insert_shortcode');