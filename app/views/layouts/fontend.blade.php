<!DOCTYPE html>
<html>
<head>
	<title>Blade Tepmpletting</title>

<!-- 	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/londinium-theme.css') }}
	{{ HTML::style('css/styles.css') }}
	{{ HTML::style('css/icons.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
 -->

	{{ HTML::style('fontend/css/bootstrap.min.css') }}
	{{ HTML::style('fontend/css/font-awesome.min.css') }}
	{{ HTML::style('fontend/css/custom.css') }}

    {{ HTML::script('fontend/js/jquery-1.11.1.min.js') }}
	{{ HTML::script('fontend/js/bootstrap.js') }}


</head>

<body>
	@include('elements.fontend.navbar') 
	<div class="container">

        <!-- Page content -->
        <div>
            @if(Session::has('message'))
                <div class="alert alert-warning fade in block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-info"></i> {{ Session::get('message') }}
                </div>
            @endif

            @yield('content')

            @include('elements.admin.footer')

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
