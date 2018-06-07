<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:35
 */
?>

<div class="container">
    <h1 class="mt-4 mb-3">Reset password</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action="/<?php echo \application\core\ROOT_URL?>account/recovery" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                        <p class="help-block"></p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Reset password</button>
            </form>
        </div>
    </div>
</div>