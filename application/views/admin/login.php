<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:36
 */
?>

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Admin panel</div>
        <div class="card-body">
            <form action="/<?php echo \application\core\ROOT_URL?>admin/login" method="post">
                <div class="form-group">
                    <label>Login</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enter</button>
            </form>
        </div>
    </div>
</div>