<div class="wpgsv-segment">

    <?php 
WPGSV_Notice::add( 'marker options', 'warn', true );
?>

    <h3><?php 
echo __( 'Marker', 'wp-google-street-view' );
?></h3>

    <div class="row">

        <div class="col-xs field">
            
            <?php 
WPGSV_MetaField::add(
    $post->ID,
    'checkbox',
    'marker',
    '',
    '',
    'marker',
    'getLocation()',
    'checked'
);
?>
            <label class="checkbox">
                <?php 
echo __( 'Show Marker', 'wp-google-street-view' );
?>
            </label>

        </div>

        <div class="col-xs field">
            
            <?php 
WPGSV_MetaField::add(
    $post->ID,
    'checkbox',
    'infoBox',
    '',
    '',
    'infoBox',
    'getLocation()'
);
?>
            <label class="checkbox">
                <?php 
echo __( 'Show Info Box', 'wp-google-street-view' );
?>
            </label>

        </div>
        
        <div class="col-xs field">
                    
            <?php 
WPGSV_MetaField::add(
    $post->ID,
    'checkbox',
    'openByDefault',
    '',
    '',
    'openByDefault',
    'getLocation()'
);
?>
            <label class="checkbox">
                <?php 
echo __( 'Info Box Open by Default', 'wp-google-street-view' );
?>
            </label>
            <div class="wpgsv-tooltip">
                <span class="dashicons dashicons-editor-help"></span>
                <span class="wpgsv-tooltiptext"><?php 
echo __( 'Disable it if you only want to show marker but when user click or mouse over on it then display the infobox. You can choose Open Method below', 'wp-google-street-view' );
?></span>
            </div>

        </div>   

    </div>

    <div class="row">
    
        <div class="col-xs field">
            <label><?php 
echo __( 'Marker Animation', 'wp-google-street-view' );
?></label>

            <?php 
?>

            <select class="wpgsv-select disabled" disabled><option>Drop</option></select>

            <?php 
?>

        </div>
        
        <div class="col-xs field">
            <label><?php 
echo __( 'Info Box Open Method?', 'wp-google-street-view' );
?></label>

            <?php 
?>

            <select class="wpgsv-select disabled" disabled><option>Open on Mouse Over</option></select>

            <?php 
?>

        </div>

    </div>

    <div class="row">

        <div class="col-xs-9 field">

            <label><?php 
echo __( 'Custom Marker Icon URL', 'wp-google-street-view' );
?></label>
            <div class="wpgsv-tooltip">
                <span class="dashicons dashicons-editor-help"></span>
                <span class="wpgsv-tooltiptext"><?php 
echo __( 'Please upload a marker to media library and paste a direct link here. Recommended Size: 72x72 pixels ', 'wp-google-street-view' );
?></span>
            </div>
            <?php 
?>
                
            <input type="text" class="wpgsv-input disabled" disabled>

            <?php 
?>

        </div>

        <div class="col-xs field" style="margin: 25px 0 0;">

            <?php 
?>

            <button class="wpgsv-marker_url wpgsv-btn" disabled><?php 
echo __( 'Upload Marker', 'wp-google-street-view' );
?></button>

            <?php 
?>
        </div>

    </div>

    

</div>