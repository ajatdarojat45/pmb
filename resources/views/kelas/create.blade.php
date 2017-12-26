@extends('layouts.admin')
@section('title')
Product Create - Danuta Cipta Gemilang
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Product Create</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}">Product</a>
            </li>
            <li class="active">
                <strong>Create</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    @if (session('msg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{session('msg') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Create</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Code:</label>
                                        <div class="col-sm-10">
                                            @if ($errors->has('code'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('code') }}</strong>
                                            </span>
                                            @endif
                                            <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control summernote">
                                            {{ old('description') }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-4">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span><input type="number" class="form-control" value="{{ old('price') }}" name="price">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label">Quota:</label>
                                        <div class="col-sm-4">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-users"></i></span><input type="number" class="form-control" value="{{ old('quota') }}" name="quota">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date:</label>
                                        <div class="col-sm-4">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="{{ old('date') }}" name="date">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary pull-right btn-sm" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="fa fa-save"></i> Save
                                </button>
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