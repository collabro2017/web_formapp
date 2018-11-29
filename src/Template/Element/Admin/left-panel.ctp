<nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="<?= $this->request->getAttribute("webroot"); ?>images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="<?= $this->request->getAttribute("webroot"); ?>images/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li<?= $this->request->getParam('controller') == 'Users' ? ' class="active"' : '' ?>>
                <a href="<?= $this->Url->build(["controller" => "Users", "action" => "index", "prefix" => 'admin']) ?>"> <i class="menu-icon fa fa-dashboard"></i><?= __('Dashboard') ?> </a>
            </li>
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'Sites' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "Sites", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Sites') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "Sites", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Site List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "Sites", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Site') ?></a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'Employees' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "Employees", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Employees') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "Employees", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Employee List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "Employees", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Employee') ?></a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'Equipments' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "Equipments", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Equipments') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "Equipments", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Equipment List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "Equipments", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Equipment') ?></a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'Haulings' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "Haulings", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Haulings') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "Haulings", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Hauling List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "Haulings", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Hauling') ?></a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'FuelConsumptions' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "FuelConsumptions", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Fuel Consumptions') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "FuelConsumptions", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Fuel Consumptions List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "FuelConsumptions", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Fuel Consumption') ?></a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                    <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                </ul>
            </li>

            <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                    <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                    <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                    <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>
            <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>