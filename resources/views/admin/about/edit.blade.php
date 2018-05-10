@extends('admin.master')
@section('title', 'editabout')
@section('content')


<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-body">
<h3>Edit About</h3>
<form action="" method="post" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Name Company</label>
      <input type="text" class="form-control" placeholder="Enter Title" name="name_company" required  value="{{$About->name_company}}">
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Description</label>
      <input type="text" class="form-control" placeholder="Enter Description" name="description" required  value="{{$About->description}}">
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Content</label>
      <textarea rows="5" class="form-control" placeholder="content" name="contentAbout" required >{{$About->content}}</textarea>
      <script>
            CKEDITOR.replace( 'contentAbout',
                                   {
                                     language:'vi',
                                     filebrowserBrowseUrl : '../../vp-admin/ckfinder/ckfinder.html',
                                     filebrowserImageBrowseUrl : '../../vp-admin/ckfinder/ckfinder.html?type=Images',
                                     filebrowserFlashBrowseUrl : '../../vp-admin/kfinder/ckfinder.html?type=Flash',
                                     filebrowserUploadUrl : '../../vp-admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                     filebrowserImageUploadUrl : '../../vp-admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                     filebrowserFlashUploadUrl : '../../vp-admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                   });
        </script>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Images</label>
      <input type="file" class="form-control" placeholder="Enter Description" name="images" required >
    </div>
  </div>
  
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Status</label>
      <select class="form-control" name="status">
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
</div>
@stop