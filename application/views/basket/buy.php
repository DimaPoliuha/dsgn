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
        <div class="bg-cream col-12 offset grid-item--height4 shadow">
            <h1 class="text-center mt-4 mb-3">Buy product</h1>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <form action="/<?php echo \application\core\ROOT_URL?>basket/buy/<?php echo $product['id']; ?>" method="post">

                        <input type="hidden" class="form-control" value="<?php echo $product['id']; ?>" name="product_id">

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Product name</label>
                                <input type="text" class="form-control" value="<?php echo $product['title']; ?>" disabled>
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Product description</label>
                                <input type="text" class="form-control" value="<?php echo $product['description']; ?>" disabled>
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Product price</label>
                                <input type="text" class="form-control" value="<?php echo $product['price']; ?>" disabled>
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Count</label>
                                <input type="number" class="form-control" value="1" name="count">
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Buy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
