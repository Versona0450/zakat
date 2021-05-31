@extends('layouts.template')

@section('titlebar')
    HARGA ZAKAT FITRAH
@endsection

@section('content')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
           <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title"><b>TABEL HITUNG ZAKAT FITRAH</b> </h3>

                <div class="card-tools">
                 
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                 <table class="table table-striped">
                  <thead>
                    <tr align="center">
							<th rowspan="2" style="width: 50px;"> Jumlah Jiwa </th>
							<th colspan="5" > Asumsi Harga Beras /kg </th>
							<th rowspan="2" style="width: 100px;"> Action </th>
						</tr>
						<tr align="center">
							@foreach($products as $r)
								<th>Rp. {{$r->harga}}</th>
							@endforeach
						</tr>
						<?php
						$n = 1;


								while ($n <= 10) {
									?>
								<tr align="center">
									<td><?php echo $n; ?></td>
									@foreach($productss as $row)
										<td>Rp. {{$row->harga * $n}}</td>

									@endforeach
									<td>
										<i class="fa fa-user"></i>
										<i class="fa fa-print"></i>
										<i class="fa fa-trash"></i>
									</td>

								</tr>

							<?php 
								$n++;
							}

							?>



						
                </table>
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

@endsection