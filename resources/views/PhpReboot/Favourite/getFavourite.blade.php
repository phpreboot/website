@extends('layouts.Admin-LTE-2-3-4.master')

@section('title', 'Favourite')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('home') }}">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active">
            <i class="fa fa-star"></i> Favourite
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Favourite articles</h3>
                </div>
                <div class="box-body">
                    <div class="box-group" id="accordion-1">
                        @foreach($favoriteArticles as $favourite)
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-{{ $favourite->article->id }}">
                                            {{ $favourite->article->title }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-{{ $favourite->article->id }}" class="panel-collapse collapse">
                                    <div class="box-body">
                                        {{ $favourite->article->description }}
                                        <div class="pull-right">
                                            <a href="{{ url('magazine/article', $favourite->article->id) }}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection