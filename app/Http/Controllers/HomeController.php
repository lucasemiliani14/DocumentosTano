<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Tema;
use App\Section;
use App\Nota;

class HomeController extends Controller
{
    
    public function index()
    {
        $temas = Tema::all();
        return view('home')->with('temas', $temas);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "tema" => 'required',
        ]);

        $tema = new Tema ([
            'name' => $request->input("tema"),
        ]);

        $tema->save();

        return redirect('/');
    }

    public function editIndex()
    {
        $temas = Tema::all();
        return view('edit.editTemas')->with('temas', $temas);
    }

    public function edit($id)
    {
        $tema = Tema::find($id);
        return view('edit.temaEdit')->with('tema',$tema);
    }

    public function update(Request $request, $id)
    {
        $tema = Tema::find($id);

        $tema->name = $request->input('name');
        
        $tema->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $sectionsArray = Section::where('tema_id', 'LIKE', $id)->get();
        foreach ($sectionsArray as $section) {
            $notas = Nota::where('section_id', 'LIKE', $section->id);
            $notas->delete();
        }
       
        $sections = Section::where('tema_id', 'LIKE', $id);
        $sections->delete();

        $tema = Tema::find($id);
        $tema->delete();

        return redirect('/');
    }
}
