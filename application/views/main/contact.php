<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:42
 */
?>

<!-- contact -->

<div class="container">
    <div class="row">
        <div class="contact-form col-12 offset grid-item--height3 shadow">
            <form action="/<?php echo \application\core\ROOT_URL?>contact" method="post">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="form-group floating-label-form-group controls">
                            <p><input type="text" class="form-control" name="name" placeholder="Name"></p>
                        </div>
                    </div>
                    <div class="col-10 mx-auto">
                        <div class="form-group floating-label-form-group controls">
                            <p><input type="email" class="form-control" name="email" placeholder="E-mail"></p>
                        </div>
                    </div>
                    <div class="offset-1 col-10">
                        <div class="form-group floating-label-form-group controls">
                            <p><textarea rows="5" class="form-control" name="text" placeholder="Message"></textarea></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="contact-btn-subm form-group">
                        <button type="submit" class="btn btn-secondary" id="sendMessageButton">Contact us</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>