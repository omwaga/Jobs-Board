
<div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
  <div class="row">
    <div class="col-md-8">
      <form method="Post" action="{{route('jobseeker.skills.store')}}" @submit.prevent="skillsSubmit"  @keydown="skills.errors.clear($event.target.name)">
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