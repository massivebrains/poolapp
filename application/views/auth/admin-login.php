<?php $this->load->view('includes/head') ?>
<body class="fixed-header ">
  <div class="login-wrapper ">

    <div class="bg-pic">

      <img src="<?php echo base_url() ?>assets/assets/img/login-bg.jpg" data-src="<?php echo base_url() ?>assets/assets/img/login-bg.jpg" data-src-retina="<?php echo base_url() ?>assets/assets/img/login-bg.jpg" alt="" class="lazy">


      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
          Tactic Fixed online Makes it easy to play poll, anywhere, anytime on any device!
        </h2>
        <p class="small">
          <a href="agent-index.php" title="login">Tactic Fixed Limited</a> <a href="#" title="">All rights reserved</a> 
          <br>
          © <?php echo date('Y') ?> TACTIC.
        </p>
      </div>

    </div>


    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="<?php echo base_url() ?>assets/assets/img/logo_2x.png" width="78" height="22">
        <p class="p-t-35">Sign into your tactic admin account</p>
          <?php echo validation_errors(); ?>
          <?php echo $this->session->flashdata('message'); ?>
        <form id="form-login" class="p-t-15" role="form" action="<?php echo site_url('auth/admin_login') ?>" method="post">

          <div class="form-group form-group-default">
            <label>Phone</label>
            <div class="controls">
              <input type="text" name="admin_phone" placeholder="phone" class="form-control" required>
            </div>
          </div>


          <div class="form-group form-group-default">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 no-padding">
              <div class="checkbox ">
                <input type="checkbox" value="1" id="checkbox1">
                <label for="checkbox1">Keep Me Signed in</label>
              </div>
            </div>
            <div class="col-md-6 text-right">
              <a href="#" class="text-info small">Help? Contact Support</a>
            </div>
          </div>
          <?php  $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash());
                       ?>
                      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <input name="submit" class="btn btn-primary btn-cons m-t-10" type="submit" value="Sign in">
        </form>

        
      </div>
    </div>

  </div>

  <div class="overlay hide" data-pages="search">

    <div class="overlay-content has-results m-t-20">

      <div class="container-fluid">

        <img class="overlay-brand" src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


        <a href="#" class="close-icon-light overlay-close text-black fs-16">
          <i class="pg-close"></i>
        </a>

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
      $('#form-login').validate();
    })
  </script>
</body>
</html>