@include('template.head')

	@include('template.structure.heder')

		<div class="clearfix"></div>
		<!-- BEGIN CONTAINER -->
		<div class="page-container">

			@include('template.structure.sidebar')

				@yield("content")

			@include('template.structure.quick')

		</div>
		<!-- END CONTAINER -->
	@include('template.structure.footer')

@include('template.footerskripts')