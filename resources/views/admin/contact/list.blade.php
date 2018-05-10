@extends('admin.master')
@section('title', 'listcontact')
@section('content')

<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách danh mục</h3>
                </div>
                @if(session('tbcontact'))
				<div class="alert alert-success">
					{{session('tbcontact')}}
				</div>
				@endif
				@if(session('tbcontactxoa'))
				<div class="alert alert-success">
					{{session('tbcontactxoa')}}
				</div>
				@endif
                <!-- /.box-header -->
                <div class="box-body">
                	<div class="col-xs-3" style="padding-left: 0px;">
                		<a href="{!!route('getAddContact')!!}">
                			<button type="button" class="btn btn-block btn-success">Thêm Contact</button>
                		</a>
                	</div>
                    <table id="category-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $ctt)
                            <tr>
                                <td>{{$ctt->id}}</td>
                                <td>{{$ctt->name}}</td>
                                <td>{{$ctt->email}}</td>
                                <td>{{$ctt->message}}</td>
                                <td>
                                @if($ctt['status']==1)
                                		<span class="label label-success">Hiện</span>
                                	@else
                                		<span class="label label-danger">Ẩn</span>
                                @endif	
                                </td>
                                <td>
                                	<a href="edit/{!!$ctt['id']!!}">
                                	<button class="btn btn-info">Edit</button>
                                	</a>
                                </td>
                                <td>
                                	<a href="delete/{!!$ctt['id']!!}">
                                	<button class="btn btn-danger" type="button" onclick="return sacnhanxoa('bạn có chắc muốn xóa')">Delete</button>
                                	</a>
                            	</td>
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
				        <ul class="pagination pagination-sm no-margin pull-right">
				            <li>{!!$contact->links()!!}</li>
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