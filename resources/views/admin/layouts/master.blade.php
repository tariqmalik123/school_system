<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin-assets/images/favicon.ico')}}">

    <title>Easy School Management System</title>



	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin-assets/css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('admin-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin-assets/css/skin_color.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">






@include('admin.layouts.header')



@include('admin.layouts.sidebar')



@yield('content')



@include('admin.layouts.footer')






     <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script src="{{asset('admin-assets/js/vendors.min.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

	<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('admin-assets/js/pages/data-table.js') }}"></script>


	<!-- Easy Admin App -->
	<script src="{{asset('admin-assets/js/template.js')}}"></script>
	<script src="{{asset('admin-assets/js/pages/dashboard.js')}}"></script>





<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script>
</body>
</html>
