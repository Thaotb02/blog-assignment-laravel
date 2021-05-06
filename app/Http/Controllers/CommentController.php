<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;
use App\Model\Comment;
use Auth;
class CommentController extends Controller
{
	public function index()
	{
		$comments=Comment::all();
		return view('comments.index',['comments'=>$comments]);
	}

	public function updateComment($id){
		$comments =Comment::find($id);
		$url =request()->url();
		$post_id = substr($url,-1);
		$params=[];
		$params['user_id'] =Auth::user()->id;
		$params['content'] = request()->get('content');
	    $params['post_id'] = $post_id;	
	    $params['is_active'] = 1;		
		$comments ->create($params);
		return redirect()->route('layout-users.users.index');
	}
	public function destroy(Comment $comment){
		$comment ->delete();
		return redirect()->route('comments.index')->with('thongbao','Bạn đã xóa thành công!');
	}
}
