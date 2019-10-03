<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;
use App\District;
use App\Address;
use App\Category;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
        $categories = Category::where('parent_id', '=', null)->get();
        $subcategory = Category::where('parent_id', '!=', null)->get();
        view()->share('categories', $categories);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function addressById(User $user , Address $addresses )
    {
        $user = Auth::user();
        $addresses = $user->addresses;
        // dd($addresses);
;

        return view('account.addresses', compact('user' ,'addresses'));
        
    }

    public function createNewAddress()
    {
        $cities = City::pluck('name','id');  
        $districts = District::pluck('name', 'id');
        return view('account.create',compact('cities','districts'));
    }

        public function storeNewAddress(ProfileRequest $request)
    {
        $user = Auth::user();
        $user->addresses()->create($request->all());

        return redirect()->route('account.addresses');
        
    }

        public function edit($id)
    {
        $cities = City::pluck('name','id');
        $districts = District::pluck('name', 'id');
        $address = Address::find($id);
        return view('account.edit',compact('cities','districts','address','user'));
    }

    public function update(Request $request, Address $address)
    {
        $data= $request->all();        
        $address->update($data);

        return redirect()->route('account.addresses');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAddressById(Address $address)
    {
        // dd($address);
        $address->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
