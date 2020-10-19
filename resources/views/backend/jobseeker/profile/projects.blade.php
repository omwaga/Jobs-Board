
<div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <form method="Post" action="{{route('jobseeker.projects.store')}}" @submit.prevent="projectsSubmit"  @keydown="projects.errors.clear($event.target.name)">
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