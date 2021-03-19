<!DOCTYPE html>
<html>
<head>
    <title>INVOICE</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="zend/assets/images/lg.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="zend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="zend/assets/css/style.css">
    <link rel="stylesheet" href="zend/assets/css/style-responsive.css">
    <link rel="stylesheet" href="zend/assets/css/animate.min.css">
    <link rel="stylesheet" href="zend/assets/css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="zend/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="zend/assets/css/magnific-popup.css">

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
        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" style="text-align: center">Welcome To DESCO</h1>
    </section>



    <div class="page-section">
        <form class="insert-form" id="insert-form" method="GET" action="{{route('bill.dataupdate')}}">
            @csrf
        <div class="container relative">

            <div class=" col-md-offset-2">

                <table class="table table-striped shopping-cart-table">
                    <tr>
                        <th >
                            Customer ID
                        </th>
                        <th >
                            Name
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Current Month
                        </th>
                        <th>
                            Bill
                        </th>
                        <th>
                            Due Month
                        </th>
                        <th>
                            Due
                        </th>
                    </tr>

{{--                    <form class="insert-form" id="insert-form" method="GET" action="{{route('bill.update',$pay->id)}}" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('GET')--}}

                    <tr>
                        <td >
                            <input type="hidden" name="cid" value="{{$pay->cid}}">
                            {{$pay->cid}}
                        </td>
                        <td >
                            <input type="hidden" name="name" value="{{$pay->name}}">
                            {{$pay->name}}
                        </td>
                        <td>
                            <input type="hidden" name="address" value="{{$pay->address}}">
                            <input type="hidden" name="email" value="{{$pay->email}}">
                            {{$pay->address }}
                        </td>
                        <td>
                            <input type="hidden" name="phone" value="{{$pay->phone}}">
                            {{$pay->phone}}
                        </td>
                        <td>
                            <input type="hidden" name="pmonth" value="{{$pay->pmonth}}">
                            {{$pay->pmonth}}
                        </td>
                        <td>
                            <input type="hidden" name="bill" value="{{$pay->bill}}">
                            {{$pay->bill}}
                        </td>
                        <td>
                            <input type="hidden" name="duemonth" value="{{$pay->duemonth}}">
                            {{$pay->duemonth}}
                        </td>
                        <td>
                            <input type="hidden" name="due" value="{{$pay->due}}">
                            {{$pay->due}}
                        </td>
                        <td>
{{--                        <form class="insert-form" id="insert-form" method="GET" action="{{route('bill.dataupdate')}}">--}}
{{--                               @csrf--}}
{{--                               @method('POST')--}}

{{--                                  <input type="hidden" name="cid" value="{{$pay->cid}}">--}}
{{--                                  <button type="submit" class="submit_btn btn btn-mod btn-medium btn-round" >Pay</button>--}}
{{--                        </form>--}}
                        </td>
                    </tr>
                    {{--                   </form>--}}
                </table>
                <hr />


                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text align-right pt-10">

                        <div class="lead mt-0 mb-30">
                            Bill: <strong>{{$bill}} Taka</strong>
                        </div>

                        <div class="lead mt-0 mb-30">
                            Dues: <strong>{{$due}} Taka</strong>
                        </div>

                        <div class="lead mt-0 mb-30">
                            Total Bill: <strong>{{$total}} Taka</strong>
                        </div>

                        <div class="lead mt-0 mb-30">
                            <input type="hidden" name="vat" value="{{$vat}}">
                            VAT (15%): <strong>{{$vat}} Taka</strong>
                        </div>

                        <div class="lead mt-0 mb-30">
                            <input type="hidden" name="total" value="{{$payable}}">
                            Payable: <strong>{{$payable}} Taka</strong>
                        </div>

                        <div>
                            <button type="submit" class="submit_btn btn btn-mod btn-medium btn-round" >Pay</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </form>

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
