<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = 'students'; //calling the table in the model class
    protected $fillable = ['name', 'age', 'course']; // calling the table fields in the table class
}
