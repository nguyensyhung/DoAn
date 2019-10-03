@extends('admin.layouts.master')

@section('function')
<li class="nav-item nav-drawer-header">Chức năng</li>

<li class="nav-item nav-item-has-subnav">
  <a href="{{ route('admin.products.index') }}"><i class="ion-ios-calculator-outline"></i>Tất cả sản phẩm</a>
<!--   <a href=""><i class="ion-ios-calculator-outline"></i>Thời trang nam</a>
<a href=""><i class="ion-ios-calculator-outline"></i>Thời trang nữ</a>
<a href=""><i class="ion-ios-calculator-outline"></i>Phụ kiện</a> -->
</li>
@endsection

@section('content')

<main class="app-layout-content">
  
  <div class="container-fluid p-y-md">
  <!-- Bootstrap Style -->
  <h2 class="section-title">Thêm sản phẩm</h2>

    <div class="row">
                  <form action="{{route('admin.product_attribute.store')}}" method="post" enctype="multipart/form-data" >
                      @csrf
                    <div class="col-md-12">
                    <!-- Default Elements -->
                      <div class="card">
                        <div class="card-header">
                            <h4>Tạo mới sản phẩm</h4>
                        </div>
                        
                        <div class="card-block">
                          <div class="container mt-3">
                            <fieldset class="form-group" hidden="">
                              <label>product_id<span class="text-red">*</span></label>
                                <input type="number" class="form-control" value="{{$product->id}}" id="product_id" placeholder="Mời bạn số lượng" name="product_id">
                                <p class="meserr"></p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label>Số lượng<span class="text-red">*</span></label>
                                <input type="number" class="form-control" id="quantity" placeholder="Mời bạn số lượng" name="quantity">
                                <p class="meserr"></p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="formGroupExampleInput">Thuộc loại</label>
                              <select class="form-control" name="size_id">
                              @foreach ($sizes as $key => $value)
                              <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach
                              </select>
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="formGroupExampleInput">Thuộc loại</label>
                              <select class="form-control" name="color_id">
                              @foreach ($colors as $key => $value)
                              <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach
                              </select>
                            </fieldset>
                          </div>
                        </div>
                      <!-- .card-block -->
                      </div>
                      <!-- .card -->
                      <!-- End Default Elements -->
                     <!--  Inline Form -->

                      <!-- End Inline Form -->
                    </div>
              </div>
            <button style="margin-left: 270px" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>  
</main>

@endsection

@section('javascript')

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
<script src="{{ asset('admin/js/app-custom.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    config = {};
    config.entities_latin = false;
    CKEDITOR.replace( 'description', config);
</script>
<script>
    config = {};
    config.entities_latin = false;
    CKEDITOR.replace( 'content', config);
</script>

<!-- Page Plugins -->
<script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

@endsection
