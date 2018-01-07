<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bill;

class BillController extends Controller
{
    //
    public function getList(){
    	$bill = Bill::all();
    	return view('admin.bill.list',['bill'=>$bill]);
    }
    public function getAddnew(){

    	return view('admin.slide.addnew');
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
    	$slide = new Slide;
    	$slide->link = $request->link;
    	if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' &&$duoi != 'jpeg') 
            {
                return redirect('admin/slide/them')->with('loi','bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("source/image/slide/".$Hinh)) 
                $Hinh = str_random(4)."_".$name;
            $file->move("source/image/slide/",$Hinh);
            $slide->image =  $Hinh;
        }
        else
        {
            $slide->image = "";
        }
    	//$slide->image = $request->image;
    	
    	
    	
    	
    	$slide->save();

        

    	
    	return redirect('admin/slide/addnew')->with('thongbao','Bạn đã thêm thành công');
    	//return view('admin.producttype.addnew');
    }
    public function getUpdate($id){
    	$slide = Slide::find($id);
    	return view('admin.slide.edit',['slide'=>$slide]);

    }

    public function postUpdate(Request $request,$id){
    	$slide = Slide::find($id);

    	$slide->link = $request->link;
    	if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' &&$duoi != 'jpeg') 
            {
                return redirect('admin/slide/them')->with('loi','bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("source/image/slide/".$Hinh)) 
                $Hinh = str_random(4)."_".$name;
            $file->move("source/image/slide/",$Hinh);
            $slide->image =  $Hinh;
        }
        else
        {
            $slide->image = "";
        }
    	//$slide->image = $request->image;

    	$slide->save();
    	return redirect('admin/slide/update/'.$id)->with('thongbao','Bạn đã sua thành công');
    }


    public function getDelete($id){
    	$slide = Slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide/list')->with('thongbao','bạn đã xóa thành công');
    }
}


