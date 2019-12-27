<?php


namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Bill;
use App\BillDetail;
use App\Customer;
use Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    /**
     * Them gio hang
     */
    public function addcart(Request $request, $id)
    {
        
        $product=Product::select('id','name','unit_price','promotion_price','image') -> find($id);
        
        if(!$product) return redirect ('/');

        if($product->promotion_price>0){
        $price = $product->promotion_price;
        } else {
        $price = $product->unit_price;
        }
        Cart::add([
        'id'=>$id,
        'name'=>$product->name,
        'qty'=>1,
        'price'=>$price,
        'options'=>['image'=>$product->image], 
        ]);

        return redirect()->back();

        
    }

    
    public function showCart(){
        $carts=Cart::content();
        return view('Cart.showCart',['carts'=>$carts]);
    }



    public function updatecart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        return redirect('/showcart');

    }

    public function removecart ($rowId)
    {
        cart::remove($rowId);
        return redirect('/showcart');
    }

    public function formatcart()
    {
        Cart::destroy();
        return redirect()->back();
    }

    public function formPay()
    {
        $carts=Cart::content();
        return view('cart.cartPay',['carts'=>$carts]) ;
    }
        
    public function store(Request $request)
    {   
        $carts=\Cart::content();
        
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->note = $request->note;
        $customer->save();
        
        
        $bill = new bill;
        $bill->id_customer = $customer->id;
        $bill->total = Cart::subtotal();
        $bill->date_order = date('Y-m-d');
        $bill->save();
        

        foreach($carts as $cart) {
            $billDetail = new billDetail;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $cart->id;
            $billDetail->qty = $cart->qty;
            $billDetail->price = $cart->price;
            $billDetail->save();
        }
        Cart::destroy();
        return redirect()->route('trang-chu');
    }


    
}
