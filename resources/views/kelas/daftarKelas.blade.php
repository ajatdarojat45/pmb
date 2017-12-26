@extends('layouts.public');

@section('header')
Daftar Kelas - PMB
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-1 col-lg-1">
			
		</div>
		<div class="col-md-10 col-lg-10">
			<div class="jumbotron">
				<div class="container">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Price</th>
									<th>Quota</th>
									<th>Address</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kelases as $kelas)
									<tr>
										<td>{{++$no}}</td>
										<td>{{$kelas->name}}</td>
										<td>{{$kelas->price}}</td>
										<td>{{$kelas->quota}}</td>
										<td>{{$kelas->locate}}</td>
										<td>{{$kelas->Date}}</td>
										<td><a href="{{ route('detailKelas', $kelas->id) }}"><i class="fa fa-file"></i></a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-lg-1">
			
		</div>
	</div>
</div>
@endsection

