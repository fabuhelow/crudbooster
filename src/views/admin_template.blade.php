<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ ($page_title)?CRUDBooster::getSetting('appname').': '.strip_tags($page_title):"Admin Area" }}</title>
 	  <meta name="csrf-token" content="{{ csrf_token() }}" />
	  <meta name='generator' content='CRUDBooster 5.4.0.1'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon" href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>        


    <!-- new THEME -->
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/font-awesome/css/font-awesome.css") }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/dist/css/AdminLTE.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/dist/css/skins/_all-skins.min.css") }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/iCheck/flat/blue.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/morris/morris.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/datepicker/datepicker3.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/daterangepicker/daterangepicker.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/select2/select2.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("vendor/crudbooster/assets/adminlte_4/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='{{ asset("vendor/crudbooster/assets/lightbox/dist/css/lightbox.css") }}'/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.css')}}">

    <!-- support rtl-->
    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <link href="{{ asset("vendor/crudbooster/assets/rtl.css")}}" rel="stylesheet" type="text/css" />
    @endif

    <link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css").'?r='.time()}}'/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- load css -->
    <style type="text/css">
        @if($style_css)
            {!! $style_css !!}
        @endif
    </style>
    @if($load_css)
        @foreach($load_css as $css)
            <link href="{{$css}}" rel="stylesheet" type="text/css" />
        @endforeach
    @endif

    <style type="text/css">
        .dropdown-menu-action {left:-130%;}
        .btn-group-action .btn-action {cursor: default}
        #box-header-module {box-shadow:10px 10px 10px #dddddd;}
        .sub-module-tab li {background: #F9F9F9;cursor:pointer;}
        .sub-module-tab li.active {background: #ffffff;box-shadow: 0px -5px 10px #cccccc}
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {border:none;}
        .nav-tabs>li>a {border:none;}
        .breadcrumb {
            margin:0 0 0 0;
            padding:0 0 0 0;
        }
        .form-group > label:first-child {display: block}

        span.info-box-icon i {

            line-height: 90px !important;
        }
    </style>

    @stack('head')
</head>

<body class="hold-transition skin-blue sidebar-mini" classx="@php echo (Session::get('theme_color'))?:'skin-blue'; echo ' '; echo config('crudbooster.ADMIN_LAYOUT'); @endphp">
<div id='app' class="wrapper">    

    <!-- Header -->
    @include('crudbooster::header')

    <!-- Sidebar -->
    @include('crudbooster::sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
          <?php 
            $module = CRUDBooster::getCurrentModule();
          ?>
          @if($module)
          <h1>
            <i class='{{$module->icon}}'></i>  {{($page_title)?:$module->name}} &nbsp;&nbsp;
            
            <!--START BUTTON -->         
                                        
            @if(CRUDBooster::getCurrentMethod() == 'getIndex')
            @if($button_show)
            <a href="{{ CRUDBooster::mainpath().'?'.http_build_query(Request::all()) }}" id='btn_show_data' class="btn btn-sm btn-primary" title="{{trans('crudbooster.action_show_data')}}">
              <i class="fa fa-table"></i> {{trans('crudbooster.action_show_data')}}
            </a>
            @endif

            @if($button_add && CRUDBooster::isCreate())                          
            <a href="{{ CRUDBooster::mainpath('add').'?return_url='.urlencode(Request::fullUrl()).'&parent_id='.g('parent_id').'&parent_field='.$parent_field }}" id='btn_add_new_data' class="btn btn-sm btn-success" title="{{trans('crudbooster.action_add_data')}}">
              <i class="fa fa-plus-circle"></i> {{trans('crudbooster.action_add_data')}}
            </a>
            @endif                          
            @endif

              
            @if($button_export && CRUDBooster::getCurrentMethod() == 'getIndex')
            <a href="javascript:void(0)" id='btn_export_data' data-url-parameter='{{$build_query}}' title='Export Data' class="btn btn-sm btn-primary btn-export-data">
              <i class="fa fa-upload"></i> {{trans("crudbooster.button_export")}}
            </a>
            @endif

            @if($button_import && CRUDBooster::getCurrentMethod() == 'getIndex')
            <a href="{{ CRUDBooster::mainpath('import-data') }}" id='btn_import_data' data-url-parameter='{{$build_query}}' title='Import Data' class="btn btn-sm btn-primary btn-import-data">
              <i class="fa fa-download"></i> {{trans("crudbooster.button_import")}}
            </a>
            @endif

            <!--ADD ACTIon-->
             @if(count($index_button))                          
               
                    @foreach($index_button as $ib)
                     <a href='{{$ib["url"]}}' id='{{str_slug($ib["label"])}}' class='btn {{($ib['color'])?'btn-'.$ib['color']:'btn-primary'}} btn-sm' 
                      @if($ib['onClick']) onClick='return {{$ib["onClick"]}}' @endif
                      @if($ib['onMouseOever']) onMouseOever='return {{$ib["onMouseOever"]}}' @endif
                      @if($ib['onMoueseOut']) onMoueseOut='return {{$ib["onMoueseOut"]}}' @endif
                      @if($ib['onKeyDown']) onKeyDown='return {{$ib["onKeyDown"]}}' @endif
                      @if($ib['onLoad']) onLoad='return {{$ib["onLoad"]}}' @endif
                      >
                        <i class='{{$ib["icon"]}}'></i> {{$ib["label"]}}
                      </a>
                    @endforeach                                                          
            @endif
            <!-- END BUTTON -->
          </h1>


          <ol class="breadcrumb">
            <li><a href="{{CRUDBooster::adminPath()}}"><i class="fa fa-dashboard"></i> {{ trans('crudbooster.home') }}</a></li>
            <li class="active">{{$module->name}}</li>
          </ol>
          @else
          <h1>{{CRUDBooster::getSetting('appname')}} <small>Information</small></h1>
          @endif
        </section>	
		

        <!-- Main content -->
        <section id='content_section' class="content">

        	@if(@$alerts)
        		@foreach(@$alerts as $alert)
        			<div class='callout callout-{{$alert[type]}}'>        				
        					{!! $alert['message'] !!}
        			</div>
        		@endforeach
        	@endif


			@if (Session::get('message')!='')
			<div class='alert alert-{{ Session::get("message_type") }}'>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-info"></i> {{ trans("crudbooster.alert_".Session::get("message_type")) }}</h4>
				{!!Session::get('message')!!}
			</div>
			@endif



            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('crudbooster::footer')

</div><!-- ./wrapper -->


@include('crudbooster::admin_template_plugins')

<!-- load js -->
@if($load_js)
  @foreach($load_js as $js)
    <script src="{{$js}}"></script>
  @endforeach
@endif
<script type="text/javascript">
  var site_url = "{{url('/')}}" ;
  @if($script_js)
    {!! $script_js !!}
  @endif 
</script>

@yield('custom_js')

@stack('bottom')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>
