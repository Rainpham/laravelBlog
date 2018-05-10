@extends('admin.master')
@section('title', 'addCategory')
@section('content')

 

@if(session('thongbaoadduser'))
  <div class="alert alert-success">
    {{session('thongbaoadduser')}}
  </div>
@endif
 @include('admin.block.erro')
<div class="box box-info col-sm-6">
    <div class="box-header with-border">
        <h3 class="box-title">ADD USER</h3>
    </div>
            <!-- form start -->
    <form class="form-horizontal" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Username</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" placeholder="username" name="txtusername" value="{!!old('txtusername')!!}">
            </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" placeholder="Email" name="txtemail" value="{!!old('txtemail')!!}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="password" name="txtpassword" >
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Confirm password" name="txtrepass">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Lever</label>
                  <div class="col-sm-6">
                    <div class="radio">
						<label><input type="radio" value="1" name="txtlever"
            @if(old('txtlever')==1)
              checked 
            @endif
            >admin</label>
					</div>
					<div class="radio">
						<label><input type="radio" value="2" name="txtlever"
            @if(old('txtlever')==2)
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
                <button type="submit" class="btn btn-info pull-right">THÊM USER</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@stop
