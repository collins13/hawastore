<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class productController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except('index');
  }

/*  public function __construct()
  {
      $this->middleware('auth');
  }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
        return view('shop.index')->with('products', $products);
    }
    public function addToCart(Request $request, $id){
      $products = Product::find($id);
      $oldCart = Session::has('cart')? Session::get('cart'):null;
      $cart = new Cart($oldCart);
      $cart->add($products, $products->id);
      $request->session('cart')->put('cart', $cart);
      //dd($request->session()->get('cart'));
      return redirect('/');
    }
    public function getCart(){
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['products' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['products' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      $products = $cart->items;

      return view('shop.checkout')->with('total', $total)
                                  ->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCheckout(Request $request){
      if (!Session::has('cart')) {
        return redirect()->route('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApiKey('sk_test_PtCrCm27nCrvMIfSNami46BX00okKnz25c');
      try {
  Charge::create([
  "amount" => $cart->totalPrice,
  "currency" => "usd",
  "source" => $request->input('stripeToken'), // obtained with Stripe.js
  "description" => "test charges"
]);

      } catch (\Exception $e) {
             return redirect()->route('checkout')->with('error', $e->getMessage());
      }

      Session::forget('cart');
      return redirect()->route('welcome')->with('success', 'successfully pucharsed product');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getProduct(){
      return view('admin.includes.products');
    }

    public function create(){
      return view('admin.create');
    }
    public function store(Request $request)
    {
      error_reporting(0);
        $this->validate($request, [
          "title"=>"required",
          "price"=>"required",
          "description"=>"required",
          "category"=>"required",
          "image"=>"image|nullable|max:1999"
          //"location"=>"required"
        ]);
        if ($request->hasFile('image')){


          $fileNameWithExt = $request->file('image')->getClientOriginalName();
          $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('image')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
         }
         else{
           $fileNameToStore = 'noimage.jpg';
         }

 $product= new Product();
 $product->title= $request->input('title');
 $product->image = $fileNameToStore;
 $product->description = $request->input('description');
 $product->category_id = $request->input('category');
 $product->price = $request->input('price');
 $product->save();

 return redirect()->back()->with('success', 'product added succesfully');

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
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
