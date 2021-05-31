@extends('layouts.template')

@section('titlebar')
   EDIT DATA MUZAQI
@endsection


@section('content')

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header text-center">
						<h3 class="card-title">EDIT DATA MUZAQI</h3>
					
           <div class="card-tools">
                 
                  <a href="{{route('muzaqi.index')}}" class="btn btn-tool">
                    <button class="btn btn-danger">X</button>
                  </a>
           </div>
         </div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="{{ route('muzaqi.update', $muzaqi->id) }}" method="post" >
                @csrf
              	
                @method('PUT')
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                        <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="{{$muzaqi->nama}}" class="form-control" placeholder="Masukan Nama">
                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                    <input type="text" name="alamat" value="{{$muzaqi->alamat}}" class="form-control" placeholder="Alamat...">
                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>RT</label>
                        <input type="text" name="rt" value="{{$muzaqi->rt}}" class="form-control" placeholder="RT ...">
                        <p class="text-danger">{{ $errors->first('rt') }}</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>RW</label>
                        <input type="text" name="rw" value="{{$muzaqi->rw}}" class="form-control" placeholder="RW ..." >
                        <p class="text-danger">{{ $errors->first('rw') }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Tipe Zakat Fitrah</label>
                    
                    	@if ($muzaqi->type == 0)
                    	<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="type" value="0" checked>
                          <label for="customRadio1" class="custom-control-label">Tunai / Uang</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="type" value="1">
                          <label for="customRadio2" class="custom-control-label">Beras</label>
                        </div>
                    	@else
                    	<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="type" value="0">
                          <label for="customRadio1" class="custom-control-label">Tunai / Uang</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="type" value="1" checked>
                          <label for="customRadio2" class="custom-control-label">Beras</label>
                        </div>
                        @endif

                        
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Jumlah Jiwa</label>
                    <input type="number" value="{{$muzaqi->jiwa}}" name="jiwa">
                  </div>
                </div>
            </div>
           </div>
                <!-- RIGHT -->

                 <div class="col-md-6">
                  <div class="form-group">
                        <label>Zakat Uang</label>
                    <select name="z_uang" id="z_uang" class="form-control" required width="100%">
                          <option value="0">Pilih</option>
                          @foreach($zakat as $z)
                          <option value="{{$z->harga}}" {{ $muzaqi->z_uang == $z->harga ? 'selected':'' }}>Rp. {{$z->harga}}</option>
                          @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                        <label>Zakat Beras</label>
                    <select name="z_beras" id="z_beras" class="form-control" required width="100%">
                          <option value="0">Pilih</option>
                          @foreach($zakats as $zb)
                          <option value="{{$zb->harga}}"  {{ $muzaqi->z_beras == $zb->harga ? 'selected':'' }}>{{$zb->harga}} Kg</option>
                          @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                        <label>Shadaqoh Uang</label>
                    <input type="number" name="s_uang" value="{{$muzaqi->s_uang}}" class="form-control" placeholder="Rp. ...">
                  </div>
                  <div class="form-group">
                        <label>Shadaqoh Beras</label>
                    <input type="number" name="s_beras" value="{{$muzaqi->s_beras}}" class="form-control" placeholder="... Kg">
                  </div>
                  
                  
                 <div class="form-group">
                        <label>Amilin</label>
                    <select name="amilin_id" id="amilin_id" class="form-control" required width="100%">
                          <option value="">-- Pilih --</option>
                          @foreach($amilin as $a)
                          <option value="{{$a->id}}" {{$muzaqi->amilin_id == $a->id ? 'selected' : ''}}>{{$a->nama}}</option>
                          @endforeach
                    </select>
                  </div>
                </div>
            </div>
          

            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-lg"><i class="far fa-save"></i> Edit Muzaqi</button>
            </div>
            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection