<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHPReboot | @yield('title')</title>
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- #End Favicon Icon -->
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ elixir("css/all.css") }}">
    <script src="{{ elixir("js/all.js") }}"></script>

</head>
<body class="hold-transition skin-green sidebar-mini sidebar-collapse">
    <div class="wrapper">
        @include('layouts.Admin-LTE-2-3-4.sections.header')
        @include('layouts.Admin-LTE-2-3-4.sections.menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $contentTitle or 'PHP Reboot' }}
                    <small>{{ $contentTitleSmall or '' }}</small>
                </h1>
                @section('breadcrumb')
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i> Home</li>
                </ol>
                @show
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2016 PHP Reboot.</strong><br>
            Blog post in magazine is just for knowledge sharing. They are copyright property of original site/authors.
        </footer>
    </div>

    <!-- Footer scripts. Need to check how to make it dynamic. -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    @if (env('APP_ENV') === "production")
        <!-- Google analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-49726690-1', 'auto');
            ga('send', 'pageview');
        </script>
    @endif
    <script>
        @yield('pagescript')
    </script>
</body>
</html>
