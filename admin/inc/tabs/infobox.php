<div class="wpgsv-segment">

    <?php 
WPGSV_Notice::add( 'info box customization with custom content.', 'warn', true );
?>

    <h3><?php 
echo __( 'Customize Info Box on Marker', 'wp-google-street-view' );
?></h3>

    <div class="row">

        <div class="col-xs field">

            <?php 
?>
            
            <label class="toggle"><input type="checkbox" disabled><span class="toggle-slider toggle-round"></span></label>

            <?php 
?>

            <label class="checkbox">
                <?php 
echo __( 'Custom Content Inside Info Box?', 'wp-google-street-view' );
?>
            </label>

        </div>

        <div class="col-xs field">

            <?php 
?>
            
            <label class="toggle"><input type="checkbox" disabled><span class="toggle-slider toggle-round"></span></label>

            <?php 
?>

            <label class="checkbox">
                <?php 
echo __( 'Set Max Width for Info Box?', 'wp-google-street-view' );
?>
            </label>

        </div>

    </div>

    <div class="row">

        <?php 
?>
            
        <div class="col-xs field">
            
            <label><?php 
echo __( 'Define Max Width (numbers only):', 'wp-google-street-view' );
?></label>

            <input type="text" placeholder="Enter max-width in numbers only. e.g. 300" disabled="disabled" class="wpgsv-input disabled">

        </div>

        <?php 
?>

    </div>

    <div class="row">

        <?php 
?>
            
        <div class="col-xs field">
        <label><?php 
echo __( 'Custom Content for Infobox (you can use html)', 'wp-google-street-view' );
?></label>
        <textarea id="wpgsv-infoBoxContent" placeholder="Add custom text, html, image etc" class="wpgsv-textarea disabled" disabled></textarea>
        </div>

        <?php 
?> 

    </div>

</div>