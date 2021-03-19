{{--@extends('layouts.master')--}}
{{--@section('title', 'Stock')--}}
{{--@section('content')--}}
    <!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="zend/assets/images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="zend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="zend/assets/css/style.css">
    <link rel="stylesheet" href="zend/assets/css/style-responsive.css">
    <link rel="stylesheet" href="zend/assets/css/animate.min.css">
    <link rel="stylesheet" href="zend/assets/css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="zend/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="zend/assets/css/magnific-popup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src ="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">



    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/filter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/apple.png')}}" />
    <!-- Toastr -->
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}

<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

</head>
<body class="appear-animate">

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">



    <!-- Head Section -->
    <section class="small-section bg-dark-alfa-30 parallax-2" data-background="zend/assets/images/full-width-images/section-bg-18.jpg">
        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" style="text-align: center">Bill From DESCO</h1>
        <h2 class="hs-line-11 font-alt mb-20 mb-xs-0" style="text-align: center">Receipt of {{$you->pmonth}}</h2>
    </section>



    <div class="page-section">

        <div class="container relative">

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="card">--}}
                    <div class="card-body p-0">
                        <div class="row p-5">
                            <div class="col-md-6">
                                <img src="{{asset('assets/images/logo/mm.png')}}" width="200" alt="logo" />
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-1 " style="font-size: 20px">Invoice # {{$you->cid}}</p>
                                <p class="text-muted" style="font-size: 20px">Due to: {{date('d-m-Y')}}</p>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row pb-5 p-5">
                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4" style="font-size: 20px">Client Information</p>
                                <p class="mb-1" style="font-size: 20px">{{$you->name}}</p>
                                <p class="mb-1" style="font-size: 20px">{{$you->address}}</p>
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-4" style="font-size: 20px">Payment Details</p>
                                <p class="mb-1" style="font-size: 20px"><span class="text-muted" style="font-size: 20px">Payment Type: </span > Root</p>
                                <p class="mb-1" style="font-size: 20px"><span class="text-muted" style="font-size: 20px">Name: </span> {{$you->name}}</p>
                                <p class="mb-1" style="font-size: 20px"><span class="text-muted" style="font-size: 20px">Phone: </span> {{$you->phone}}</p>
                                <p class="mb-1" style="font-size: 20px"><span class="text-muted" style="font-size: 20px">Email: </span> {{$you->email}}</p>
                                <p class="mb-1" style="font-size: 20px"><span class="text-muted" style="font-size: 20px">Bill of Month: </span> {{$you->pmonth}}</p>
                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">Customer ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">Month</th>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">Bill</th>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">Due Month</th>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">Due Bill</th>
                                        <th class="border-0 text-uppercase small font-weight-bold" style="font-size: 15px">VAT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="font-size:15px">{{$you->cid}}</td>
                                        <td style="font-size: 15px">{{$you->pmonth}}</td>
                                        <td style="font-size: 15px">{{$you->bill}}</td>
                                        <td style="font-size: 15px">{{$you->duemonth}}</td>
                                        <td style="font-size: 15px">{{$you->due}}</td>
                                        <td style="font-size: 15px">{{$you->vat}} Taka</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2" ><p style="font-size: 20px">Grand Total </p></div>
                                <div class="h2 font-weight-light" ><p style="font-size: 30px">{{$you->total}} Taka </p></div>
                            </div>

                        </div>
                    </div>
        </div>

    </div>
</div>
<!-- End Page Wrap -->
<!-- JS -->
<script type="text/javascript" src="zend/assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="zend/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="zend/assets/js/SmoothScroll.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.viewport.mini.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="zend/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="zend/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="zend/assets/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="zend/assets/js/wow.min.js"></script>
<script type="text/javascript" src="zend/assets/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.simple-text-rotator.min.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="zend/assets/js/all.js"></script>
<script type="text/javascript" src="zend/assets/js/contact-form.js"></script>
<script type="text/javascript" src="zend/assets/js/jquery.ajaxchimp.min.js"></script>
<!--[if lt IE 10]><script type="text/javascript" src="zend/assets/js/placeholder.js"></script><![endif]-->


</body>
</html>
