<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
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
        'Subject_ID' ,
    ];

    public function Teacher_User()
    {
        return $this->belongsTo(User::class , 'User_ID' , 'id');
    }

    public function Teacher_Subject()
    {
        return $this->belongsTo(Subject::class , 'Subject_ID' , 'id');
    }
    public function Teacher_TimeTable()
    {
        return $this->hasMany(TimeTable::class , 'Teacher_ID' , 'id');
    }
}
