<?php

namespace App\Http\Controllers;
use App\Model\Post;
use App\Model\Category;
use App\Model\User;
use App\Model\Comment;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{

	public function homepage()
	{
		$posts=Post::all(); 

		return view('layout-users.users.index',['posts'=>$posts]);
	}
	public function singlePost($id)
	{
		$post=Post::find($id);
		$comment=Post::find($id)->comments;
		return view('layout-users.users.single-post',['post'=>$post,'comment'=>$comment]);
	}

	public function createPost(){
		$cates = Category::all();
		$users = User::all();
		return view('layout-users.users.create-post',['cates'=>$cates],['users'=>$users]);
	}
	public function storePost(PostRequest $request){
		$data =request()->all();
	//loại bỏ _token,password_confirmation
		$param =\Arr::except($data,['_token']);
		$param['user_id']=Auth::user()->id;
		Post::create($param);
		return redirect()->route('layout-users.users.index');
	}

	public function showPost($id)
	{
		$post=User::find($id)->posts;
		return view('layout-users.users.show-post',['post'=>$post]);
	}

	public function editPost($id){
    	//Tìm user có id   
		$post=Post::find($id);
		$cates = Category::all();
		$users = User::all();
		return view('layout-users.users.edit-post',['post'=>$post],['users'=>$users,'cates'=>$cates]);
	}
	public function updatePost(Request $request,$id){
			$this->validate($request,[
			'title'=>'bail|required|max:255',
			'content'=>'bail|required',

		],[
			'required'=>':attribute không được để trống',
			'title.max'=>'Chỉ được nhập 255 kí tự',
		]); 

    //Tìm user có id   
		$post=Post::find($id);
		$params=[];
		$params['title'] = request()->get('title');
		$params['user_id'] = Auth::user()->id;
		$params['category_id'] = request()->get('category_id');
		$params['content'] = request()->get('content');
		$params['image'] = request()->get('image');
		$post ->update($params);
		return redirect()->route('layout-users.users.index');
	}

    //Hiển thị post ra màn hình
	public function index()
	{
    	 //Lấy toàn bộ users để hiển thị  
		$posts=Post::all();
		return view('posts.index',['posts'=>$posts]);
	}
	 //Form thêm user 
	public function create(){
		$cates = Category::all();
		$users = User::all();
		return view('posts.create',['cates'=>$cates],['users'=>$users]);
	}

    //Xử lý form thêm user
	public function store(PostRequest $request){
		$data =request()->all();
	//loại bỏ _token,password_confirmation
		$param =\Arr::except($data,['_token']);
		Post::create($param);
		return redirect()->route('posts.index')->with('thongbao','Bạn đã thêm thành công!');
	}

//Edit user 
	public function edit($id){
    	//Tìm user có id   
		$post=Post::find($id);
		$cates = Category::all();
		$users = User::all();
		return view('posts.edit',['post'=>$post],['users'=>$users,'cates'=>$cates]);
	}


//Xử lý update
	public function update(Request $request,$id){
		$this->validate($request,[
			'title'=>'bail|required|max:255',
			'content'=>'bail|required',

		],[
			'required'=>':attribute không được để trống',
			'title.max'=>'Chỉ được nhập 255 kí tự',
		]);  
    //Tìm user có id   
		$post=Post::find($id);
		$params=[];
		$params['title'] = request()->get('title');
		$params['user_id'] = request()->get('user_id');
		$params['category_id'] = request()->get('category_id');
		$params['content'] = request()->get('content');
		$params['image'] = request()->get('image');
		$post ->update($params);
		return redirect()->route('posts.index')->with('thongbao','Bạn đã sửa thành công!');
	}


//Xử lý xóa
	public function destroy(Post $post){
		$post ->delete();
		return redirect()->route('posts.index')->with('thongbao','Bạn đã xóa thành công!');
	}

	public function Postdestroy(Post $post){
		$post ->delete();
		return redirect()->route('layout-users.users.index');
	}
}
