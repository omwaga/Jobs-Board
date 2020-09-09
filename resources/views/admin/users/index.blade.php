@extends('layouts.admin-master')
@section('content')
<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> User Management</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li><i class="fa fa-laptop"></i>User Management</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Users
          </header>

          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_profile"></i> Name</th>
                <th><i class="icon_calendar"></i> Email</th>
                <th><i class="icon_mail_alt"></i> Date</th>
                <th><i class="icon_pin_alt"></i> Role</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                <td>
                  <div class="btn-group">
                    @can('edit-users')
                    <a class="btn btn-primary" href="{{route('admin.users.edit', $user->id)}}"><i class="icon_plus_alt2"></i>Edit</a>
                    @endcan
                    @can('delete-users')

                    <form method="POST" action="{{route('admin.users.destroy', $user)}}" class="float-left">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="icon_close_alt2"></i>Delete</button>
                    </form>
                    @endcan
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </section>
  @endsection