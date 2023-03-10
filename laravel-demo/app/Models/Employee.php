<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Employee extends Model
{
    use HasFactory;

    //    protected $table = 'emp';

    protected $fillable = ['first_name', 'last_name', 'email'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $appends = ['full_name'];

    public function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => $this->first_name . ' ' . $this->last_name,
        );
    }
}
