<!-- https://colorlib.com/polygon/sufee/index.html -->
<?php use Cake\Routing\Router; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= isset($title) ? $title : 'WebForm'; ?>
        <?php // $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Load Bootstrap -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>vendors/chosen/chosen.min.css">

    <link rel="stylesheet" href="<?= $this->request->getAttribute("webroot"); ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <?= $this->Html->css('admin/style.css') ?>

    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/jquery/dist/jquery.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script>
        projectBaseUrl = "<?php echo Router::url('/', true); ?>";
    </script>
    

</head>
<body>
    
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <?= $this->element('Admin/left-panel'); ?>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?= $this->element('Admin/header'); ?>
        <!-- Header-->

        <div class="content mt-3">

            <?= $this->Flash->render() ?>

            <div class="col-sm-12">
                <?= $this->fetch('content') ?>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/chosen/chosen.jquery.min.js"></script>
    <script src="<?= $this->request->getAttribute("webroot"); ?>assets/js/main.js"></script>
</body>
</html>
