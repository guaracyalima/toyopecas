<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toypeças</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{asset('css/admin/basic.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/theme.css')}}" class="style-theme">

    <!--[if lt IE 9]>
    <script src="js/basic/respond.min.js"></script>
    <script src="js/basic/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body >
    <div class="app">

        @yield('content')

    </div>

<!-- ===== JS =====-->
<!-- jQuery-->
<script src="{{ asset('js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-migrate.min.js') }}"></script>
<!-- General-->
<script src="{{ asset('js/admin/modernizr.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.asonWidget.js') }}"></script>
<script src="{{ asset('js/admin/plugins/plugins.js') }}"></script>
<script src="{{ asset('js/admin/general.js') }}"></script>
<!-- Semi general-->
<script type="text/javascript">
    var paceSemiGeneral = { restartOnPushState: false };
    if (typeof paceSpecific != 'undefined'){
        var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
        paceOptions = paceOptions;
    }else{
        paceOptions = paceSemiGeneral;
    }

</script>
<script src="{{ asset('js/admin/plugins/pageprogressbar/pace.min.js') }}"></script>
<!-- Specific-->
<script src="{{ asset('js/admin/classie.js') }}"></script>
<script src="{{ asset('js/admin/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/accordions/jquery.collapsible.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/forms/elements/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/forms/elements/jquery.switchery.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/page/jquery.blank.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/tooltip/jquery.tooltipster.min.js') }}"></script>
<script src="{{ asset('js/admin/calls/page.blank.js') }}"></script>
<script src="{{ asset('js/admin/calls/part.header.1.js') }}"></script>
<script src="{{ asset('js/admin/calls/part.theme.setting.js') }}"></script>

@yield('post-script')
</body>
</html>