<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    
    //////////
    // READ //
    //////////
    public function index() {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }


    ////////////
    // CREATE //
    ////////////
    public function create() {
        return view('cursos.create');
    }


    ///////////
    // STORE //
    ///////////
    // public function store(StoreCurso $request) { //form request used in this section

    //     $curso = new Curso();

    //     $curso->name = $request->name;
    //     $curso->description = $request->description;
    //     $curso->category = $request->category;

    //     $curso->save();
        
    //     return redirect()->route('cursos.show', $curso);
    // }
    /* Better way to do it (we have to implement protected $fillable or protected guarded inside model) */
    public function store(StoreCurso $request) {

        Curso::creating(function ($curso) {
            $curso->slug = Str::slug($curso->name); // Need to add at the top:  use Illuminate\Support\Str;
        });

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }


    //////////
    // SHOW //
    //////////
    // public function show($id) {
    //     $curso = Curso::find($id);
    //     return view('cursos.show', compact('curso'));
    // }

    /* Other way to do it */ 
    public function show(Curso $curso) {
        return view('cursos.show', compact('curso'));
    }

    
    //////////
    // EDIT //
    //////////
    // public function edit($id) {
    //     $curso = Curso::find($id);
    //     return view('cursos.edit', compact('curso'));
    // }

    /* Other way to do it */
    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }


    ////////////
    // UPDATE //
    ////////////
    // public function update(Request $request, $id) {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'category' => 'required'
    //     ]);
        
    //     $curso = Curso::find($id);
        
    //     $curso->name = $request->name;
    //     $curso->description = $request->description;
    //     $curso->category = $request->category;

    //     $curso->save();

    //     return redirect()->route('cursos.show', $id);
    // }

    /* Other way to do it */
    // public function update(Request $request, Curso $curso) {
    //     $curso->name = $request->name;
    //     $curso->description = $request->description;
    //     $curso->category = $request->category;
    //     $curso->save();
    //     return redirect()->route('cursos.show', $curso);
    // }

    /* Better way to do it (we have to implement protected $fillable or protected guarded inside model) */
    public function update(Request $request, Curso $curso) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $curso->slug = Str::slug($request->name); // Need to add at the top:  use Illuminate\Support\Str;

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    ////////////
    // DELETE //
    ////////////
    // public function destroy($id) {
    //     $curso = Curso::find($id);
    //     $curso->delete();
    //     return redirect()->route('cursos.index');
    // }
    
    /* Better way to do it */
    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('cursos.index');
    }


}
