@extends('admin.layout.index')

@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Product Type</a> <a href="#" class="current">Add</a> </div>
    <h1>Add ProductType</h1>
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
            <form action="admin/producttype/addnew" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" name="name" class="span11" placeholder="input name" />
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Description </label>
                <div class="controls">
                  <input type="text" name="description" class="span11" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <textarea name="image" class="span11" ></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Add</button>
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