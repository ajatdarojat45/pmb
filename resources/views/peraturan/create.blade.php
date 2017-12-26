@extends('layouts.admin')
@section('title')
Peraturan - PMB
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Peraturan</h2>
        <ol class="breadcrumb">
            <li>
                <a href="">Dashboard</a>
            </li>
            <li class="active">
                <strong>Peraturan</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    @if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Peraturan</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <form action="{{ route('updatePeraturan') }}" method="post" enctype="multipart/form-data">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                            <textarea name="description" class="form-control summernote">
                                            {{$peraturan->description}}
                                            </textarea>
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                </fieldset>
                                <button  type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection