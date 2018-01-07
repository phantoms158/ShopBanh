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
          
            <form action="admin/user/update/{{$user->id}}" method="post" class="form-horizontal">
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
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
              <div class="control-group">
                <label class="control-label">Full Name:</label>
                <div class="controls">
                  <input type="text" class="span11" name="full_name" value="{{$user->full_name}}" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" class="span11" name="email" value="{{$user->email}}"/>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Address:</label>
                <div class="controls">
                  <input type="text"  class="span11" name="address" value="{{$user->address}}" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone</label>
                <div class="controls">
                  <input type="text" class="span11" name="phone" value="{{$user->phone}} "/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="text" class="span11" name="password" />
                </div>
              </div>
              <label class="radio-inline">
                                    <input name="quyen" value="0" type="radio" checked="">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
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