@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">User Management</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{route('admin.dashboard')}}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}">Dashboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">User Management</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('admin.users.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add User</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Registration Date</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Registration Date</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                      <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                      <td>
                        <div class="btn-group">
                          @can('edit-users')
                          <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user->id)}}"><i class="fas fa-edit"></i> Edit</a>
                          @endcan
                          @can('delete-users')

                          <form method="POST" action="{{route('admin.users.destroy', $user)}}" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                          </form>
                          @endcan
                        </div>
                      </td>
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
  </div>      
</div>
@endsection