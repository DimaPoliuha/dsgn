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
            <form action="/<?php echo \application\core\ROOT_URL?>account/profile" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Login</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['account']['login']; ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email</label>
                        <input type="email" class="form-control"  value="<?php echo $_SESSION['account']['email']; ?>" name="email">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>New password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>