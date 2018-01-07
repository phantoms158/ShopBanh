@extends('admin.layout.index')

@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Product</a> </div>
    <h1>Product</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
            @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}<br>
                        </div>
                    @endif
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>ProductType</th>
                  <th>Description</th>
                  <th>unit_price</th>
                  <th>promotion_price</th>
                  <th>image</th>
                  <th>unit</th>
                  <th>new</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($product as $prd)
                <tr class="gradeX">
                  <td>{{$prd->id}}</td>
                  <td>{{$prd->name}}</td>
                  <td>{{$prd->producttype}}</td>
                  <td>{{$prd->description}}</td>
                  <td>{{$prd->unit_price}}</td>
                  <td>{{$prd->promotion_price}}</td>
                  <td><img src="source/image/product/{{$prd->image}}"></td>
                  <td>{{$prd->unit}}</td>
                  <td>{{$prd->new}}</td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/update/{{$prd->id}}"> Edit</a></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$prd->id}}"> Delete</a></td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection