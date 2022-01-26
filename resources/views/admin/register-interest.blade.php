@extends('layouts.adminmaster')
@section('content')
<div class="container">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Register Interest</h3>

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
                      <th>Mobile</th>

                      <th>Recieve Callback</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($register as $register)
                    <tr>
                      <td>1</td>
                      <td>{{$register->name}}</td>
                      <td>{{$register->email}}</td>
                      <td>{{$register->mobile}}</td>

                      <td><span class="tag tag-success">{{$register->recieve_callback}}</span></td>
                      <td>actions</td>
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