<!DOCTYPE HTML>
<html>
<head>
    <title>Free Adidas Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href={{asset('assets/Client/css/style.css')}} rel="stylesheet" type="text/css" media="all" />
    <link href={{asset('assets/Client/css/form.css')}} rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{asset('assets/Client/js/jquery.min.js')}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!-- start menu -->
    <link href="{{asset('assets/Client/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('assets/Client/js/megamenu.js')}}"></script>
    <script>$(document).ready(function () { $(".megamenu").megamenu(); });</script>
    <!-- end menu -->
    <script type="text/javascript" src="{{asset('assets/Client/js/jquery.jscrollpane.min.js')}}"></script>
    <script type="text/javascript" id="sourcecode">
        $(function () {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!----details-product-slider--->
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="{{asset('assets/Client/css/etalage.css')}}">
    <script src="{{asset('assets/Client/js/jquery.etalage.min.js')}}"></script>
    <!-- Include the Etalage files -->
    <script>
        jQuery(document).ready(function ($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,

                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
            // This is for the dropdown list example:
            $('.dropdownlist').change(function () {
                etalage_show($(this).find('option:selected').attr('class'));
            });

        });
    </script>
    <!----//details-product-slider--->
    <!-- top scrolling -->
    <script type="text/javascript" src="{{asset('assets/Client/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Client/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
            });
        });
    </script>
</head>
<body>
    <div class="header-top mb-3 p-2">
        <div class="wrap d-flex justify-content-between" style="height: 45px">
            <div class="logo m-0">
                <a href="" style="color: rebeccapurple; font-size: 31px; text-decoration: none; padding: 3px; border: 3px solid linen; box-shadow: 5px 10px orange;"><span class="text-danger">N</span>ew <span class="text-danger">S</span>tore</a>
            </div>

           {{-- @using (Html.BeginForm("Search", "Home",FormMethod.Get, new { @class = "d-inline-flex" })) --}}
            
                <input type="search" id="form1" class="form-control" name="TenSP" style="width:56%" />
                <button type="submit" class="btn btn-primary">Search</button>
            

            <div class="cssmenu">
                <ul>
                    <li class="active">{{-- @Html.ActionLink("Sign up & Save", "Register", "Account") --}}</li>
                    <li><a href="https://goo.gl/maps/yA6r1vp8LVpPF2Va8">Store Locator</a></li>
                    <li{{-- >@Html.ActionLink("My Account", "Login", "Account") --}}</li>
                    <li><a href=>Gi??? H??ng</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="header-bottom" style="background: orange">
        <div class="wrap">
           {{--  //@{Html.RenderAction("MenuPartial","Home");} --}}
        </div>
    </div>
    <!--Content-->
    <div class="main">
        <div class="wrap">
            @yield('content')
        </div>
    </div>
    <!--End Content-->
    <div class="footer">
        <div class="footer-top">
            <div class="wrap">
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon.png" alt="" /><span class="delivery">Free delivery on all orders over ??100*</span></li>
                    </ul>
                </div>
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon1.png" alt="" /><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
                    </ul>
                </div>
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon2.png" alt="" /><span class="delivery">Fast delivery & free returns</span></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="wrap">
                <div class="section group">
                    <div class="col_1_of_middle span_1_of_middle">
                        <dl id="sample" class="dropdown">
                            <dt><a href="#"><span>Please Select a Country</span></a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                                    <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                                    <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                                    <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                                    <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                                    <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col_1_of_middle span_1_of_middle">
                        <ul class="f_list1">
                            <li>
                                <span class="m_8">Sign up for email and Get 15% off</span>
                                <div class="search">
                                    <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                                    <input type="submit" value="Subscribe" id="submit" name="submit">
                                    <div id="response"> </div>
                                </div><div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                <div class="section group">

                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Th??ng tin li??n h???</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Gi???i thi???u c??ng ty</a></li>
                            <li><a href="shop.html">H??? th???ng c???a h??ng</a></li>
                            <li><a href="shop.html">Ch??nh s??ch b???o m???t</a></li>
                            <li><a href="shop.html">Mail: epu@gmail.com</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Th??ng tin kh??c</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Quy ch??? ho???t ?????ng</a></li>
                            <li><a href="shop.html">Ch??nh s??ch B???o h??nh</a></li>
                            <li><a href="shop.html">Li??n h??? h???p t??c kinh doanh</a></li>
                            <li><a href="shop.html">KH??ch h??ng doanh nghi???p</a></li>
                            <li><a href="shop.html">??u ????i t??? ?????i t??c</a></li>
                            <li><a href="shop.html">Tuy???n d???ng</a></li>
                            <li><a href="shop.html">Trade-in thu c?? l??n ?????i</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">H??? tr??? kh??ch h??ng</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Mua h??ng v?? thanh to??n online</a></li>
                            <li><a href="shop.html">Mua h??ng tr??? g??p online</a></li>
                            <li><a href="shop.html">Tra th??ng ????n h??ng</a></li>
                            <li><a href="shop.html">Tra th??ng tin b???o h??nh</a></li>
                            <li><a href="shop.html">Trung t??m b???o h??nh ch??nh h??ng</a></li>
                            <li><a href="shop.html">Quy ?????nh v??? vi???c sao l??u d??? li???u</a></li>
                            <li><a href="shop.html">D???ch v??? b???o h??nh ??i???n tho???i</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">G???i t?? v???n v?? khi???u n???i</h3>
                        <ul class="list1">
                            <li><a href="shop.html">G???i mua h??ng: 0855100001</a></li>
                            <li><a href="shop.html">H??? tr??? k?? thu???t</a></li>
                            <li><a href="shop.html">H???p t??c kinh doanh</a></li>


                        </ul>

                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">C??c s???n ph???m</h3>
                        <ul class="list1">
                            <li><a href="shop.html">??i???n tho???i</a></li>
                            <li><a href="shop.html">Laptop</a></li>
                            <li><a href="shop.html">Tablet</a></li>


                        </ul>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="wrap">
                <p>?? All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };


            $().UItoTop({ easingType: 'easeOutQuart' });
            $('.promotion').marquee()

        });
    </script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
   {{--  //@RenderSection("Jquery", required: false) --}}
    <script type="text/javascript">

        
    </script>
</body>
</html>