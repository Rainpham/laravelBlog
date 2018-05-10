@extends('admin.master')
@section('title', 'ListCategory')
@section('content')
@if(session('xoa'))
<div class="alert alert-success">
  {{session('xoa')}}
</div>
@endif
@if(session('khongxoa'))
<div class="alert alert-danger">
  {{session('khongxoa')}}
</div>
@endif
@if(session('suathanhcong'))
<div class="alert alert-danger">
  {{session('suathanhcong')}}
</div>
@endif
<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">LIST CATEGORY</h3>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>STT</th>
            <th>Danh Mục</th>
            <th>Trạng Thái</th>
            <th>Quản Lý</th>
          </tr>
        </thead>
        <tbody>
          <?php $stt=1; ?>
          @foreach($datacatelist as $item)
          <td>{!! $stt++ !!}</td>
          <td>{!! $item['name'] !!}</td>
          <td>
            @if($item['status']==1)
                <span class="label label-success">Hiện</span>
            @else
                <span class="label label-danger">Ẩn</span>
            @endif
          </td>
          <td>
            <a href="edit/{!!$item['id']!!}"><button type="button" class="btn btn-primary" >Edit</button></a>
            <a href="delete/{!!$item['id']!!}"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li>{!!$datacatelist->links()!!}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@stop