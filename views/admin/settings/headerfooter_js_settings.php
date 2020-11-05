<div class="row">
  <div class="col-md-12">
    <h4><?php echo _l('headerfooter_javascript'); ?> Settings</h4>
    <?php echo render_textarea('settings[admin_header_js]',_l('headerfooter_adminheadjs'),get_option('admin_header_js')); ?>
    <hr />
    <?php echo render_input('settings[admin_footer_js]','settings_pushover_key',get_option('admin_footer_js')); ?>
    <hr />
    <?php echo render_input('settings[customer_header_js]','settings_pushover_key',get_option('customer_header_js')); ?>
    <hr />
    <?php echo render_input('settings[customer_footer_js]','settings_pushover_key',get_option('customer_footer_js')); ?>
  </div>
</div>
