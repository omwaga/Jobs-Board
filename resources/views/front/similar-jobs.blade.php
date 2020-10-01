
<h4>Similar Jobs</h4>
<div class="row">
	@foreach($similar_jobs as $similar)
	<div class="col-md-4">
		<div class="card border-light shadow-sm border-bottom pb-3 mb-3 pt-3">
			<div class="row align-items-start job-item">
				<div class="col-md-12 pl-5">
					<span class="badge badge-secondary px-2 py-1 mb-3">{{$similar->postjobtype->name}}</span>
					<h2><a href="{{route('front.singlejob', $similar->slug)}}">{{$similar->job_title}}</a> </h2>
					<p class="meta"><strong>{{$similar->user->name}}</strong></p>
					<p>{{$similar->postcity->name}}, {{$similar->postcountry->name}}</p>
				
					<div class="row">
						<div class="col-6">
							<a href="{{route('front.singlejob', $similar->slug)}}" class="btn btn-light"><span class="icon-heart-o mr-2 text-danger"></span>Save</a>
						</div>
						<div class="col-6 text-left">
							<a href="{{route('front.singlejob', $similar->slug)}}" class="btn btn-primary">Apply</a>
						</div>
					</div>
					</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

