<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'Class_name',
    ];


    public function Class_Subject()
    {
        return $this->hasMany(Subject::class , 'Subject_ID'  ,'id');
    }

    public function Class_Student()
    {
        return $this->hasMany(Student::class , 'Class_ID' , 'id');
    }

    public function Class_TimeTable()
    {
        return $this->hasMany(TimeTable::class , 'Class_ID' , 'id');
    }
}
