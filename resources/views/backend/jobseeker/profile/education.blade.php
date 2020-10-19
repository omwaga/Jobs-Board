
<div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <form method="Post" action="{{route('jobseeker.educations.store')}}" @submit.prevent="educationSubmit"  @keydown="education.errors.clear($event.target.name)">
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