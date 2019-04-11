<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Linkssection;

class LinkssectionsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "link" => 'required',
        ]);

        $linksSection = new Linkssection ([
            'name' => $request->input("name"),
            'link' => $request->input("link"),
            'section_id'=> $request->input("section_id"),
        ]);

        $linksSection->save();

        return redirect()->back();
    }
}
