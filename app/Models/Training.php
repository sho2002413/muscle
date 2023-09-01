<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    
    
 public function records()   
     {
          return $this->hasMany(Record::class);  
     }
     
 public function part()
    {
        return $this->belongsTo(Part::class);
        
    }
    
     protected $fillable = [
    'name',
    'parts_id'
    ];
    
}
