<?php

namespace App\Http\Controllers;

use App\Models\Student; 
use App\Models\Group; 
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()  
    {
        $students = Student::all(); // Récupérer les étudiants
        $groups = Group::all(); // Récupérer les groupes
        return view('index', compact('students', 'groups'));
    }

    public function create() // Affiche le formulaire de création d'un élève et la liste des groupes
    {
        $groups = Group::all(); // Récupérer les groupes
        return view('create', compact('groups')); 
    }

    public function store(Request $request) // Enregistrer un nouvel élève dans la bdd
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required', 
            'group_id' => 'required|exists:groups,id', 
        ]);

        Student::create($request->all()); // Créer nouvel étudiant avec tous les critères
        return redirect()->route('students.index'); 
    }
}
