<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooking_Employee extends Model
{
    protected $fillable = ['fname','lname','email','phoneNo','father_name','mother_name','PhouseNo','Plocation','Pstreet','Pthana',
                            'Pdistrict','Ppostcode','RhouseNo','Rlocation','Rstreet','Rthana','Rdistrict','Rpostcode','dob','job_title'];
}
