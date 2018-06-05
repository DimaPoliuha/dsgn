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
                                <input class="form-control" type="number" name="project_type">
                            </div>
                            <div class="form-group">
                                <label>Designer</label>
                                <input class="form-control" type="number" name="designer">
                            </div>
                            <div class="form-group">
                                <label>Typology</label>
                                <input class="form-control" type="number" name="typology">
                            </div>
                            <div class="form-group">
                                <label>Client</label>
                                <input class="form-control" type="number" name="client">
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <select class="form-control" name="year">
                                    <option value="1">2014</option>
                                    <option value="2">2015</option>
                                    <option value="3">2016</option>
                                    <option value="4">2017</option>
                                    <option value="5">2018</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Style</label>
                                <select class="form-control" name="style">
                                    <option value="1">w-4-h-3</option>
                                    <option value="2">w-4-h-1</option>
                                    <option value="3">w-3-h-3</option>
                                    <option value="4">w-5-h-3</option>
                                    <option value="5">w-5-h-2</option>
                                    <option value="6">w-3-h-2</option>
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
