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

								<div class="restable">
									<div class="container justify-space-evenly">
										<div class="row">
											<div class="col-md-3">
												<img class="img-fluid" src="{{asset('images')}}/hi.png" width="100px">
											</div>
											<div class="col-md-5">
												<div class="card-body">
													<div class="row"><b><h2>MDT HIDAYAH INSANI</h2></div>
													<div class="row">No. Statistik : 311.2.32.04.3049</div></b>
													<div class="row">Kp. Neglasari Rt.09 Rw.10 Kel.Manggahang Kec.Baleendah</div>

												</div>
											</div>
											<div class="col-md-4 mt-2">
												<div class="card card-dark">
													<div class="card-header">
														<h5 class="card-title">BUKTI PENERIMAAN</h5>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-4">
																<div class="title">Nomor :</div>
															</div>
															<div class="col-md-8">
																<div class="title"><b>{{$muzaqi->id}} </b></div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="title">Neglasari,</div>
															</div>
															<div class="col-md-8"><b>{{$muzaqi->tanggal}}</b></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- kwitansi -->
										<div class="row">
											<div class="col-md-3">
												<div class="card card-dark">
													<div class="card-body">
														<div class="row">
															<div class="col-md-4">
																Nama :
															</div>
															<div class="col-md-8">
																<b>{{$muzaqi->nama}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																Alamat :
															</div>
															<div class="col-md-8">
																<b>{{$muzaqi->alamat}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																
															</div>
															<div class="col-md-4">
																RT <b>{{$muzaqi->rt}}</b>
															</div>
															<div class="col-md-4">
																RW <b>{{$muzaqi->rw}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																
															</div>
															<div class="col-md-4">
																Mgh/Be
															</div>
															<div class="col-md-4">
																
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																Jiwa : 
															</div>
															<div class="col-md-8">
																<b>{{$muzaqi->jiwa}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																Jumlah :
															</div>
															<div class="col-md-8">
																Rp. <b>{{$muzaqi->z_uang}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col">
																Keterangan :
															</div>
														</div>
														@if($muzaqi->z_beras > 0)
														<div class="row">
															<div class="col">
															<b>{{$muzaqi->z_beras}} Kg </b>
															</div>
														</div>
														@endif
														<div class="row">
															<div class="col">
															.......................................................
															</div>
														</div>
														<div class="row">
															<div class="col">
															.......................................................
															</div>
														</div>
														<div class="row">
															<div class="col">
															.......................................................
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-4">
												<div class="card card-dark">
													<div class="card-header">
														<h5 class="card-title">Donatur</h5>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-4">
																<div class="title">Nama :</div>
															</div>
															<div class="col-md-8">
																<div class="title"> <b>{{$muzaqi->nama}}</b> </div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="title">Alamat :</div>
															</div>
															<div class="col-md-8"><b>{{$muzaqi->alamat}} </b></div>
														</div>
														<div class="row">
															<div class="col-md-4">
																
															</div>
															<div class="col-md-4">
																RT <b>{{$muzaqi->rt}}</b>
															</div>
															<div class="col-md-4">
																RW <b>{{$muzaqi->rw}}</b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																
															</div>
															<div class="col-md-4">
																Mgh/Be
															</div>
															<div class="col-md-4">
																Jiwa : <b>{{$muzaqi->jiwa}} </b>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																Telepon :
															</div>
															<div class="col-md-8">
																....................................................
															</div>
														</div>
													</div>
										<div class="row">
											<div class="col">
												<div class="card card-dark">
													<div class="card-header">
														<h5 class="card-title">Penyetoran Melalui</h5>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-2">
																<div class="title"><input type="checkbox" checked></div>
															</div>
															<div class="col-md-6">
																<div class="title">Unit / Perwakilan</div>
															</div>
															<div class="col-md-4"></div>
														</div>
													</div>
												</div>
											</div>
											</div>
										<div class="row">
											<div class="col">
												<div class="card card-dark">
													<div class="card-body">
														<div class="row">
															<div class="col"><br><br><br></div>
														</div>
														<div class="row">
															<div class="col"></div>
														</div>

													</div>
													<div class="card-header">
														<h5 class="card-title">Muzaqi / Munfiq</h5>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								

											<div class="col-md-5">
												<div class="row">
													<div class="col-md-12">
														<div class="card card-dark">
													<div class="card-header">
														<h5 class="card-title">PERINCIAN</h5>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-4">
																<div class="title">Jumlah Disetor :</div>
															</div>
															<div class="col-md-8">
																<div class="title"><b>Rp.{{$muzaqi->z_uang + $muzaqi->s_uang}}</b> </div>
															</div>
														</div><div class="row">
															<div class="col-md-12">
																<div class="title">Terbilang : ...................................................................................</div>
															</div>
														</div>
													</div>
												</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="card card-dark">
															<div class="card-header">
																<h5 class="card-title">Donasi Untuk</h5>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-md-6">
																		<div class="card-title"><input type="checkbox"> Zakat Mall</div>
																	</div>
																	<div class="col-md-6">
																		<div class="card-title">Rp. ....................</div>
																	</div>
																</div><div class="row">
																	<div class="col-md-6">
																		<div class="card-title"><input type="checkbox"checked> Zakat Fitrah</div>
																	</div>
																	<div class="col-md-6">
																		<div class="card-title"><b>Rp.{{$muzaqi->z_uang}}</b> </div>
																	</div>
																</div><div class="row">
																	<div class="col-md-6">
																		<div class="card-title"><input type="checkbox" checked> Infaq</div>
																	</div>
																	<div class="col-md-6">
																		<div class="card-title">Rp.{{$muzaqi->s_uang}}</div>
																	</div>
																</div><div class="row">
																	<div class="col-md-6">
																		<div class="card-title"><input type="checkbox"> Lain-lain</div>
																	</div>
																	<div class="col-md-6">
																		<div class="card-title">Rp. ...................</div>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="col-md-4">
														<div class="card card-dark">
															<div class="card-header">
																<font size="2">Disetor Secara</font>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="card-title"><input type="checkbox" {{$muzaqi->type == 0 ? 'checked' : ''}}> Uang</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card-title"><input type="checkbox"  {{$muzaqi->type == 1 ? 'checked' : ''}}> Beras</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<div class="card-title">Keterangan :</div>
																	</div>
																</div>
																@if ($muzaqi->type == 1)
																	<div class="row">
																		<div class="col-md-12">
																			<div class="card-title"><b>{{$muzaqi->z_beras}} Kg</b></div>
																		</div>
																	</div>
																@endif
																<div class="row">
																	<div class="col-md-12">
																		<div class="card-title">...........................</div>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="card card-dark">
													<div class="card-body">
														<div class="row">
															<div class="col"><img src="{{asset('images/sign/' . $muzaqi->amilin->sign)}}" width="100px"></div>
														</div>
														<div class="row">
															<div class="col"></div>
														</div>

													</div>
													<div class="card-header">
														<h5 class="card-title">Amilin</h5>
													</div>
													
												</div>
													</div>
												</div>
											</div>


										</div>
									</div>
								</div>
							</div>

									<!-- <table cellspacing="table-striped" width="100%">
										<tr>
											<th> Nama </th>
											<th> Alamat </th>
											<th> RT </th>
											<th> RW </th>
											<th> Jiwa </th>
											<th> Jenis </th>
											<th> Zakat Uang </th>
											<th> Zakat Beras </th>
											<th> Sodaqoh Uang </th>
											<th> Sodaqoh Beras</th>
											<th> Total Saldo </th>
											<th> Tanggal </th>
											<th> Amilin </th>
										</tr>
										<tr>
											<td>{{$muzaqi->nama}}</td>
											<td>{{$muzaqi->alamat}} </td>
											<td>{{$muzaqi->rt}} </td>
											<td>{{$muzaqi->rw}} </td>
											<td>{{$muzaqi->jiwa}} </td>
											<td><input type="checkbox" {{$muzaqi->type == 0 ? 'checked' : ''}}>Uang<br>
												<input type="checkbox" {{$muzaqi->type == 1 ? 'checked' : ''}}>Beras </td>
											<td>Rp.{{$muzaqi->z_uang}} </td>
											<td>{{$muzaqi->z_beras}}KG </td>
											<td>Rp.{{$muzaqi->s_uang}} </td>
											<td>{{$muzaqi->s_beras}}KG </td>
											<td>{{$muzaqi->saldo}} </td>
											<td>{{$muzaqi->tanggal}} </td>
											<td><img class="img-fluid" src="{{ asset('images/sign/' . $muzaqi->amilin->sign) }}" alt="{{ $muzaqi->amilin->nama }}" width="100px"></td>
										</tr>
									</table> -->
				

	<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>