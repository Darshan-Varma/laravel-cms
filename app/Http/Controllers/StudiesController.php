<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Study;


class StudiesController extends Controller
{
    public function list()
    {
        return view('studies.list', [
            'studies' => Study::all()
        ]);
    }

    public function addForm()
    {
        return view('studies.add', [
            'studies' => Study::all(),
        ]);
    }
    
    public function add()
    {
        
        $attributes = request()->validate([
            'title' => 'required',
            'school_name' => 'required',
            'education_level' => 'required',
            'start_at' => 'nullable',
            'end_at' => 'nullable',
        ]);

        $study = new Study();
        $study->title = $attributes['title'];
        $study->school_name = $attributes['school_name'];
        $study->education_level = $attributes['education_level'];
        $study->start_at = $attributes['start_at'];
        $study->end_at = $attributes['end_at'];
        $study->save();

        return redirect('/console/studies/list')
            ->with('message', 'Study has been added!');
    }

    public function editForm(Study $study)
    {
        return view('studies.edit', [
            'study' => $study,
        ]);
    }

    public function edit(Study $study)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'school_name' => 'required',
            'education_level' => 'required',
            'start_at' => 'nullable',
            'end_at' => 'nullable',
        ]);

        $study->title = $attributes['title'];
        $study->school_name = $attributes['school_name'];
        $study->education_level = $attributes['education_level'];
        $study->start_at = $attributes['start_at'];
        $study->end_at = $attributes['end_at'];
        $study->save();

        return redirect('/console/studies/list')
            ->with('message', 'Study has been edited!');
    }

    public function delete(Study $study)
    {
        $study->delete();
        
        return redirect('/console/studies/list')
            ->with('message', 'Study has been deleted!');        
    }
}
