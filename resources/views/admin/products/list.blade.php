@extends('admin.master')
@section('title', 'listProduct')
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
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Detail</th>
                            <th>Images</th>
                            <th>Website_Address</th>
                            <th>Category_id</th>
                            <th>Partner_id</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pd as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->detail}}</td>
                                <td>
                                    <img src="./products/{{$product->images}}" alt="hinh">
                                </td>
                                <td>{{$product->website_Address}}</td>
                                <td>{{$product->categoryproduct_id}}</td>
                                <td>{{$product->parther_id}}</td>
                                <td>{{$product->status}}</td>
                                <td><a href=""><button class="btn btn-info">Edit</button></a></td>
                                <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
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
