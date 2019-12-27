<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;//duong dan toi model slide
use App\Product;//Dong A
use App\ProductType;//Dong B
use App\Cart; //Dong C
use App\Customer; //Dong D
use App\Bill; //Dong E
use App\BillDetail; //Dong F
use App\User; //Dong F
use Session;
use Hash;
use Auth;


class PageController extends Controller
{
    public function getIndex()
    {
    $slide=Slide::all();
    $new_product=Product::where('new',1)->paginate(8);
    
    $sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(8,['*'],'pag');

    return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp($type)
    {   
        $tenloai = ProductType::all();
        $layten = ProductType::where('id',$type)->first();
        $sp_theoloai = Product::where('id_type',$type)->paginate(6);
        $sp_khac = Product::where('id_type','<>',$type)->paginate(6,['*'],'pag');
        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','tenloai','layten'));
    }



    public function getChitiet(Request $request)
    {   
        $sanpham = Product::where('id',$request->id)->first();
        $sp_cungloai = Product::where('id_type',$sanpham->id_type)->paginate(6);
        $new_product=Product::where('new',1)->paginate(7);
        $sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(6,['*'],'pag');
        
        return view('page.chitiet_sanpham',compact('sanpham','sp_cungloai','sanpham_khuyenmai','new_product'));
    }

    public function getLienhe()
    {
        return view('page.lien_he');
    }

    public function getGioithieu()
    {
        return view('page.gioi_thieu');
    }

    public function getLogin(){
        return view('page.login');
    }

    public function getSignup(){
        return view('page.signup');
    }

    public function postSignup(Request $request){
        
        $this->validate($request,
            [
                'email'=>'required|email|unique:users,email', 
                'password'=>'required|min:6|max:20',
                'fullname'=>'required|',
                'repassword'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Định dạng email không đúng, vui lòng kiểm tra lại',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập trường mật khẩu',
                'repassword.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất phải 6 kí tự',
                'password.max'=>'Mật khẩu nhiều nhất chỉ 20 kí tự'
            ]
        );
        $user = new User();
        $user->full_name=$request->fullname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        return redirect()->back()->with('msg','Đã tạo tài khoản thành công');
    }

    public function postLogin(Request $request){
        $this->validate($request,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Định dạng email không đúng, vui lòng kiểm tra lại',
            'password.required'=>'Vui lòng nhập trường mật khẩu',
            'password.min'=>'Mật khẩu không đúng',
            'password.max'=>'Mật khẩu không đúng',
        ]);
        $xacNhan = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($xacNhan)){
            return redirect()->back()->with(['flag'=>'success','msg'=>'Đăng nhập thành công']);
        }else {
            return redirect()->back()->with(['flag'=>'danger','msg'=>'Đăng nhập thất bại']);
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function getSearch(Request $request){
        $product = Product::where('name','like','%'.$request->key_search.'%')
                            ->orWhere('unit_price',$request->key_search)
                            ->get();
    
        return view('page.search',compact('product'));

    }
}
