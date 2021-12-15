@extends('Clients.Client_layout.layout')
@section('content')
    @foreach ($product as $product)
       <div class="single">
        <div class="wrap">
            <div class="row">
                <div class="labout span_1_of_a1 col-xs-12 col-md-5" style="max-width:100%">
                    <!-- start product_slider -->
                    <ul id="etalage">
                        <li>
                            <a href="optionallink.html">
                                <img class="etalage_thumb_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh1)}} />
                                <img class="etalage_source_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh1) }} />
                            </a>
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh2) }} />
                            <img class="etalage_source_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh2) }} />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh3 ) }} />
                            <img class="etalage_source_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh3) }}/>
                        </li>

                        <li>
                            <img class="etalage_thumb_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh1 ) }} />
                            <img class="etalage_source_image" src={{ asset('assets/Client/Product_Images/'.$product->HinhAnh1) }}/>
                        </li>
                    </ul>

                
                    <!-- end product_slider -->
                </div>
                <div class="cont1 span_2_of_a1 col-md-5" style="font-size: 20px;">
                    <h3 class="m_3">{{ $product->TenSP }}</h3>

                    <div class="price_single">
                        <span class="reducedfrom">{{ $product->DonGia }}</span>
                        <span class="actual">{{ $product->DonGia }}đ</span><a href="#">click for offer</a>
                    </div>
                    <ul class="options">
                        <h4 class="m_9">Cấu Hình</h4>
                        @foreach ($config as $config)
                        
                            <li><button id={{ $config->MaCH }} class="btn btn-outline-primary" style="border:none" onclick="getid(this.id)">{{ $config->TenCH }}</button></li>

                        @endforeach
                        
                        <div class="clearfix"></div>
                    </ul>
                    <div class="btn_form">
                        <button id="but" class="btn btn-warning" onclick="noti()">Mua Ngay</button>
                    </div>
                    
                    <p class="m_desc" style="font-size:15px">{!!$product->GioiThieu !!}</p>

                    <div class="social_single">
                        <ul>
                            <li class="fb"><a href="#"><span> </span></a></li>
                            <li class="tw"><a href="#"><span> </span></a></li>
                            <li class="g_plus"><a href="#"><span> </span></a></li>
                            <li class="rss"><a href="#"><span> </span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>

                <h4>Có Thể Bạn Quan Tâm</h4>
                <ul id="flexiselDemo3" style="display:flex;">

                    @foreach ($Related as $Related)
                    
                        <li><img src={{ asset('assets/Client/Product_Images/'.$Related->HinhAnh1)  }}><div class="grid-flex"><a href={{ Route('detail.product',$Related->MaSP) }}>{{ $Related->DonGia }}</a><p>{{ $Related->TenTat }}</p></div></li>
                    @endforeach

                </ul>
                <div class="toogle" style="width:100%">
                    <h3 class="m_3">Thông số</h3>
                    
                </div>
                <div class="toogle">
                    <h3 class="m_3 justify-content-center p-3" style="background: orange;width: 20%;border-radius: 15px;">Chi Tiết Sản Phẩm</h3>
                    <p class="m_text">{!!$product->MoTa !!}</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


    @endforeach
@endsection