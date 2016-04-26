<nav class="page-sidebar" data-pages="sidebar">

    <div class="sidebar-header">
       

            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>


    <div class="sidebar-menu">

        <ul class="menu-items">
            <li class="">
                <a href="<?=site_url('agent/index/agent_interface') ?>" class="detailed">
                    <span class="title">Dashboard</span>
                </a>
                <span class="icon-thumbnail">D</span>
            </li>
            <li class="">
                <a href="<?=site_url('agent/index/get_winning_tickets') ?>" class="detailed">
                    <span class="title">Winnings</span>
                </a>
                <span class="icon-thumbnail">W</span>
            </li>

            <li class="">
                <a href="<?=site_url('agent/index/view_result') ?>"><span class="title">Results</span></a>
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