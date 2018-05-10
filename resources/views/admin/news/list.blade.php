@extends('admin.master')
@section('title', 'Danh Sach News')
@section('content')

@if(session('tbnews'))
	<div class="alert alert-success">
		{{session('tbnews')}}
	</div>
@endif

@if(session('tbeditnews'))
	<div class="alert alert-success">
		{{session('tbeditnews')}}
	</div>
@endif

@if(session('xoanews'))
	<div class="alert alert-success">
		{{session('xoanews')}}
	</div>
@endif
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh Sách News</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Mô Tả</th>
                            <th>Nội Dung</th>
                            <th>Hình Ảnh</th>
                            <th>Danh Mục</th>
                            <th>Người Tạo</th>
                            <th>Trạng Thái</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<?php $stt=0; ?>
                            	@foreach($dbnew as $item)
                                <td>{{$stt++}}</td>
                                <td>{!!$item['title']!!}</td>
                                <td>{!!$item['slug']!!}</td>
                                <td>{!!$item['description']!!}</td>
                                <td>{!!$item['content']!!}</td>
                                <td>{!!$item['img']!!}</td>
                                <td>{!!$item->categorymodel->name!!}</td>
                                <td>{!!$item['author']!!}</td>
                                <td>
                                	@if($item['status']==1)
                                		<span class="label label-success">Hiện</span>
                                	@else
                                		<span class="label label-danger">Ẩn</span>
                                	@endif
                            	</td>
                                <td >
                                	<a href="delete/{!!$item['id']!!}">
                                		<button class="btn btn-block btn-danger btn-sm" onclick="return sacnhanxoa('bạn có chắc muốn xóa')">Delete</button>
                                	</a></td>
                                <td>
                                	<a href="edit/{!!$item['id']!!}">
                                		<button class="btn btn-block btn-success btn-sm">Edit</button>
                                	</a>
                                </td> 

                            </tr>
               
                        </tbody>
							@endforeach
                    </table>
                    <div class="box-footer clearfix">
				        <ul class="pagination pagination-sm no-margin pull-right">
				            <li>{!!$dbnew->links()!!}</li>
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

@endsection()



