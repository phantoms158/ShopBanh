@extends('admin.layout.index')

@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Product Type</a> <a href="#" class="current">Edit</a> </div>
    <h1>Edit ProductType</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>base-info</h5>
          </div>
          <div class="widget-content nopadding">
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
            <form action="admin/product/edit/{{$productedit->id}}" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Name Product:</label>
                <div class="controls">
                  <input type="text" class="span11" name="name"  value="$productedit->name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Type :</label>
                <div class="controls">
                  <input type="text" class="span11" name="productType" value="$productedit->productype" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description </label>
                <div class="controls">
                  <input type="text" class="span11" name="description" value="$productedit->description" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Unit Price</label>
                <div class="controls">
                  <input type="text"  class="span11" name="unit_price"  value="$productedit->unit_price" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Promotion Price</label>
                <div class="controls">
                  <input type="text" class="span11" name="promotion_price" value="$productedit->promotion_price" />
                </div>
              </div>
              <div class="control-group">
                <p><img src="upload/source/image/{{$productedit->image}}"></p>
                                <label>Image</label>
                                <input type="file" name="image" class="form-group"></input>
              </div>
              <div class="control-group">
                <label class="control-label">Unit</label>
                <div class="controls">
                  <textarea class="span11" name="unit" value="$productedit->unit"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">New</label>
                <div class="controls">
                  <textarea class="span11" name="new" value="$productedit->new"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Edit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div><hr>
   
      
    </div>
  </div>
</div>
@endsection