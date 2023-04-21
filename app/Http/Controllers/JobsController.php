<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;
use App\Models\JobSkill;
use App\Models\Skill;


class JobsController extends Controller
{
    public function list()
    {
        return view('jobs.list', [
            'jobs' => Job::all()
        ]);
    }

    public function addForm()
    {
        return view('jobs.add', [
            'skills' => Skill::all(),
        ]);
    }
    
    public function add()
    {
        
        $attributes = request()->validate([
            'title' => 'required',
            'company_name' => 'required',
            'job_description' => 'required',
            'start_at' => 'nullable',
            'end_at' => 'nullable',
            'skills' => 'nullable',
        ]);

        $job = new Job();
        $job->title = $attributes['title'];
        $job->company_name = $attributes['company_name'];
        $job->job_description = $attributes['job_description'];
        $job->start_at = $attributes['start_at'];
        $job->end_at = $attributes['end_at'];
        $job->save();

        if(isset($attributes['skills']))
        {
            foreach($attributes['skills'] as $skill)
            {
                $job->jobSkills()->attach($skill);
            }        
        }
        return redirect('/console/jobs/list')
            ->with('message', 'Job has been added!');
    }

    public function editForm(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function edit(Job $job)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'company_name' => 'required',
            'job_description' => 'required',
            'start_at' => 'nullable',
            'end_at' => 'nullable',
        ]);

        $job->title = $attributes['title'];
        $job->company_name = $attributes['company_name'];
        $job->job_description = $attributes['job_description'];
        $job->start_at = $attributes['start_at'];
        $job->end_at = $attributes['end_at'];
        $job->save();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been edited!');
    }

    public function delete(Job $job)
    {
        $job->delete();
        
        return redirect('/console/jobs/list')
            ->with('message', 'Job has been deleted!');        
    }
}
