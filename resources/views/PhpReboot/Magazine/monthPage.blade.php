@extends('layouts.Admin-LTE-2-3-4.master')

@section('title', 'Meetup')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('home') }}">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active">
            <i class="fa fa-book"></i> Magazine
        </li>
    </ol>
@endsection

@section('content')
    <h2 class="page-header">Articles added during {{ $magazine->name }}.</h2>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            @foreach ($articles as $category=>$categoryArticles)
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $category }}</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-group" id="accordion-{{ $category }}">
                            @foreach($categoryArticles as $article)
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion-{{ $category }}" href="#collapse-{{ $article->id }}">
                                                {{ $article->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-{{ $article->id }}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            {{ $article->description }}
                                            <div class="pull-right">
                                                <a href="{{ url('magazine/article', $article->id) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection