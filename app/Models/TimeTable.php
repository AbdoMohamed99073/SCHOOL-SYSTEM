<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTable extends Model
{
        use SoftDeletes;

    protected $fillable =
    [
        'Class_ID' ,
        'Subject_ID' ,
        'Teacher_ID' ,
        'Day_Date' ,
        'Start_Time' ,
        'End_Time' ,
    ];


    public function TimeTable_Class()
    {
        return $this->belongsTo(Classes::class , 'Class_ID' , 'id');
    }
    public function TimeTable_Subject()
    {
        return $this->belongsTo(Subject::class , 'Subject_ID' , 'id');
    }
    public function TimeTable_Teacher()
    {
        return $this->belongsTo(Teacher::class , 'Teacher_ID' , 'id');
    }
}
