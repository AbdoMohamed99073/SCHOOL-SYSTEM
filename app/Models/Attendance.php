<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Scalar\DNumber;

class Attendance extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
        'Student_ID' ,
        'Day_Date' ,
        'Status' ,
    ];


    public function Attendance_Student()
    {
        return $this->belongsTo(Student::class , 'Student_ID' , 'id');
    }
}
