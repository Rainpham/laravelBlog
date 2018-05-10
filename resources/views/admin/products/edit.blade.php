@extends('admin.master')
@section('title', 'editproduct')
@section('content')

<h3>Edit Product</h3>
    <form action="" method="post">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="name_company" required data-validation-required-message="Please enter title.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Slug</label>
                <input type="text" class="form-control" placeholder="Enter Title" name="slug" required data-validation-required-message="Please enter title.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="description" required data-validation-required-message="Please enter description.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Detail</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="detail" required data-validation-required-message="Please enter description.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Images</label>
                <input type="file" class="form-control" placeholder="Enter Description" name="images" required data-validation-required-message="Please enter description.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Website Address</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="website_address" required data-validation-required-message="Please enter description.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Category</label>
                <select class="form-control">
                    <option>Category 1</option>
                    <option>Category 2</option>
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Partner</label>
                <select class="form-control">
                    <option>Partner 1</option>
                    <option>Partner 2</option>
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Status</label>
                <select class="form-control">
                    <option>Hiện</option>
                    <option>Ẩn</option>
                </select>
                <p class="help-block text-danger"></p>
            </div>
        </div>

        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Sửa</button>
        </div>
    </form>
@stop