<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    //
    public function getList(){
    	$user = User::all();
    	return view('admin.user.list',['user'=>$user]);
    }
    public function getAddnew(){

    	return view('admin.user.addnew');
    }

    public function postAddnew(Request $request){
    	
    	/*$this->validate($request,
    		[
    			'name'=>'required|min:1|max:100',
    			'description'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên loại san pham',

    			'name.min'=>'Tên loại phải có độ dài từ 1 đến 100 kí tự',
    			'name.max'=>'Tên loại phải có độ dài từ 1 đến 100 kí tự',
    			'description.required'=>'bạn chưa mo ta thể loại'
    		]);*/
    	$user = new User;
    	$user->full_name = $request->full_name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->quyen = $request->quyen;
    	$user->address = $request->address;
    	$user->phone = $request->phone;
    	
    	
    	
    	$user->save();

        

    	
    	return redirect('admin/user/addnew')->with('thongbao','Bạn đã thêm thành công');
    	//return view('admin.producttype.addnew');
    }
    public function getUpdate($id){
    	$user = User::find($id);
    	return view('admin.user.edit',['user'=>$user]);

    }

    public function postUpdate(Request $request,$id){
    	$user = User::find($id);

    	$user->full_name = $request->full_name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->quyen = $request->quyen;
    	$user->address = $request->address;
    	$user->phone = $request->phone;
    	$user->save();
    	return redirect('admin/user/update/'.$id)->with('thongbao','Bạn đã sua thành công');
    }


    public function getDelete($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/list')->with('thongbao','bạn đã xóa thành công');
    }
}
