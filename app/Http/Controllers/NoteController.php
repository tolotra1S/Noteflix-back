<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Module;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //this funciton is to display the grades of the student, api: api/note
    public function resultat($id) {
        $note = Etudiant::with([
            'notes' => function($query) use($id) {
            $query->where('etudiant_id', $id)->with('module');
        }])
            ->where('id', $id)
            ->get();
        return $note;

    }

    public function list($id) {
        $note = Etudiant::with([
            'notes' => function($query) use($id) {
            $query->where('etudiant_id', $id)->with('module');
        }])
            ->where('id', $id)
            ->get();
            
        return $note;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'note'=>'required',
            'module' =>'required',
            'etudiant'=>'required' 
        ]);
        $module = Module::all()->where('code',$request->module)->first();
        $etudiant = Etudiant::all()->where('nom',$request->etudiant)->first();
        
        $note=Note::create([
            'note'=> $request ->note,
            'etudiant_id'=>$etudiant['id'],
            'module_id'=>$module['id'],
        ]);
        if ($note) {
            return ([
                'success' => true,
                'message' => 'grades successfully added.'
            ]);
        } else {
            return ([ 
                'success' => false,
                'message' => 'error while inserting datas.'
            ]);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $module = Note::where('module_id', 1)->get();

        $request->validate([
        ]);

        $note->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }

    public function get_note_average($id)
    {
        $avg = DB::table('notes')
            ->select(DB::raw('round(avg(note),2) as moyenne, etudiant_id'))
            ->groupBy('etudiant_id')
            ->where('etudiant_id', $id)
            ->get();

        return $avg;
    }
}
