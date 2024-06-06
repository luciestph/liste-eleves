<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Déclaration des colonnes
    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'address', 'group_id']; 

    public $timestamps = false; // 

    // Relation entre Student et Group
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id'); 
    }
}
