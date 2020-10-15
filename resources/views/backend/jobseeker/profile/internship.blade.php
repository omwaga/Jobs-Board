
<div class="tab-pane fade" id="internships" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <form method="Post" action="{{route('jobseeker.internships.store')}}" @submit.prevent="internshipsSubmit"  @keydown="internships.errors.clear($event.target.name)">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <p>Have you done any internships? If yes then please enter the company name below</p>

            </div>
            <div class="form-group">
              <label>Organization</label>                          
              <input class="form-control" name="organization" type="text" required value="{{old('organization')}}" />
            </div>
            <div class="form-group">
              <label>Position</label>                          
              <input class="form-control" name="position" type="text" required value="{{old('position')}}" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Starting Date</label>                        
              <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" />
            </div>
            <div class="form-group">
              <label>Ending Date</label>                        
              <input class="form-control" name="end_date" type="date" required value="{{old('end_date')}}" />
            </div>
            <div class="form-group">
              <label class="form-radio-label ml-3">
                <input class="form-radio-input" type="radio" name="current_internship" value="Current Internship">
                <span class="form-radio-sign">Current Internship</span>
              </label>
            </div>
            <div class="form-group">
              <label>Duties and Responsibilities</label>  
              <textarea class="form-control" name="responsibilities"></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary pull-right">Save</button>
      </form>
    </div>
    <div class="col-md-4">
      <div class="card p-3 bg-secondary">
        <h4 class="text-center text-white">Why add internship?</h4>
        <p class="text-white">If you have done any internship in a company, mentioning those will increase your profile views to recruiters</p>
      </div>
    </div>
  </div>
</div>