<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:41
 */
?>

<p>main page</p>

<?php foreach ($news as $new): ?>
    <h3><?php echo $new['title'] ?></h3>
    <p><?php echo $new['description'] ?></p>
    <hr>
<?php endforeach;?>