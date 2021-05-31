@extends('layouts.template')

@section('titlebar')
   DATA MUSTAHIQ
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
                <h3 class="card-title"><b><center>DATA MUSTAHIQ ZAKAT</center></b></h3>

                <div class="card-tools">
                 
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div><br><br>
                <div class="justify-space-evenly">
                 <div class="row">
              <div class="col">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-mustahiq">
                  Tambah Data Mustahiq
                </button>
              
               <a type="button" href="{{route('mprint')}}" target="_blank" class="btn btn-primary">
                  Print Data Mustahiq
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
              <th rowspan="2" style="width: 15%;"> NAMA </th>
              <th rowspan="2" style="width: 15%;"> ALAMAT </th>
              <th rowspan="2" style="width: 5%;"> RT </th>
              <th rowspan="2" style="width: 5%;"> RW </th>
              <th rowspan="2" style="width: 10%;"> ASNAP </th>
              <th rowspan="2" style="width: 15%;" >ACTION </th>
            </tr>
          </thead>
          <tbody><?php 
          $n = 1;
          ?>
          @forelse($mustahiq as $row)
          <tr align="center">
            <td>{{$n}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->rt}}</td>
            <td>{{$row->rw}}</td>
            <td>{{$row->category->kategori}}</td>
            <td>
              <div class="btn-group">
                        <!-- DETAIL -->
                        <a href="{{route('mustahiq.show', $row->id)}}" target="_blank">
                        <button type="button" class="btn btn-info btn-flat">
                          <i class="fas fa-print"></i>
                        </button>
                        </a>
                        <!-- EDIT -->
                        
                        <a href="{{ route('mustahiq.edit', $row->id) }}">
                        <button type="button" class="btn btn-warning btn-flat">
                        <i class="fa fa-edit"></i>
                        </button>
                        </a>
                        <!-- DELETE -->
                        <form action="{{ route('mustahiq.destroy', $row->id) }}" method="post">
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

<div class="modal fade" id="tambah-mustahiq">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Mustahiq</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="POST" action="{{route('mustahiq.store')}}">
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

                 <div class="form-group">
                        <label>Kategori</label>
                    <select name="amilin_id" id="amilin_id" class="form-control" required width="100%">
                          <option value="">-- Pilih --</option>
                    </select>
                  </div>
                </div>
       
          

            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-lg"><i class="far fa-save"></i> Tambah Mustahiq</button>
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