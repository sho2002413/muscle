<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
        {
            return $this::with('records')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
    
    public function getMyRecordPaginateByLimit( $limit_count , $auth)
        {
             return $this::with('records')->where('user_id', $auth)->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
    
    public function getNewPost()
        {
            return $this::with('records')->latest('id')->first();
        }
        
     public function records()   
        {
            return $this->hasMany(Record::class);  
        }
    
    public function user()
        {
            return $this->belongsTo(User::class);
        }
        
    // public function getByPost()
    //     {
    //          return $this->records()->with('post')->get();
    //     }
        
    protected $fillable = [
        'body',
        'user_id'
        ];
        

}
