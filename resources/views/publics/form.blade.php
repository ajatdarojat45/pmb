@extends('layouts.public')
@section('header')
Index - PMB
@endsection
@section('content')
<div id="exTab2" class="container">
	<ul class="nav nav-tabs">
		<li>
			<a href="#detail" data-toggle="tab">Detail</a>
		</li>
		<li class="active">
			<a  href="#new" data-toggle="tab">New</a>
		</li>
		<li>
			<a href="#member" data-toggle="tab">Member</a>
		</li>
	</ul>
	<div class="tab-content ">
		<div class="tab-pane active" id="new">
			<div class="jumbotron">
				<div class="container">
					<fieldset class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIK: <strong style="color: red">{{ $errors->first('nik') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="nik" class="form-control" value="{{ old('nik') }}" placeholder="NIK (nomor induk kependudukan)">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama: <strong style="color: red">{{ $errors->first('name') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nama sesuai KTP">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat: <strong style="color: red">{{ $errors->first('address') }}</strong></label>
							<div class="col-sm-10">
								<textarea name="address" class="form-control">{{ old('address') }} </textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Desa: <strong style="color: red">{{ $errors->first('desa_id') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="" class="form-control" value="" id="search_text">
								<input type="hidden" name="desa_id" class="form-control" value="" id="desa_id">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email: <strong style="color: red">{{ $errors->first('email') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control" value="" placeholder="Pastikan email anda aktif">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Phone/Wa: <strong style="color: red">{{ $errors->first('phone') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="phone" class="form-control" value="" placeholder="Pastikan nomor telpon pribadi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Bank: <strong style="color: red">{{ $errors->first('bank_id') }}</strong></label>
							<div class="col-sm-10">
								<select name="" id="input" class="form-control" required="required">
									<option value="">-- Select bank --</option>
									@foreach ($banks as $bank)
										<option value="{{$bank->id}}" @if (old('bank_id') == $bank->id) ? selected : '' @endif>{{$bank->name}} </option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No. Rekening: <strong style="color: red">{{ $errors->first('no_rekening') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="no_rekening" class="form-control" value="" placeholder="Pastikan rekening pribadi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Atas Nama: <strong style="color: red">{{ $errors->first('nama_rekening') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="nama_rekening" class="form-control" value="" placeholder="Nama Rekening">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Ahli Waris: <strong style="color: red">{{ $errors->first('ahli_waris') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="ahli_waris" class="form-control" value="" placeholder="Istri / suami / anak / saudara">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">ID Upline: <strong style="color: red">{{ $errors->first('upline_id') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="upline_id" class="form-control" value="" placeholder="ID FIMZ upline">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">ID Sponsor: <strong style="color: red">{{ $errors->first('sponsor_id') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="sponsor_id" class="form-control" value="" placeholder="ID FIMZ sponsor">
							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="member">
			<div class="jumbotron">
				<div class="container">
					<div class="container">
					<fieldset class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Fimz ID: <strong style="color: red">{{ $errors->first('fimz_id') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="fimz_id" class="form-control" value="{{ old('fimz_id') }}" placeholder="Pastikan ID FIMZ milik anda">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">NIK: <strong style="color: red">{{ $errors->first('nik') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="nik" class="form-control" value="{{ old('nik') }}" placeholder="Nomor induk kependudukan">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama: <strong style="color: red">{{ $errors->first('nama') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nama sesuai KTP">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email: <strong style="color: red">{{ $errors->first('email') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control" value="" placeholder="Pastikan email anda aktif">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Phone/Wa: <strong style="color: red">{{ $errors->first('phone') }}</strong></label>
							<div class="col-sm-10">
								<input type="text" name="phone" class="form-control" value="" placeholder="Pastikan nomor telpon pribadi">
							</div>
						</div>
					</fieldset>
				</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="detail">
			<div class="jumbotron">
			</div>
		</div>
	</div>
</div>
@endsection