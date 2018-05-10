@extends('admin.master')
@section('title', 'editpartner')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                @include('admin.block.erro')
                <h3>Add Parner</h3>
                <form action="{!!$db->id!!}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name Partner</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="name_company" value="{!!$db->name!!}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Infomation</label>
                            <textarea rows="5" class="form-control" placeholder="content" name="infomation">{!!$db->information!!}</textarea>
                            <script>
                                CKEDITOR.replace( 'infomation',
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
                            <label>Logo</label>
                            <input type="file" class="form-control" placeholder="Enter Description" name="logo">
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
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Chỉnh Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop