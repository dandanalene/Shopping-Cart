<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\CartItem;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showCart() {
    	$customer_id = Auth::user()->id;
    	$carts = DB::table('cart_items')->where('customer_id', '=', $customer_id)->get();

    	return view ('cart-items', [
    		'carts' => $carts,
    	]);
    }

    public function addToCart(Request $request) {
    	$customer_id = $request -> customer_id;
    	$product_id = $request -> product_id;
    	$product_name = $request -> product_name;
    	$product_price = $request -> product_price;
    	$image_path = $request -> image_path;

    	$cart = new CartItem;
    	$cart -> product_id = $product_id;
    	$cart -> customer_id = $customer_id;
    	$cart -> product_name = $product_name;
    	$cart -> product_price = $product_price;
    	$cart -> image_path = $image_path;
    	$cart -> save();

    	return redirect ('/home');
    }

    public function removeToCart (Request $request) {
    	$customer_id = $request -> customer_id;
    	$product_id = $request -> product_id;

    	$delete = DB::table('cart_items')->where([
    		['customer_id', '=', $customer_id],
    		['product_id', '=', $product_id],
    	])->delete();
    	
    	return redirect ('/home/cart');
    }

    public function updateToCart (Request $request) {
    	$customer_id = $request -> customer_id;
    	$product_id = $request -> product_id;
    	$product_quantity = $request -> product_quantity;

    	$update = DB::table('cart_items')->where([
    		['customer_id', '=', $customer_id],
    		['product_id', '=', $product_id],
    	])->update(['product_quantity' => $product_quantity]);
    	
    	return redirect ('/home/cart');
    }
}
