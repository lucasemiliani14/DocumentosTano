<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use App\Section;
use App\Nota;

class SectionController extends Controller
{
    public function index($id)
    {
        $sections = Section::where('tema_id', 'LIKE', '%' .$id)->get();
        $temas = Tema::where('id', 'LIKE', '%' .$id)->get();

        return view('sections')
        ->with('sections', $sections)
        ->with('temas', $temas);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "section" => 'required',
        ]);

        $section = new Section ([
            'name' => $request->input("section"),
            'tema_id' => $request->input("temaid"),
        ]);

        $section->save();

        return redirect()->back();
    }

    public function editIndex($id)
    {
        $sections = Section::where('tema_id', 'LIKE', '%' .$id)->get();
        $temaId = $id;

        return view('edit.editSections')
        ->with('sections', $sections)
        ->with('temaId', $temaId);
    }

    public function edit($id)
    {
        $section = Section::find($id);
        return view('edit.sectionEdit')->with('section',$section);
    }

    public function update(Request $request, $id)
    {
        $section = Section::find($id);

        $section->name = $request->input('name');
        
        $section->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $notas = Nota::where('section_id', 'LIKE', '%' .$id);
        $notas->delete();

        $section = Section::find($id);
        $section->delete();

        $temaid = $section->tema_id;

        return redirect()->route('sections', ['id' => $temaid]);
    }
}
