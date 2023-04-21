<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;


class LinksController extends Controller
{
    public function list()
    {
        return view('links.list', [
            'links' => Link::all()
        ]);
    }

    public function addForm()
    {

        return view('links.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $link = new Link();
        $link->title = $attributes['title'];
        $link->description = $attributes['description'];

        $link->save();

        return redirect('/console/links/list')
            ->with('message', 'Link has been added!');
    }

    public function editForm(Link $link)
    {
        return view('links.edit', [
            'link' => $link,
        ]);
    }

    public function edit(Link $link)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $link->title = $attributes['title'];
        $link->description = $attributes['description'];

        $link->save();

        return redirect('/console/links/list')
            ->with('message', 'Link has been edited!');
    }

    public function delete(Link $link)
    {
        $link->delete();
        
        return redirect('/console/links/list')
            ->with('message', 'Link has been deleted!');        
    }
}
