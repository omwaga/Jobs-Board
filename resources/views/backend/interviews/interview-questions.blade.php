@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Interview Questions Management</h4>
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
            <a href="{{route('admin.interviewCategories.index')}}">Categories</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Interview Questions Management</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('admin.interviews.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Question & Answer</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Question</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $no = 0 @endphp
                    @foreach($questions as $question)
                    @php $no = $no + 1 @endphp
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$question->question}}</td>
                      <td>category</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary btn-sm" href="{{route('admin.interviews.edit', $question->id)}}"><i class="fas fa-edit"></i> Edit</a>

                          <form method="POST" action="{{route('admin.interviews.destroy', $question->id)}}" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i> Delete</button>
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