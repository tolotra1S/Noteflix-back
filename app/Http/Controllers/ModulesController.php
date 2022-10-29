<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use App\Models\Module;
use App\Models\Note;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Modules::all();
        //return view('module', compact('note'));
        return $note;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request -> validate([
            'nom_module' => ['required'],
            'code' => ['required'],
            'ue' => ['required'],
            'coeff' => ['required'],
            'niveau_id' => ['required']
        ]);

        Modules::create([
            'nom_module' => $request->nom_module,
            'code' => $request->code,
            'ue' => $request->ue,
            'coeff' => $request->coeff,
            'niveau_id' => $request->niveau_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(Modules $modules)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function edit(Modules $modules)
    {
        $module=Note::where('module_id', $modules)->get();

        foreach ($module as $mod) {
            $liste = $mod -> etudiant_id;
            $liste = $mod -> id;
        }

        return $liste;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modules $modules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modules $modules)
    {
        //
    }
    public function details($id)
    {
        $module = Modules::where('id', $id)->get();
        return $module;
    }
    //to display the grades based on the module's name
    public function view($id) 
    {
        $note = Module::with([
            'note' => function($query) {
            $query->with('etudiant');
        }])
            ->where('id', $id)
            ->get();
        return $note;
    }
}
