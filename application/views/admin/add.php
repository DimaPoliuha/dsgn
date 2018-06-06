<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 27.05.2018
 * Time: 12:36
 */
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/<?php echo \application\core\ROOT_URL?>admin/add" method="post">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label>Project type</label>
                                <select class="form-control" name="project_type">
                                    <?php
                                    foreach ($project_type as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['type']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Designer</label>
                                <select class="form-control" name="designer">
                                    <?php
                                    foreach ($designer as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Typology</label>
                                <select class="form-control" name="typology">
                                    <?php
                                    foreach ($typology as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['type']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Client</label>
                                <select class="form-control" name="client">
                                    <?php
                                    foreach ($client as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <select class="form-control" name="year">
                                    <?php
                                    foreach ($year as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['year']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Style</label>
                                <select class="form-control" name="style">
                                    <?php
                                    foreach ($style as $key => $value) {
                                        echo "<option value='{$value['id']}'>{$value['style']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
