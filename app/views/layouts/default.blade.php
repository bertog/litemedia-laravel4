<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<html class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
{{--<link href="css/style.css" rel="stylesheet" type="text/css">--}}

{{ HTML::style('css/style.css') }}

<title>Litemedia Amazing App</title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
{{--<script type="text/javascript" src="js/frameworks/modernizr.min.js"></script>--}}
{{--<script src="js/frameworks/css3-mediaqueries.js"></script>--}}

{{ HTML::script('js/frameworks/modernizr.min.js') }}
{{ HTML::script('js/frameworks/css3-mediaqueries.js') }}

</head>

<body>

{{--    @include('layouts.partials.main-nav')--}}

	<div class="container">
    @include('flash::message')

    @yield('content')

{{--    @include('layouts.partials.footer')--}}

    </div> <!-- /container -->

    @include('partials.scripts')
{{--    @include('layouts.partials.facebook-api')--}}
{{--    @include('layouts.partials.twitter-api')--}}

</body>
</html>
