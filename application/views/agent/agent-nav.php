<nav class="page-sidebar" data-pages="sidebar">

    <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">

            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>


    <div class="sidebar-menu">

        <ul class="menu-items">
            <li class="">
                <a href="play.php" class="detailed">
                    <span class="title">Play</span>
                </a>
                <span class="icon-thumbnail">P</span>
            </li>
            <li class="">
                <a href="played-today.php" class="detailed">
                    <span class="title">Played Today</span>
                    <span class="details">24 (&#8358; 10, 000)</span>
                </a>
                <span class="icon-thumbnail">PT</span>
            </li>
            <li class="">
                <a href="played-today.php" class="detailed">
                    <span class="title">Winnings</span>
                </a>
                <span class="icon-thumbnail">W</span>
            </li>

            <li class="">
                <a href="results.php"><span class="title">Results</span></a>
                <span class="icon-thumbnail"><i class="fa fa-file-powerpoint-o"></i></span>
            </li>

            <li class="">
                <a href="<?=site_url('auth/logout') ?>"><span class="title">Logout</span></a>
                <span class="icon-thumbnail"><i class="pg-power"></i></span>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>

</nav>