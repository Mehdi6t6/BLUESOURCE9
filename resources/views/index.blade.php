<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap local  link -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>BLUE SOURCE</title>
</head>

<body class="bg-color">


{{--HEADER START--}}
<!-- header navbar -->
@include('header')
{{--HEADER END--}}


{{--MAIN START--}}
@yield('content')
{{--MAIN END--}}



{{--FOOTER START--}}
@include('footer')
{{--FOOTER END--}}




<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script> -->
<script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>
