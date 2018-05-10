@extends('admin.master')
@section('title', 'listslider')
@section('content')

@if(session('tbslidertc'))
	<div class="alert alert-success">
		{{session('tbslidertc')}}
	</div>
@endif

@if(session('xoaslider'))
	<div class="btn btn-block btn-danger">
		{{session('xoaslider')}}
	</div>
@endif

@if(session('chinhsuaslider'))
	<div class="alert alert-success">
		{{session('chinhsuaslider')}}
	</div>
@endif

@include('admin.block.erro')

<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-9">
                    	<h2>Danh sách danh mục</h2>
                    	
                	</div>
                	<div class="col-xs-3">
                	<a href="{!!route('getAddSlider')!!}">
                		<button type="button" class="btn btn-block btn-success">Thêm Slider</button>
                	</a>
                	</div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Infomation</th>
                            <th>Images</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $st=1;?>
                        @foreach($db as $sl)
                            <tr>
                                <td>{!!$st++!!}</td>
                                <td>{!!$sl->information!!}</td>
                                <td>{!!$sl->images!!}</td>
                                <td>{!!$sl->url!!}</td> 
                                <td>
                                	@if($sl['status']==1)
                                		<span class="label label-success">Hiện</span>
                                	@else
                                		<span class="label label-danger">Ẩn</span>
                                	@endif
                                </td>
                                <td><a href="edit/{!!$sl['id']!!}"><button class="btn btn-info">Edit</button></a></td>
                                <td><a href="delete/{!!$sl['id']!!}"><button class="btn btn-danger" onclick="return sacnhanxoa('ban chắc chắn muốn xóa chứ')">Delete</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <div class="box-footer clearfix">
				        <ul class="pagination pagination-sm no-margin pull-right">
				          <li>{!!$db->links()!!}</li>
				        </ul>
				      </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@stop