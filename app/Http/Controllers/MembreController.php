<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class MembreController extends Controller
{
    public function index(){
        $datas = Membre::all();
        $hommes = Membre::where('genre', 'Homme')->get();
        $femmes = Membre::where('genre', 'femme')->get();
        $hommes_conditions = Membre::whereBetween('age', [18,24])->where('genre', 'homme')->get();
        $femmes_conditions = Membre::whereBetween('age', [18,24])->where('genre', 'femme')->get();
        $hors_conditions = Membre::whereNotBetween('age', [18,24])->get();
        return view('welcome',compact('datas','hommes', 'femmes','hommes_conditions','femmes_conditions','hors_conditions'));
    }
}
