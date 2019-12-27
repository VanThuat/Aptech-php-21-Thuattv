<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Customer;
use App\BillDetail;
use App\Bill;
class AdminBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['name'] = 'Quản lý hóa đơn';
        $customers = DB::table('customer')
                    ->orderBy('id', 'desc')
                    ->get();
        $this->data['customers'] = $customers;
        return view('admin.bill.bill_list', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customerInfo = DB::table('customer')
                        ->join('bills', 'customer.id', '=', 'bills.id_customer')
                        ->select('customer.*', 'bills.id as id_bill', 'bills.total as bill_total')
                        ->where('customer.id', '=', $id)
                        ->first();

        $billInfo = DB::table('bills')
                    ->join('bill_detail', 'bills.id', '=', 'bill_detail.id_bill')
                    ->leftjoin('products', 'bill_detail.id_product', '=', 'products.id')
                    ->where('bills.id_customer', '=', $id)
                    ->select('bills.*', 'bill_detail.*', 'products.name as product_name')
                    ->get();
                    
        $typeInfo = DB::table('type_products')
                    ->join('products','type_products.id','=','products.id_type')
                    ->select('type_products.*','products.id as id_type')
                    ->get();

        $this->data['customerInfo'] = $customerInfo;
        $this->data['billInfo'] = $billInfo;
        $this->data['typeIfo'] = $typeInfo;
        //dd($customerInfo,$billInfo);
        
        return view('admin.bill.bill_detail', $this->data);
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
        $bill = Bill::find($id);
        $bill->status = $request->input('status');
        $bill->save();
        Session::flash('message', "Cập nhật trạng thái đơn hàng thành công");

        return Redirect::to('bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        \DB::table('bill_detail')->where('id_bill',$id)->delete();
		\DB::table('bills')->where('id_customer',$id)->delete();
		\DB::table('customer')->where('id',$id)->delete();
        Session::flash('message', "Xóa đơn hàng thành công");
        
        return Redirect::to('bill');
    }
}
