@extends('layouts.template')

@section('titlebar')
   DATA MUZAQI
@endsection

@section('content')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 ">
           
           <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title"><b><center>DATA MUZAQI ZAKAT</center></b></h3>

                <div class="card-tools">
                 
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div><br><br>
                <div class="justify-space-evenly">
                 <div class="row">
              <div class="col">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-muzaqi">
                  Tambah Data Muzaqi
                </button>
              
               <a type="button" href="{{route('mprint')}}" target="_blank" class="btn btn-primary">
                  Print Data Muzaqi
                </a>
              </div>
            </div>
              </div>
              </div>
              <div class="card-body">
                 @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                  @endif
                  <div class="table-responsive">
                <table class="table table-bordered table-striped" id="example2">
                  <thead>
                  <tr align="center">
              <th rowspan="2" style="width: 1%;"> NO </th>
              <th rowspan="2" style="width: 5%;"> TANGGAL </th>
              <th rowspan="2" style="width: 15%;"> NAMA </th>
              <th rowspan="2" style="width: 1%;"> JIWA </th>
              <th colspan="2" style="width: 20%;"> ZAKAT FITRAH </th>
              <th colspan="2" style="width: 15%;"> INFAQ SHODAQOH </th>
              <th rowspan="2" style="width: 15%;" >ACTION </th>
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
            <!-- <td>Rp. {{$row->z_uang + $row->s_uang}}</td> -->
            <td>
              <div class="btn-group">
                        <!-- DETAIL -->
                        <a href="{{route('muzaqi.show', $row->id)}}" target="_blank">
                        <button type="button" class="btn btn-info btn-flat">
                          <i class="fas fa-print"></i>
                        </button>
                        </a>
                        <!-- EDIT -->
                        
                        <a href="{{ route('muzaqi.edit', $row->id) }}">
                        <button type="button" class="btn btn-warning btn-flat">
                        <i class="fa fa-edit"></i>
                        </button>
                        </a>
                        <!-- DELETE -->
                        <form action="{{ route('muzaqi.destroy', $row->id) }}" method="post">
                                 @csrf
                                 @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-flat">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>

                </div>
            </td>
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
        </table>
      </div>
              </div>
              
            </div>
            
          </section>
           <!-- Main content -->
   
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>





<!-- MODAL CREATE DATA -->

<div class="modal fade" id="tambah-muzaqi">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Muzaqi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="POST" action="{{route('muzaqi.store')}}">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                        <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat...">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>RT</label>
                        <input type="text" name="rt" class="form-control" placeholder="RT ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>RW</label>
                        <input type="text" name="rw" class="form-control" placeholder="RW ..." >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Tipe Zakat Fitrah</label>
                    <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="type" value="0" checked>
                          <label for="customRadio1" class="custom-control-label">Tunai / Uang</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="type" value="1">
                          <label for="customRadio2" class="custom-control-label">Beras</label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Jumlah Jiwa</label>
                    <input type="number" name="jiwa">
                  </div>
                </div>
            </div>
           </div>
                <!-- RIGHT -->

                 <div class="col-md-6">
                  <div class="form-group">
                        <label>Zakat Uang</label>
                        <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                    <select name="z_uang" id="z_uang" class="form-control" required width="100%">
                          <option value="0">Pilih</option>
                          @foreach($zakat as $z)
                          <option value="{{$z->harga}}">{{$z->harga}}</option>
                          @endforeach
                    </select>
                     </div>
                  </div>
                  <div class="form-group">
                        <label>Zakat Beras</label>
                        <div class="input-group-prepend">
                    <select name="z_beras" id="z_beras" class="form-control" required width="100%">
                          <option value="0">Pilih</option>
                          @foreach($zakats as $zb)
                          <option value="{{$zb->harga}}">{{$zb->harga}}</option>
                          @endforeach
                    </select>
                    <span class="input-group-text">Kg</span>
                  </div>
                  </div>
                  <div class="form-group">
                        <label>Shadaqoh Uang</label>
                        <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" name="s_uang" class="form-control" value="Rp.0" placeholder="...">
                  </div>
                </div>
                  <div class="form-group">
                        <label>Shadaqoh Beras</label>
                        <div class="input-group-prepend">
                    <input type="number" name="s_beras" class="form-control" value="0 Kg" placeholder="...">
                    <span class="input-group-text">Kg</span>
                  </div>
                  </div>
                  
                  
                 <div class="form-group">
                        <label>Amilin</label>
                    <select name="amilin_id" id="amilin_id" class="form-control" required width="100%">
                          <option value="">-- Pilih --</option>
                          @foreach($amilin as $a)
                          <option value="{{$a->id}}">{{$a->nama}}</option>
                          @endforeach
                    </select>
                  </div>
                </div>
            </div>
          

            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-lg"><i class="far fa-save"></i> Tambah Muzaqi</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->










@endsection

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
@endsection