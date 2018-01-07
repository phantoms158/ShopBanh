@extends('admin.layout.index')

@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
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
                  <th>Full Name:</th>
                  <th>Email</th>
                  <th>Quyen</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $us)
                <tr class="gradeX">
                  <td>{{$us->id}}</td>
                  <td>{{$us->full_name}}</td>
                  <td>{{$us->email}}</td>
                  <td>{{$us->quyen}}</td>
                  <td>{{$us->address}}</td>
                  <td>{{$us->phone}}</td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/update/{{$us->id}}"> Edit</a></td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$us->id}}"> Delete</a></td>
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