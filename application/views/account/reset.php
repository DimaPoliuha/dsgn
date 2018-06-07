<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:35
 */
?>

<div class="container">
    <h1 class="mt-4 mb-3"><?php echo $title; ?></h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <p>New password: <b><?php echo $password; ?></b></p>
            <a href="/<?php echo \application\core\ROOT_URL?>login" class="btn btn-primary">Перейти ко входу</a>
        </div>
    </div>
</div>