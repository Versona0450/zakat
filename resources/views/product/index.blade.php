@extends('layoutS.template')

@section('titlebar')
    ZAKAT FITRAH
@endsection


@section('content')

	<div class="container">
		<div class="head-content">
			<div class="row">
				<div class="col">
					<p>Zakat Fitrah</p>
				</div>
			</div>
		</div>
		<div class="main-content">
			<div class="row">
				<div class="col">
					<table border="1" cellpadding="1" cellspacing="1" width="100%">
						<tr>
							<td rowspan="2" width="20%"> Jumlah Jiwa </td>
							<td colspan="5"> Asumsi Harga Beras /kg</td>
						</tr>
						<tr>
							<td>Rp. 10000</td>
							<td>Rp. 12000</td>
							<td>Rp. 13000</td>
							<td>Rp. 14000</td>
							<td>Rp. 15000</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Rp. 25000</td>
							<td>Rp. 30000</td>
							<td>Rp. 32500</td>
							<td>Rp. 35000</td>
							<td>Rp. 37500</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Rp. 50000</td>
							<td>Rp. 60000</td>
							<td>Rp. 65000</td>
							<td>Rp. 70000</td>
							<td>Rp. 75000</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection