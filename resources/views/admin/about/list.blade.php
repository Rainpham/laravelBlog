@extends('admin.master')
@section('title', 'listabout')
@section('content')



<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách danh mục</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name-Company</th>
                            <th>Description</th>
                            <th>Content</th>
                            <th>Images</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($About as $ab)
                            <tr>
                                <td>{{$ab->id}}</td>
                                <td>{{$ab->name_company}}</td>
                                <td>{{$ab->description}}</td>
                                <td>{{$ab->content}}</td>
                                <td>{{$ab->images}}</td>
                                <td>{{$ab->status}}</td>
                                <td><a href="edit/{{$ab->id}}"><button class="btn btn-info">Edit</button></a></td>
                                <td><a href="delete/{{$ab->id}}"><button class="btn btn-danger">Delete</button></a></td>
                            </tr>
                        @endforeach()
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@stop