<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHPReboot|@yield('title')</title>
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- #End Favicon Icon -->
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap-3.3.6/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminLTE-2.3.4/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <!-- For PHPReboot.com, we prefer green screen. -->
    <link rel="stylesheet" href="/adminLTE-2.3.4/css/skins/skin-green.min.css">
    <!-- Left few CSS from AdminLTE. Need to include as and when needed. -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <!-- jQuery 2.2.3 -->
    <script src="/js/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bootstrap-3.3.6/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="/adminLTE-2.3.4/js/app.min.js"></script>

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
