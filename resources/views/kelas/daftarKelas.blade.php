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
									<th class="text-center">No</th>
									<th class="text-center">Name</th>
									<th class="text-center">Price Member</th>
									<th class="text-center">Price Non Member</th>
									<th class="text-center">Quota</th>
									<th class="text-center">Locate</th>
									<th class="text-center">Date</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($kelases as $kelas)
									<tr>
										<td class="text-center">{{++$no}}</td>
										<td >{{$kelas->name}}</td>
										<td class="text-right">{{$kelas->price}}</td>
										<td class="text-right">{{$kelas->price_new}}</td>
										<td class="text-center">{{$kelas->quota}}</td>
										<td>{{$kelas->locate}}</td>
										<td class="text-center">{{$kelas->date}}</td>
										<td class="text-center">
											<a href="{{ route('detailKelas', $kelas->id) }}"><i class="fa fa-file"></i></a>
										</td>
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

