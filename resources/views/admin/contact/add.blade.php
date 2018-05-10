@extends('admin.master')
@section('title', 'addcontact')
@section('content')
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-body">	
<h3>Add Contact</h3>
<form action="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="name" required>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="email" required>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="content" name="message" required></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
            <p class="help-block text-danger"></p>
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
</div>
@stop