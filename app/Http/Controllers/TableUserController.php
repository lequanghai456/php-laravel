<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Validator;
class TableUserController extends Controller
{
    public function getLogin()
    {
        return view('login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $data = DB::table('users')->where('tai_khoan','=',$request->taikhoan)->select('phan_quyen','ho_ten')->get()->get(0);
        if($data != null)
        {
            $arr = [
                'tai_khoan' => $request->taikhoan,
                'password' => $request->password,
                'ho_ten' => $data->ho_ten,
            ];
            if ($request->remember == true) {
                $remember = true;
            } else {
                $remember = false;
            }
            //kiểm tra trường remember có được chọn hay không

            if (Auth::guard('user')->attempt($arr))
            {
                if($data->phan_quyen == 1)
                {
                return redirect()->route('Dashboard.index');
                }else
                {
                return redirect()->route('Index.index');
                }
            }
        }
            return redirect()->route('Login.get')->with('status', 'Tài khoản hoặc mật khẩu không chính xác');


    }
    public function logout(){
        Auth::guard('user')->logout();
        return redirect()->route('Login.get');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = new User;
        $dsuser = $user -> DSUser();
        $dsuser = User::paginate(10);
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = ['taikhoan'=>'required|min:6|max:30',
         'password'=>'required|min:8|max:30',
         'hoten'=>'required|min:6|max:30',
         'sodienthoai'=>'required|regex:/(0)[0-9]{9}/',
         'diachi' => 'required|max:255'];

        $messenger=[
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
            'integer' => ':attribute Chỉ được nhập số',
            'numeric' => ':attribute Chỉ được nhập  số',
            'regex'=>':attribute Không hợp lệ'
         ];

        $customName=[
            'taikhoan' => 'Tài khoản',
            'password' => 'Mật khẩu',
            'hoten' => 'Họ tên',
            'sodienthoai'=>'Số điện thoại',
            'diachi'=>'Địa chỉ',
        ];
        $validator = Validator::make($request->all(), $rule,$messenger,$customName);
        if($validator->fails()){
            return redirect()->route('TableUser.create')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $user = new User;
            $user1 = new User;
            $user->tai_khoan = $request->taikhoan;
            $user->password = bcrypt($request->password);
            $user->ho_ten = $request->hoten;
            $user->sdt = $request->sodienthoai;
            $user->dia_chi = $request->diachi;
            $user->phan_quyen = $request->phanquyen;
            $user->khoa= false;
            $user->save();
            return redirect()->route('TableUser.index');
        }
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
        $user = new User;
        $user = $user->FindUser($id);
        return view("user.delete",$user);
    }

    public function search(Request $request)
    {
        //
        $search = $request->search;
        $user = User::where('tai_khoan', 'like','%'.$search.'%')->paginate(10);
        $dsuser = $user;
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
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
        $user = new User;
        $data = $user ->FindUser($id);
        return view("user.update",$data);
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
        $user = new User;
        $data = $user ->FindUser($id);
        $rule = ['taikhoan'=>'required|min:6|max:30',
         'password'=>'required|min:8|max:30',
         'hoten'=>'required|min:6|max:30',
         'sodienthoai'=>'required|regex:/(0)[0-9]{9}/',
         'diachi' => 'required|max:255'];

        $messenger=[
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
            'integer' => ':attribute Chỉ được nhập số',
            'numeric' => ':attribute Chỉ được nhập  số',
            'regex'=>':attribute Không hợp lệ'
         ];

        $customName=[
            'taikhoan' => 'Tài khoản',
            'password' => 'Mật khẩu',
            'hoten' => 'Họ tên',
            'sodienthoai'=>'Số điện thoại',
            'diachi'=>'Địa chỉ',
        ];
       $validator = Validator::make($request->all(), $rule,$messenger,$customName);
       if($validator->fails()){
           return redirect()->route('TableUser.edit',$data)
           ->withErrors($validator)
           ->withInput();
       }
       else{
        $user = new User;
        $data = $user ->FindUser($id);
        $data->tai_khoan = $request->taikhoan;
        $data->password = bcrypt($request->password);
        $data->ho_ten =$request->hoten;
        $data->sdt =$request->sodienthoai;
        $data->dia_chi=$request->diachi;
        $data->phan_quyen=$request->phanquyen;
        $data->khoa= false;
        $data->save();
        return redirect()->route('TableUser.index');
       }
    }

    public function showactive($id)
    {
        //
        $user = new User;
        $user = $user->FindUser($id);
        return view("user.active",$user);
    }

    public function active($id){
        $user = User :: find($id);
        if($user->khoa == false)
            $datakhoa =true;
        else $datakhoa = false;
        $data = DB::table('users')
        ->where('id', $user->id)
        ->update(['khoa' => $datakhoa]);
        return redirect()->route('TableUser.index');
    }
    /**
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = new User;
        $data = $user ->FindUser($id);
        $data->delete();
        return redirect()->route('TableUser.index');
    }
}
