<?php

namespace App\Http\Controllers;
use App\Model\Category;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

	public function index()
	{
		$cates=Category::all();
		return view('categories.index',['cates'=>$cates]);
	}

	public function create(){
		$users = User::all();
		return view('categories.create',['users'=>$users]);
	}

	public function store(CategoryRequest $request){
		$data =request()->all();
		$param =\Arr::except($data,['_token']);
		Category::create($param);
		return redirect()->route('categories.index')->with('thongbao','Bạn đã thêm thành công!');
	}

	public function edit($id){
		$cate=Category::find($id);
		$users = User::all();
		return view('categories.edit',['cate'=>$cate],['users'=>$users]);
	}


	public function update(Request $request,$id){
		    $this->validate($request,[
            'name'=>'bail|required|min:4',
           
		],[
			 'required'=>':attribute không được để trống',
            'name.min'=>'Phải nhập ít nhất 4 kí tự',
		]);  
		$cate=Category::find($id);
		$params=[];
		$params['name'] = request()->get('name');
		$params['user_id'] = request()->get('user_id');
		
		$cate ->update($params);
		return redirect()->route('categories.index')->with('thongbao','Bạn đã sửa thành công!');
	}

	public function destroy(Category $cate){
		$cate ->delete();
		return redirect()->route('categories.index')->with('thongbao','Bạn đã xóa thành công!');
	}
}
