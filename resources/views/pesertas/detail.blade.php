@extends('layouts.public')
@section('header')
Detail - PMB
@endsection
@section('content')
<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li>
				<a href="{{ route('home') }}">Home</a>
			</li>
			<li class="active">Search</li>
			<li class="active">{{$peserta->code}}</li>
		</ol>
	</div>
	<div class="row">
		@if (session('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Success!</strong> {{session('success') }}
		</div>
		@elseif(session('warning'))
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Warning!</strong> {{session('warning') }}
		</div>
		@elseif(session('danger'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Danger!</strong> {{session('danger') }}
		</div>
		@endif
	</div>
	<div class="row">
		<div class="jumbotron">
			<div class="container">
				<center>
					<h1>{{$peserta->code}} 
					@if (count($peserta->payment) <> 0)
						@if ($peserta->payment->stat == 0)
							<i class="fa fa-check-clock" style="color: green"></i></h1>
						@elseif($peserta->payment->stat == 1)
							<i class="fa fa-check-circle" style="color: green"></i></h1>
						@elseif($peserta->payment->stat == 2)
							<i class="fa fa-times-circle" style="color: green"></i></h1>
						@endif
					@endif
				</center>
				{{-- peserta --}}
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<center><h3>Detail Peserta</h3></center>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">NIK</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->nik}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Name</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->name}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Address</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->address}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Email</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->email}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Phone</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->phone}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Bank</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->bank_id}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">No Rekening</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->no_rekening}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Nama Rekening</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->nama_rekening}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Ahli Waris</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->ahli_waris}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Upline</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->upline_id}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Sponsor</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->sponsor_id}}
							</div>
						</div>
					</div>
					{{-- kelas --}}
					<div class="col-md-6 col-lg-6">
						<center><h3>Detail Kelas</h3></center>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Code</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->code}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Name</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->name}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Date</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->date}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Price Member</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->price}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Price Non Member</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->price_new}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Quota</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->quota}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<label class="control-label">Locate</label>
							</div>
							<div class="col-md-8 col-lg-8">
								: {{$peserta->kelas->locate}}
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<center><h3>Pembayaran</h3></center>
					@if (count($peserta->payment) <> 0)
					<div class="col-md-8 col-lg-8">
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">Code</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->code}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">Bank</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->bank->name}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">No. Rekening</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->no_rekening}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">Nama Rekening</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->name_rekening}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">Nominal</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->nominal}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<label class="control-label">Notes</label>
							</div>
							<div class="col-md-9 col-lg-9">
								: {{$peserta->payment->notes}}
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<center>
							<a href="{{ asset('storage/payments/'.$peserta->payment->attach) }}" target="_blank">
								<img src="{{ asset('storage/payments/'.$peserta->payment->attach) }}" width="200px">
							</a>
						</center>
					</div>
					@else
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Notic!</strong> Silahkan melakukan transfer sebesar Rp. {{$peserta->kelas->price}} ke rekening 157.000.287.0279. (Mandiri) an. Mohamad Darwin.
					</div>
					<center>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-money"></i> Make a payment</a>
					</center>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Konfirmasi Pembayaran</h4>
								</div>
								<div class="modal-body">
									<form action="{{ route('payment/store') }}" method="POST" role="form" enctype="multipart/form-data">
										<fieldset class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-3 control-label">Bank: <strong style="color: red">{{ $errors->first('bank_id') }}</strong></label>
												<div class="col-sm-9">
													<select name="bank_id" id="input" class="form-control" required="required">
														<option value="">-- Select bank --</option>
														@foreach ($banks as $bank)
														<option value="{{$bank->id}}" @if (old('bank_id') == $bank->id) selected @endif>
															{{$bank->name}}
														</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">No. Rekening:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('no_rekening') }}</strong>
													<input type="text" name="no_rekening" class="form-control" value="{{ old('no_rekening') }}" placeholder="No. Rekening">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Nama:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('name_rekening') }}</strong>
													<input type="text" name="name_rekening" class="form-control" value="{{ old('name_rekening') }}" placeholder="Nama Rekening">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Nominal:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('nominal') }}</strong>
													<input type="number" name="nominal" class="form-control" value="{{ old('nominal') }}" placeholder="Nominal">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Date:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('date') }}</strong>
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="text" name="date" class="form-control datepicker" value="{{ old('date') }}" placeholder="Date">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Attach:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('image') }}</strong>
													<input type="file" name="image" class="form-control" value="{{ old('image') }}" placeholder="Bukti Transfer">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Notes:</label>
												<div class="col-sm-9">
													<strong style="color: red">{{ $errors->first('notes') }}</strong>
													<textarea name="notes" class="form-control" placeholder="(Optional)">{{ old('notes') }}</textarea>
												</div>
											</div>
											<input type="hidden" name="peserta_id" value="{{$peserta->id}}">
											{{csrf_field()}}
										</fieldset>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Konfirmasi</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection