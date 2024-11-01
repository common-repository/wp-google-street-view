<div class="wpgsv-segment">

    <?php 
WPGSV_Notice::add( 'styles for map', 'warn', true );
?>

    <h3><?php 
echo __( 'Styles', 'wp-google-street-view' );
?></h3>

    <div class="row">

        <div class="col-xs field style-selector">

        <?php 
WPGSV_MetaField::choose(
    $post->ID,
    'map_style',
    'style',
    array(
        'default',
        'wy',
        'modest',
        'ultralight',
        'shadesgrey',
        'custom'
    ),
    true
);
?>

        </div>

    </div>

    <div class="row">

        <div class="col-xs field" v-show="style == 'custom'">
            <label><?php 
echo __( 'Custom Style', 'wp-google-street-view' );
?></label>
            <?php 
WPGSV_MetaField::add(
    $post->ID,
    'textarea',
    'customStyle',
    '',
    'wpgsv-textarea',
    'customStyle'
);
?>
        </div>

    </div>

</div>