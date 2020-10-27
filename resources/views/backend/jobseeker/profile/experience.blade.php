
<div class="tab-pane fade" id="work-experience" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <!-- show the experiences -->
      <div class="card" v-if="Experiences.length">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">My Experiences</div>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addexperience">
                <i class="fas fa-plus"></i> Add
              </button>
            </div>
          </div>
        </div>
        <div class="card-body" v-for="(experience, index) in Experiences" :key="experience.id">
          @include('backend.jobseeker.profile.edit-experience')
          <div class="d-flex">
            <div class="avatar avatar-online">
              <span class="avatar-title rounded-circle border border-white bg-info">J</span>
            </div>
            <div class="flex-1 ml-3 pt-1">
              <h5 class="text-uppercase fw-bold mb-1">@{{experience.position}} at @{{experience.organization}}  <span class="text-warning pl-3">@{{experience.start_date}} - @{{experience.end_date}}</span></h5>
              <span class="text-muted">@{{experience.responsibilities}}</span>
            </div>
            <div class="float-right pt-1">
              <small class="text-muted">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" :data-target="'#editexperience-'+index">
                  <i class="fas fa-edit"></i> Edit
                </button></small>
              </div>
            </div>
            <div class="separator-dashed"></div>
          </div>
        </div>

        <form method="Post" action="{{route('jobseeker.experiences.store')}}" @submit.prevent="experiencesSubmit"  @keydown="experiences.errors.clear($event.target.name)" v-if="!Experiences.length">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <p>Do you have any work experience? If yes then please enter the company name below</p>
                <small>I have not doen internship</small>
                <select class="form-control">
                  <option>Course</option>
                </select>
              </div>

              <div class="form-group">
                <label>Organization</label>                          
                <input class="form-control" name="organization" type="text" required value="{{old('organization')}}" v-model="experiences.organization"/>
                <span class="help text-danger" v-if="experiences.errors.has('organization')" v-text="experiences.errors.get('organization')"></span>
              </div>

              <div class="form-group">
                <label>Position</label>                          
                <input class="form-control" name="position" type="text" required value="{{old('position')}}" v-model="experiences.position"/>
                <span class="help text-danger" v-if="experiences.errors.has('position')" v-text="experiences.errors.get('position')"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Starting Date</label>                        
                <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" v-model="experiences.start_date" />
                <span class="help text-danger" v-if="experiences.errors.has('start_date')" v-text="experiences.errors.get('start_date')"></span>
              </div>

              <div class="form-group">
                <label>Ending Date</label>                        
                <input class="form-control" name="end_date" type="date" value="{{old('end_date')}}"  v-model="experiences.end_date"/>
                <span class="help text-danger" v-if="experiences.errors.has('end_date')" v-text="experiences.errors.get('end_date')"></span>
              </div>

              <div class="form-group">
                <label>Current Work</label>                          
                <select class="form-control" name="current_work" v-model="experiences.current_work">
                  <option>Part Time</option>
                </select>
                <span class="help text-danger" v-if="experiences.errors.has('current_work')" v-text="experiences.errors.get('current_work')"></span>
              </div>

              <div class="form-group">
                <label>Duties and Responsibilities</label>  
                <textarea class="form-control" name="responsibilities" v-model="experiences.responsibilities"></textarea>
                <span class="help text-danger" v-if="experiences.errors.has('responsibilities')" v-text="experiences.errors.get('responsibilities')"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-secondary pull-right">Save</button>
        </form>
      </div>
    </div>
  </div>

  <!--Add Experience Modal -->
  <div class="modal fade" id="addexperience" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form method="Post" action="{{route('jobseeker.experiences.store')}}" @submit.prevent="experiencesSubmit"  @keydown="experiences.errors.clear($event.target.name)">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p>Do you have any work experience? If yes then please enter the company name below</p>
                  <small>I have not doen internship</small>
                  <select class="form-control">
                    <option>Course</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Organization</label>                          
                  <input class="form-control" name="organization" type="text" required value="{{old('organization')}}" v-model="experiences.organization"/>
                  <span class="help text-danger" v-if="experiences.errors.has('organization')" v-text="experiences.errors.get('organization')"></span>
                </div>

                <div class="form-group">
                  <label>Position</label>                          
                  <input class="form-control" name="position" type="text" required value="{{old('position')}}" v-model="experiences.position"/>
                  <span class="help text-danger" v-if="experiences.errors.has('position')" v-text="experiences.errors.get('position')"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Starting Date</label>                        
                  <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" v-model="experiences.start_date" />
                  <span class="help text-danger" v-if="experiences.errors.has('start_date')" v-text="experiences.errors.get('start_date')"></span>
                </div>

                <div class="form-group">
                  <label>Ending Date</label>                        
                  <input class="form-control" name="end_date" type="date" value="{{old('end_date')}}"  v-model="experiences.end_date"/>
                  <span class="help text-danger" v-if="experiences.errors.has('end_date')" v-text="experiences.errors.get('end_date')"></span>
                </div>

                <div class="form-group">
                  <label>Current Work</label>                          
                  <select class="form-control" name="current_work" v-model="experiences.current_work">
                    <option>Part Time</option>
                  </select>
                  <span class="help text-danger" v-if="experiences.errors.has('current_work')" v-text="experiences.errors.get('current_work')"></span>
                </div>

                <div class="form-group">
                  <label>Duties and Responsibilities</label>  
                  <textarea class="form-control" name="responsibilities" v-model="experiences.responsibilities"></textarea>
                  <span class="help text-danger" v-if="experiences.errors.has('responsibilities')" v-text="experiences.errors.get('responsibilities')"></span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Experience</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>