<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:23
 */
?>

<div class="container masonry">
    <div class="grid-sizer col-lg-1 col-sm-6"></div>
    <?php
//    debug($orders);
    ?>
    <?php if(empty($orders)): ?>
        <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">
            <h2>There are no orders</h2>
        </div>
    <?php else: ?>
        <?php foreach ($orders as $order):?>
            <div class="w-4-h-3 col-lg-4 col-sm-6  offset grid-item--height3 grid-item shadow">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Product name</label>
                        <input type="text" class="form-control" value="<?php echo $order['title']; ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="control-group form-group">
                    <div class="controls">
                        <label>Product price</label>
                        <input type="text" class="form-control" value="<?php echo $order['price']; ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="control-group form-group">
                    <div class="controls">
                        <label>Count</label>
                        <input type="number" class="form-control" value="<?php echo $order['count']; ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="control-group form-group">
                    <div class="controls">
                        <label>Total price</label>
                        <input type="number" class="form-control" value="<?php echo ($order['count'] * $order['price']); ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
        <?php endforeach?>
    <?php endif;?>
</div>
