<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'emp';

    protected $fillable = ['first_name', 'last_name', 'email'];

    protected $hidden = ['created_at', 'updated_at'];
}
