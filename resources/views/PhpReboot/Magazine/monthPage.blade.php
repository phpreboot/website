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
        <div class="col-sm-12 col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">What is PHP Reboot magazine?</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body text-justify">
                    PHP Reboot is a PHP developer's user group in Pune, India.
                    <br/><br/>
                    To help developers remain updated with latest technology, we collect some good
                    articles and tutorials around the web, and call it as magazine. Articles here are
                    categorized in month and category. <strong>We are not original authors. Original author and
                    website where articles were orignally published are given on article detail page.</strong>
                    <br/><br/>
                    Thus PHP reboot magazine is just collection of articles:
                    <ul>
                        <li>Written by developers (Personal blogs/free tutorial sites)</li>
                        <li>Collected by developers</li>
                        <li>&amp; meant for developers</li>
                    </ul>
                    <br/>
                    <strong>PHPreboot.com is a open-source website and its source can be forked/downloaded
                    from <a href="https://github.com/phpreboot/website" target="_blank">github</a>.</strong>
                    <br/><br/>
                    Like any community effort, we depends on community to succeed, and we are looking
                    forward to active contribution from other developers.
                    <br/><br/>
                    If you are willing to contribute (just few minutes/hours a week), there are multiple
                    ways to contribute. Please 
                    <a href="https://github.com/phpreboot/website#contribution" target="_blank">click here</a>
                    to see how you can contribute.
                </div>
            </div>
        </div>
    </div>
@endsection