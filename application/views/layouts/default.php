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
    <title><?php echo $title ?></title>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/<?php echo \application\core\ROOT_URL?>public/scripts/form.js"></script>
</head>
<body>
<?php
    echo $content;
?>
</body>
</html>