
<div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">      
      <!-- show the skills -->
      <div class="card" v-if="Certifications.length">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">My Certifications</div>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addcertification">
                <i class="fas fa-plus"></i> Add
              </button>
            </div>
          </div>
        </div>
        <div class="card-body" v-for="(certification, index) in Certifications" :key="certification.id">
          @include('backend.jobseeker.profile.edit-certification')
          <div class="d-flex">
            <div class="flex-1 ml-3 pt-1">
              <h5 class="text-uppercase fw-bold mb-1">@{{certification.certification_name}}  <span class="text-warning pl-3">@{{certification.start_date}} - @{{certification.end_date}}</span></h5>
              <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
            </div>
            <div class="float-right pt-1">
              <small class="text-muted">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" :data-target="'#editcertification-'+index">
                  <i class="fas fa-edit"></i> Edit
                </button>
              </small>
              <small class="text-muted">
                <button @click="deleteCertification(certification.id)" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </small>
            </div>
          </div>
          <div class="separator-dashed"></div>
        </div>
      </div>
      <form method="Post" action="{{route('jobseeker.certifications.store')}}" @submit.prevent="certificationsSubmit"  @keydown="certifications.errors.clear($event.target.name)" v-if="!Certifications.length">
        @csrf
        <div class="form-group">
          <p>If you have done any certification course add them below</p>                   
          <input class="form-control" name="certification_name" type="text" required value="{{old('certification_name')}}" v-model="certifications.certification_name"/>
          <span class="help text-danger" v-if="certifications.errors.has('certification_name')" v-text="certifications.errors.get('certification_name')"></span>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Starting Date</label>                        
              <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" v-model="certifications.start_date"/>
              <span class="help text-danger" v-if="certifications.errors.has('start_date')" v-text="certifications.errors.get('start_date')"></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Ending Date</label>                        
              <input class="form-control" name="end_date" type="date" value="{{old('end_date')}}" v-model="certifications.end_date" />
              <span class="help text-danger" v-if="certifications.errors.has('end_date')" v-text="certifications.errors.get('end_date')"></span>
            </div>
            <div class="form-check">
              <label class="form-radio-label ml-3">
                <input class="form-radio-input" type="radio" name="current_certification" value="Pursuing the certification currently" v-model="certifications.current_certification">
                <span class="form-radio-sign">Pursuing the certification currently</span>
              </label>
              <span class="help text-danger" v-if="certifications.errors.has('current_certification')" v-text="certifications.errors.get('current_certification')"></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary pull-right">Save</button>
      </form><br><br>

      <!-- show the award -->
      <div class="card" v-if="Awards.length">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">My Awards</div>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addaward">
                <i class="fas fa-plus"></i> Add
              </button>
            </div>
          </div>
        </div>
        <div class="card-body" v-for="(award, index) in Awards" :key="award.id">
          @include('backend.jobseeker.profile.edit-award')
          <div class="d-flex">
            <div class="flex-1 ml-3 pt-1">
              <h5 class="text-uppercase fw-bold mb-1">@{{award.award_name}}</h5>
              <span class="text-muted">@{{award.degree_name}}</span>
            </div>
            <div class="float-right pt-1">
              <small class="text-muted">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" :data-target="'#editaward-'+index">
                  <i class="fas fa-edit"></i> Edit
                </button>
              </small>
              <small class="text-muted">
                <button @click="deleteAward(award.id)" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </small>
            </div>
          </div>
          <div class="separator-dashed"></div>
        </div>
      </div>
      <form method="Post" action="{{route('jobseeker.awards.store')}}" @submit.prevent="awardsSubmit"  @keydown="awards.errors.clear($event.target.name)" v-if="!Awards.length">
        @csrf
        <div class="row">
          <div class="col-md-8">                                
            <div class="form-group">
              <p>Please add any award or honor you have achieved</p>                         
              <input class="form-control" name="award_name" type="text" required value="{{old('name')}}"  v-model="awards.award_name"/>
              <span class="help text-danger" v-if="awards.errors.has('name')" v-text="awards.errors.get('name')"></span>
            </div>
          </div>
          <div class="col-md-4">
            <small>Students tend to add competitions they have won, it could be academic or extracurricular or any notable achievement</small>
          </div>
        </div>
        <div class="form-group">
          <label>You got this award for which degree</label>                         
          <input class="form-control" name="degree_name" type="text" required value="{{old('degree_name')}}" v-model="awards.degree_name"/>
          <span class="help text-danger" v-if="awards.errors.has('degree_name')" v-text="awards.errors.get('degree_name')"></span>
        </div>
        <button type="submit" class="btn btn-secondary pull-right">Save</button>
      </form>
    </div>
    <div class="col-md-4">
      <div class="card p-3 bg-secondary">
        <h4 class="text-center text-white">Why should I add achievements?</h4>
        <p class="text-white">Adding academic achievements, accomplishmants and awards and also certifications with time duration, to show how good you are at doing a job. These accolades will keep you ahead of competition.</p>
      </div>
    </div>
  </div>
</div>

<!--Add Certification Modal -->
<div class="modal fade" id="addcertification" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Certification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="Post" action="{{route('jobseeker.certifications.store')}}" @submit.prevent="certificationsSubmit"  @keydown="certifications.errors.clear($event.target.name)">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <p>If you have done any certification course add them below</p>                   
            <input class="form-control" name="certification_name" type="text" required value="{{old('certification_name')}}" v-model="certifications.certification_name"/>
            <span class="help text-danger" v-if="certifications.errors.has('certification_name')" v-text="certifications.errors.get('certification_name')"></span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Starting Date</label>                        
                <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" v-model="certifications.start_date"/>
                <span class="help text-danger" v-if="certifications.errors.has('start_date')" v-text="certifications.errors.get('start_date')"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Ending Date</label>                        
                <input class="form-control" name="end_date" type="date" value="{{old('end_date')}}" v-model="certifications.end_date" />
                <span class="help text-danger" v-if="certifications.errors.has('end_date')" v-text="certifications.errors.get('end_date')"></span>
              </div>
              <div class="form-check">
                <label class="form-radio-label ml-3">
                  <input class="form-radio-input" type="radio" name="current_certification" value="Pursuing the certification currently" v-model="certifications.current_certification">
                  <span class="form-radio-sign">Pursuing the certification currently</span>
                </label>
                <span class="help text-danger" v-if="certifications.errors.has('current_certification')" v-text="certifications.errors.get('current_certification')"></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Certification</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<!--Add Award Modal -->
<div class="modal fade" id="addaward" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Award</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>        

      <form method="Post" action="{{route('jobseeker.awards.store')}}" @submit.prevent="awardsSubmit"  @keydown="awards.errors.clear($event.target.name)">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8">                                
              <div class="form-group">
                <p>Please add any award or honor you have achieved</p>                         
                <input class="form-control" name="award_name" type="text" required value="{{old('name')}}"  v-model="awards.award_name"/>
                <span class="help text-danger" v-if="awards.errors.has('name')" v-text="awards.errors.get('name')"></span>
              </div>
            </div>
            <div class="col-md-4">
              <small>Students tend to add competitions they have won, it could be academic or extracurricular or any notable achievement</small>
            </div>
          </div>
          <div class="form-group">
            <label>You got this award for which degree</label>                         
            <input class="form-control" name="degree_name" type="text" required value="{{old('degree_name')}}" v-model="awards.degree_name"/>
            <span class="help text-danger" v-if="awards.errors.has('degree_name')" v-text="awards.errors.get('degree_name')"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Award</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>