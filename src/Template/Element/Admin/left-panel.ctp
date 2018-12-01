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
            <li class="menu-item-has-children dropdown<?= $this->request->getParam('controller') == 'Attendances' ? ' active' : '' ?>">
                <a href="<?= $this->Url->build(["controller" => "Attendances", "action" => "index", "prefix" => 'admin']) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i><?= __('Attendances') ?></a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list"></i><a href="<?= $this->Url->build(["controller" => "Attendances", "action" => "index", "prefix" => 'admin']) ?>"><?= __('Attendances List') ?></a></li>
                    <li><i class="fa fa-plus"></i><a href="<?= $this->Url->build(["controller" => "Attendances", "action" => "add", "prefix" => 'admin']) ?>"><?= __('Add Attendance') ?></a></li>
                </ul>
            </li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>