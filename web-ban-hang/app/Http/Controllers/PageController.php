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
    //$new_product=Product::where('new',1)->get();
    // Neu chi lay ra thi nhu dong tren cung duoc
    //Con neu muon phan trang thi nhu dong duoi [paginate(8), 8 la so san pham tren 1 trang

    $new_product=Product::where('new',1)->paginate(8);
    //dieu kien loc: lay nhung sp o cot new co gia tri bang 1, roi lay all
    
    $sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(8,['*'],'pag');
    //Dieu kien loc promotion_price co gia tri khac 0

    //return view('page.trangchu',['slide'=>'@slide']);//day la cach truyen mang

    return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai')); //truyen vao bien slide
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
                'email'=>'required|email|unique:users,email', //dieu kien nhap dinh dang email, va 1 email chi duoc su dung cho 1 nguoi
                'password'=>'required|min:6|max:20', //yeu cau nguoi dung nhap pass, so ky tu tu 6-20
                'fullname'=>'required|', //khong duoc de trong truong ten
                'repassword'=>'required|same:password'//yeu cau nhap pass, va giong voi pass tren
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
        $user->password=Hash::make($request->password);//Ma hoa mat khau, de su dung ham Hash can use o tren
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
        $xacNhan = array('email'=>$request->email,'password'=>$request->password);//$request->email la email nguoi dung nhap
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
        $product = Product::where('name','like','%'.$request->key_search.'%')// dung like % (neu like khong thi no yeu cau nhap chinh xac moi tim ra) de nhap gan dung van tim ra, dung toan tu noi chuoi.
                            ->orWhere('unit_price',$request->key_search)
                            ->get();
    
        return view('page.search',compact('product'));

    }
}
