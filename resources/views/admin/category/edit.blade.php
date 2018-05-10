@extends('admin.master')
@section('title', 'addCategory')
@section('content')

<h1>EDIT CATEGORI</h1>
<form method="post" style="width:650px;border: 1px solid;
    padding-left: 40px;
    padding-right: 40px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    @include('admin.block.erro')
  <h4 for="exampleInputPassword1" class="text-primary">DANH MỤC CHA</h4>
  <select class="form-control" name="txtselec">
    <option selected value="0">CHỌN DANH MỤC</option>
    <?php menuMuntil($parent,0,$str="") ?>
  </select>
  <h4 class="text-primary">TÊN DANH MỤC</h4>
  <input type="text" class="form-control"  placeholder="CATEGORY NEWS" name="txtCategory" value="{!!$cate['name']!!}">
  <h4 class="text-primary">TÊN KHÔNG DẤU</h4>
  <input type="text" class="form-control"  name="txtSlug" value="{!!$cate['slug']!!}">
  <h4  class="text-primary">KIỂU DANH MUC</h4>
  <div class="radio">
      <label><input type="radio" value="1" name="cateRadio">CATEGORY NEWS</label>
    </div>
    <div class="radio">
      <label><input type="radio" value="2" name="cateRadio">CATEGORY PRODUC</label>
    </div>
</div>
<button type="submit" class="btn btn-primary">SỬA DANH MỤC</button>
</form>
@stop
