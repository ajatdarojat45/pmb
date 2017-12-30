@extends('layouts.admin')
@section('title')
Peserta - PMB
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Peserta</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Peserta</strong>
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
                <h2 class="page-header">Peserta</h2>
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
                                <th style="text-align: center;">NIK</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Fimz ID</th>
                                <th style="text-align: center;">Stat</th>
                                <th style="text-align: center;">Created at</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($pesertas as $peserta)
                                <tr>
                                    <td>{{++$no}}</td>
                                    <td>{{$peserta->code}}</td>
                                    <td>{{$peserta->nik}}</td>
                                    <td>{{$peserta->name}}</td>
                                    <td>{{$peserta->email}}</td>
                                    <td>{{$peserta->phone}}</td>
                                    <td>{{$peserta->fimz_id}}</td>
                                    <td>{{$peserta->stat}}</td>
                                    <td>{{$peserta->created_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-file"></i></a>
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