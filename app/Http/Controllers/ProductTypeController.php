<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductType;

class ProductTypeController extends Controller
{
    //
    public function getList(){
    	$productType = ProductType::Paginate(3);
    	return view('admin.producttype.list',['productType'=>$productType]);
    }
    public function getAddnew(){

    	return view('admin.producttype.addnew');
    }

    public function postAddnew(Request $request){
    	
    	$this->validate($request,
    		[
    			'name'=>'required|min:1|max:100',
    			'description'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên loại san pham',

    			'name.min'=>'Tên loại phải có độ dài từ 1 đến 100 kí tự',
    			'name.max'=>'Tên loại phải có độ dài từ 1 đến 100 kí tự',
    			'description.required'=>'bạn chưa mo ta thể loại'
    		]);
    	$producttype = new ProductType;
    	$producttype->name = $request->name;
    	$producttype->description = $request->description;

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
            while (file_exists("source/image/product/".$Hinh)) 
                $Hinh = str_random(4)."_".$name;
            $file->move("source/image/product/",$Hinh);
            $producttype->image =  $Hinh;
        }
        else
        {
            $producttype->image = "";
        }

    	//$producttype->image = $request->image;
    	$producttype->save();
    	return redirect('admin/producttype/addnew')->with('thongbao','Bạn đã thêm thành công');
    	//return view('admin.producttype.addnew');
    }
    public function getUpdate($id){
    	$productType = ProductType::find($id);
    	return view('admin.producttype.edit',['productTypeedit'=>$productType]);

    }

    public function postUpdate(Request $request,$id){
    	$producttype = ProductType::find($id);

    	$producttype->name = $request->name;
    	$producttype->description = $request->description;
    	$producttype->image = $request->image;
    	$producttype->save();
    	return redirect('admin/producttype/update/'.$id)->with('thongbao','Bạn đã sua thành công');
    }


    public function getDelete($id){
    	$producttype = ProductType::find($id);
    	$producttype->delete();
    	return redirect('admin/producttype/list')->with('thongbao','bạn đã xóa thành công');
    }
}
