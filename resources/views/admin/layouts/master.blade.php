<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>
  <base href="{{asset('')}}" >

  <!-- Custom fonts for this template -->
  <link href="admin_asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="admin_asset/css/nunito.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin_asset/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="admin_asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layouts.menu')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.layouts.header')
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content');
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      @include('admin.layouts.footer')
    <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" language="javascript" src="admin_asset/js/main.js" ></script>
  @yield('script')
</body>

</html>
