<?php
namespace App\Models;

use App\Structure\Model;

class Student extends Model{

    protected $table = "students";
    protected $fields = ['first_name', 'second_name', 'last_name', 'birth_year', 'course', 'group_name', 'entrance_year'];
}