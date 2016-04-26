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
                <a href="<?=site_url('admin/admin') ?>" class="detailed">
                    <span class="title">Dashboard</span>
                    <span class="details">Week <?=$this->admin_game_model->get_current_week() ?></span>
                </a>
                <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
            </li>
            <li class="">
                <a href="<?=site_url('admin/branch/') ?>" class="detailed">
                    <span class="title">Branches</span>
                </a>
                <span class="icon-thumbnail">BR</span>
            </li>
            <li class="">
                <a href="<?=site_url('admin/agent') ?>" class="detailed">
                    <span class="title">Agents</span>
                </a>
                <span class="icon-thumbnail">AG</span>
            </li>
            <li class="">
                <a href="<?=site_url('admin/admin/get_onlineusers') ?>" class="detailed">
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
                            <a href="<?=site_url('admin/account/get_winners') ?>">Winning Tickets</a>
                            <span class="icon-thumbnail">WS</span>
                        </li>
                        <li>
                            <a href="<?=site_url('admin/account/sales_summary') ?>">Summary <small>(Last Week)</small></a>
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
                                <a href="<?=site_url('admin/account/get_credits') ?>">Credits</a>
                                <span class="icon-thumbnail">CR</span>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/account/get_withdrawals') ?>">Withdraws</a>
                                <span class="icon-thumbnail">WI</span>
                            </li>
                            <!-- <li>
                                <a href="admin-account-withdrawals.php">General Reports</a>
                                <span class="icon-thumbnail">GR</span>
                            </li> -->
                        </ul>
                    </li>

                    <li class="">
                    <a href="javascript:;"><span class="title">Game</span>
                        <span class="arrow"></span></a>
                        <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?=site_url('admin/game') ?>">New Game</a>
                                <span class="icon-thumbnail">NG</span>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/admin/view/admin-game-result') ?>">Results</a>
                                <span class="icon-thumbnail">RE</span>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?=site_url('admin/admin/view/admin-notification') ?>"><span class="title">Notifications</span></a>
                        <span class="icon-thumbnail"><i class="fa fa-asterisk"></i></span>
                    </li>
                    <!-- <li class="">
                        <a href="#"><span class="title">Settings</span></a>
                        <span class="icon-thumbnail"><i class="fa fa-cogs"></i></span>
                    </li> -->

                    <li class="">
                        <a href="<?=site_url('auth/logout/admin') ?>"><span class="title">Logout</span></a>
                        <span class="icon-thumbnail"><i class="pg-power"></i></span>
                    </li>


                </ul>
                <div class="clearfix"></div>
            </div>

        </nav>