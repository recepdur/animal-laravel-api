<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;   
    protected $fillable = [ 
        'ear_no',
        'birthday',
        'race',
        'gender',
        'status',
        'mother_ear_no'
    ];
    
    // public function customer() 
    // {
    //     return $this->belongsTo('Customer', 'customer_id');
    // }
		
	// public function inseminations() 
    // {
    //     return $this->hasMany('Insemination');
    // }  
}
