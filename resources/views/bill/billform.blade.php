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
    <!-- End Head Section -->


    <!-- Portfolio Section -->
    <div class="page-section">
        <div class="container relative">



            <div class="row">

                <!-- Col -->

                <div class="col-sm-8 col-sm-offset-2">


                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs animate">
                            <li class="active">
                                <a href="#mini-one" data-toggle="tab">Enter ID to Download Receipt</a>
                            </li>
                            <li>
                                <a href="#mini-two" data-toggle="tab">Enter ID For Payment</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont align-center section-text">
                        <div class="tab-pane fade in active" id="mini-one">
                            <div class="align-center">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="clearfix">
                                            <form class=" form contact-form" id="contact_form" method="GET" action="{{route('bill.receipt')}}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Name -->
                                                <div class="form-group">
                                                    <input type="text" name="cid" id="cid" class="input-md round form-control" placeholder="Enter Your ID" required>
                                                </div>
                                                <div class="form-group">
                                                    <select class="input-md round form-control" name="month" required>
                                                        <option value="month">Choose Month</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                                <!-- Email -->

                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                    <button type="submit" class="submit_btn btn btn-mod btn-medium btn-round" >Download Receipt </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Contact Form -->
                            </div>
                        </div>
                        </div>

                        <div class="tab-pane fade" id="mini-two">
                            <div class="align-center">
                                <!-- Contact Form -->
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="clearfix">
                                            <form class=" form contact-form" id="contact_form" method="GET" action="{{route('bill.invoice')}}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Name -->
                                                <div class="form-group">
                                                    <input type="text" name="cid" id="cid" class="input-md round form-control" placeholder="Enter Your ID" required>
                                                </div>
                                                <!-- Email -->

                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                    <button type="submit" class="submit_btn btn btn-mod btn-medium btn-round" >Submit </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Contact Form -->
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- End Col -->

                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
    <!-- End Page Wrap -->\
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
