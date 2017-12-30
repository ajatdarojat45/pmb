<!DOCTYPE html>
<html>
	<head>
		<title>@yield('header')</title>
		<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
		<link href="{{ asset('pace/themes/blue/pace-theme-loading-bar.css') }}" rel="stylesheet" />
		{{-- autocomplete --}}
		<link href="{{ asset('autocomplete/jquery.ui.autocomplete.css') }}" rel="stylesheet">
		{{-- datepicker --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="{{ route('home') }}">PMB</a>
			</div>
		</nav>
		<br><br><br>
		<center>
		<p><b>Selamat datang di wbsite PMB (Powerfull Magic Bussiness)</b></p>
		<p>Cek kode pendaftaran anda</p>
		</center>
		<div class="row">
			<div class="col-md-4 col-lg-4">
			</div>
			<div class="col-md-4 col-lg-4">
				<form action="{{ route('peserta/search') }}" method="GET" role="form">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="code">
						<div class="input-group-addon"><button type="submit"><i class="fa fa-search"></i> </button> </div>
					</div>
				</form>
			</div>
		</div>
		<br>
		@yield('content')
		{{-- <div class="row">
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				<div class="container">
					<a class="navbar-brand" href="#">Booking Online Pendakian Gunung Gede Pangrango</a>
					
				</div>
			</nav>
		</div> --}}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
		{{-- autocomplete --}}
		<script src="{{ asset('autocomplete/jquery-ui.min.js') }}"></script>
		{{-- datepicker --}}
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		{{-- pace --}}
		<script src='{{ asset('pace/pace.min.js') }}' type='text/javascript'></script>
		<script type="text/javascript">
			$(document).ready(function() {
			$("#checkBoxID").click(function() {
				$("#buttonID").attr("disabled", !this.checked);
				});
			});
		</script>
		{{-- autocomplete --}}
		<script type="text/javascript">
		src = "{{ route('desa/autoComplete') }}";
		$(function() {
		$("#search_text").autocomplete({
		source: src,
		minLength: 3,
		select: function( event, ui ) {
		$("#search_text").val(ui.item.value);
		$("#desa_id").val(ui.item.id);
		}
		});
		});
		</script>
		{{-- datepicker --}}
		<script type="text/javascript">
			$(function(){
			   $('.datepicker').datepicker({
			      format: 'yyyy-mm-dd'
			    });
			});
		</script>
	</body>
</html>