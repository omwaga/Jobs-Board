@extends('layouts.admin-master')
@section('content')	
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Posting Subscriptions</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
					<li><i class="icon_document_alt"></i><a href="{{route('admin.postingsubscriptions.index')}}">Posting Subscriptions Management</a> </li>
					<li><i class="fa fa-files-o"></i> Edit Posting Subscription</li>
				</ol>
			</div>
		</div>
		<!-- Form validations -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Edit Posting Subscriptions - {{$postingsubscription->name}}
					</header>
					<div class="panel-body">
						<div class="form">
							<form class="form-validate form-horizontal" id="feedback_form" method="Post" action="{{route('admin.postingsubscriptions.update', $postingsubscription->id)}}">
								@csrf
								@method('PATCH')
								<div class="form-group ">
									<label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
									<div class="col-lg-10">
										<input class="form-control" name="name" type="text" required value="{{$postingsubscription->name}}" />
									</div>
								</div>
								<div class="form-group ">
									<label for="cemail" class="control-label col-lg-2">Charges<span class="required">*</span></label>
									<div class="col-lg-10">
										<input class="form-control " value="{{$postingsubscription->charges}}"  type="text" name="charges" required />
									</div>
								</div>
								<div class="form-group ">
									<label for="cemail" class="control-label col-lg-2">Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control" name="description" required="">{{$postingsubscription->description}}</textarea>
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