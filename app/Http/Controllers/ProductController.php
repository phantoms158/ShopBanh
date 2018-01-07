<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductType;

class ProductController extends Controller
{
    //
    public function getList(){
    	$product = Product::all();
    	return view('admin.product.list',['product'=>$product]);
    }
    public function getAddnew(){
        $productType = ProductType::all();
    	return view('admin.product.addnew',['productType'=>$productType]);
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
    	$product = new Product;
    	$product->name = $request->name;
        $product->id_type = $request->productType;
    	$product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;

    	
        
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' &&$duoi != 'jpeg') 
            {
                return redirect('/admin/product/addnew')->with('loi','bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while (file_exists("source/image/product/".$hinh)) 
                $hinh = str_random(4)."_".$name;
            $file->move("source/image/product/",$hinh);
            $product->image = $hinh;
        }
        else
        {
            $product->image = "";
        }

        

        $product->unit = $request->unit;
        $product->new = $request->new;
    	$product->save();
    	return redirect('admin/product/addnew')->with('thongbao','Bạn đã thêm thành công');
    	//return view('admin.producttype.addnew');
    }
    public function getUpdate($id){
    	$product = Product::find($id);
    	return view('admin.product.edit',['productedit'=>$product]);

    }

    public function postUpdate(Request $request,$id){
    	$product = Product::find($id);

    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->image = $request->image;
    	$product->save();
    	return redirect('admin/product/update/'.$id)->with('thongbao','Bạn đã sua thành công');
    }


    public function getDelete($id){
    	$product = Product::find($id);
    	$product->delete();
    	return redirect('admin/product/list')->with('thongbao','bạn đã xóa thành công');
    }
}
