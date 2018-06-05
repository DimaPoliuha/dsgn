<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:42
 */
?>
    <div class="container">
        <div class="row">

            <div class="map col-lg-6  offset grid-item--height4 shadow bg-white">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="g-map"><div id='gmap_canvas' class="g-canv"></div><div><small><a href="embedgooglemaps.com/ru">https://embedgooglemaps.com/ru/</a></small></div><div><small><a href="http://mrpromokod.ru/il-de-boteh/">http://mrpromokod.ru/il-de-boteh/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(33.7664847,-118.18926980000003),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(33.7664847,-118.18926980000003)});infowindow = new google.maps.InfoWindow({content:'<strong>DSGN</strong><br>90822 CALIFORNIA LONG BEACH PO BOX 68789 300 EAST OCEAN BOULEVARD<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>

            <div class="footer col-lg-6  offset grid-item--height4 shadow bg-white">
                <h2>
                    90822 california<br>
                    long beach<br>
                    po box 68789<br>
                    300 east ocean<br>
                    boulevard<br><br>
                    +64 9 345 6758<br>
                    info@dsgn-studio.com
                </h2>
                <div class="footer-logo">
                    <img class="logo" src="/<?php echo \application\core\ROOT_URL?>public/images/logo.png">
                    <h2>ASSOCIATES<br>STUDIO<br>DESIGN</h2>
                    <div class="social">
                        <a href="https://www.facebook.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/facebookIcon.png"></a>
                        <a href="https://twitter.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/twitterIcon.png"></a>
                        <a href="https://www.linkedin.com/"><img src="/<?php echo \application\core\ROOT_URL?>public/images/linkedinIcon.png"></a>
                        <a href="https://plus.google.com"><img src="/<?php echo \application\core\ROOT_URL?>public/images/gIcon.png"></a>
                    </div>
                </div>
                <h3>&copy; 2018 DSGN. All rights reserved. Developed by Dmitry Polyuha.</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>