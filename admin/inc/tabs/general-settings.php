<div class="wpgsv-segment">

    <?php WPGSV_MetaField::add($post->ID, 'hidden', 'panoheading', '', '', 'pano.heading'); ?>
    <?php WPGSV_MetaField::add($post->ID, 'hidden', 'panopitch', '', '', 'pano.pitch'); ?>
    <?php WPGSV_MetaField::add($post->ID, 'hidden', 'panozoom', '', '', 'pano.zoom'); ?>

    <h3><?php echo __('Address (Coordinates)', 'wp-google-street-view'); ?></h3>

    <div class="field">
        <div class="wpgsv-input-btn">
            <?php WPGSV_MetaField::add($post->ID, 'text', 'address', 'Enter your address', 'wpgsv-input', 'address'); ?>
            <button class="location-icon" @click.prevent="locatorButtonPressed"><?php echo __('Find my current location', 'wp-google-street-view'); ?></button>
        </div>
    </div>

    <div class="row">

        <div class="col-xs field">
            <label><?php echo __('Latitude', 'wp-google-street-view'); ?></label>
            <?php WPGSV_MetaField::add($post->ID, 'text', 'lat', 'Latitude', 'wpgsv-input', 'lat'); ?>
        </div>

        <div class="col-xs field">
            <label><?php echo __('Longitude', 'wp-google-street-view'); ?></label>
            <?php WPGSV_MetaField::add($post->ID, 'text', 'lng', 'Longitude', 'wpgsv-input', 'lng'); ?>
        </div>

    </div>

    <div class="row">
        
        <div class="col-xs field wpgsv-zoom">
            <label><?php echo __('Zoom', 'wp-google-street-view'); ?></label>
            <?php WPGSV_MetaField::add($post->ID, 'range', 'zoom', 'Zoom', 'wpgsv-range', 'zoom'); ?>
            <span>{{zoom}}</span>
        </div>

    </div>

    <div class="row">

        <div class="col-xs field">
            <label><?php echo __('Map Width <i>(include % or px. e.g: 100%)</i>', 'wp-google-street-view'); ?></label>
            <?php WPGSV_MetaField::add($post->ID, 'text', 'mapWidth', 'Width', 'wpgsv-input', 'mapWidth'); ?>
        </div>

        <div class="col-xs field">
            <label><?php echo __('Map Height <i>(in numbers only. e.g: 450)</i>', 'wp-google-street-view'); ?></label>
            <?php WPGSV_MetaField::add($post->ID, 'text', 'mapHeight', 'Height', 'wpgsv-input', 'mapHeight'); ?>
        </div>

    </div>

    <div class="wpgsv-notice wpgsv-info"><?php echo __('Width and Height preview is not available. You will see it working on front-end. Don\'t add "px" or "%" for <strong>height</strong>. Map will not work.', 'wp-google-street-view'); ?></div>

</div>