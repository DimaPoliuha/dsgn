<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:37
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>DSGN — <?php echo $title ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/<?php echo \application\core\ROOT_URL?>public/styles/main.css" />
    <link rel="icon" type="image/png" href="/<?php echo \application\core\ROOT_URL?>public/images/logo.png"/>
</head>
<body>

<!--scripts-->

<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/slideout.js"></script>
<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/script.js"></script>
<script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/form.js" async></script>

<nav id="menu-mob">
    <?php if(isset($_SESSION['account']['id'])): ?>
        <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>account/profile">Profile</a>
        <a class="text-menu color-white" href=/<?php echo \application\core\ROOT_URL?>account/logout">Logout</a>
    <?php else: ?>
        <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>login">Log in</a>
        <a class="text-menu color-white" href=/<?php echo \application\core\ROOT_URL?>register">Register</a>
    <?php endif; ?>
    <hr class="line-menu"/>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>">Home</a>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>projects">Projects</a>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>studio">Studio</a>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>news">News</a>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>contact">Contact</a>
</nav>
<div id="main">

    <!--header-->

    <div class="container">
        <div class="row">
            <div id="head-main" class="col-lg-8  offset grid-item--height3 shadow">
                <img class="logo" src="/<?php echo \application\core\ROOT_URL?>public/images/logo.png">
                <h2>ASSOCIATES<br>STUDIO<br>DESIGN</h2>
                <div class="social">
                    <a href="https://www.facebook.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/facebookIcon.png"></a>
                    <a href="https://twitter.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/twitterIcon.png"></a>
                    <a href="https://www.linkedin.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/linkedinIcon.png"></a>
                    <a href="https://plus.google.com"><img src="/<?php echo \application\core\ROOT_URL?>public/images/gIcon.png"></a>
                </div>
                <img id="header-armchairs" src="/<?php echo \application\core\ROOT_URL?>public/images/headerArmchairs.png">
                <div class="js-slideout-toggle menu-slide"></div>
            </div>

            <div id="header-menu" class="col-lg-4  offset grid-item--height3 shadow">
                <ul>
                    <li>
                        <div id="btn">
                            <input type="submit" id="menu-btn" name="" value=""/>
                        </div>
                        <ul class="drop-menu menu-2">
                            <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>contact";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>contact">Contact</a></li>
                            <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>news";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>news">News</a></li>
                            <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>studio";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>studio">Studio</a></li>
                            <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>projects";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects">Projects</a></li>
                            <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>">Home</a></li>
                            <?php if(isset($_SESSION['account']['id'])): ?>
                                <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>basket/orders";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>basket/orders">Orders</a></li>
                                <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>account/profile";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>account/profile">Profile</a></li>
                                <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>account/logout";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>account/logout">Logout</a></li>
                            <?php else: ?>
                                <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>login";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>login">Log in</a></li>
                                <li onclick='location.href="/<?php echo \application\core\ROOT_URL?>register";'><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>register">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
                <h3 id="adress" class="color-white">90802 CALIFORNIA<br>LONG BEACH<br>PO BOX 56789<br>300 EAST<br>BOULEVARD</h3>
                <h3 id="phone-mail" class="color-white">+64 9 345 6758<br>INFO@DSGN-STUDIO.COM</h3>
            </div>
        </div>
    </div>
    <?php
    echo $content;
    ?>