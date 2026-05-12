<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index ()
    {
        $hotProducts = Product::where('status', 'active')->where('product_type', 'hot')->paginate(30);
        $newProducts = Product::where('status', 'active')->where('product_type', 'new')->paginate(30);
        $regularProducts = Product::where('status', 'active')->where('product_type', 'regular')->paginate(30);
        $discountProducts = Product::where('status', 'active')->where('product_type', 'discount')->paginate(30);
        $homeCategories = Category::get();
        // dd($newProducts);
        return view('frontend.index', compact('hotProducts', 'newProducts', 'regularProducts', 'discountProducts', 'homeCategories'));
    }

    public function productDetails ($slug)
    {
        $product = Product::with('color','size','galleryImage','review')->where('slug', $slug)->first();
        $detailiPageCategory = Category::get();
        return view('frontend.product-details', compact('product', 'detailiPageCategory'));
    }

    public function addtocartDetailsPage (Request $request, $id)
    {

        $product = Product::find($id);

        $cart = new Cart();

        $cart->product_id = $product->id;
        $cart->color = $request->color;
        $cart->size = $request->size;
        $cart->qty = $request->qty;

        if($product->discount_price != null){
            $cart->price = $product->discount_price;
        }
        else{
            $cart->price = $product->regular_price;
        }

        $cart->ip_address = $request->ip();
        if(Auth::check()){
            $cart->user_id = Auth::user()->id;
        }

        $cart->save();
        toastr()->success('Product added to cart successfully');
        return redirect()->back();


    }

    public function shopProducts ()
    {
        return view('frontend.shop');
    }

    public function privacyPolicy ()
    {
        return view('frontend.privacy-policy');
    }

    public function termsConditions ()
    {
        return view('frontend.terms-conditions');
    }

    public function refundPolicy ()
    {
        return view('frontend.refund-policy');
    }

    public function paymentPolicy ()
    {
        return view('frontend.payment-policy');
    }

    public function aboutUs ()
    {
        return view('frontend.aboutus');
    }

    public function contactUs ()
    {
        return view('frontend.contactus');
    }

    public function viewCart ()
    {
        return view('frontend.view-cart');
    }

    public function checkout ()
    {
        return view('frontend.checkout');
    }

    public function orderConfirmation ()
    {
        return view('frontend.thankyou');
    }

    public function categoryProducts ()
    {
        return view('frontend.category-products');
    }

    public function subcategoryProducts ()
    {
        return view('frontend.subcategory-products');
    }

    public function typeProducts ()
    {
        return view('frontend.type-products');
    }
}
