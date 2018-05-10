@extends('admin.master')
@section('title', 'listpartner')
@section('content')
@if(session('TB_Addpartner'))
  <div class="alert alert-success">
    {{session('TB_Addpartner')}}
  </div>
@endif
@if(session('xoapn'))
  <div class="alert alert-success">
    {{session('xoapn')}}
  </div>
@endif

@if(session('TB_editpartner'))
  <div class="alert alert-success">
    {{session('TB_editpartner')}}
  </div>
@endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-9">
                        <h3 class="box-title">Danh sách danh mục</h3>
                    </div>
                    <div class="col-xs-3">
                        <a href="{!!route('getAddPartner')!!}">
                        <button class="btn btn-block btn-success btn-flat" style="button">ADD Partner</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Infomation</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $Stt=1; ?>
                            @foreach($db as $item)
                            <tr>
                                <td>{!!$Stt++!!}</td>
                                <td>{!!$item->name!!}</td>
                                <td>{!!$item->information!!}</td>
                                <td>{!!$item->logo!!}</td>
                                <td>
                                    @if($item['status']==1)
                                        <span class="label label-success">Hiện</span>
                                    @else
                                        <span class="label label-danger">Ẩn</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="edit/{!!$item['id']!!}"><button class="btn btn-info">Edit</button></a>
                                </td>
                                <td>
                                    <a href="delete/{!!$item['id']!!}">
                                        <button class="btn btn-danger"
                                            onclick="return sacnhanxoa('Bạn chắc chắn muốn xóa')" 
                                        >Delete</button></a>
                                </td>
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