<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;   
    protected $fillable = [ 
        'ear_no',
        'name',
        'status',
        'race',
        'gender',
        'mother_ear_no',
        'father_ear_no',
        'description',
        'birth_date',
        'arrival_date',
    ]; 

    public function user() 
    {
        return $this->belongsTo('User', 'user_id');
    }
		
	// public function inseminations() 
    // {
    //     return $this->hasMany('Insemination');
    // }  
}
