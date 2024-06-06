<?php

namespace App\Http\Controllers;

use App\Models\Group; 

class GroupController extends Controller
{
    public function show($id) 
    {
        $group = Group::with('students')->findOrFail($id);
        return view('show', compact('group')); 
    }
}
