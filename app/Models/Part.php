<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    
    public function trainings()   
     {
          return $this->hasMany(Training::class);  
     }
     

 protected $fillable = [
    'name',
    ];
}
