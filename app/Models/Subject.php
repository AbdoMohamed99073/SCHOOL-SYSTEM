<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
        use SoftDeletes;

    protected $fillable = [
        'Subject_name',
        'Class_ID',
    ];

    public function Subject_Class()
    {
        return $this->belongsTo(Classes::class , 'Class_ID'  ,'id');
    }

    public function Subject_Teacher()
    {
        return $this->hasOne(Teacher::class , 'Subject_ID' , 'id');
    }

    public function Subject_TimeTable()
    {
        return $this->hasMany(TimeTable::class , 'Subject_ID' , 'id' );
    }

    public function Subject_Grade()
    {
        return $this->hasMany(Grade::class , 'Subject_ID' , 'id');
    }


}
