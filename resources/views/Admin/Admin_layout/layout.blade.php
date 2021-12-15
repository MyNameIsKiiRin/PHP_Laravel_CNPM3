<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/Admin/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/Admin/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('assets/Admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/Admin/css/light-bootstrap-dashboard.css?v=2.0.0')}} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/Admin/css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/Admin/css/PagedList.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://cdn.tiny.cloud/1/se5hwa2c7v5urvd0zw8h5krqexxjvxfdxes75z5hqzbjl0xw/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('assets/Admin/img/sidebar-5.jpg')}}">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        <ion-icon name="person-outline" size="large"></ion-icon>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item  ">
                        <a class="nav-link" href=#>
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href={{ Route('allproduct') }}>
                                <i class="nc-icon nc-circle-09"></i>
                                <p>Sản Phẩm</p>

                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href={{ Route('getimport') }}>
                            <i class="nc-icon nc-notes"></i>
                            <p>Nhập Hàng</p>
                        </a>
                    <li class="nav-item  ">
                        <a class="nav-link" href=#>
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Duyệt Đơn Hàng</p>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href=#>
                            <i class="nc-icon nc-atom"></i>
                            <p>Doanh Thu</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href=#>
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Đăng Xuất</p>
                        </a>
                    </li>
                </ul>
                </div>
                
            </div>
              <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    
                    @yield('content')
                </div>
            </div>
        </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/Admin/js/jquery.unobtrusive-ajax.js')}}"></script>
<script src="{{asset('assets/Admin/js/jquery.unobtrusive-ajax.min.js')}}"></script>
<script src="{{asset('assets/Admin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/Admin/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/Admin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="~{{asset('assets/Admin/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('assets/Admin/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/Admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('assets/Admin/js/light-bootstrap-dashboard.js?v=2.0.0')}} " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/Admin/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
<script src="{{asset('assets/Admin/js/delivery.js')}}"></script>
<script src="{{asset('assets/Admin/js/accept.js')}}"></script>
<script>
    // $('#AlertBox').removeClass('hide');
    // $('#AlertBox').delay(1000).slideUp(500);
</script>
</html>