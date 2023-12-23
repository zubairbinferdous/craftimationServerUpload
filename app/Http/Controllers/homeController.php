<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\Order;
use App\Models\subCategory;
use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{
    public function home()
    {
        return view('fontend.index');
    }
    public function product()
    {
        return view('fontend.product');
    }
    public function shop()
    {
        $subCategories = subCategory::latest()->get();
        return view('fontend.shop', compact('subCategories'));
    }

    public function about()
    {
        return view('fontend.about');
    }

    public function catWiseProduct(Request $request, $id)
    {
        $productWise = product::where('status', 1)
            ->where('category_id', $id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('fontend.cateWise', compact('productWise'));
    }

    public function SubWiseProduct(Request $request, $id)
    {
        $productWise = product::where('status', 1)
            ->where('sub_id', $id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('fontend.cateWise', compact('productWise'));
    }

    public function singleProduct($id)
    {
        $product = product::findOrFail($id);
        return view('fontend.product', compact('product'));
    }


    public function addToCartData($id)
    {
        $product = Product::findOrFail($id);
        $data = array();
        $data['id'] = $id;
        $data['name'] = $product->product_name;
        $data['qty'] = 1;
        $data['price'] = $product->product_price;
        $data['options']['image'] = $product->product_img;
        Cart::add($data);
        return response()->json(['success' => 'Successfully Product Added']);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add([
            'id' => $id,
            'name' => $request->product_name,
            'qty' => $request->quantity,
            'price' => $product->product_price,
            'options' => [
                'image' => $product->product_img,
            ],
        ]);

        return response()->json(['success' => 'add to cart']);
    }

    public function miniProduct()
    {
        $cartCount = Cart::count();
        return response()->json(array(
            'cartQty' => $cartCount
        ));
    }


    public function cartView()
    {
        $cartView = Cart::content();
        return view('fontend.cart', compact('cartView'));
    }

    public function GetCartProduct()
    {

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal

        ));
    }


    public function CartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Cart']);
    } // End Method



    public function CartDecrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        return response()->json(['success' => 'Successfully Decrement From Cart']);
    } // 

    public function CartIncrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        return response()->json(['success' => 'Successfully Increment From Cart']);
    } // 

    public function checkout()
    {
        if (Auth::check()) {

            if (Cart::total() > 0) {

                $carts = Cart::content();
                $cartQty = Cart::count();
                $cartTotal = Cart::total();

                return view('fontend.checkout', compact('carts', 'cartQty', 'cartTotal'));
            } else {

                $notification = array(
                    'message' => 'Shopping At list One Product',
                    'alert-type' => 'error'
                );

                return redirect()->to('/')->with($notification);
            }
        } else {

            $notification = array(
                'message' => 'You Need to Login First',
                'alert-type' => 'error'
            );

            return redirect()->route('login')->with($notification);
        }
    }

    // search 
    public function searchData(Request $request)
    {
        $search = $request->search;
        $posts = Product::where('product_name', 'like', "%$search%")->get();

        return view('fontend.search', compact('posts', 'search'));
    }
}
