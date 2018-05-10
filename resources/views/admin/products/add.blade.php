@extends('admin.master')
@section('title', 'addCategory')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Product</h3>
            </div>
            @if(session('tbproduct'))
            <div class="alert alert-success">
                {{session('tbproduct')}}
            </div>
            @endif      
            @include('admin.block.erro')               <!-- /.box-header -->
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="name_company"  >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Description</label>
                            <textarea type="text" class="form-control" placeholder="Enter Description" name="description"></textarea>
                            <script>
                                CKEDITOR.replace( 'description',
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
                            <label>Detail</label>
                            <textarea type="text" class="form-control" placeholder="Enter Description" name="detail"  ></textarea>
                            <script>
                                CKEDITOR.replace( 'detail',
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
                            <input type="file" class="form-control" placeholder="Enter Description" name="images" >
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Website Address</label>
                            <textarea type="text" class="form-control" placeholder="Enter Description" name="website_address" required ></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Category_Product</label>
                            <select class="form-control" name="Category_id">
                                @foreach($dbcate as $item)
                                    @if($item->type==2)
                                    <option value="{!!$item->id!!}">{!!$item->name!!}</option>
                                    @endif
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Partner</label>
                            <select class="form-control" name="Partner">
                                @foreach($Partner as $pr)
                                    <option value="{!!$pr->id!!}">{!!$pr->name!!}</option>
                                @endforeach
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
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop