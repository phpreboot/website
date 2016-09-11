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
            <a href="{{ url('magazine', [ $article->magazine->short_name ]) }}">
                <i class="fa fa-book"></i> {{ $article->magazine->short_name }}
            </a>
        </li>
        <li class="active">
            <i class="fa fa-tablet"></i> Magazine
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Article details</h3>
                </div>
                <div class="box-body">
                    <strong><i class="fa fa-user margin-r-5"></i> Author</strong>
                    <p class="text-muted">
                        {{ $article->author->name }}
                        </br>
                        {{-- -------------------------------------------------------------------
                          -- We need this check because few authors do not have twitter account.
                          -- -------------------------------------------------------------------
                          -- 
                          -- Once we have twitter account for all the authors, we can remove
                          -- this check.
                          --
                          -- If author do not have twitter account, do not show twitter link.
                          --
                          -- -------------------------------------------------------------------
                          --}}
                        @if ($article->author->twitter != null && $article->author->twitter != "")
                            <i class="fa fa-twitter margin-r-5"></i>
                            <a href="https://twitter.com/{{ $article->author->twitter }}" target="_blank">
                                {{ $article->author->twitter }}
                            </a>
                        @endif
                    </p>
                    <hr/>
                    <strong><i class="fa fa-globe margin-r-5"></i> Published on</strong>
                    <p class="text-muted">
                        {{ $article->website->name }}
                    </p>
                    <hr/>
                    <strong><i class="fa fa-external-link margin-r-5"></i> Original URL</strong>
                    <p class="text-muted">
                        <a href="{{ stripslashes($article->url) }}" target="_blank">{{ stripslashes($article->url) }}</a>
                    </p>
                    <hr/>
                    <strong>
                        <i class="fa fa-globe margin-r-5"></i> Categoty
                        <span class="badge bg-aqua-active pull-right">{{ $article->category->name }}</span>
                    </strong>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Copyright notice</h3>
                </div>
                <div class="box-body">
                    <p class="text-muted">
                        PHP reboot is a PHP developer's community/user group in Pune, India.
                        We attempt to collect some informative articles, blogs, tutorials,
                        available on internet. We do it as non-profit and purely for knowledge
                        sharing purpose.
                    </p>
                    <p>
                        <strong>
                            All the articles are property of their respective authors and/or websites.
                            Original URL and author information is given above.
                        </strong>
                    </p>
                    <p>
                        In case any author/website wish not to share their articles on PHP Reboot,
                        please let us know by sending a mail at info@phpreboot.com or through @phpreboot
                        twitter handle.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="user-block">
                        <span class="username"><a href="#">{{ $article->title }}</a></span>
                        <span class="description">Published on {{ $article->published_at }}</span>
                    </div>
                    <!-- /.user-block -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>{{ $article->description }}</p>
                    <p>
                        <iframe src="{{ stripslashes($article->url) }}" width="100%" height="500px">
                            <p>Your browser does not support iframes.</p>
                        </iframe>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection