<?php


namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Bill;
use App\BillDetail;
use Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    /**
     * Them gio hang
     */
    public function addcart(Request $request, $id)
    {
        
        $product=Product::select('id','title','price','img_path') -> find($id);
        
        //Neu khong ton tai san pham se tra ve trang chu
        if(!$product) return redirect ('/');

        //neu ton tai se add cac thong tin sau
        \Cart::add
        ([
        'id'=>$id,
        'name'=>$product->title,
        'qty'=>1,
        'price'=>$product->price,
        'options'=>['image'=>$product->img_path], //Voi cung mot san pham nhung co nhieu hinh khac nhau
        ]);

        //khi hoan thanh se tra ve nhu ban dau (truoc khi click)
        return redirect()->back();

        
    }

    /**
     * Danh sach gio hang
     */
    public function showcart(){
        $carts=\Cart::content();
        return view('layouts/cart.showCart',['carts'=>$carts]);

    }

    public function updatecart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        return redirect('/showcart');

    }

    //xoa mot san pham
    public function removecart ($rowId)
    {
        cart::remove($rowId);
        return redirect('/showcart');
    }

    // Xoa toan bo san pham
    public function formatcart()
    {
        Cart::destroy();
        return redirect()->back();
    }

    //Thanh toan gio hang
    public function formPay()
    {
        $carts=\Cart::content();
        return view('layouts/cart.cartPay',['carts'=>$carts]) ;
    }
        
    //Luu vao database
    public function store(Request $request)
    {   
        $carts=\Cart::content();
        
        $user = new user;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->note = $request->note;
        $user->save();
        
        
        $bill = new bill;
        $bill->user_id = $user->id;
        $bill->total = Cart::subtotal();
        $bill->date_order = date('Y-m-d');
        $bill->save();
        

        //vi co the co nhieu gio hang nen su dung vong lap
        foreach($carts as $cart) {
            $billDetail = new billDetail;
            $billDetail->bill_id = $bill->id;
            $billDetail->pro_id = $cart->id;
            $billDetail->qty = $cart->qty;
            $billDetail->unit_price = $cart->price;
            $billDetail->save();
        }
        return redirect()->back();
    }


    
}
