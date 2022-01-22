<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = 'students'; //creating the table
    protected $fillable = ['name', 'age', 'course']; // defining tha table fields 
}