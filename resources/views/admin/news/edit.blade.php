@extends('admin.master')
@section('title', 'EditNews')
@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sửa News</h3>
        </div>
                <!-- /.box-header -->
      <div class="box-body">
<h3>Edit News</h3>
<form action="" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Title</label>
      <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{!!$dbnews['title']!!}">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Description</label>
      <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{!!$dbnews['description']!!}">
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Content</label>
      <textarea rows="5" class="form-control" placeholder="content" name="content" required data-validation-required-message="Please enter a content." >{!!$dbnews['content']!!}</textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Images</label>
      <input type="file" class="form-control" name="hinh" required data-validation-required-message="Please enter description.">
      @if ($errors->any())
          <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
      @endif
      <p class="help-block text-danger"></p>
    </div>
  </div>

  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Category</label>
      <select class="form-control" name="Category">
        <option value="0">Chọn Category</option>
        <?php menuMuntil($dbcate,0,$str="") ?>
      </select>
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
    <button type="submit" class="btn btn-primary" id="sendMessageButton">Edit</button>
  </div>
</form>
</div>
</div>
</div>
</div>
@stop