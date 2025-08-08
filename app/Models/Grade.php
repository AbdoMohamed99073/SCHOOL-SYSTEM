<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{

    use SoftDeletes;

    protected $fillable =
    [
        'Student_ID' ,
        'Subject_ID' ,
        'Grade' ,
        'Term' ,
    ];



    public function Grade_Student()
    {
        return $this->belongsTo(Student::class , 'Student_ID' , 'id');
    }

    public function Grade_Subject()
    {
        return $this->belongsTo(Subject::class , 'Subject_ID' ,  'id');
    }
}
