<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Employee extends Model
{
    use HasFactory;

    //protected $table = "employees2";
    protected $appends = ['full_name'];
    //    protected $fillable = ['first_name', 'last_name', 'email', 'age'];
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // public function getfullNameAttribute()
    // {
    //     return $this->first_name . ' ' . $this->last_name;
    // }


    // public function fullName(): Attribute
    // {
    //     return new Attribute(
    //         get: fn () => $this->first_name . ' ' . $this->last_name,
    //         set: function ($value) {
    //             [$first_name, $last_name] = explode(' ', $value);

    //             return [
    //                 'first_name' => $first_name,
    //                 'last_name' => $last_name
    //             ];
    //         }
    //     );
    // }

    public function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => $this->first_name . ' ' . $this->last_name
        );
    }
}
