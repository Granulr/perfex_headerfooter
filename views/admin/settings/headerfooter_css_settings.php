<div class="row">
  <div class="col-md-12">
    <h4><?php echo _l('headerfooter_javascript'); ?> Settings</h4>
    <?php echo render_textarea('settings[admin_css]',_l('headerfooter_admincss'),get_option('admin_css')); ?>
    <hr />
    <?php echo render_textarea('settings[customer_css]',_l('headerfooter_customercss'),get_option('customer_css')); ?>
  </div>
</div>
