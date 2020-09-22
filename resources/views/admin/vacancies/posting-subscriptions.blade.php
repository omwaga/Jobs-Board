@extends('layouts.admin-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Posting Subscription Management</h4>
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
            <a href="#">Posting Subscription Management</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('admin.postingsubscriptions.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Posting Subscription</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Charge</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Charge</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no = 0 @endphp
                    @foreach($posting_subscriptions as $posting_subscription)
                    @php $no = $no + 1 @endphp
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$posting_subscription->name}}</td>
                      <td>{{$posting_subscription->charges}}</td>
                      <td>{{$posting_subscription->description}}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary btn-sm" href="{{route('admin.postingsubscriptions.edit', $posting_subscription->id)}}"><i class="fas fa-edit"></i>Edit</a>

                          <form method="POST" action="{{route('admin.postingsubscriptions.destroy', $posting_subscription->id)}}" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i>Delete</button>
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