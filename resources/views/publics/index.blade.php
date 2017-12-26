@extends('layouts.public')
@section('header')
Index - PMB
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-1 col-lg-1">
		</div>
		<div class="col-md-10 col-lg-10">
			<div class="jumbotron">
				<div class="container">
					{!!$peraturan->description!!}
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="" id="checkBoxID">
					<b>Saya sudah membaca, dan sudah memahami semua ketentuan di atas, dan saya menyetujuinya.</b>
				</label>
			</div>
			<a href="{{ route('daftarKelas') }}" class="btn btn-primary" id="buttonID" disabled> Daftar</a>
		</div>
		<div class="col-md-1 col-lg-1">
		</div>
	</div>
</div>
@endsection