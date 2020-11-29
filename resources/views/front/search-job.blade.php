<div class="ftco-search">
					<div class="row">
						<div class="col-md-12 nav-link-wrap">
							<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job/Internship</a>
<!-- 
								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Find a Candidate</a> -->

							</div>
						</div>
						<div class="col-md-12 tab-wrap">

							<div class="tab-content p-4" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
									<form action="{{route('front.jobseeker.search')}}" class="search-job" method="GET">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-briefcase"></span></div>
														<input type="text" name="search" class="form-control" placeholder="eg. Garphic. Web Developer">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="category" id="" class="form-control">
																<option value="">All Categories</option>
																@foreach($categories as $category)
																<option value="{{$category->id}}">{{$category->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="job_type" id="" class="form-control">
																<option value="">All Job Types</option>
																@foreach($job_types as $type)
																<option value="{{$type->id}}">{{$type->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="icon-map-marker"></span></div>
															<select name="location" id="" class="form-control">
																<option value="">All Locations</option>
																@foreach($locations as $location)
																<option value="{{$location->id}}">{{$location->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<input type="submit" value="Search" class="form-control btn btn-primary">
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>

								<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-performance-tab">
									<form action="#" class="search-job">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-user"></span></div>
														<input type="text" class="form-control" placeholder="eg. Adam Scott">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="" id="" class="form-control">
																<option value="">Category</option>
																<option value="">Full Time</option>
																<option value="">Part Time</option>
																<option value="">Freelance</option>
																<option value="">Internship</option>
																<option value="">Temporary</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-map-marker"></span></div>
														<input type="text" class="form-control" placeholder="Location">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<input type="submit" value="Search" class="form-control btn btn-primary">
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>