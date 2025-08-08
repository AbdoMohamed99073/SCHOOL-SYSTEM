<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Scalar\DNumber;

class Student extends Model
{
        use SoftDeletes;
    protected $fillable =
    [
        'User_ID' ,
        'First_Name' ,
        'Middle_Name' ,
        'Last_Name' ,
        'address' ,
        'Phone_Number' ,
        'Date_Birth' ,
        'Class_ID' ,

    ];
    
    public function Student_User()
    {
        return $this->hasOne(User::class , 'User_ID' , 'id');
    }

    public function Student_Class()
    {
        return $this->belongsTo(Classes::class  , 'Class_ID' , 'id');
    }
    public function Student_Grade()
    {
        return $this->hasMany(Grade::class , 'Student_ID' , 'id');
    }
    public function Student_Attendance()
    {
        return $this->hasMany(Attendance::class , 'Student_ID' , 'id');
    }
}
