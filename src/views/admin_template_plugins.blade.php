 	    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


	<!-- NEW JS FILES  -->
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/select2/select2.full.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/fastclick/fastclick.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/morris/morris.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/knob/jquery.knob.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{asset('vendor/crudbooster/jquery.price_format.2.0.min.js')}}"></script>
	<script src="{{ asset('vendor/crudbooster/assets/lightbox/dist/js/lightbox.min.js') }}"></script>
	<script src="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.min.js')}}"></script>

	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/dist/js/app.min.js') }}"></script>
	{{--<script src="{{ asset ('vendor/crudbooster/assets/adminlte_4/dist/js/pages/dashboard.js') }}"></script>--}}

	<script src="{{ asset ('vendor/crudbooster/assets/AdminLTE-2.4.0/dist/js/demo.js') }}"></script>


	<script>			
		var ASSET_URL           = "{{asset('/')}}";
		var APP_NAME            = "{{CRUDBooster::getSetting('appname')}}";		
		var ADMIN_PATH          = '{{url(config("crudbooster.ADMIN_PATH")) }}';
		var NOTIFICATION_JSON   = "{{route('NotificationsControllerGetLatestJson')}}";
		var NOTIFICATION_INDEX  = "{{route('NotificationsControllerGetIndex')}}";

		var NOTIFICATION_YOU_HAVE      = "{{trans('crudbooster.notification_you_have')}}";
		var NOTIFICATION_NOTIFICATIONS = "{{trans('crudbooster.notification_notification')}}";
		var NOTIFICATION_NEW           = "{{trans('crudbooster.notification_new')}}";

		$(function() {
			$('.datatables-simple').DataTable();
		})
	</script>
	<script src="{{asset('vendor/crudbooster/assets/js/main.js').'?r='.time()}}"></script>

	
