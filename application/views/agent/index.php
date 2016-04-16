<?php include 'head.php' ?>
<body class="fixed-header ">
  <div class="login-wrapper ">

    <div class="bg-pic">

      <img src="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">


      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
          Tactic Fixed online Makes it easy to play poll, anywhere, anytime on any device!
        </h2>
        <p class="small">
          <a href="admin-index.php" title="login">Create </a>an account today or <a href="index.php" title="">Login</a> 
          if you already have an account with us.<br>
          © 2013-<?php echo date('Y') ?> TACTIC. <a href="admin-index.php" title="">Go to Admin here (demo)</a>
        </p>
      </div>

    </div>


    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
        <p class="p-t-35">Sign into your tactic agent account</p>

        <form id="form-login" class="p-t-15" role="form" action="index.php">

          <div class="form-group form-group-default">
            <label>Email</label>
            <div class="controls">
              <input type="email" name="email" placeholder="email" class="form-control" required>
            </div>
          </div>


          <div class="form-group form-group-default">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="Credentials" required>
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
              <a href="index.php" class="text-info small">Help? Contact Support</a>
            </div>
          </div>

          <a href="agent-home.php" class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</a>
        </form>

        <div class="pull-bottom sm-pull-bottom">
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            
            <div class="col-sm-9 no-padding m-t-10">
              <p>
                <small>
                Your login credentials are personal. avoid sharing your inforamtion with anyone. not even a tactic-fixed admin officer.
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="overlay hide" data-pages="search">

    <div class="overlay-content has-results m-t-20">

      <div class="container-fluid">

        <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


        <a href="#" class="close-icon-light overlay-close text-black fs-16">
          <i class="pg-close"></i>
        </a>

      </div>

    </div>

  </div>


  <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
  <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
  <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script type="text/javascript" src="assets/plugins/bootstrap-select2/select2.min.js"></script>
  <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
  <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

  <script src="pages/js/pages.min.js"></script>
  <script>
    $(function(){
      $('#form-login').validate()
    })
  </script>
</body>
</html>