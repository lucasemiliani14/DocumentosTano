<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Linksnota;

class LinksnotasController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "link" => 'required',
        ]);

        $linksNota = new Linksnota ([
            'name' => $request->input("name"),
            'link' => $request->input("link"),
            'nota_id'=> $request->input("nota_id"),
        ]);

        $linksNota->save();

        return redirect()->back();
    }

    
}
