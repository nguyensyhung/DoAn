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

  <div  class="container-fluid p-y-md">      
    <div class="container">
      <div class="card">
        <div class="card-header">Chỉnh sửa Sản phẩm</div>
          <div class="card-body">
            <form action="{{ route('admin.products.update', $product->id)}}" method="POST">
             @csrf
             @method('PUT')
              <div class="container mt-3">
                <fieldset class="form-group">
                   <label>Tên sản phẩm</label>
                   <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name">
                </fieldset>
                <fieldset class="form-group" hidden="">
                            <label>Số lượng <span class="text-red">*</span></label>
                            <input type="number" value="{{$product->quantity}}" name="quantity" class="form-control">
                            
                </fieldset>
                <fieldset class="form-group">
                            <label>Giá  <span class="text-red">*</span></label>
                            <input type="number" value="{{$product->price}}" name="price" class="form-control">
                </fieldset>
                <fieldset class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="5" id="description" name="description">{{$product->description}}</textarea>
                </fieldset>
                <fieldset class="form-group">
                              <label>Nội dung <span class="text-red">*</span></label>
                              <textarea class="form-control" rows="5" id="content" name="content">{{$product->content}}</textarea>
                            </fieldset>
                <fieldset class="form-group">
                              <label>Status<span class="text-red">*</span></label>
                              <select class="form-control" name="status">
                              <option>0</option>
                              <option>1</option>
                              </select>
                </fieldset>
                <fieldset class="form-group">
                  <label for="formGroupExampleInput">Category_id</label>
                  <select class="form-control" name="category_id">
                    @foreach ($categories as $key => $value)
                    @if ($product->category_id == $key) 
                    <option value="{{$key}}" selected>{{$value}}</option>
                    @else
                    <option value="{{$key}}">{{$value}}</option>
                    @endif
                    @endforeach
                    </select>
                    </fieldset>
              </div>

              <div class="form-group">
                <button class="form-control btn btn-success" type="submit">Save Product</button>
              </div>
          </form>
        </div>
    </div>
  </div>
</div>
</main>




@endsection

@section('javascript')

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    config = {};
    config.entities_latin = false;
    CKEDITOR.replace( 'content', config);
</script>
<script>
    config = {};
    config.entities_latin = false;
    CKEDITOR.replace( 'description', config);
</script>

@endsection