<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Size;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Category;
use App\Image;
use App\Product;
use App\ProductAttribute;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->paginate(10);
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::all();
        $colors = Color::all();
        $categories = Category::where('parent_id', '!=', null)->pluck('name', 'id');

        return view('admin.products.create', [
            'categories' => $categories,
            'sizes' => $sizes,
            'colors' => $colors,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
  /*      dd($data);*/
        $product = Product::create($data);

       

        $productAttributes = $request->product_attributes;
        foreach ($productAttributes as $productAttribute) {
            $data_product_attribute = [
                'size_id'      => $productAttribute['size_id'],
                'color_id'     => $productAttribute['color_id'],
                'quantity'     => $productAttribute['quantity'],  
            ];
            $product->productAttributes()->create($data_product_attribute);
        }

        $images = $request->images;
        /*dd($images);*/
        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/storage/', $name);

                $data_product_image = [
                'name'       => $request->name_image,
                'path'      => '/storage/' . $name,
                'product_id' => $product->id,
                ];
                Image::create($data_product_image); 
            }
          }
          Session::flash('success','Tạo mới thành công!');
         return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*dd($id);*/
        $categories = Category::where('parent_id', '!=', null)->pluck('name', 'id');
        $product    = Product::find($id);

        return view('admin.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $product->update($data);
        Session::flash('success','Cập nhật thành công!');

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('success','Xóa thành công!');
        return redirect()->back();
    }
}
