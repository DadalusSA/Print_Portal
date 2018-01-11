@extends('layouts/app')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
     <!-- <div class="masthead">
        <h3 class="text-muted">Project name</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div> -->
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      <!-- Jumbotron -->
        <div class="jumbotron">
          <h1>{{$company->name}}</h1>
          <p class="lead">{{$company->description}}</p>
          <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
        </div>

      <div class="row" style="background:#f9efef; margin:6px; border-radius:7px">
        <a href="/projects/create/{{ $company->id }}" class="pull-right btn btn-default btn-lg">App project</a>
        <br>
        <br>

      @foreach($company->projects as $project)
          <div class="col-lg-4">
            <h2>{{ $project->name }}</h2>
            <p class="text-danger"> {{ $project->description }} </p>
            <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project</a></p>
          </div>

      @endforeach
      </div>
</div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
         <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->

           <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
             

              <li><a href="/projects/create/{{ $company->id }}">Add Project</a></li>

              <li><a href="/companies">My Companies</a></li>

              <li><a href="/company/create">Add New Company</a></li>


              <br>
               <li>
                <a href="#"
                    onclick="
                    var result = confirm('Are you sure you wanted to delete this Project!!?');
                      if(result)
                      {
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                      }"
                      >
                    Delete
                  </a>

                  <form id="delete-form"
                   action="{{ route('companies.destroy', [$company->id]) }}"
                   method="POST" style="display: none;">
                      <input type="hidden" name="_method" value="delete">
                      {{ csrf_field() }}
                  </form>      
              </li>
            </ol>
          </div>

          <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
          </div>
        </div>
    @endsection