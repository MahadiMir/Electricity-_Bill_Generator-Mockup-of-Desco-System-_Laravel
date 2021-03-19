<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$you->cid.'_'.$you->pmonth.'_'."invoice"}}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>-->

</head>
<body >


                <div id="printableArea">
                    <div class="mainbody" style="width: 98%; height: 1035px; margin: auto; background: #dfe4ea; overflow: hidden;">

                        <!--    Header Design-->
                        <div class="header" style="margin: 0px; padding: 0px;">
                            <div style="margin: 0px; padding: 0px; float: left; width: 50%;">
                                <h1 style=" padding:10px; color: red; text-align: left; font-size: 30px; font-weight: lighter; margin-left: 25px; margin-top: 0px; margin-bottom:0px;">"দেশ প্রেমের শপথ নিন, দুর্নীতিকে বিদায় দিন"</h1>
                            </div>
                            <div style="margin: 0px; padding: 0px;  width: 20%; float: left;">
                                <img src="{{asset('assets/images/mujib.png')}}" height="60px" width="110px" alt="BangaBandhu 100 Year">
                            </div>
                            <div style="margin: 0px; padding: 0px;  width: 30%; float: left;">
                                <p style=" padding:10px; color: #1b8dbf; text-align: left; font-size: 35px; margin-left: 25px; margin-top: 0px; margin-right: 50px; margin-bottom: 0px; float: right;">(Consumer's Copy)</p>
                            </div>
                        </div>
                        <!--    Header Design End-->

                        <!--    Body Design-->
                        <div style="width: 95%; height: 880px; margin-left: auto; margin-right: auto;  background: #f1f2f6; border: 2px solid #0f3e68; margin-top: 100px;">

                            <!--    Body Design 1 -->
                            <div style="margin: 0px; padding: 0px;  width: 100%; height: 120px; border-bottom: 2px solid #0f3e68">
                                <div style="margin-left: 10px; padding: 0px; float: left; width: 30%; ">
                                    <img src="{{asset('assets/images/desco.png')}}" height="120px" width="370px" alt="">
                                </div>
                                <div  style="margin: 0px; padding: 0px; float: left; width: 49%; height: 120px; border-left: 2px solid #0f3e68; border-right: 2px solid #0f3e68;" >
                                    <p style="text-align: center; font-size: 20px; font-weight: bold; margin: 10px 0 0 0;">Dhaka Electricity Supply Company Ltd. (DESCO)</p>
                                    <p style="text-align: center; font-size: 15px; font-weight: bold; ">Sales And Distribution Division</p>
                                    <p style="text-align: center; font-size: 15px; font-weight: bold;margin: auto;">Electricity Bill LT- <span style="color: green; font-size: 25px;">{{rand(0,1000000000)}}</span></p>
                                </div>
                                <div style="margin-left: 10px; padding: 0px; float: left; width: 18%; height: 120px;" >
                                    <p style="text-align: left; font-size: 17px; font-weight: bold; margin: 10px 0 0 0;">Tariff  :  A</p>
                                    <p style="text-align: left; font-size: 17px; font-weight: bold; ">Zone/Block  :  TW1 / C150</p>
                                    <p style="text-align: left; font-size: 17px; font-weight: bold; margin-top: 5px; margin-bottom: auto;">Walking Order  :  120.50 </p>
                                </div>
                            </div>
                            <!-- End Body Design 1 -->
                            <!--    Body Design 2 -->
                            <div style="margin: 0px; padding: 0px;  width: 100%; height: 125px; border-bottom: 2px solid #0f3e68">
                                <div  style="margin: 0px; padding: 0px; float: left; width: 70%; height: 125px; border-right: 2px solid #0f3e68;" >
                                    <p style="text-align: Left; font-size: 20px; font-weight: bold;margin: auto;">Name & Address :</p>
                                    <p style="text-align: center; font-size: 30px; font-weight: bold;margin: auto;">{{$you->name}}</p>
                                    <p style="text-align: center; font-size: 25px; font-weight: bold;margin: 7px 0 0 0">{{$you->address}}</p>
                                </div>
                                <div style="margin-left: 10px; padding: 0px; float: left; width: 28%; " >
                                    <p style="text-align: left; font-size: 20px; font-weight: bold; margin: 5px 0 0 0;">CusID: <span style="margin-left: 20px;">{{$you->cid}}</span></p>
                                    <p style="text-align: left; font-size: 20px; font-weight: bold; ">Phone: <span style="margin-left: 20px;">{{$you->phone}}</span></p>
                                    <p style="text-align: left; font-size: 20px; font-weight: bold; ">Email: <span style="margin-left: 20px;">{{$you->email}}</span></p>
                                </div>
                            </div>
                            <!-- End Body Design 2 -->
                            <!--    Body Design 3 -->
                            <div style="margin: 0px; padding: 0px;  width: 100%; height: 125px; border-bottom: 2px solid #0f3e68">
                                <div  style="margin: 0px; padding: 0px; float: left; width: 70%;  border-right: 2px solid #0f3e68;" >
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 30px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-size: 20px; margin: 1px 0 0 10px;">Billing Month : <span style="margin-left: 20px;">{{$you->pmonth}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 39px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-size: 20px; margin: 1px 0 0 10px;">Billing Number : <span style="margin-left: 20px;">{{$you->cid.rand(0,10000)}}</span></p>
                                    </div>

                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 43px; ">
                                        <div style="margin: 0px; padding: 0px;  width: 45%; height: 28px; border-right: 2px solid #0f3e68; float: left;">
                                            <p style="text-align: left; font-size: 20px;  margin: 3px 0 0 10px;">Issue Date : <span style="margin-left: 20px;">{{date('Y-m-d')}}</span></p>
                                        </div>
                                        <div style="margin: 0px; padding: 0px;  width: 45%; height: 28px; float: left;">
                                            <p style="text-align: left; font-size: 20px;  margin: 3px 0 0 10px;">Payment Date : <span style="margin-left: 20px;">{{$you->created_at}}</span></p>
                                        </div>
                                    </div>

                                </div>
                                <div style="margin-left: 10px; padding: 0px; float: left; width: 29%; " >
                                    <p style="text-align: left; font-size: 20px; margin: 1px 0 0 0; font-weight: bold;">Normal KWH Charge: <span style="margin-left: 20px;">{{rand(0,1999)}}</span></p>
                                    <p style="text-align: left; font-size: 20px;  font-weight: bold;">PFC Charge: <span style="margin-left: 20px;">{{rand(0,199)}}</span></p>
                                    <p style="text-align: left; font-size: 20px; margin:auto; font-weight: bold;">X-former Loss: <span style="margin-left: 10px;">{{rand(0,999)}}</span></p>
                                </div>
                            </div>
                            <!-- End Body Design 3 -->
                            <!--    Body Design 4 -->
                            <div style="margin: 0px; padding: 0px;  width: 100%; height: 380px; border-bottom: 2px solid #0f3e68">
                                <div  style="margin: 0px; padding: 0px; float: left; width: 80%;  border-right: 2px solid #0f3e68; background: #0f3e68; height: 380px;" >

                                    <div style="margin: 0px; padding: 0px; float: left; width: 70%;  border-right: 2px solid #0f3e68; background: #f1f2f6;">
                                        <img src="{{asset('assets/images/mujib.png')}}" height="380px" width="700px" alt="">
                                    </div>

                                    <div style="margin: 0px; padding: 0px; float: left; width: 29%; height:380px; ">
                                        <div style="margin: 20px 0px 5px 0px; padding: 0px; float: left; width: 100%; height: 65px; border-bottom: 2px solid #0f3e68;">
                                            <p style="text-align: center; font-size: 20px; font-weight: bold; margin: 10px 0 0 auto;  "><span style="margin-left: 20px; color: white; ">শেখ হাসিনা উদ্যোগ</span><br><span style="margin-left: 20px; color: red;">ঘরে ঘরে বিদ্যুৎ</span></p>
                                        </div>
                                        <div style="margin: 0px; padding: 0px; float: left; width: 100%; height: 220px; background-color: #0f3e68;">
                                            <p style="text-align: center; background-color: #d5d5d5; font-size: 22px; font-weight: bold; margin: 7px 0 0 10px; border: 2px solid #0f3e68;"><span style="margin-left: 20px; color: red;">- সতর্কীকরণ : <br> নির্ধারিত ব্যাংক , ব্যাংক বুথ , ইন্টারনেট , বিকাশ কিংবা এমীণ ফোন ও রবির মােবাইল ফোন বা বিল পে সেন্টার / পয়েন্ট ব্যতীত অন্য কোথাও ভেসকের বিদ্যুৎ বিল গ্রহণ করা হয় না ।</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left: 5px; padding: 0px; float: left; width: 19%;  height: 300px;" >
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 40px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">Current Month : <span style="margin-left: 10px; color: #0f3e68;">{{$you->pmonth}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height:40px; border-bottom: 2px solid #0f3e68">
                                        <p  style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">Bill : <span style="margin-left: 10px; color: #0f3e68;">{{$you->bill}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 60px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">Due Months : <span style="margin-left: 10px; color: #0f3e68;">{{$you->duemonth}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 40px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">Due : <span style="margin-left: 10px; color: #0f3e68;">{{$you->due}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 40px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">VAT(15%) : <span style="margin-left: 10px; color: #0f3e68;">{{$you->vat}}</span></p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 40px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: left; font-weight:bold; font-size: 21px; margin: 4px  0 0 3px;">PAID : <span style="margin-left: 10px; color: #0f3e68;">{{$you->total}}</span></p>
                                    </div>
                                    <p style="text-align: center; font-size: 25px; font-weight: bold; margin: 5px 0 0 0; color: green;">You Have successfully paid all dues</p>
                                </div>
                            </div>
                            <!-- End Body Design 4 -->
                            <!--    Body Design 5-->
                            <div style=" margin-top: 10px; padding: 0px;  width: 100%; height: 108px; ">

                                <div  style="margin: 0px; padding: 0px; float: left; width: 70%;  border-right: 2px solid #0f3e68;" >
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 54px; border-bottom: 2px solid #0f3e68">
                                        <p style="text-align: center; font-size: 23px; margin: 0 0 0 10px; color: red;">Notice If this bill is not paid within 01/11/2020, line will be disconnected. No further notice will be issued This bill will be treated as final notice for Disconnection</p>
                                    </div>
                                    <div style="margin: 0px; padding: 0px;  width: 100%; height: 53px; ">
                                        <p style="text-align: center; font-size: 18px; margin: 2px 0 0 10px; color: red;">বিশেষ দ্রষ্টব্য : বিচ্ছিন্নকরণ তারিখের পূর্বে বিল পরিশোধ করা না হইলে বিদ্যুৎ সংযোগ বিচ্ছিন্ন করিয়া দেওয়া হইবে । ইহার জন্য আর কোন পৃথক নােটিশ দেওয়া হইবে না । এই বিল বিজ্জিাকরণের চুড়ান্ত নােটিশ বলিয়া গণ্য হইবে ।</p></div>
                                </div>
                                <div style="margin: 0px; padding: 0px; float: left; width: 28%; " >
                                    <img src="{{asset('assets/images/mir.png')}}" width="80%" height="60px" alt="" style="margin-left: 40px;">
                                    <p style="text-align: center; font-size: 30px; margin: 0 0 0 10px; color: red;">Executive Engineer</p>

                            </div>
                            <!--   End Body Design 5-->
                        </div>
                        <!-- End Body Design  -->



                    </div>
                </div>
                </div>
                <p style="display: inline-block; color: red; font-size: 15px; float: left; font-weight: bolder;">*Chrome is recommended for better view*</p><input type="button" style="width: 200px; height: 50px; margin-top: 10px;  font-size: x-large; color: white; font-weight: 700; background: #0f3e68; border: 0px;
    border-radius: 30px; float: right;" class="print_button btn btn-info btn-block" onclick="printDiv('printableArea')" value="print"/>

                <script>
                    function printDiv(divName){
                        var printContents = document.getElementById(divName).innerHTML;
                        var originalContents = document.body.innerHTML;
                        document.body.innerHTML = printContents;
                        window.print();
                        document.body.innerHTML = originalContents;
                    }
                </script>



{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<!-- End Page Wrap -->
<!-- JS -->



</body>
</html>
