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
  <h2 class="section-title">Quản lý sản phẩm</h2>

    <div class="row">
                  <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="col-md-6">
                    <!-- Default Elements -->
                      <div class="card">
                        <div class="card-header">
                            <h4>Tạo mới sản phẩm</h4>
                        </div>
                        <div class="card-block">
                          <div class="container mt-3">
                            <fieldset class="form-group">
                              <label>Tên Sản Phẩm <span class="text-red"> *</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập tên SP" name="name" value="{{ old('name') }}">
                                <p class="meserr">{{ $errors->first('name') }}</p>
                            </fieldset>
<!--                             <fieldset class="form-group" hidden="">
  <label>Số lượng <span class="text-red">*</span></label>
  <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
  <p class="meserr" ></p>
</fieldset> -->
                            <fieldset class="form-group">
                              <label>Giá  <span class="text-red">*</span></label>
                              <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                              <p class="meserr">{{ $errors->first('price') }}</p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label>Mô tả <span class="text-red">*</span></label>
                              <textarea class="form-control" rows="5" id="description" name="description">{{ old('description')}}</textarea>
                              <p class="meserr">{{ $errors->first('description') }}</p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label>Nội dung <span class="text-red">*</span></label>
                              <textarea class="form-control" rows="5" id="content" name="content">{{ old('content')}}</textarea>
                              <p class="meserr">{{ $errors->first('content') }}</p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label>Trạng thái<span class="text-red">*</span></label>
                              <select class="form-control" name="status">
                              <option>0</option>
                              <option>1</option>
                              </select>
                              <p class="meserr">{{ $errors->first('status') }}</p>
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="formGroupExampleInput">Thuộc loại <span class="text-red"> *</span></label>
                              <select class="form-control" name="category_id">
                              @foreach ($categories as $key => $value)
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

                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                      <!-- Normal Form -->
                      <div class="row">
                        <div class="card">
                       <div class="card-header">
                         <h4>Tạo hình ảnh sản phẩm </h4>
                         <button type="button" class="btn btn-success" id="add-product-attr">Thêm</button>
                       </div>
                       <div class="card-block card-block-full">
                         <div class="container mt-3 product-attr-container">
                          <div class="row">
                            <div class="col-xs-12 col-md-4">
                              <fieldset class="form-group">
                               <label>Màu <span class="text-red">*</span></label>
                               <select name="product_attributes[0][color_id]" class="form-control">
                                 @foreach ($colors as $color)
                                  <option value="{{ $color->id }}">{{ $color->name }}</option>
                                 @endforeach
                               </select>
                             </fieldset>
                            </div>
                            <div class="col-xs-12 col-md-4">
                              <fieldset class="form-group">
                               <label>Cỡ <span class="text-red">*</span></label>
                               <select name="product_attributes[0][size_id]" class="form-control">
                                 @foreach ($sizes as $size)
                                  <option value="{{ $size->id }}">{{ $size->name }}</option>
                                 @endforeach
                               </select>
                               </fieldset>
                            </div>
                            <div class="col-xs-12 col-md-4">
                              <fieldset class="form-group">
                               <label>Số lượng <span class="text-red">*</span></label>
                               <input type="number" min="1" class="form-control" id="name_image" placeholder="Số lượng" name="product_attributes[0][quantity]">
                               <p class="meserr">{{ $errors->first('') }}</p>
                               </fieldset>
                            </div>
                          </div>
                         </div>
                       </div>
                     </div>
                   </div>
                     <div class="row">
                       <div class="card">
                       <div class="card-header">
                         <h4>Tạo hình ảnh sản phẩm </h4>
                       </div>
                       <div class="card-block card-block-full">
                         <div class="container mt-3">
                           <fieldset class="form-group">
                           <label>Tên hình ảnh sản phẩm <span class="text-red">*</span></label>
                           <input type="text" class="form-control" id="name_image" placeholder="Mời bạn nhập tên hình" name="name_image" value="{{ old('name_image') }}">
                           <p class="meserr">{{ $errors->first('name_image') }}</p>
                           </fieldset>
                           <fieldset class="form-group">
                           <label for="image">Hình ảnh sản phẩm (Bạn có thể thêm bao nhiêu hình tùy ý) <span class="text-red"> *</span></label>
                           <input type="file" name="images[]" multiple class="form-control" style="height: 45px">
                           <p class="meserr">{{ $errors->first('images') }}</p>
                           </fieldset>
                         </div>
                       </div>
                     </div>
                     </div>
                <!-- End Normal Form -->
              </div>
            <button style="margin-left: 270px" class="btn btn-primary">Tạo mới</button>
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

<script>
  jQuery(document).ready(function($) {
    index = 0
    $('#add-product-attr').on('click', function(e) {
      index += 1
      let row =
      `
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <fieldset class="form-group">
           <label>Màu <span class="text-red">*</span></label>
           <select name="product_attributes[${index}][color_id]" class="form-control">
             @foreach ($colors as $color)
              <option value="{{ $color->id }}">{{ $color->name }}</option>
             @endforeach
           </select>
         </fieldset>
        </div>
        <div class="col-xs-12 col-md-4">
          <fieldset class="form-group">
           <label>Cỡ <span class="text-red">*</span></label>
           <select name="product_attributes[${index}][size_id]" class="form-control">
             @foreach ($sizes as $size)
              <option value="{{ $size->id }}">{{ $size->name }}</option>
             @endforeach
           </select>
           </fieldset>
        </div>
        <div class="col-xs-12 col-md-4">
          <fieldset class="form-group">
           <label>Số lượng <span class="text-red">*</span></label>
           <input type="number" min="1" class="form-control" id="name_image" placeholder="Số lượng" name="product_attributes[${index}][quantity]">
           <p class="meserr">{{ $errors->first('') }}</p>
           </fieldset>
        </div>
      </div>
      `
      $('.product-attr-container').append(row)
    })
  });
</script>

<!-- Page Plugins -->
<script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

@endsection
