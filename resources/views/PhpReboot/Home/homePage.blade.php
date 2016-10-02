@extends('layouts.Admin-LTE-2-3-4.master')

@section('title', 'Home')

@section('content')
    <h2>What we do?</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-gradient">
                    <h3 class="widget-user-username">Meet ups</h3>
                    <h5 class="widget-user-desc">meetup.com</h5>
                    <div class="phpricon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="/img/logo200x200txt.png" alt="User Avatar">
                </div>
                <div class="box-footer bg-green-gradient">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">297</h5>
                                <span class="description-text">Members</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">13</h5>
                                <span class="description-text">Meetups</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">08/09/2016</h5>
                                <span class="description-text">Next</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-sm-12 border-right">
                            <div class="pull-right">
                                <a href="{{ route('meetup') }}" style="color:#FFF">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-orange-active">
                    <h3 class="widget-user-username">PHP Conference</h3>
                    <h5 class="widget-user-desc">To be announced</h5>
                    <div class="phpricon">
                        <i class="fa fa-microphone"></i>
                    </div>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="/img/logo200x200txt.png" alt="User Avatar">
                </div>
                <div class="box-footer bg-green-gradient">
                    <div class="row">
                        <div class="col-sm-12 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Under planning</h5>
                                <span class="description-text">Will be announced soon.</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 border-right">
                            <div class="pull-right">
                                Read more
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-gradient">
                    <h3 class="widget-user-username">Magazine</h3>
                    <h5 class="widget-user-desc">Collection of blogs and news.</h5>
                    <div class="phpricon">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="/img/logo200x200txt.png" alt="User Avatar">
                </div>
                <div class="box-footer bg-green-gradient">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">2</h5>
                                <span class="description-text">issues</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">32</h5>
                                <span class="description-text">Articles</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">23/09/2016</h5>
                                <span class="description-text">Last added</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-sm-12 border-right">
                            <div class="pull-right">
                                <a href="{{ url('magazine/sep16') }}" style="color:#FFF">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>
    <!-- /.row -->
    <h2>We love Twitter:</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-body">
                    <a class="twitter-timeline"  href="https://twitter.com/phpreboot" data-widget-id="439522484484718593">Tweets by @phpreboot</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Follow PHP reboot on Twitter.
                </div>
            </div>
        <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-body">
                    <a class="twitter-timeline"  href="https://twitter.com/phpreboot/lists/phpers-to-follow" data-widget-id="531795927338471424"> Tweets from https://twitter.com/phpreboot/lists/phpers-to-follow</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Should we add others in list? Please suggest on twitter.
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
