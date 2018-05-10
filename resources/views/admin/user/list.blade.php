@extends('admin.master')
@section('title', 'addCategory')
@section('content')
@if(session('xoaUser'))
  <div class="alert alert-success">
    {{session('xoaUser')}}
  </div>
@endif
@if(session('xoaUserkhongthanh'))
  <div class="alert alert-danger">
    {{session('xoaUserkhongthanh')}}
  </div>
@endif
<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">LIST USER</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">ID</th>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>adress</th>
                  <th>Phone</th>
                  <th>Lever</th>
                  <th>Edit</th>
                </tr>
                <?php $stt=1; ?>
                 @foreach($listuser as $item)
                <tr>
                  <td>{!!$stt++!!}</td>
                  <td>{!!$item['fullname']!!}</td>
                  <td>{!!$item['username']!!}</td>
                  <td>{!!$item['email']!!}</td>
                  <td>{!!$item['address']!!}</td>
                  <td>{!!$item['phone']!!}</td>
                  <td>{!!$item['lever']!!}</td>
                  <td>
                    <a href="edit/{!!$item['id']!!}">
                      <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="delete/{!!$item['id']!!}">
                      <button type="button" class="btn btn-danger" onclick="return sacnhanxoa('Bạn chắc chắn muốn xóa chứ')">Delete</button>
                    </a>
                  </td>
                </tr>
              </tbody>
 @endforeach
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!!$listuser->links()!!}</li>     
              </ul>
            </div>
          </div>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop