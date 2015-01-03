<!DOCTYPE html>
<html>
<head>
	<title>Blade Tepmpletting</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/londinium-theme.css') }}
	{{ HTML::style('css/styles.css') }}
	{{ HTML::style('css/icons.css') }}

	{{ HTML::style('css/font-awesome.min.css') }}

	<!-- {{ HTML::style('css/bootstrap-timepicker.min.css') }}
	{{ HTML::style('css/datepicker.css') }} -->

	 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">



    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


	{{ HTML::script('js/plugins/charts/sparkline.min.js') }}
	{{ HTML::script('js/plugins/forms/uniform.min.js') }}
	{{ HTML::script('js/plugins/forms/select2.min.js') }}
	{{ HTML::script('js/plugins/forms/inputmask.js') }}
	{{ HTML::script('js/plugins/forms/autosize.js') }}
	{{ HTML::script('js/plugins/forms/inputlimit.min.js') }}
	{{ HTML::script('js/plugins/forms/listbox.js') }}
	{{ HTML::script('js/plugins/forms/multiselect.js') }}
	{{ HTML::script('js/plugins/forms/validate.min.js') }}
	{{ HTML::script('js/plugins/forms/tags.min.js') }}
	{{ HTML::script('js/plugins/forms/switch.min.js') }}
	{{ HTML::script('js/plugins/forms/uploader/plupload.full.min.js') }}
	{{ HTML::script('js/plugins/forms/uploader/plupload.queue.min.js') }}
	{{ HTML::script('js/plugins/forms/wysihtml5/wysihtml5.min.js') }}
	{{ HTML::script('js/plugins/forms/wysihtml5/toolbar.js') }}
	{{ HTML::script('js/plugins/interface/daterangepicker.js') }}
	{{ HTML::script('js/plugins/interface/fancybox.min.js') }}
	{{ HTML::script('js/plugins/interface/moment.js') }}
	{{ HTML::script('js/plugins/interface/jgrowl.min.js') }}
	{{ HTML::script('js/plugins/interface/fullcalendar.min.js') }}
	{{ HTML::script('js/plugins/interface/datatables.min.js') }}
	{{ HTML::script('js/plugins/interface/colorpicker.js') }}
	{{ HTML::script('js/plugins/interface/timepicker.min.js') }}
	{{ HTML::script('js/plugins/interface/collapsible.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/application.js') }}

<!-- 	{{ HTML::script('js/bs-datetime/bootstrap-datepicker.js') }}
	{{ HTML::script('js/bs-datetime/bootstrap-timepicker.min.js') }}
	 -->



</head>

<body>
	<div class="container">

	@include('elements.fontend.navbar') 

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
