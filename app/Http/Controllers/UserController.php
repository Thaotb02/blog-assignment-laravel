<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests\UserRequest;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Excel;


class UserController extends Controller
{
    //Hiển thị user ra màn hình
	public function index()
	{
    	 //Lấy toàn bộ users để hiển thị  
		$users=User::all();
	
		return view('users.index',['users'=>$users]);
	}
	public function profile($id)
	{
    	 //Lấy toàn bộ users để hiển thị  
		$users=User::find($id);
		return view('layout-users.users.profile',['users'=>$users]);
	}
	public function editProfile($id)
	{
    	 //Lấy toàn bộ users để hiển thị  
		$users=User::find($id);
		return view('layout-users.users.edit-profile',['users'=>$users]);
	}

//Xử lý update
	public function updateProfile( Request $request,$id){
		    $this->validate($request,[
            'name'=>'bail|required|min:4',
            'phone_number'=>'bail|required',
            'email'=>'bail|required|email',
           
		],[
			'name.required'=>'Name không được để trống',
			'phone_number.required'=>'phone number không được để trống',
          'name.min'=>'Phải nhập ít nhất 4 kí tự',
          'email.required'=>'email không được để trống',
            'email.email'=>'Sai định dạng email',
		]);  
    //Tìm user có id   
		$user=User::find($id);
		$params=[];
		$params['name'] = request()->get('name');
		$params['birth_date'] = request()->get('birth_date');
		$params['phone_number'] = request()->get('phone_number');
		$params['email'] = request()->get('email');
		$user ->update($params);
		return redirect()->route('layout-users.users.index');
	}

	


	public function show($id)
	{
    	 //Lấy toàn bộ users để hiển thị  
		$users=User::find($id);
		return view('users.show',['users'=>$users]);
	}

	   //Form thêm user 
	public function create(){
		return view('users.create');
	}

    //Xử lý form thêm user
	public function store(UserRequest $request){
		$data =request()->all();
	//loại bỏ _token,password_confirmation
		$param =\Arr::except($data,['_token','password_comfirm']);
		$param['password']=bcrypt($param['password']);
		$param['is_active']=1;
			User::create($param);
		return redirect()->route('users.index')->with('thongbao','Bạn đã thêm thành công!');

	}

//Edit user 
	public function edit($id){
    	//Tìm user có id   
		$user=User::find($id);

		return view('users.edit',['user'=>$user]);
	}


//Xử lý update
	public function update(Request $request, $id){
    //Tìm user có id 
    $this->validate($request,[
            'name'=>'bail|required|min:4',
            'phone_number'=>'bail|required',
            'email'=>'bail|required|email',
           
		],[
			'name.required'=>'Name không được để trống',
			'phone_number.required'=>'phone number không được để trống',
          'name.min'=>'Phải nhập ít nhất 4 kí tự',
          'email.required'=>'email không được để trống',
            // 'name.max'=>'Không được nhập quá 10 kí tự',
            'email.email'=>'Sai định dạng email',
		]);  
		$user=User::find($id);
		$params=[];
		$params['name'] = request()->get('name');
		$params['birth_date'] = request()->get('birth_date');
		$params['phone_number'] = request()->get('phone_number');
		$params['email'] = request()->get('email');
		$params['role'] = request()->get('role');
		
			$user ->update($params);
			return redirect()->route('users.index')->with('thongbao','Bạn đã sửa thành công!');
	
	}


//Xử lý xóa
	public function destroy(User $user){
		$user ->delete();
		return redirect()->route('users.index')->with('thongbao','Bạn đã xóa thành công!');
	}

	public function export_csv()
	{
		return Excel::download(new UsersExport , 'user.xlsx');
	}

	    public function import_csv(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new UsersImport, $path);
        return back();
    }

}
