@extends('layouts.adminmaster')
@section('content')
<div class="container">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admins</h3>
                <div class="create float-lg-right">
                    <a href="{{route('admin.create')}}">Add</a>
                </div>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($admins as $admin)
                    <tr>
                      <td>1</td>
                      <td>{{$admin->name}}</td>
                      <td>{{$admin->email}}</td>
                      <td><span class="tag tag-success">{{$admin->role}}</span></td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection