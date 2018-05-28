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
    <link rel="stylesheet" href="/<?php echo \application\core\ROOT_URL?>public/styles/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/<?php echo \application\core\ROOT_URL?>public/images/logo.png"/>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/slideout.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/script.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/form.js"></script>
</head>
<body>
<nav id="menu-mob" class="displ-none">
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>login">Log in</a>
    <a class="text-menu color-white" href="/<?php echo \application\core\ROOT_URL?>register">Register</a>
    <hr class="line-header"/>
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
            <div class="grid-item-responsive grid-item--width4p grid-item-mob--width grid-item--height3 grid-item-laptop--height3 grid-item-tablet--height3 grid-item-mob--height-head">
                <div id="head-main" class="grid-item--height3 grid-item-laptop--height3 grid-item-tablet--height3 grid-item-mob--height-head">
                    <img id="logo" src="/<?php echo \application\core\ROOT_URL?>public/images/logo.png">
                    <h2>ASSOCIATES<br>STUDIO<br>DESIGN</h2>
                    <div class="social">
                        <a href="https://www.facebook.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/facebookIcon.png"></a>
                        <a href="https://twitter.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/twitterIcon.png"></a>
                        <a href="https://www.linkedin.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/linkedinIcon.png"></a>
                        <a href="https://plus.google.com"><img src="/<?php echo \application\core\ROOT_URL?>public/images/gIcon.png"></a>
                    </div>
                    <img id="header-armchairs" src="/<?php echo \application\core\ROOT_URL?>public/images/headerArmchairs.png">
                </div>
            </div>

            <div class="grid-item-responsive grid-item--width2p grid-item-mob--width grid-item--height3 grid-item-laptop--height3 grid-item-tablet--height3 grid-item-mob--height3">
                <div id="header-menu" class="grid-item--height3 grid-item-laptop--height3 grid-item-tablet--height3 grid-item-mob--height3">
                    <!-- <div class="btn-menu"><input type="submit" class="menusub js-slideout-toggle" name="" value=""/></div> -->
                    <ul>
                        <li>
                            <div id="btn">
                                <input type="submit" id="menu-btn" class="js-slideout-toggle" name="" value=""/>
                            </div>
                            <ul class="drop-menu menu-2">
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>contact">Contact</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>news">News</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>studio">Studio</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects">Projects</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>">Home</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>login">Log in</a></li>
                                <li><a class="color-white" href="/<?php echo \application\core\ROOT_URL?>register">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                    <h3 id="adress" class="color-white">90802 CALIFORNIA<br>LONG BEACH<br>PO BOX 56789<br>300 EAST<br>BOULEVARD</h3>
                    <h3 id="phone-mail" class="color-white">+64 9 345 6758<br>INFO@DSGN-STUDIO.COM</h3>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo $content;
    ?>
</div>
</body>
</html>