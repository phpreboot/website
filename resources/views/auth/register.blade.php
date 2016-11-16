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
                {!! Form::open(['action'=>'Auth\AuthController@postRegister']) !!}
                    <div class="box-body">
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
                            {!! Form::label('name','Name (Will be displayed):') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            {!! Form::label('email','Email:') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'E-mail']) !!}
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <!-- password -->
                        <div class="form-group">
                            {!! Form::label('password','Password:') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>'password']) !!}
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <!-- confirm password -->
                        <div class="form-group">
                            {!! Form::label('password_confirmation','Confirm password:') !!}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'password']) !!}
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    <div class="box-footer">
                        <div class="pull-left">
                            Already having account? <a href="{{url('/auth/login')}}">Sign in</a>.
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info">Sign up</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection