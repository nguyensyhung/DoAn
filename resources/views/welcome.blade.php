@extends('layouts.app')
@section('css')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/csscrosel.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/menucss.css')}}">
@endsection
@section('content')
    <div class="slidewrapper">
        <div class="allslide">
            <ul>
                <li class="active">
                    <div class="motslide">
                        <div class="anh" style="background-image:url(images/slide-04.jpg);"></div>
                        <img src="images/tamgiacxanh.png" class="xanhduoi1">
                        <img src="images/tamgiacxanh.png" class="xanhduoi2">
                        <img src="images/xanhtren.png" class="xanhtren">
                        <div class="textnoidung">
                            <h2>Bộ sưu tập nữ 2019 </h2>
                            <small>Điểm đến mới</small>
                            <div class="ke"></div>
                            <p>Hãy chọn cho mình những bộ đồ đẹp nhất!</p>
                            <a href="{{ route('shop') }}" class="nut">Mua sắm ngay</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="motslide">
                        <div class="anh" style="background-image:url(images/slide-02.jpg);"></div>
                        <img src="images/tamgiacxanh.png" class="xanhduoi1">
                        <img src="images/tamgiacxanh.png" class="xanhduoi2">
                        <img src="images/xanhtren.png" class="xanhtren">
                        <div class="textnoidung">
                            <h2>Bộ sưu tập nam 2019 </h2>
                            <small>Điểm đến mới</small>
                            <div class="ke"></div>
                            <p>Hãy chọn cho mình những bộ đồ đẹp nhất!</p>
                            <a href="{{ route('shop') }}" class="nut">Mua sắm ngay</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="motslide">
                        <div class="anh" style="background-image:url(images/slide-07.jpg);"></div>
                        <img src="images/tamgiacxanh.png" class="xanhduoi1">
                        <img src="images/tamgiacxanh.png" class="xanhduoi2">
                        <img src="images/xanhtren.png" class="xanhtren">
                        <div class="textnoidung">
                            <h2>Bộ sưu tập nam 2019 </h2>
                            <small>Điểm đến mới</small>
                            <div class="ke"></div>
                            <p>Hãy chọn cho mình những bộ đồ đẹp nhất!</p>
                            <a href="{{ route('shop') }}" class="nut">Mua sắm ngay</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chuyenslide">
            <ul>
                <li class="kichhoat">1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </div> <!-- end slidewrapper -->
    <div class="blockgioithieu">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 cottrai mt-3">
                    <h1 class="mb-2"> Xin Chào!</h1>
                    <p class="mb-2">Chào mừng bạn đã đến với thế giới đồ của chúng tôi, bạn có thể xem mặt hàng khi truy cập Shop, truy cập Blog để biết tin tức gần đây về các Trend của giới trẻ,...</p>
                    <h4 class="mb-1">Danh sách lớn những món quà dành cho nam giới!</h4>
                    <p>Mùa thu về cũng là thời điểm năm học mới bắt đầu, giới học sinh sinh viên đang chuẩn bị những chiếc áo sơ mi, quần tây hoặc kaki vừa trẻ trung và sành điệu. Bắt nguồn từ cảm hứng trên, Kenta đã ra mắt bộ sưu tập sơ mi cao cấp, có thể mặc đi học, đi làm hoặc trong nhiều dịp. Sản phẩm được sản xuất với chất lượng tốt, vải mềm mịn. Đường may sắc nét theo tiêu chuẩn cao, form dáng chuẩn đẹp.</p>
                    <a href="" class="nut btn btn-primary">Xem chi tiết</a>
                </div>
                <div class="col-sm-6 cotphai mt-3">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Thời trang Nam
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="row">
                                    <div class="col-sm-3 imgblock">
                                        <img src="images/banner-02.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Một thiết kế đang rất hot, và nó không thể thiếu trong tủ đồ của các chàng trai. Sự kết hợp giữa Áo khoác nỉ và Quần jogger, Quần short nỉ thể thao. Sản phẩm có chất liệu nỉ cotton 100% êm ái mềm mịn, không xù lông, không ra màu, thấm hút mồ hôi tốt cho chàng thoải mái chống nắng ngày hè.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                        Thời trang Nữ
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="row">
                                    <div class="col-sm-3 imgblock">
                                        <img src="images/banner-01.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Áo khoác là một trong những thế mạnh của shop, đến đây bạn có thể dễ dàng lựa chọn cho mình những chiếc áo khoác cập nhật theo xu hương mới nhất như áo khoác dù breaker, áo khoác da, áo khoác Nehru, áo khoác Denim… Cũng theo phong cách đầy cá tính này, bạn có thể mua sắm những chiếc áo thun, hoặc quần jean phù hợp từ đơn giản đến cách điệu đầy ấn tượng. 
 </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                                        Phụ kiện
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="row">
                                    <div class="col-sm-3 imgblock">
                                        <img src="images/banner-03.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Kết hợp với túi xách sang trọng, quần kaki đen cao cấp</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--     <br> hết Block giới thiệu
<div class="blockthoitrang">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="carousel-item blocktr">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 cssa">
                                    <span class="mb-2">Men</span>
                                    <h2 class="mb-2">New Season</h2>
                                    <a href="" class="btn btn-outline-info">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/banner-02.jpg" alt="First slide">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="carousel-item blockph">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 cssa">
                                    <span class="mb-2">Women</span>
                                    <h2 class="mb-2">New Season</h2>
                                    <a href="" class="btn btn-outline-info">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/banner-01.jpg" alt="First slide">
                </div>
            </div>
        </div>
    </div>
</div> hết block thời trang  nam nữ
<br>
<div class="blockphukien">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="carousel-item blockpktr">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 cssa">
                                    <span class="mb-2">Đồng hồ</span>
                                    <h2 class="mb-2">New Season</h2>
                                    <a href="" class="btn btn-outline-info btn-sm">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/banner-07.jpg" alt="First slide">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="carousel-item blockpkgi">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 cssa">
                                    <span class="mb-2">Túi</span>
                                    <h2 class="mb-2">New Season</h2>
                                    <a href="" class="btn btn-outline-info btn-sm">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/banner-08.jpg" alt="First slide">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="carousel-item blockpkph">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 cssa">
                                    <span class="mb-2">Dây nịt</span>
                                    <h2 class="mb-2">New Season</h2>
                                    <a href="" class="btn btn-outline-info btn-sm">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/banner-09.jpg" alt="First slide">
                </div>
            </div>
        </div>
    </div>
</div> -->
    <br>
    <hr>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('js/slide.js')}}"></script>
@endsection