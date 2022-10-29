<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Niveau;
use App\Models\Modules;
use App\Models\Module;
use App\Models\Note;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function index() {
        
    }

    public function details($id) {
        
    }

    public function update($request, $id) {
        $info = Etudiant::findOrFail($id)->update(
            ['nom' => $request->nom,
            'prenom' => $request->prenom]
        );
        return redirect()->route('etudiant');
    }
    public function store(Request $request) {
        $request -> validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'matricule' => ['required'],
            'genre' => ['required'],
            'groupe' => ['required'],
            'niveau_id' => ['required'],
        ]);

        Etudiant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'matricule' => $request->matricule,
            'genre' => $request->genre,
            'groupe' => $request->groupe,
            'niveau_id' => $request->niveau_id,
        ]);
    }

    public function get_student() {
        $student = Etudiant::all();
        return $student;
    }

    //api = api/all
    public function all_etudiant() {
        $data = [];
        $module = Module::select('id', 'nom_module', 'code')->get();
        
        foreach($module as $module) {
            $data[] = [
                'module' => $module
            ];
        };
        return $data;
        
    }

    // api/note_etu
    public function note_etudiant($id) {
        $note = Etudiant::with([
            'notes' => function($query) {
            $query->where('note', '<', 10)->with('module');
         }])
            ->where('niveau_id', $id)
            ->get();

        $etudiant = Etudiant::where('id', 1)->get();

        return $note;
    }
    
    //function for graph
    public function get_women_by_year() {
        $w = DB::table('etudiants')
            ->select(DB::raw('annee as year, count(id) as UserGain'))
            ->where('genre', 'F')
            ->groupBy('annee')
            ->get();

        return $w;
    }

    public function get_number_student() {
        $number = DB::table('etudiants')
            ->select(DB::raw('annee as year, count(id) as UserGain'))
            ->groupBy('annee')
            ->get();

        return $number;
    }
}