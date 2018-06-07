<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:35
 */
?>

<div class="container">
    <h1 class="mt-4 mb-3">Log in</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action="/<?php echo \application\core\ROOT_URL?>login" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Login</label>
                        <input type="text" class="form-control" name="login">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
        </div>
    </div>
</div>