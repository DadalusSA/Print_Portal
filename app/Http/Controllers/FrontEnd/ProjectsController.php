<?php

namespace Dadavel\Http\Controllers;

use Dadavel\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check())
            {
        $projects = Project::where('user_id', Auth::user()->id)->get();

        return view('projects.index', ['projects'=> $projects]);
        }

        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $id = null)
    {
        //

        return view('projects.create', ['project_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if(Auth::check())
            {
                $project = Project::create([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'project_id' => $request->input('project_id '),
                    'user_id' => Auth::user()->id
                    ]);

                if($project)
                {
                    return redirect()->route('projects.show', ['project'=> $project->id])
                        ->with('success', 'project Created Successfully');
                }
            }

            return back()->withInput()->with('errors', 'Error creating new project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Dadavel\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //method 1

       //$project = Project::where('id', $project->id)->first();

        //method 2
        $project = Project::find($project->id);

        return view('projects.show', ['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Dadavel\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
         $project = Project::find($project->id);

          return view('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Dadavel\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $projectUpdate = Project::where('id', $project->id)->update(
                [
                   'name' => $request->input('name'),   
                   'description' => $request->input('description')  
                ]);

        if($projectUpdate)
        {
            return redirect()->route('projects.show', ['project'=> $project->id])->with('success' , 'project Updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Dadavel\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $findproject = Project::find($project->id);
        if($findproject->delete())
        {
            //redirection to index.blade.php 
            return redirect()->route('projects.index')
            ->with('success', 'project deleted Successfully');
        }

        return back()->withInput()->with('error', 'project could not be deleted');
    }
}
