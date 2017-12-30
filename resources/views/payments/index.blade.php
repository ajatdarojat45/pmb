@extends('layouts.admin')
@section('title')
Pembayaran - PMB
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Pembayaran</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Pembayaran</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    @if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox-content">
                <h2 class="page-header">Pembayaran</h2>
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
                                <th style="text-align: center;">Bank</th>
                                <th style="text-align: center;">No. Rekening</th>
                                <th style="text-align: center;">Atas Nama</th>
                                <th style="text-align: center;">Nominal</th>
                                <th style="text-align: center;">Date</th>
                                <th style="text-align: center;">Stat</th>
                                <th style="text-align: center;">Created at</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($payments as $payment)
                                <tr>
                                    <td class="text-center">{{++$no}}</td>
                                    <td class="text-center">{{$payment->code}}</td>
                                    <td>{{$payment->peserta->name}}</td>
                                    <td>{{$payment->bank->name}}</td>
                                    <td>{{$payment->no_rekening}}</td>
                                    <td>{{$payment->name_rekening}}</td>
                                    <td class="text-right">{{$payment->nominal}}</td>
                                    <td class="text-center">{{$payment->date}}</td>
                                    <td class="text-center">
                                        @if ($payment->stat == 0)
                                            <span class="label label-warning">New</span>
                                        @elseif($payment->stat == 1)
                                            <span class="label label-primary">Valid</span>
                                        @elseif($payment->stat == 2)
                                            <span class="label label-danger">Block</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{$payment->created_at}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm btn-outline"><i class="fa fa-file"></i></a>
                                        <a href="{{ route('payment/validasi', ['id' => $payment->id, 'stat' => 1]) }}" class="btn btn-primary btn-sm btn-outline confirm"><i class="fa fa-check-circle"></i></a>
                                        <a href="{{ route('payment/validasi', ['id' => $payment->id, 'stat' => 2]) }}" class="btn btn-danger btn-sm btn-outline confirm"><i class="fa fa-times-circle"></i></a>
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