<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\ProductAttribute;
use App\Image;
use App\Address;
use App\District;
use App\City;
use App\Order;
use App\User;
use App\Category;
use App\Comment;
use Auth;
use Session;

class ProductController extends Controller
{
        public function __construct()
    {
        $categories = Category::where('parent_id', '=', null)->get();
        view()->share('categories', $categories);
    }
    const NEW_ADDRESS = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::withCount('images','category')->with('productAttributes', 'sizes', 'colors')->get();
        /*dd($products);*/
/*        $productAttribute = ProductAttribute::where([
            ['product_id', 1],
            ['size_id', 1],
            ['color_id', 1],
        ])->first();
        dd($productAttribute);*/
        return view('product', [
            'products' => $products,
            'productAttribute' => $productAttribute,
        ]);
    }

    public function getProductDetailById($id)
    {
        $products = Product::whereId($id)->with([
            'productAttributes' => function($productAttribute) {
                $productAttribute->with('size', 'color');

            }
        ])->get();

        return view('product',['products'=> $products]);

    }

    public function cart()  
    {
        return view('cart');
    }



    public function addToCart(Request $request)
    {
        // dd($request->all());
        $product =  Product::find($request->id);

        if (!$product) {
            abort(404);
        }

        $id = '' . $request->id . '-' . $request->size_id . '-' . $request->color_id;
        /*dd($id);*/
        $size = $product->sizes()->where('id', $request->size_id)->first();
        $color = $product->colors()->where('id', $request->color_id)->first();

        // dd($product->images[0]->path);
        $cart = session()->get('cart');


        if (!$cart) {
            $cart  = [
                $id => [
                    'name'  =>  $product->name,
                    'quantity'  => $request->quantity ?? 1,
                    'image' => $product->images[0]->path,
                    'price' => $product->price,
                    'size' => [
                        'id' => $size->id,
                        'name' => $size->name,
                    ],
                    'color' => [
                        'id' => $color->id,
                        'name' => $color->name,
                    ],
                ]
            ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success','Thêm sản phẩm thành công');
        }

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');

        }

        $cart[$id] = [
            'name'  =>  $product->name,
            'quantity'  => $request->quantity ?? 1,
            'image' => $product->images[0]->path,
            'price' => $product->price,
            'size' => [
                'id' => $size->id,
                'name' => $size->name,
            ],
            'color' => [
                'id' => $color->id,
                'name' => $color->name,
            ],
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');

    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cập nhật giỏ hàng thành công');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Xóa giỏ hàng thành công');
        }
    }

    public function showCheckoutForm()
    {   

        /*$cities = City::pluck('name','id');
        $districts = District::pluck('name', 'id');
            return view('checkout', ['cities' => $cities, 'districts' =>  $districts]);*/
        $cities = City::pluck('name','id');
        $districts = District::pluck('name', 'id');

        if (!Auth::check()) {

            return view('checkout', ['cities' => $cities]);

        } else {

            $user      = Auth::user();

            $addresses = $user->addresses()->with('city', 'district')->get();

            return view('checkout', [
                'cities'    => $cities,
                'addresses' => $addresses,
            ]);
        }
    }

    public function postCheckout(Request $request)
    {
        DB::beginTransaction();
        if (!Auth::check()) {
            $this->validateGuestRequest($request);
            try {
            $dataUser = $request->only('email' ,'password', 'first_name', 'last_name');
            $dataUser['role_id'] = 3;
            $dataUser['password'] = bcrypt($dataUser['password']);
            $user =  User::create($dataUser);

            $dataAddress = $request->only('first_name', 'last_name', 'phone', 'address', 'city_id', 'district_id');
            $address = $user->addresses()->create($dataAddress);
            $order = $user->orders()->create([
                'address_id' => $address->id,
                
            ]);

            $cart = session('cart');

            foreach($cart as $key => $item) {
                $ids = explode('-', $key);
                $order->orderDetails()->create([
                    'product_id' => $ids[0],
                    'size_id' => $ids[1],
                    'color_id' => $ids[2],
                    'quantity' => $item['quantity'],
                ]);
            }
            DB::commit();
            Auth::guard()->login($user);
        }

         catch (\Exception $e) {   
            DB::rollback();
            /*dd($e);*/
        }
        return redirect()->route('shop');
        }
        else{
            $user = Auth::user();
            if ($request->address_id == $this::NEW_ADDRESS) {
                $this->validateNewAddressUserRequest($request);
                try {
                $dataAddress = $request->only('first_name', 'last_name', 'phone', 'address', 'city_id', 'district_id');

                $address = $user->addresses()->create($dataAddress);
                $order = $user->orders()->create([
                    'address_id' => $address->id,
                    
                ]);

                $cart = session('cart');

                foreach($cart as $key => $item) {
                    $ids = explode('-', $key);
                    $order->orderDetails()->create([
                        'product_id' => $ids[0],
                        'size_id' => $ids[1],
                        'color_id' => $ids[2],
                        'quantity' => $item['quantity'],
                    ]);
                }
                DB::commit();
                
                } catch (\Exception $e) {   
                    DB::rollback();
                    /*dd($e);*/
            }
            return redirect()->route('shop');
        }
        else{
             $data = $user->addresses()->where('id', $request->address_id)->first();
             $dataAddress = $data->only('first_name', 'last_name', 'phone', 'address', 'city_id', 'district_id');
             /*dd($dataAddress);*/
              try {

                $address = $user->addresses()->create($dataAddress);
                $order = $user->orders()->create([
                    'address_id' => $address->id,
                    
                ]);

                $cart = session('cart');

                foreach($cart as $key => $item) {
                    $ids = explode('-', $key);
                    $order->orderDetails()->create([
                        'product_id' => $ids[0],
                        'size_id' => $ids[1],
                        'color_id' => $ids[2],
                        'quantity' => $item['quantity'],
                    ]);
                }
                DB::commit();
                
                } catch (\Exception $e) {   
                    DB::rollback();
                    /*dd($e);*/
            }
            return redirect()->route('shop');
        }


            }
        
    }


public function validateGuestRequest(Request $request)
    {
        $request->validate([
            'last_name'    => 'required|min:2|max:10',
            'first_name'   => 'required|min:2|max:10',
            'email'        => 'required|email|max:255|unique:users',
            'city_id'      => 'required|numeric',
            'district_id'  => 'required|numeric',
            'address'      => 'required',
            'phone'        => 'required|regex:/(0)[0-9]{9}/',
            'password'     => 'required|min:6',
        ], [
            'last_name.required'   => 'Vui lòng nhập họ',
            'last_name.min'        => 'Họ phải có ít nhất 2 ký tự',
            'last_name.max'        => 'Họ không được quá 10 ký tự',
            'first_name.min'       => 'Tên phải có ít nhất 2 ký tự',
            'first_name.max'       => 'Tên không được quá 10 ký tự',
            'first_name.required'  => 'Vui lòng nhập tên',
            'email.required'       => 'Vui lòng nhập địa chỉ email',
            'email.email'          => 'Địa chỉ email không hợp lệ',
            'email.unique'         => 'Địa chỉ này email đã tồn tại. Vui lòng đăng nhập để việc thanh toán dễ dàng hơn!',
            'city_id.required'     => 'Vui lòng chọn thành phố',
            'city_id.numeric'      => 'Vui lòng chọn thành phố',
            'district_id.required' => 'Vui lòng chọn quận/huyện',
            'district_id.numeric'  => 'Vui lòng chọn quận/huyện',
            'address.required'     => 'Vui lòng nhập địa chỉ',
            'phone.required'       => 'Vui lòng nhập số điện thoại',
            'phone.regex'          => 'Số điện thoại không hợp lệ',
            'password.required'    => 'Vui lòng nhập mật khẩu',
            'password.min'         => 'Mật khẩu phải có ít nhất 6 ký tự',
        ]);
    }

public function validateNewAddressUserRequest(Request $request)
    {
        $request->validate([
            'address_id'   => 'required',
            'last_name'    => 'required|string|min:2|max:10',
            'first_name'   => 'required|string|min:2|max:10',
            'city_id'      => 'required|numeric',
            'district_id'  => 'required|numeric',
            'address'      => 'required',
            'phone'        => 'required|regex:/(0)[0-9]{9}/',
        ], [
            'last_name.required'   => 'Vui lòng nhập họ',
            'last_name.min'        => 'Họ phải có ít nhất 2 ký tự',
            'last_name.max'        => 'Họ không được quá 10 ký tự',
            'first_name.min'       => 'Tên phải có ít nhất 2 ký tự',
            'first_name.max'       => 'Tên không được quá 10 ký tự',
            'first_name.required'  => 'Vui lòng nhập tên',
            'city_id.required'     => 'Vui lòng chọn thành phố',
            'city_id.numeric'      => 'Vui lòng chọn thành phố',
            'district_id.required' => 'Vui lòng chọn quận/huyện',
            'district_id.numeric'  => 'Vui lòng chọn quận/huyện',
            'address.required'     => 'Vui lòng nhập địa chỉ',
            'phone.required'       => 'Vui lòng nhập số điện thoại',
            'phone.regex'          => 'Số điện thoại không hợp lệ',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product            = Product::with('category', 'productAttributes', 'images')->find($id);
       $related_categories = Category::where('parent_id', $product->category->parent_id)
            ->get();
       $comments           = Comment::where('product_id', $product->id)->orderBy('created_at', 'desc')->paginate(5);
       $related_products = $product->category->products()->with('images', 'comments')->get()->except($product->id);
        /*dd($related_products);*/
       return view('productdetail',[
            'product'            => $product,
            'related_categories' => $related_categories,
            'comments'           => $comments,
            'related_products'   => $related_products,
       ]);
    }
    public function test()
    {
        return view('productdetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
