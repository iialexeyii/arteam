<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
	{!! Html::style( asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')) !!}
	{!! Html::style( asset('public/assets/global/plugins/font-awesome/css/font-awesome.min.css')) !!}
	{!! Html::style( asset('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')) !!}
	{!! Html::style( asset('public/assets/global/plugins/bootstrap/css/bootstrap.min.css')) !!}
	{!! Html::style( asset('public/assets/global/plugins/uniform/css/uniform.default.css')) !!}
	{!! Html::style( asset('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')) !!}
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	@if (isset($levelst))
		@foreach ($levelst as $st)
	{!! Html::style( asset('public/assets/'.$st)) !!}
		@endforeach
	@endif
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES -->
	{!! Html::style( asset('public/assets/global/css/components.css')) !!}
	{!! Html::style( asset('public/assets/global/css/plugins.css')) !!}
	{!! Html::style( asset('public/assets/admin/layout/css/layout.css')) !!}
	{!! Html::style( asset('public/assets/admin/layout/css/themes/default.css' ),["id" => "style_color"]) !!} 
	{!! Html::style( asset('public/assets/admin/layout/css/custom.css')) !!}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="public/assets/favicon.ico"/>
</head>
<!-- END HEAD -->