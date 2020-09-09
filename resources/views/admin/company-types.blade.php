@extends('layouts.admin-master')
@section('content')	
<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Company Type Management</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li><i class="fa fa-laptop"></i>Company Type  Management</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Company Type  Management

            <a class="btn btn-success pull-right" data-toggle="modal" href="#newType">
              New Company Type 
            </a>
          </header>

          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
              @php $no = 0 @endphp
              @foreach($company_types as $company)
              @php $no = $no + 1 @endphp
              <tr>
                <td>{{$no}}</td>
                <td>{{$company->name}}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="{{route('admin.companies.edit', $company->id)}}"><i class="icon_plus_alt2"></i>Edit</a>

                    <a href="{{route('admin.companies.destroy', $company->id)}}"><button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="icon_close_alt2"></i>Delete</button></a>

                    <form method="POST" action="{{route('admin.companies.destroy', $company->id)}}" id="delete-form">
                      @csrf
                      @method('DELETE')
                    </form>

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


  <!--New Category Modal -->
  <div class="modal fade" id="newType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Company Type </h4>
        </div>
        <form class="form-validate form-horizontal" method="POST" action="{{route('admin.companies.store')}}">
          @csrf
          <div class="modal-body">
            <div class="form-group ">
              <label class="control-label col-lg-2">Name<span class="required">*</span></label>
              <div class="col-lg-10">
                <input class="form-control " value="{{old('name')}}" type="text" name="name" required />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
            <button class="btn btn-success" type="submit">Add Company Type </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--end new category modal -->
  @endsection