<nav class="page-sidebar" data-pages="sidebar">

    <div class="sidebar-header">
        <img src="<?php echo base_url() ?>assets/assets/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url() ?>assets/assets/img/logo_white.png" data-src-retina="<?php echo base_url() ?>assets/assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">

            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>


    <div class="sidebar-menu">

        <ul class="menu-items">
            <li class="m-t-30 ">
                <a href="admin-index.php" class="detailed">
                    <span class="title">Dashboard</span>
                    <span class="details">Week 12</span>
                </a>
                <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
            </li>
            <li class="">
                <a href="<?php echo site_url('admin/branch/read') ?>" class="detailed">
                    <span class="title">Branches</span>
                </a>
                <span class="icon-thumbnail">BR</span>
            </li>
            <li class="">
                <a href="admin-agent.php" class="detailed">
                    <span class="title">Agents</span>
                </a>
                <span class="icon-thumbnail">AG</span>
            </li>
            <li class="">
                <a href="admin-onlineusers.php" class="detailed">
                    <span class="title">Online Users</span>
                </a>
                <span class="icon-thumbnail">OU</span>
            </li>
            <li class="">
                <a href="javascript:;"><span class="title">Sales</span>
                    <span class="arrow"></span></a>
                    <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
                    <ul class="sub-menu">
                        <li>
                            <a href="admin-sales-winners.php">Winners</a>
                            <span class="icon-thumbnail">WS</span>
                        </li>
                        <li>
                            <a href="admin-sales-losers.php">Losers</a>
                            <span class="icon-thumbnail">LS</span>
                        </li>
                        <li>
                            <a href="admin-sales-pending.php">Pending</a>
                            <span class="icon-thumbnail">PD</span>
                        </li>
                        <li>
                            <a href="admin-sales-summary.php">Summary</a>
                            <span class="icon-thumbnail">SM</span>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="javascript:;"><span class="title">Account</span>
                        <span class="arrow"></span></a>
                        <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
                        <ul class="sub-menu">
                            <li>
                                <a href="admin-account-credit.php">Credits</a>
                                <span class="icon-thumbnail">CR</span>
                            </li>
                            <li>
                                <a href="admin-account-withdrawals.php">Withdraws</a>
                                <span class="icon-thumbnail">WI</span>
                            </li>
                            <li>
                                <a href="admin-account-withdrawals.php">General Reports</a>
                                <span class="icon-thumbnail">GR</span>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                    <a href="javascript:;"><span class="title">Game</span>
                        <span class="arrow"></span></a>
                        <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
                        <ul class="sub-menu">
                            <li>
                                <a href="admin-game-new.php">New Game</a>
                                <span class="icon-thumbnail">NG</span>
                            </li>
                            <li>
                                <a href="admin-game-result.php">Results</a>
                                <span class="icon-thumbnail">RE</span>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="admin-notification.php"><span class="title">Notifications</span></a>
                        <span class="icon-thumbnail"><i class="fa fa-asterisk"></i></span>
                    </li>
                    <li class="">
                        <a href="admin-notification.php"><span class="title">Settings</span></a>
                        <span class="icon-thumbnail"><i class="fa fa-cogs"></i></span>
                    </li>

                    <li class="">
                        <a href="index.php"><span class="title">Logout</span></a>
                        <span class="icon-thumbnail"><i class="pg-power"></i></span>
                    </li>


                </ul>
                <div class="clearfix"></div>
            </div>

        </nav>