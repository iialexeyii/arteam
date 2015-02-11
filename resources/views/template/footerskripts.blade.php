<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{!! HTML::script( asset('public/assets/global/plugins/respond.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/excanvas.min.js')) !!} 
<![endif]-->
{!! HTML::script( asset('public/assets/global/plugins/jquery.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/jquery-migrate.min.js')) !!}
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{!! HTML::script( asset('public/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/bootstrap/js/bootstrap.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/jquery.blockui.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/jquery.cokie.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/uniform/jquery.uniform.min.js')) !!}
{!! HTML::script( asset('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')) !!}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

   @if (isset($levelsc))
      @foreach ($levelsc as $sc)
         {!! Html::script( asset('public/assets/'.$sc)) !!}
      @endforeach
   @endif

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script( asset('public/assets/global/scripts/metronic.js')) !!}
{!! HTML::script( asset('public/assets/admin/layout/scripts/layout.js')) !!}
{!! HTML::script( asset('public/assets/admin/layout/scripts/quick-sidebar.js')) !!}
{!! HTML::script( asset('public/assets/admin/layout/scripts/demo.js')) !!}
{!! HTML::script( asset('public/assets/admin/pages/scripts/index.js')) !!}
{!! HTML::script( asset('public/assets/admin/pages/scripts/tasks.js')) !!}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features 
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>