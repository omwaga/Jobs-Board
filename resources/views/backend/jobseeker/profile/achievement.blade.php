
<div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <form method="Post" action="{{route('jobseeker.certifications.store')}}" @submit.prevent="certificationsSubmit"  @keydown="certifications.errors.clear($event.target.name)">
        @csrf
        <div class="form-group">
          <p>If you have done any certification course add them below</p>                   
          <input class="form-control" name="certification_name" type="text" required value="{{old('certification_name')}}" />
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Starting Date</label>                        
              <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Ending Date</label>                        
              <input class="form-control" name="end_date" type="date" required value="{{old('end_date')}}" />
            </div>
            <div class="form-check">
              <label class="form-radio-label ml-3">
                <input class="form-radio-input" type="radio" name="current_certification" value="Pursuing the certification currently">
                <span class="form-radio-sign">Pursuing the certification currently</span>
              </label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary pull-right">Save</button>
      </form><br><br>
      <form method="Post" action="{{route('jobseeker.awards.store')}}" @submit.prevent="awardsSubmit"  @keydown="awards.errors.clear($event.target.name)">
        @csrf
        <div class="row">
          <div class="col-md-8">                                
            <div class="form-group">
              <p>Please add any award or honor you have achieved</p>                         
              <input class="form-control" name="award_name" type="text" required value="{{old('name')}}" />
            </div>
          </div>
          <div class="col-md-4">
            <small>Students tend to add competitions they have won, it could be academic or extracurricular or any notable achievement</small>
          </div>
        </div>
        <div class="form-group">
          <label>You got this award for which degree</label>                         
          <input class="form-control" name="degree_name" type="text" required value="{{old('degree_name')}}" />
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