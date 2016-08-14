@extends('layouts.Admin-LTE-2-3-4.master')

@section('title', 'Sign up')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('home') }}">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active">
            <i class="fa fa-user-plus"></i> Sign up
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <div class="box box-solid box-info">
                <div class="box-header">
                    <h3 class="box-title">Sign up</h3>
                </div>
                <form method="POST" action="/auth/register">
                    <div class="box-body">
                        {!! csrf_field() !!}
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="icon fa fa-ban"></i>{{ $error }}
                            </div>
                            @endforeach
                        @endif
                        <!-- name -->
                        <div class="form-group">
                            <label>Name (Will be displayed):</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label>Email:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <!-- password -->
                        <div class="form-group">
                            <label>Password:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <input type="password" class="form-control" placeholder="password" name="password"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <!-- confirm password -->
                        <div class="form-group">
                            <label>Confirm password:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    <div class="box-footer">
                        <div class="pull-left">
                            Already having account? <a href="/auth/login">Sign in</a>.
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info">sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection