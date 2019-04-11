<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use App\Section;
use App\Nota;
use App\Linksnota;
use App\Linkssection;

class NotasController extends Controller
{
    public function index($id)
    {
        $notas = Nota::where('section_id', 'LIKE', '%' .$id)->get();
        $sections = Section::where('id', 'LIKE', '%' .$id)->get();
        $links = Linkssection::where('section_id', 'LIKE', '%' .$id)->get();
        
        return view('notas')
        ->with('notas', $notas)
        ->with('links', $links)
        ->with('sections', $sections);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "nota" => 'required',
        ]);

        $nota = new Nota ([
            'name' => $request->input("nota"),
            'section_id' => $request->input("sectionid"),
        ]);

        $nota->save();

        return redirect()->back();
    }

    public function indexNota($id)
    {
        $nota = Nota::where('id', 'LIKE', '%' .$id)->get();
        $links = Linksnota::where('nota_id', 'LIKE', '%' .$id)->get();
    
        return view('nota')
        ->with('links', $links)
        ->with('nota', $nota);
    }

    public function storeContenido(Request $request, $id)
    {
        $nota = Nota::find($id);
        // dd($id);
        $nota->contenido = $request->input('contenido');

        $nota->update();

        return redirect()->back();
    }

    public function editIndex($id)
    {
        $notas = Nota::where('section_id', 'LIKE', '%' .$id)->get();

        $sectionId = $id;

        return view('edit.editNotas')
        ->with('notas', $notas)
        ->with('sectionId', $sectionId);
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('edit.notaEdit')->with('nota',$nota);
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);

        $nota->name = $request->input('name');
        
        $nota->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $nota = Nota::find($id);

        $nota->delete();

        $sectionid = $nota->section_id;

        return redirect()->route('notas', ['id' => $sectionid]);
    }
}
