@extends('admin.master')
@section('title', 'addslider')
@section('content')
<div class="row">
<div class="col-xs-12">
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <h3>Add Slider</h3>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Tên</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="ten" required >
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Hình Ảnh</label>
                        <input type="file" class="form-control" placeholder="Enter Description" name="images" required ">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Url</label>
                        <input type="text" class="form-control" placeholder="Enter Description" name="url" required ">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Status</label>
                        <select class="form-control" name="statust">
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop