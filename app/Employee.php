<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use paginate;

class Employee extends Model
{
	protected $table = "employee";
    protected $fillable = [
        'name', 'address', 'salary','email', 'password',
    ];
}
