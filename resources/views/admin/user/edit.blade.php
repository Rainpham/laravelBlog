@extends('admin.master')
@section('title', 'EditUser')
@section('content')

@if(session('thongbaoedituser'))
  <div class="alert alert-success">
    {{session('thongbaoedituser')}}
  </div>
@endif
<h1>EDIT USER</h1>
<div class="box box-info col-sm-6">
    <!-- form start -->
    <form class="form-horizontal" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="username" name="txtusername" value="{!!$edituser['username']!!}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" placeholder="Email" name="txtemail" value="{!!$edituser['email']!!}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fullname</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="password" name="txtpfullname" value="{!!$edituser['fullname']!!}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="address" name="txtadress" value="{!!$edituser['address']!!}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">phone</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" placeholder="phone" name="txtphone" value="{!!$edituser['phone']!!}">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Lever</label>
                <div class="col-sm-6">
                    <div class="radio">
                        <label><input type="radio" value="1" name="txtlever"
                    @if($edituser['lever']==1)
                        checked 
                    @endif
                        >admin</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="2" name="txtlever"
                    @if($edituser['lever']==2)
                        checked 
                    @endif
                        >maneger</label>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.box-body -->
<div class="box-footer col-sm-6">
<button type="submit" class="btn btn-info pull-right">CẬP NHẬT USER</button>
</div>
<!-- /.box-footer -->
</form>
</div>
@stop