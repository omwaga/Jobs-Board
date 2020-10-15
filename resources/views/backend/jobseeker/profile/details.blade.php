
<div class="tab-pane fade show active" id="personal-&-professional-details" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
  <form method="Post" action="{{route('jobseeker.details.store')}}" @submit.prevent="detailsSubmit" @keydown="details.errors.clear($event.target.name)">
    @csrf
    <div class="row">
      <div class="col-md-4">

        <div class="form-group">
          <label>First Name</label>                          
          <input class="form-control" name="first_name" type="text"  value="{{old('first_name')}}" v-model="details.first_name" required/>
          <span class="help text-danger" v-if="details.errors.has('first_name')" v-text="details.errors.get('first_name')"></span>
        </div>

        <div class="form-group">
          <label>Phone Number</label>                          
          <input class="form-control" name="phone_number" type="text" required value="{{old('phone_number')}}" v-model="details.phone_number" />
          <span class="help text-danger" v-if="details.errors.has('phone_number')" v-text="details.errors.get('phone_number')"></span>
        </div>

        <div class="form-check">
          <label>Gender</label><br/>
          <label class="form-radio-label">
            <input class="form-radio-input" type="radio" v-model="details.gender" name="gender" value="Male">
            <span class="form-radio-sign">Male</span>
          </label>
          <label class="form-radio-label ml-3">
            <input class="form-radio-input" type="radio" v-model="details.gender" name="gender" value="Female">
            <span class="form-radio-sign">Female</span>
          </label>
          <span class="help text-danger" v-if="details.errors.has('gender')" v-text="details.errors.get('gender')"></span>
        </div>

        <div class="form-group">
          <label>Date Of Birth</label>                          
          <input class="form-control" name="date_of_birth" v-model="details.date_of_birth" type="date" required value="{{old('date_of_birth')}}" />
          <span class="help text-danger" v-if="details.errors.has('date_of_birth')" v-text="details.errors.get('date_of_birth')"></span>
        </div>

      </div>
      <div class="col-md-4">

        <div class="form-group">
          <label>Last Name</label>                          
          <input class="form-control" name="last_name" v-model="details.last_name" type="text" required value="{{old('last_name')}}" />
          <span class="help text-danger" v-if="details.errors.has('last_name')" v-text="details.errors.get('last_name')"></span>
        </div>

        <div class="form-group">
          <label>Email</label>                          
          <input class="form-control" name="email" v-model="details.email" type="email" required value="{{old('email')}}" />
          <span class="help text-danger" v-if="details.errors.has('email')" v-text="details.errors.get('email')"></span>
        </div>

        <div class="form-group">
          <label>Home City</label>                           
          <select class="form-control" v-model="details.home_city" name="home_city">
            <option value="">Select Home City</option>
            @foreach($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
            @endforeach
          </select>
          <span class="help text-danger" v-if="details.errors.has('home_city')" v-text="details.errors.get('home_city')"></span>
        </div>

        <div class="form-group">
          <label>Current Location</label>
          <select class="form-control" v-model="details.current_location" name="current_location">
            <option value="">Select Current Location</option>
            @foreach($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
            @endforeach
          </select>
          <span class="help text-danger" v-if="details.errors.has('current_location')" v-text="details.errors.get('current_location')"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>When to start working</label>                                                   
          <select class="form-control" v-model="details.when_to_start" name="when_to_start">
            <option value="">Select when to start working</option>
            <option value="Immediately">Immediately</option>
            <option value="After 2 Weeks">After 2 Weeks</option>
            <option value="After 1 Month">After 1 Month</option>
          </select>
          <span class="help text-danger" v-if="details.errors.has('when_to_start')" v-text="details.errors.get('when_to_start')"></span>
        </div>

        <div class="form-group">
          <label>Preferred work location</label>                                       
          <select class="form-control" v-model="details.preferred_location" name="preferred_location">
            <option value="">Select Preferred Location</option>
            @foreach($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
            @endforeach
          </select>
          <span class="help text-danger" v-if="details.errors.has('preferred_location')" v-text="details.errors.get('preferred_location')"></span>
        </div>

        <div class="form-group">
          <label>Preferred Job Type</label>                                                     
          <select class="form-control is-invalid" v-model="details.job_type" name="job_type">
            <option value="">Select Preferred Job Type</option>
            @foreach($job_types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
          </select>
          <span class="help text-danger" v-if="details.errors.has('job_type')" v-text="details.errors.get('job_type')"></span>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-secondary pull-right">Save</button>
  </form>
</div>