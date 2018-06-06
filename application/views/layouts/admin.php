<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:37
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link href="/<?php echo \application\core\ROOT_URL?>public/styles/bootstrap.css" rel="stylesheet">
    <link href="/<?php echo \application\core\ROOT_URL?>public/styles/admin.css" rel="stylesheet">
    <link href="/<?php echo \application\core\ROOT_URL?>public/styles/font-awesome.css" rel="stylesheet">
    <script src="/<?php echo \application\core\ROOT_URL?>public/scripts/jquery-3.3.1.min.js"></script>
    <script src="/<?php echo \application\core\ROOT_URL?>public/scripts/form.js"></script>
    <script src="/<?php echo \application\core\ROOT_URL?>public/scripts/popper.js"></script>
    <script src="/<?php echo \application\core\ROOT_URL?>public/scripts/bootstrap.min.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark">
<?php if ($this->route['action'] != 'login'): ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/<?php echo \application\core\ROOT_URL?>admin/products">Admin panel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo \application\core\ROOT_URL?>admin/add">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-text">Add project</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo \application\core\ROOT_URL?>admin/products">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Projects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo \application\core\ROOT_URL?>admin/logout">
                        <i class="fa fa-fw fa-sign-out"></i>
                        <span class="nav-link-text">Exit</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
<?php echo $content; ?>
</body>
</html>