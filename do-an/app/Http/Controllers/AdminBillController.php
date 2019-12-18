<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\User;
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
        $this->data['title'] = 'Quản lý hóa đơn';
        $users = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
        $this->data['users'] = $users;
        return view('admin.bill.index', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $userInfo = DB::table('users')
                        ->join('bills', 'users.id', '=', 'bills.user_id')
                        ->select('users.*', 'bills.id as bill_id', 'bills.total as bill_total')
                        ->where('users.id', '=', $id)
                        ->first();

        $billInfo = DB::table('bills')
                    ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
                    ->leftjoin('products', 'bill_details.pro_id', '=', 'products.id')
                    ->where('bills.user_id', '=', $id)
                    ->select('bills.*', 'bill_details.*', 'products.title as product_name')
                    ->get();
                    
        $this->data['userInfo'] = $userInfo;
        $this->data['billInfo'] = $billInfo;
        //dd($userInfo,$billInfo);
        
        return view('admin.bill.edit', $this->data);
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
        \DB::table('bill_details')->where('bill_id',$id)->delete();
		\DB::table('bills')->where('user_id',$id)->delete();
		\DB::table('users')->where('id',$id)->delete();
        Session::flash('message', "Xóa đơn hàng thành công");
        
        return Redirect::to('bill');
    }
}
