<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //protected $table = "employees2";

    //    protected $fillable = ['first_name', 'last_name', 'email', 'age'];
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
