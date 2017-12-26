<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="{{ asset('inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/datapicker/datepicker3.css') }} " rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/steps/jquery.steps.css') }} " rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/summernote/summernote.css') }} " rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/summernote/summernote-bs3.css') }} " rel="stylesheet">
        <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
        <!-- Sweet Alert -->
        <link href="{{ asset('inspinia/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('inspinia/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
        <!-- Toastr style -->
        <link href="{{ asset('inspinia/css/plugins/toastr/toastr.min.css') }} " rel="stylesheet">
        <!-- FooTable -->
        <link href="{{ asset('inspinia/css/plugins/footable/footable.core.css') }} " rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap.css') }}">
        <link href="{{ asset('inspinia/css/plugins/blueimp/css/blueimp-gallery.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{ asset('inspinia/img/profile_small.jpg') }}" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold"></strong>
                                    </span>
                                    <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="">Profile</a></li>
                                {{-- <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li> --}}
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('kelas/index') }}"><i class="fa fa-university"></i> <span class="nav-label">Kelas</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Peserta</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">New</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Pembayaran</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">New</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('peraturan') }}"><i class="fa fa-cog"></i> <span class="nav-label">Peraturan</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user-circle"></i> <span class="nav-label">User</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')
        <div class="footer">
            <div class="pull-right">
                {{-- 10GB of <strong>250GB</strong> Free. --}}
            </div>
            <div>
                <strong>Copyright</strong> Danuta Cipta Gemilang &copy; 2017
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{ asset('inspinia/js/jquery-2.1.1.js') }} "></script>
<script src="{{ asset('inspinia/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }} "></script>
<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia/js/inspinia.js') }} "></script>
<script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }} "></script>
<!-- Data picker -->
<script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
<!-- Steps -->
<script src="{{ asset('inspinia/js/plugins/staps/jquery.steps.min.js') }} "></script>
<!-- Jquery Validate -->
<script src="{{ asset('inspinia/js/plugins/validate/jquery.validate.min.js') }} "></script>
<!-- SUMMERNOTE -->
<script src="{{ asset('inspinia/js/plugins/summernote/summernote.min.js') }} "></script>
<!-- iCheck -->
<script src="{{ asset('inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>
<!-- Data picker -->
<script src="{{ asset('inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }} "></script>
<!-- Date range picker -->
<script src="{{ asset('inspinia/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Sweet alert -->
<script src="{{ asset('inspinia/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<!-- slick carousel-->
<script src="{{ asset('inspinia/js/plugins/slick/slick.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('inspinia/js/plugins/toastr/toastr.min.js') }}"></script>
<!-- FooTable -->
<script src="{{ asset('inspinia/js/plugins/footable/footable.all.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- blueimp gallery -->
<script src="{{ asset('inspinia/js/plugins/blueimp/jquery.blueimp-gallery.min.js') }}"></script>
<script>
$(document).ready(function(){
$('.i-checks').iCheck({
checkboxClass: 'icheckbox_square-green',
radioClass: 'iradio_square-green',
});
});
</script>
<script>
$(document).ready(function(){
$('#loading-example-btn').click(function () {
btn = $(this);
simpleLoad(btn, true)
// Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });
simpleLoad(btn, false)
});
});
function simpleLoad(btn, state) {
if (state) {
btn.children().addClass('fa-spin');
btn.contents().last().replaceWith(" Loading");
} else {
setTimeout(function () {
btn.children().removeClass('fa-spin');
btn.contents().last().replaceWith(" Refresh");
}, 2000);
}
}
</script>
<script>
$(document).ready(function(){
$('.summernote').summernote();
});
var edit = function() {
$('.click2edit').summernote({focus: true});
};
var save = function() {
var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
$('.click2edit').destroy();
};
</script>
<script type="text/javascript">
$(document).ready(function () {
$('#rate').modal('show');
});
$('#data_1 .input-group.date').datepicker({
todayBtn: "linked",
keyboardNavigation: false,
forceParse: false,
calendarWeeks: true,
autoclose: true,
format: "yyyy/mm/dd"
});
$('#data_1_1 .input-group.date').datepicker({
todayBtn: "linked",
keyboardNavigation: false,
forceParse: false,
calendarWeeks: true,
autoclose: true,
format: "yyyy/mm/dd"
});
$('#data_2 .input-group.date').datepicker({
startView: 1,
todayBtn: "linked",
keyboardNavigation: false,
forceParse: false,
autoclose: true,
format: "mm/dd/yyyy"
});
$('#data_3 .input-group.date').datepicker({
startView: 2,
todayBtn: "linked",
keyboardNavigation: false,
forceParse: false,
autoclose: true
});
$('#data_4 .input-group.date').datepicker({
minViewMode: 1,
keyboardNavigation: false,
forceParse: false,
forceParse: false,
autoclose: true,
todayHighlight: true
});
$('#data_5 .input-daterange').datepicker({
keyboardNavigation: false,
forceParse: false,
autoclose: true
});
$('.demo4').click(function () {
swal({
title: "Are you sure?",
text: "Your will not be able to recover this imaginary file!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel plx!",
closeOnConfirm: false,
closeOnCancel: false },
function (isConfirm) {
if (isConfirm) {
swal("Deleted!", "Your imaginary file has been deleted.", "success");
} else {
swal("Cancelled", "Your imaginary file is safe :)", "error");
}
});
});
</script>
<!-- Page-Level Scripts -->
<script>
$(document).ready(function() {
$('.footable').footable();
});
</script>
<script>
jQuery(document).ready(function($){
$('.confirm').on('click',function(){
var getLink = $(this).attr('href');
swal({
title: "Are you sure?",
text: "do this action",
type: "warning",
html: true,
confirmButtonColor: '#d9534f',
showCancelButton: true,
},
function(){
window.location.href = getLink
});
return false;
});
});
</script>
<script>
$(function () {
$("#example1").DataTable();
$("#example3").DataTable();
$("#example4").DataTable();
$("#example5").DataTable();
$("#example6").DataTable();
$("#example7").DataTable();
$("#example8").DataTable();
$("#example9").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false
});
});
</script>
<script type="text/javascript">
$(window).on('load',function(){
$('#confirm').modal('show');
});
</script>
</body>
</html>