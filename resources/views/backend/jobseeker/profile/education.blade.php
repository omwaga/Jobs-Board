
<div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <form method="Post" action="{{route('jobseeker.educations.store')}}" @submit.prevent="educationSubmit"  @keydown="education.errors.clear($event.target.name)">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <p>Please select the level of education you are currently pursuing</p>
          <select class="form-control" name="education_level">
            <option>Primary Education</option>
            <option>Secondary Education</option>
            <option>Tertiary Education</option>
          </select>
          <small>If you are not currently pursuing please select your highest qualification</small>
        </div>
        <div class="form-group">
          <label>Course Name</label>                          
          <input class="form-control" name="course" type="text" required value="{{old('course')}}" />
        </div>
        <div class="form-group">
          <label>Your Institution Name</label>                          
          <input class="form-control" name="institution" type="text" required value="{{old('institution')}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Year of Graduation(Expected Year)</label>                        
          <input class="form-control" name="graduation_year" type="date" required value="{{old('graduation_year')}}" />
        </div>
        <div class="form-group">
          <label>Course Type</label>                          
          <select class="form-control" name="course_type">
            <option>Part Time</option>
            <option>Full Time</option>
          </select>
        </div>
        <div class="form-group">
          <label>Score</label>                        
          <input class="form-control" name="score" type="text" required value="{{old('score')}}" />
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-secondary pull-right">Save</button>
  </form>
</div>