
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/images/favicon.ico">

    <title>@yield('title')</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="/assets/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/skin_color.css">

</head>

<body class="@yield('bodyType')" style="background-image: url('/assets/images/auth-bg/bg-16.jpg')">


@yield('content')

	<!-- Vendor JS -->
	<script src="/assets/js/vendors.min.js"></script>
	<script src="/assets/js/pages/chat-popup.js"></script>
  <script src="/assets/icons/feather-icons/feather.min.js"></script>

{{--    //extra assets--}}
@yield('extraAssets')
</body>
</html>
