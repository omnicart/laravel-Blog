<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <!-- //header starts here -->
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

@section('main-content')
@show
 <!-- footer starts here -->
@include('admin.layouts.footer')
  <!-- Control Sidebar -->


</body>

</html>