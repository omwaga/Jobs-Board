@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Country Management</h4>
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
            <a href="#">Country Management</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('admin.countries.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Country</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Code</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no = 0 @endphp
                    @foreach($countries as $country)
                    @php $no = $no + 1 @endphp
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$country->name}}</td>
                      <td>{{$country->code}}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary btn-sm" href="{{route('admin.countries.edit', $country->id)}}"><i class="fas fa-edit"></i> Edit</a>

                          <form method="POST" action="{{route('admin.countries.destroy', $country->id)}}" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
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