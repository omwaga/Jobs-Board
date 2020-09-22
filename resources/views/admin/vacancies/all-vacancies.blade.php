@extends('layouts.admin-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Vacancy Management</h4>
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
            <a href="#">Vacancy Management</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('admin.vacancies.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Vacancy</a>
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
              @php $no = 0 @endphp
              @foreach($vacancies as $vacancy)
              @php $no = $no + 1 @endphp
              <tr>
                <td>{{$no}}</td>
                <td>{{$vacancy->job_title}}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="{{route('admin.vacancies.edit', $vacancy->id)}}"><i class="icon_plus_alt2"></i>Edit</a>

                    <a href="{{route('admin.vacancies.destroy', $vacancy->id)}}"><button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="icon_close_alt2"></i>Delete</button></a>

                    <form method="POST" action="{{route('admin.vacancies.destroy', $vacancy->id)}}" id="delete-form">
                      @csrf
                      @method('DELETE')
                    </form>

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