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

<?php
    echo $content;
?>
</body>
</html>