
<div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <!-- show the projects -->
      <div class="card" v-if="Projects.length">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">My Projects</div>
            <div class="card-tools">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addproject">
                <i class="fas fa-plus"></i> Add
              </button>
            </div>
          </div>
        </div>
        <div class="card-body" v-for="(project, index) in Projects" :key="project.id">
          @include('backend.jobseeker.profile.edit-projects')
          <div class="d-flex">
            <div class="avatar avatar-online">
              <span class="avatar-title rounded-circle border border-white bg-info">J</span>
            </div>
            <div class="flex-1 ml-3 pt-1">
              <h5 class="text-uppercase fw-bold mb-1">@{{project.project_name}} </h5>
              <span class="text-muted">@{{project.description}}</span>
            </div>
            <div class="float-right pt-1">
              <small class="text-muted">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" :data-target="'#editproject-'+index">
                  <i class="fas fa-edit"></i> Edit
                </button>
              </small>
              <small class="text-muted">
                <button @click="deleteProject(project.id)" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </small>
            </div>
          </div>
          <div class="separator-dashed"></div>
        </div>
      </div>

      <form method="Post" action="{{route('jobseeker.projects.store')}}" @submit.prevent="projectsSubmit"  @keydown="projects.errors.clear($event.target.name)" v-if="!Projects.length">
        @csrf
        <p>Did you undertake any projects ? If Yes, please add the details below</p>
        <div class="form-group">
          <label>Project Name</label>                          
          <input class="form-control" name="project_name" type="text" required value="{{old('project_name')}}" v-model="projects.project_name"/>
          <span class="help text-danger" v-if="projects.errors.has('project_name')" v-text="projects.errors.get('project_name')"></span>
        </div>

        <div class="form-group">
          <label>Description</label>  
          <textarea class="form-control" name="description" v-model="projects.description"></textarea>
          <span class="help text-danger" v-if="projects.errors.has('description')" v-text="projects.errors.get('description')"></span>
        </div>
        <button type="submit" class="btn btn-secondary pull-right">Save</button>
      </form>
    </div>
    <div class="col-md-4">
      <div class="card p-3 bg-secondary">
        <h4 class="text-center text-white">Why add Projects?</h4>
        <p class="text-white">If you have done any project in college, mentioning those will increase your profile views to recruiters</p>
      </div>
    </div>
  </div>
</div>

<!--Add Project Modal -->
<div class="modal fade" id="addproject" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="Post" action="{{route('jobseeker.projects.store')}}" @submit.prevent="projectsSubmit"  @keydown="projects.errors.clear($event.target.name)">
        @csrf
        <div class="modal-body">
          <p>Did you undertake any projects ? If Yes, please add the details below</p>
          <div class="form-group">
            <label>Project Name</label>                          
            <input class="form-control" name="project_name" type="text" required value="{{old('project_name')}}" v-model="projects.project_name"/>
            <span class="help text-danger" v-if="projects.errors.has('project_name')" v-text="projects.errors.get('project_name')"></span>
          </div>

          <div class="form-group">
            <label>Description</label>  
            <textarea class="form-control" name="description" v-model="projects.description"></textarea>
            <span class="help text-danger" v-if="projects.errors.has('description')" v-text="projects.errors.get('description')"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Project</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>