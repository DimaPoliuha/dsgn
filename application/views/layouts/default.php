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
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/script.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/form.js"></script>
</head>
<body>

<!--header-->
<div class="grid">
    <div class="grid-sizer"></div>
    <div id="head-main" class="grid-item grid-item--width4 grid-item--height3">
        <img id="logo" src="/<?php echo \application\core\ROOT_URL?>public/images/logo.png">
        <h2>ASSOCIATES<br>STUDIO<br>DESIGN</h2>
        <div class="social">
            <a href="https://www.facebook.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/facebookIcon.png"></a>
            <a href="https://twitter.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/twitterIcon.png"></a>
            <a href="https://www.linkedin.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/linkedinIcon.png"></a>
            <a href="https://plus.google.com"><img src="/<?php echo \application\core\ROOT_URL?>public/images/gIcon.png"></a>
        </div>
    </div>
    <div class="grid-item grid-item--width2 grid-item--height3">2</div>
</div>

<?php
    echo $content;
?>
</body>
</html>