<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
  @include('admin.layout.link')
  <script type="text/javascript" src="{!!asset('vp-admin/ckeditor/ckeditor.js')!!}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
      <!-- start header -->
          @include('admin.layout.header')
      <!-- start sidebar left -->
          @include('admin.layout.sidebarLeft')
    <div class="content-wrapper">
      <section class="content">
        <!-- content -->
         @yield('content')
      </section>
    </div>
<!-- end conten -->
@include('admin.layout.footer')
@yield('script')
</div>
</body>

