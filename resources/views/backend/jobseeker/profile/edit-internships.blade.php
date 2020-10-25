

  <!--Editing Internship Modal -->
  <div class="modal fade" :id="'editinternship-'+index" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Internship at @{{internship.organization}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="Post" action="{{route('jobseeker.internships.store')}}" @submit.prevent="internshipsSubmit"  @keydown="internships.errors.clear($event.target.name)">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Organization @{{internship.organization}}</label>                          
                  <input class="form-control" name="organization" type="text" required v-model="internships.organization"/>
                  <span class="help text-danger" v-if="internships.errors.has('organization')" v-text="internships.errors.get('organization')"></span>
                </div>

                <div class="form-group">
                  <label>Position </label>                          
                  <input class="form-control" name="position" type="text" required value="{{old('position')}}" v-model="internships.position"/>
                  <span class="help text-danger" v-if="internships.errors.has('position')" v-text="internships.errors.get('position')"></span>
                </div>

                <div class="form-group">
                  <label>Duties and Responsibilities</label>  
                  <textarea class="form-control" name="responsibilities" v-model="internships.responsibilities"></textarea>
                  <span class="help text-danger" v-if="internships.errors.has('responsibilities')" v-text="internships.errors.get('responsibilities')"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Starting Date</label>                        
                  <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" v-model="internships.start_date"/>
                  <span class="help text-danger" v-if="internships.errors.has('start_date')" v-text="internships.errors.get('start_date')"></span>
                </div>

                <div class="form-group">
                  <label>Ending Date</label>                        
                  <input class="form-control" name="end_date" type="date" value="{{old('end_date')}}" v-model="internships.end_date"/>
                  <span class="help text-danger" v-if="internships.errors.has('end_date')" v-text="internships.errors.get('end_date')"></span>
                </div>

                <div class="form-group">
                  <label class="form-radio-label ml-3">
                    <input class="form-radio-input" type="radio" name="current_internship" value="Current Internship" v-model="internships.current_internship">
                    <span class="form-radio-sign">Current Internship</span>
                  </label>
                  <span class="help text-danger" v-if="internships.errors.has('current_internship')" v-text="internships.errors.get('current_internship')"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Internship</button>
          </div>
        </form>
      </div>
    </div>
  </div>