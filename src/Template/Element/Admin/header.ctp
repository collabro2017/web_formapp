<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        </div>
        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="<?= $this->request->getAttribute("webroot"); ?>images/user-default.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <!-- <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a> -->
                    <a class="nav-link" href="<?= $this->Url->build(["controller" => "Users", "action" => "logout", "prefix" => 'admin']) ?>"><i class="fa fa-power-off"></i> <?= __('Logout') ?></a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /header -->