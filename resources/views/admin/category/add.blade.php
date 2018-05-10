@extends('admin.master')
@section('title', 'addCategory')
@section('content')

@if(session('thongbao'))
	<div class="alert alert-success">
		{{session('thongbao')}}
	</div>
@endif
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CATEGORY</h3>
            </div>
                <!-- /.box-header -->
        <div class="box-body">
<form method="POST" style="width:650px">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    @include('admin.block.erro')
  <h4 for="exampleInputPassword1" class="text-primary">DANH MỤC CHA</h4>
  <select class="form-control" name="txtselec">
    <option selected value="0">CHỌN DANH MỤC</option>
    <?php menuMuntil($datacate,0,$str="") ?>
  </select>
  <h4 for="exampleInputPassword1" class="text-primary">TÊN DANH MỤC</h4>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CATEGORY NEWS" name="txtCategory" value="{!!old('txtCategory')!!}">
  <h4 for="exampleInputPassword1" class="text-primary">KIỂU DANH MUC</h4>
	<div class="radio">
		  <label><input type="radio" value="1" name="cateRadio">CATEGORY NEWS</label>
		</div>
		<div class="radio">
		  <label><input type="radio" value="2" name="cateRadio">CATEGORY PRODUC</label>
		</div>
</div>
<button type="submit" class="btn btn-primary">Thêm</button>
</form>
</div>
</div>
</div>
</div>
@stop
