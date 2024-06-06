<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Déclaration des colonnes
    protected $fillable = ['name']; 

    // Relation entre Group et Student
    public function students()
    {
        return $this->hasMany(Student::class, 'group_id'); 
    }
}
