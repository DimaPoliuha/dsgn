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
                        <form action="/<?php echo \application\core\ROOT_URL?>admin/edit/<?php echo $data['id']; ?>" method="post">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="<?php echo htmlspecialchars($data['title'], ENT_QUOTES); ?>">
                            </div>
                            <div class="form-group">
                                <label>Project type</label>
                                <select class="form-control" name="project_type">
                                    <?php
                                    foreach ($project_type as $key => $value) {
                                        if($value['id'] == $data['project_type_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['type']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['type']}</option>";
                                        }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Designer</label>
                                <select class="form-control" name="designer">
                                    <?php
                                    foreach ($designer as $key => $value) {
                                        if($value['id'] == $data['designer_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Typology</label>
                                <select class="form-control" name="typology">
                                    <?php
                                    foreach ($typology as $key => $value) {
                                        if($value['id'] == $data['typology_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['type']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['type']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Client</label>
                                <select class="form-control" name="client">
                                    <?php
                                    foreach ($client as $key => $value) {
                                        if($value['id'] == $data['client_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['surname']} {$value['name']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <select class="form-control" name="year">
                                    <?php
                                    foreach ($year as $key => $value) {
                                        if($value['id'] == $data['year_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['year']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['year']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Style</label>
                                <select class="form-control" name="style">
                                    <?php
                                    foreach ($style as $key => $value) {
                                        if($value['id'] == $data['style_id']){
                                            echo "<option selected value='{$value['id']}'>{$value['style']}</option>";
                                        }
                                        else{
                                            echo "<option value='{$value['id']}'>{$value['style']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
