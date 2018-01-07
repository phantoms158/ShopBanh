@extends('admin.layout.index')

@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">List Product Type</a> </div>
    <h1>List Product Type</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Product Type</h5>
          </div>
          <div class="widget-content nopadding">
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}<br>
                        </div>
                    @endif
            <table class="table table-bordered data-table">

              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productType as $prt)
                <tr class="gradeX">
                  <td>{{$prt->id}}</td>
                  <td>{{$prt->name}}</td>
                  <td>{{$prt->description}}</td>
                  <td><img src="source/image/product/{{$prt->image}}"></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/producttype/update/{{$prt->id}}"> Edit</a></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/producttype/delete/{{$prt->id}}"> Delete</a></td>
                </tr>
                @endforeach
                 
              </tbody>
            </table>

          </div>
          <?php echo $productType->links(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection