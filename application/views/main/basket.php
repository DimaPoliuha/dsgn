<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:23
 */
?>


<div class="container">
    <div class="row">
        <div class="bg-cream col-12 offset grid-item--height3 shadow">
            <h1 class="text-center mt-4 mb-3">Basket</h1>
            <div class="row">
                <div class="col-sm-4">
                    <form action="/<?php echo \application\core\ROOT_URL?>basket" method="post">
                        <div class="form-group">
                            <label>Product name</label>
                            <select class="form-control" name="product_id">
                                <?php
                                foreach ($project_name as $key) {
                                    echo "<option value='{$key['id']}'>{$key['title']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Count</label>
                            <input class="form-control" type="number" name="count">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container masonry">
    <div class="grid-sizer col-lg-1 col-sm-6"></div>
    <?php
//    debug($data);
    ?>
    <?php if(empty($data)): ?>
        <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">
            <h2>There are no products in basket</h2>
        </div>
    <?php else: ?>
        <div class="product-view grid-item col-12 offset shadow">
            <h2><?php echo $data['title']; ?></h2>
            <h4>
                <b>Designer</b>: <?php echo $data['surname'] . ' ' . $data['name']; ?>
                <br>
                <b>Typology</b>: <?php echo $data['type']; ?>
                <br>
                <b>Client</b>: <?php echo $data['cl_surname'] . ' ' . $data['cl_name']; ?>
                <br>
                <b>Year</b>: <?php echo $data['year']; ?>
                <br>
                <b>Description</b>: <?php echo $data['description']; ?>
            </h4>
            <h3>Price: <?php echo $data['price']; ?>$</h3>
            <a href="/<?php echo \application\core\ROOT_URL?>project/<?php echo $data['id']?>">View project</a>
            <img class="product-img" src="/<?php echo \application\core\ROOT_URL?>public/images/<?php echo $data['id']; ?>.png"/>
        </div>
    <?php endif;?>
</div>
