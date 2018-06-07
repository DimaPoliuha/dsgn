<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:23
 */
?>

<!-- projects -->

<div class="container masonry">
    <div class="grid-sizer col-lg-1 col-sm-6"></div>
    <div id="projects-main" class="grid-item col-lg-4 offset grid-item--height3 shadow">
        <nav id="projects-type">
            <a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects">All</a>
            <a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects/filter/1">House</a>
            <a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects/filter/2">Commercial</a>
            <a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects/filter/3">Personal</a>
            <a class="color-white" href="/<?php echo \application\core\ROOT_URL?>projects/filter/4">Studio lab</a>
        </nav>
        <a class="proj-btn" href="/<?php echo \application\core\ROOT_URL?>projects">Projects</a>
    </div>

    <?php
//    debug($vars);
    ?>
    <?php if(empty($list)): ?>
        <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">
            <h2>There are no projects</h2>
        </div>
    <?php else: ?>
        <?php foreach ($list as $item): ?>
            <div class="grid-item <?php echo $item['style']; ?> offset shadow">
                <h2><?php echo $item['title']; ?></h2>
                <h4>
                    <b>Designer</b>: <?php echo $item['surname'] . ' ' . $item['name']; ?>
                    <br>
                    <b>Typology</b>: <?php echo $item['type']; ?>
                    <br>
                    <b>Client</b>: <?php echo $item['cl_surname'] . ' ' . $item['cl_name']; ?>
                    <br>
                    <b>Year</b>: <?php echo $item['year']; ?>
                </h4>
                <h3>Price: <?php echo $item['price']; ?>$</h3>
                <a href="/<?php echo \application\core\ROOT_URL?>project/<?php echo $item['id']?>">View project</a>
<!--                <a href="/--><?php //echo \application\core\ROOT_URL?><!--basket"><div class="basket"></div></a>-->
                <img src="/<?php echo \application\core\ROOT_URL?>public/images/<?php echo $item['id']; ?>.png"/>
            </div>
        <?php endforeach;?>
    <?php endif;?>
<!--    <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">-->
<!--        <h2>Fondue</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Material</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--            <br>-->
<!--            <b>Client</b>: Some some-->
<!--            <br>-->
<!--            <b>Year</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/1.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-4-h-1 col-lg-4 col-sm-6  offset grid-item--height1 grid-item shadow bg-white">-->
<!--        <h2>Potter</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/2.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow bg-white">-->
<!--        <h2>Tabano</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Material</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--            <br>-->
<!--            <b>Client</b>: Some some-->
<!--            <br>-->
<!--            <b>Year</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/3.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-3-h-3 col-lg-3 col-sm-6  offset grid-item--height3 grid-item shadow bg-white">-->
<!--        <h2 class="color-white">Louis xx</h2>-->
<!--        <h4 class="color-white">-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Material</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--            <br>-->
<!--            <b>Client</b>: Some some-->
<!--            <br>-->
<!--            <b>Year</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project color-white" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/4.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-5-h-3 col-lg-5 col-sm-6  offset grid-item--height3 grid-item shadow bg-white">-->
<!--        <h2>Tranco</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Material</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--            <br>-->
<!--            <b>Client</b>: Some some-->
<!--            <br>-->
<!--            <b>Year</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/5.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-4-h-1 col-lg-4 col-sm-6  offset grid-item--height1 grid-item shadow bg-white">-->
<!--        <h2>Fiji</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/6.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-5-h-2 col-lg-5 col-sm-6  offset grid-item--height2 grid-item shadow bg-white">-->
<!--        <h2>Sesann</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Material</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--            <br>-->
<!--            <b>Client</b>: Some some-->
<!--            <br>-->
<!--            <b>Year</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/7.png"/>-->
<!--    </div>-->
<!---->
<!--    <div class="w-3-h-2 col-lg-3 col-sm-6  offset grid-item--height2 grid-item shadow bg-white">-->
<!--        <h2>Alessi</h2>-->
<!--        <h4>-->
<!--            <b>Designer</b>: Some some-->
<!--            <br>-->
<!--            <b>Typology</b>: Some some-->
<!--        </h4>-->
<!--        <a class="view-project" href="">View project</a>-->
<!--        <div class="basket"></div>-->
<!--        <img class="product-img" src="/--><?php //echo \application\core\ROOT_URL?><!--public/images/8.png"/>-->
<!--    </div>-->

<!--    <div id="projects-timeline" class="grid-item col-lg-4 col-sm-6  offset  grid-item--height2 shadow">-->
<!--        <h2>Timeline</h2>-->
<!--        <nav id="projects-time">-->
<!--            <a class="color-white" href="#info">2014</a>-->
<!--            <a class="color-white" href="#info">2015</a>-->
<!--            <a class="color-white" href="#form">2016</a>-->
<!--            <a class="color-white" href="#courses">2017</a>-->
<!--            <a class="color-white" href="#vacancies">2018</a>-->
<!--        </nav>-->
<!--    </div>-->
</div>

<div class="container">
    <div class="row">
        <?php echo $pagination; ?>
    </div>
</div>