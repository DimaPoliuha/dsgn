<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:23
 */
?>

<!-- studio -->

<div class="container">
    <div class="row">
        <div id="studio-main" class="col-lg-4  offset grid-item--height3 shadow">
            <h1 class="color-white">Studio</h1>
        </div>
        <div class="col-lg-8  offset grid-item--height3 shadow bg-white">
            <div id="studio-about">
                <h3>
                    <b><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                            Curabitur gravida arcu ac tortor dignissim convallis aenean et tortor. Mi bibendum neque egestas congue quisque egestas diam.</em></b><br>
                    Massa tincidunt dui ut ornare lectus sit amet est placerat. Feugiat scelerisque varius morbi enim.<br>
                    Felis donec et odio pellentesque diam volutpat commodo sed egestas. In eu mi bibendum neque.
                </h3>
            </div>
            <img class="studio-img" src="/<?php echo \application\core\ROOT_URL?>public/images/studio.png"/>
            <div id="studio-awards">
                <h2><b>Awards</b></h2>
                <hr>
                <h3>Lorem ipsum<br>Lorem ipsum<br>Lorem ipsum<br>Lorem ipsum</h3>
                <h3 class="text-right">Lorem ipsum<br>Lorem ipsum<br>Lorem ipsum<br>Lorem ipsum</h3>
            </div>
        </div>

        <div class="stdio col-lg-12  offset grid-item--height2 shadow bg-white">
            <div id="studio-staff">
                <h3>
                    <b>Staff</b><br>
                    Massa tincidunt dui ut ornare lectus sit amet est placerat. Feugiat scelerisque varius morbi enim.<br>
                    Felis donec et odio pellentesque diam volutpat commodo sed egestas. In eu mi bibendum neque.
                </h3>
                <div id="biography">
                    <div class="designer">
                        <img src="/<?php echo \application\core\ROOT_URL?>public/images/starck.png"/>
                        <h2><b>Philippe Starck</b></h2>
                        <h3>Designer</h3>
                        <a href="">CV</a>
                    </div>
                    <div class="designer">
                        <img src="/<?php echo \application\core\ROOT_URL?>public/images/bellini.png"/>
                        <h2><b>Mario Bellini</b></h2>
                        <h3>Designer</h3>
                        <a href="">CV</a>
                    </div>
                    <div class="designer">
                        <img src="/<?php echo \application\core\ROOT_URL?>public/images/urquiola.png"/>
                        <h2><b>Patricia Urquiola</b></h2>
                        <h3>Designer</h3>
                        <a href="">CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>