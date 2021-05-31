<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembagian Zakat</title>
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
<?php
  $FM = $t_zuang / 2;
  $ZFM = $FM / $m_fm;

  $A = $FM / 3;
  $AP = $A / 8;

  $F = $FM - $A;
  $FO = $F * 0.7;
  $FPO = $FO / 6;

  $FS = $F * 0.3;
?>


                  <h1>Pembagian Zakat</h1>
                  <div class="row">
                    <div class="col">
                      <b>FAQIR MISKIN</b>
                    </div>
                    <div class="col"><b>AMILIN</b></div>
                    <div class="col"><b>FISABILILLAH</b></div>
                  </div>
                   <div class="row">
                    <div class="col">
                      Total Uang Zakat = Rp.{{number_format($FM)}} <br>
                      Faqir Miskin = 1/2 dari total zakat = Rp. {{number_format($FM)}} <br>
                      Total Faqir Miskin = {{$m_fm}} Orang, Rp.{{number_format($ZFM)}} Per Orang
                    </div>
                    <div class="col">
                      Sisa Faqir Miskin = Rp.{{number_format($FM)}} <br>
                      Amilin = 1/3 dari sisa Faqir Miskin = {{number_format($A)}} <br>
                      Amilin = {{$m_a}} Orang, Rp.{{number_format($AP)}}
                    </div>
                    <div class="col">
                      Sisa Amilin = Rp.{{number_format($F)}} <br>
                      Fisabilillah Orang = 70% = Rp.{{number_format($FO)}} , Fisabilillah untuk {{$m_fb}} Orang = Rp.{{number_format($FPO)}}
                      <br><br>
                      Fisabilillah Sarana = 30% = Rp.{{number_format($FS)}}
                    </div>
                  </div>
                 
</div>

 <div class="restable container mt-5">
<?php
$FMM =$t_zuang + 300000;
  $FM = ($t_zuang + 300000) / 2;
  $TFM = 21;
  $ZFM = $FM / $TFM;

  $A = $FM / 3;
  $AP = $A / 8;

  $F = $FM - $A;
  $FO = $F * 0.7;
  $FPO = $FO / 6;

  $FS = $F * 0.3;

  $SU = $t_suang;
?>


                  <h1>Pembagian Zakat</h1>
                  Shodaqoh {{$SU}} <br>
                  Mustahiq {{$SU - 44000}} <br>
                  {{$FMM}}

                  <div class="row">
                    <div class="col">
                      <b>FAQIR MISKIN</b>
                    </div>
                    <div class="col"><b>AMILIN</b></div>
                    <div class="col"><b>FISABILILLAH</b></div>
                  </div>
                   <div class="row">
                    <div class="col">
                      Total Uang Zakat = Rp.{{number_format($FM)}} <br>
                      Faqir Miskin = 1/2 dari total zakat = Rp. {{number_format($FM)}} <br>
                      Total Faqir Miskin = {{$TFM}} Orang, Rp.{{number_format($ZFM)}} Per Orang
                      {{$ZFM - 18000}} = 35000 + 1,5 Kg<br>
                      {{52000 - 12000}} = 41000 + 1Kg
                    </div>
                    <div class="col">
                      Sisa Faqir Miskin = Rp.{{number_format($FM)}} <br>
                      Amilin = 1/3 dari sisa Faqir Miskin = {{number_format($A)}} <br>
                      Amilin = 8 Orang, Rp.{{number_format($AP)}} = 46000 Rp.
                    </div>
                    <div class="col">
                      Sisa Amilin = Rp.{{number_format($F)}} <br>
                      Fisabilillah Orang = 70% = Rp.{{number_format($FO)}} , Fisabilillah untuk 6 Orang = Rp.{{number_format($FPO)}} = 86000 Rp.
                      <br><br>
                      Fisabilillah Sarana = 30% = Rp.{{number_format($FS)}}
                    </div>
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