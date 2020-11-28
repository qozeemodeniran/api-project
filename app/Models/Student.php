<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // specifying the table to interact with and fields that can be written to
    protected $table = 'students';

    protected $fillable = ['name', 'course'];
}
