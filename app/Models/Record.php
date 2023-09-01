<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
        {
            return $this ->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
    
 
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
     public function training()
    {
        return $this->belongsTo(Training::class);
    }
    
    
    
    protected $fillable = [
    'time',
    'weight',
    'count',
    'set',
    'post_id',
    'training_id'
    ];
}
