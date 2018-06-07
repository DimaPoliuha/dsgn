<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:41
 */
?>
<!-- projects -->

<div class="container masonry">
    <div class="grid-sizer col-lg-1 col-sm-6"></div>
    <div id="projects-main" class="grid-item col-lg-4 offset grid-item--height3 shadow">
        <nav id="projects-type" class="d-none">
            <a class="color-white" href="#info">All</a>
            <a class="color-white" href="#info">House</a>
            <a class="color-white" href="#form">Commercial</a>
            <a class="color-white" href="#courses">Personal</a>
            <a class="color-white" href="#vacancies">Studio lab</a>
        </nav>
        <a class="proj-btn" href="/<?php echo \application\core\ROOT_URL?>projects">Projects</a>
    </div>

    <?php
    //    debug($list);
    ?>
    <?php if(empty($list)): ?>
        <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">
            <h2>There are no projects</h2>
        </div>
    <?php else: ?>
        <?php foreach ($list as $item): ?>
            <div class="grid-item <?php echo $item['style']; ?> col-sm-6 offset shadow">
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
                <img class="product-img" src="/<?php echo \application\core\ROOT_URL?>public/images/<?php echo $item['id']; ?>.png"/>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>