<div class="row">
  <div class="col-md-12">
    <h4><?php echo _l('headerfooter_javascript'); ?> Settings</h4>
    <?php echo render_textarea('settings[admin_header_js]',_l('headerfooter_adminheadjs'),get_option('admin_header_js'),array('rows'=>15,'data-entities-encode'=>'true')); ?>
    <hr />
    <?php echo render_textarea('settings[admin_footer_js]',_l('headerfooter_adminfootjs'),get_option('admin_footer_js'),array('rows'=>15,'data-entities-encode'=>'true')); ?>
    <hr />
    <?php echo render_textarea('settings[customer_header_js]',_l('headerfooter_customerheadjs'),get_option('customer_header_js'),array('rows'=>15,'data-entities-encode'=>'true')); ?>
    <hr />
    <?php echo render_textarea('settings[customer_footer_js]',_l('headerfooter_customerfootjs'),get_option('customer_footer_js'),array('rows'=>15,'data-entities-encode'=>'true')); ?>
  </div>
</div>
