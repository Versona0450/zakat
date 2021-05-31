<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Data Muzaki</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css')}}/detail.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('vendor')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/styleF.css" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">

                <div class="restable container mt-5">

                 <div class="table-responsive">
                <table class="table table-bordered table-striped mt-5" id="example1" width="100%">
                  <thead>
                  <tr align="center">
              <th rowspan="2" style="width: 1%;"> NO </th>
              <th rowspan="2" style="width: 5%;"> TANGGAL </th>
              <th rowspan="2" style="width: 15%;"> NAMA </th>
              <th rowspan="2" style="width: 1%;"> JIWA </th>
              <th colspan="2" style="width: 20%;"> ZAKAT FITRAH </th>
              <th colspan="2" style="width: 15%;"> INFAQ SHODAQOH </th>
              <th rowspan="2" style="width: 15%;"> SALDO </th>
            </tr>
            <tr align="center">
              <th >UANG</th>
              <th >BERAS</th>
              <th >UANG</th>
              <th >BERAS</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $n = 1;
          ?>
          @forelse($muzaqi as $row)
          <tr align="center">
            <td><?php echo $n; ?></td>
            <td>{{$row->tanggal}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->jiwa}}</td>
            <td>Rp. {{number_format($row->z_uang)}}</td>
            <td>{{$row->z_beras}} Kg</td>
            <td>Rp. {{number_format($row->s_uang)}}</td>
            <td>{{$row->s_beras}} Kg</td>
            <td>Rp. {{number_format($row->saldo)}}</td>
            
          </tr>
          <?php
          $n++;
          ?>
          @empty
          <tr>
              <td colspan="9" class="text-center">Tidak ada data</td>
          </tr>
          
          @endforelse
        </tbody>
        <tfoot>
          <tr align="center">
            <th colspan="3">Total</th>
            <th>{{$t_jiwa}} Jiwa</th>
            <th>Rp.{{number_format($t_zuang)}} </th>
            <th>{{$t_zberas}} Kg</th>
            <th>Rp.{{number_format($t_suang)}}</th>
            <th>{{$t_sberas}} Kg</th>
            <th>Rp. {{number_format($t_saldo)}}</th>
          </tr>
        </tfoot>
        </table>
      </div>
</div>

<!-- jQuery -->
<script src="{{asset('vendor')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('vendor')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{asset('vendor')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('vendor')}}/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="{{asset('vendor')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="{{asset('vendor')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor')}}/dist/js/adminlte.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('vendor')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('vendor')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('vendor')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('vendor')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('vendor')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "paging": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>
</body>
</html>