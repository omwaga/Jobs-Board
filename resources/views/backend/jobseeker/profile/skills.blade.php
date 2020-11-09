<div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <!-- show the skills -->
      <div class="card" v-if="Skills.length">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">My Skills</div>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addskill">
                <i class="fas fa-plus"></i> Add
              </button>
            </div>
          </div>
        </div>
        <div class="card-body" v-for="(skill, index) in Skills" :key="skill.id">
          @include('backend.jobseeker.profile.edit-skill')
          <div class="d-flex">
            <div class="avatar avatar-online">
              <span class="avatar-title rounded-circle border border-white bg-info">J</span>
            </div>
            <div class="flex-1 ml-3 pt-1">
              <h5 class="text-uppercase fw-bold mb-1">@{{skill.name}} </h5>
            </div>
            <div class="float-right pt-1">
              <small class="text-muted">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" :data-target="'#editskill-'+index">
                  <i class="fas fa-edit"></i> Edit
                </button></small>
          <small class="text-muted">
            <a href="#" class="btn btn-danger btn-sm">
              <i class="fas fa-trash"></i> Delete
            </a></small>
              </div>
            </div>
            <div class="separator-dashed"></div>
          </div>
        </div>

        <form method="Post" action="{{route('jobseeker.skills.store')}}" @submit.prevent="skillsSubmit"  @keydown="skills.errors.clear($event.target.name)" v-if="!Skills.length">
          @csrf
          <div class="form-group">
            <label>Add all the diverse skills you have</label>
            <input type="text" class="form-control" name="name" v-model="skills.name">
            <span class="help text-danger" v-if="skills.errors.has('name')" v-text="skills.errors.get('name')"></span>
          </div>
          <button type="submit" class="btn btn-secondary pull-right">Add</button>
        </form>
      </div>
      <div class="col-md-4">
        <div class="card p-3 bg-secondary">
          <h4 class="text-center text-white">Why should I add Skills?</h4>
          <p class="text-white">Recruiters look for a core set of skills and traits when considering applications for both interships and entry-level jobs. Add all relevant skills here to impress recruiters, include your strengths like technical, analytical, observational or communication skills etc.</p>
        </div>
      </div>
    </div>
  </div>

  <!--Add Skill Modal -->
  <div class="modal fade" id="addskill" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Skill</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form method="Post" action="{{route('jobseeker.skills.store')}}" @submit.prevent="skillsSubmit"  @keydown="skills.errors.clear($event.target.name)">
          @csrf
          <div class="form-group">
            <label>Add all the diverse skills you have</label>
            <input type="text" class="form-control" name="name" v-model="skills.name">
            <span class="help text-danger" v-if="skills.errors.has('name')" v-text="skills.errors.get('name')"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Skill</button>
          </div>
        </form>

      </div>
    </div>
  </div>