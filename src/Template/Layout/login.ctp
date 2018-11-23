<!-- https://colorlib.com/polygon/sufee/index.html -->
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
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    

</head>
<body style="background: #f1f2f7">
    
    <div class="col-sm-12">
        <?= $this->fetch('content') ?>
    </div>

    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= $this->request->getAttribute("webroot"); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
