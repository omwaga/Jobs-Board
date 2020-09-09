@extends('layouts.admin-master')
@section('content')	
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Company Type</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
					<li><i class="icon_document_alt"></i><a href="{{route('admin.companies.index')}}">Company Type Management</a> </li>
					<li><i class="fa fa-files-o"></i> Edit Company Type</li>
				</ol>
			</div>
		</div>
		<!-- Form validations -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Edit Company Type - {{$company->name}}
					</header>
					<div class="panel-body">
						<div class="form">
							<form class="form-validate form-horizontal" id="feedback_form" method="Post" action="{{route('admin.companies.update', $company->id)}}">
								@csrf
								@method('PATCH')
								<div class="form-group ">
									<label class="control-label col-lg-2">Name <span class="required">*</span></label>
									<div class="col-lg-10">
										<input class="form-control" name="name" type="text" required value="{{$company->name}}" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Save</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</section>
			</div>
		</div>
		<!-- page end-->
	</section>
	@endsection