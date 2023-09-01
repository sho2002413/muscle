<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Part;
use App\Models\Record;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use Carbon\Carbon;


class PostController extends Controller
{
    public function index(Post $post)
    {
      
       return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function check()
    {
      return view('posts.check');
    }

    
    public function create(Post $post)
    {
      
            $post = new Post();
            $post-> user_id = Auth::user()->id;
            $post-> save();
            $new_post_id = $post->id;
      
      return view('posts.create')->with(['new_post_id' => $new_post_id]);
   
    }
    
    public function add(Request $request,Part $part,Record $record,Training $training)
    {
           $input = $request['post'];
           $new_post_id = $request['new_post_id'];
     
        $part_name = $input['part'];
        $part_exist = Part::where('name', $part_name)->first();
        if ($part_exist==null) {
            $part = new Part();
            $part->name = $part_name;
            $part->save();
            $part_id = $part->id;
        }else
        {
           $part_id = $part_exist->id;
        }
       
        $training_name = $input['training'];
        $training_exist = Training::where('name', $training_name)->first();
        if ($training_exist==null) {
            $training = new Training();
            $training->name = $training_name;
            $training->part_id = $part_id;
            $training->save();
            $training_id = $training->id;
        }else
        {
           $training_id = $training_exist->id;
        }
        
        $record = new Record();
        $record->weight = $input['weight'];
        $record->time = $input['time'];
        $record->count = $input['count'];
        $record->set = $input['set'];
        $record->training_id = $training_id;
        $record->post_id = $new_post_id;
        $record->save();
        
        return view('posts.add')->with(['new_post_id' => $new_post_id]);
    }
    
    public function reflect()
    {
        
        return view('posts.show');
    }
    
     public function today(Post $post)
    {
        $new_post = $post->getNewPost();
           return view('posts.today')->with(['records' => $new_post-> records()->get(),'new_post' =>$new_post]);
    
    }
    
     
        
    
        
  
    
    public function update(Request $request,Post $post)
    {
        // $post = Post::where('id',$today);
        $input_post = $request['post'];
        $post-> user_id = Auth::user()->id;
        $post->fill($input_post)->save();
        return redirect('/posts/index');
    }
    
     public function myself(Post $post)
    {
         $auth = Auth::user();
         $post = $auth->posts()->get();
         return view('posts.myself')->with(['posts' => $post]);
         
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    
    public function save(Request $request,Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/myself');
    }
    
     public function login()
    {
        
        return view('posts.login');
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts/myself');
    }
  

}


