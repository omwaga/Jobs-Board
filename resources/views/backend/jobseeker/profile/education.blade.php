<div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <!-- show the educations -->
  <div class="card" v-if="Educations.length">
    <div class="card-header">
      <div class="card-head-row">
        <div class="card-title">Education History</div>
        <div class="card-tools">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addeducation">
            <i class="fas fa-plus"></i> Add
          </button>
        </div>
      </div>
    </div>
    <div class="card-body" v-for="(education, index) in Educations" :key="education.id">
      @include('backend.jobseeker.profile.edit-educations')
      <div class="d-flex">
        <div class="flex-1 ml-3 pt-1">
          <h5 class="text-uppercase fw-bold mb-1">@{{education.education_level}} at @{{education.institution}}  <span class="text-warning pl-3">@{{education.graduation_year}} </span></h5>
          <span class="text-muted">Course: @{{education.course}}</span>
          <span class="text-muted">Course Type: @{{education.course_type}}</span>
          <span class="text-muted">Score: @{{education.score}}</span>
        </div>
        <div class="float-right pt-1">
          <small class="text-muted">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" :data-target="'#editeducation-'+index">
              <i class="fas fa-edit"></i> Edit
            </button>
          </small>
          <small class="text-muted">
            <button @click="deleteEducation(education.id)" class="btn btn-danger btn-xs">
              <i class="fas fa-trash"></i> Delete
            </button>
          </small>
        </div>
      </div>
      <div class="separator-dashed"></div>
    </div>
  </div>

  <!-- creating the education form -->
  <form method="Post" action="{{route('jobseeker.educations.store')}}" @submit.prevent="educationSubmit"  @keydown="education.errors.clear($event.target.name)" v-if="!Educations.length">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <p>Please select the level of education you are currently pursuing</p>
          <select class="form-control" name="education_level" v-model="education.education_level">
            <option value="">Select Education Level</option>
            <option value="Primary Education">Primary Education</option>
            <option value="Secondary Education">Secondary Education</option>
            <option value="Tertiary Education">Tertiary Education</option>
          </select>
          <small>If you are not currently pursuing please select your highest qualification</small>
          <span class="help text-danger" v-if="education.errors.has('education_level')" v-text="education.errors.get('education_level')"></span>
        </div>

        <div class="form-group">
          <label>Course Name</label>                          
          <input class="form-control" name="course" type="text" required value="{{old('course')}}" v-model="education.course"/>
          <span class="help text-danger" v-if="education.errors.has('course')" v-text="education.errors.get('course')"></span>
        </div>

        <div class="form-group">
          <label>Your Institution Name</label>                          
          <input class="form-control" name="institution" type="text" required value="{{old('institution')}}" v-model="education.institution"/>
          <span class="help text-danger" v-if="education.errors.has('institution')" v-text="education.errors.get('institution')"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Year of Graduation(Expected Year)</label>                        
          <input class="form-control" name="graduation_year" type="date" required value="{{old('graduation_year')}}" v-model="education.graduation_year"/>
          <span class="help text-danger" v-if="education.errors.has('graduation_year')" v-text="education.errors.get('graduation_year')"></span>
        </div>

        <div class="form-group">
          <label>Course Type</label>                          
          <select class="form-control" name="course_type" v-model="education.course_type">
            <option>Part Time</option>
            <option>Full Time</option>
          </select>
          <span class="help text-danger" v-if="education.errors.has('course_type')" v-text="education.errors.get('course_type')"></span>
        </div>

        <div class="form-group">
          <label>Score</label>                        
          <input class="form-control" name="score" type="text" required value="{{old('score')}}" v-model="education.score"/>
          <span class="help text-danger" v-if="education.errors.has('score')" v-text="education.errors.get('score')"></span>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-secondary pull-right">Save</button>
  </form>
</div>

<!--Add Education Modal -->
<div class="modal fade" id="addeducation" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- creating the education form -->
      <form method="Post" action="{{route('jobseeker.educations.store')}}" @submit.prevent="educationSubmit"  @keydown="education.errors.clear($event.target.name)">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <p>Please select the level of education you are currently pursuing</p>
                <select class="form-control" name="education_level" v-model="education.education_level">
                  <option value="">Select Education Level</option>
                  <option value="Primary Education">Primary Education</option>
                  <option value="Secondary Education">Secondary Education</option>
                  <option value="Tertiary Education">Tertiary Education</option>
                </select>
                <small>If you are not currently pursuing please select your highest qualification</small>
                <span class="help text-danger" v-if="education.errors.has('education_level')" v-text="education.errors.get('education_level')"></span>
              </div>

              <div class="form-group">
                <label>Course Name</label>                          
                <input class="form-control" name="course" type="text" required value="{{old('course')}}" v-model="education.course"/>
                <span class="help text-danger" v-if="education.errors.has('course')" v-text="education.errors.get('course')"></span>
              </div>

              <div class="form-group">
                <label>Your Institution Name</label>                          
                <input class="form-control" name="institution" type="text" required value="{{old('institution')}}" v-model="education.institution"/>
                <span class="help text-danger" v-if="education.errors.has('institution')" v-text="education.errors.get('institution')"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Year of Graduation(Expected Year)</label>                        
                <input class="form-control" name="graduation_year" type="date" required value="{{old('graduation_year')}}" v-model="education.graduation_year"/>
                <span class="help text-danger" v-if="education.errors.has('graduation_year')" v-text="education.errors.get('graduation_year')"></span>
              </div>

              <div class="form-group">
                <label>Course Type</label>                          
                <select class="form-control" name="course_type" v-model="education.course_type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
                <span class="help text-danger" v-if="education.errors.has('course_type')" v-text="education.errors.get('course_type')"></span>
              </div>

              <div class="form-group">
                <label>Score</label>                        
                <input class="form-control" name="score" type="text" required value="{{old('score')}}" v-model="education.score"/>
                <span class="help text-danger" v-if="education.errors.has('score')" v-text="education.errors.get('score')"></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Education</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>