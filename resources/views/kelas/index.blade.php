@extends('layouts.admin')
@section('title')
Kelas - PMB
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Kelas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Kelas</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    @if (session('msg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{session('msg') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox-content">
                <h2 class="page-header">Kelas</h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                        {{-- {{ $banks->links() }} --}}
                    </div>
                    <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-plus-circle"></i> Add</a>
                </div><br>
                <div class="table-responsive">
                    <table id="example1" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Code</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Price</th>
                                <th style="text-align: center;">Quota</th>
                                <th style="text-align: center;">Locate</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($kelases as $kelas)
                                <tr>
                                    <td class="text-center">{{++$no}}</td>
                                    <td class="text-center">{{$kelas->code}}</td>
                                    <td class="text-center">{{$kelas->name}}</td>
                                    <td class="text-center">{{$kelas->date}}</td>
                                    <td class="text-center">{{$kelas->price}}</td>
                                    <td class="text-center">{{$kelas->quota}}</td>
                                    <td class="text-center">{{$kelas->locate}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary btn-outline"><i class="fa fa-file"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection