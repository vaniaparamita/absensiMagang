<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{DB::table('departemens')->where('id', '=', Auth::user()->id_departemen)->value('name')}} | HRIS JCM</title>

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/sweetalert2/sweetalert2.min.css') }}">
  <!-- DataTable -->  
  <link rel="stylesheet" href="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('AdminDepartemen/header2')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('AdminDepartemen/sidebar2')

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid"> 
    @yield('content')    
    <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('AdminDepartemen/footer2')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js">
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- SweetAlert -->
<script src="{{ asset('/lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@yield('sweet')
@include('sweet::alert')
</body>
</html>
