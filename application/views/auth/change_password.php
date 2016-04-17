<?php $this->load->view('includes/head') ?>
<body class="fixed-header ">
  <div>

    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="<?php echo base_url() ?>assets/assets/img/logo_2x.png" width="78" height="22">
        <p class="p-t-35"><?php echo lang('change_password_heading');?></p>
        <?php echo $message;?>
        <form id="reset" class="p-t-15" role="form" action="<?php echo site_url('auth/change_password/') ?>" method="post">

          
          <div class="form-group form-group-default">
            <label><?php echo lang('change_password_old_password_label', 'old_password');?></label>
            <div class="controls">
              <?php echo form_input($old_password);?>
            </div>
          </div>
          <div class="form-group form-group-default">
            <label><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
            <div class="controls">
              <?php echo form_input($new_password);?>
            </div>
          </div>
          <div class="form-group form-group-default">
            <label><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
            <div class="controls">
              <?php echo form_input($new_password_confirm);?>
              <?php echo form_input($user_id);?>
            </div>
          </div>
          <input class="btn btn-primary btn-cons m-t-10" type="submit" value="submit">
        </form>

      </div>
    </div>
  </div>

 


  <script src="<?php echo base_url() ?>assets/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/assets/plugins/bootstrap-select2/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/assets/plugins/classie/classie.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url() ?>assets/pages/js/pages.min.js"></script>
  <script>
    $(function(){
      $('#reset').validate();
    })
  </script>
</body>
</html>
