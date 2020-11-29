<div class="" style="background-image: url({{asset('front/images/image_2.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container pt-5">
		<div class="row no-gutters slider-text align-items-end justify-content-start pt-5">
			<div class="col-md-12 ftco-animate text-center">
				<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$page_banner->name ?? $page_banner->job_title ?? $page_banner->title ??$page_banner->question ?? 'Job vacancies in kenya'}}</span></p>
				<h3 class="mb-3 text-white">{{$page_banner->name ?? $page_banner->job_title ?? $page_banner->question ?? $page_banner->title ?? 'Search job vacancies in kenya'}}</h3>
			</div>
		</div>
	</div>
</div>