<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;


    protected $fillable = [

               'name',
               'department_head',
               'description',
               'is_active',
               'created_by',
    ];
}
