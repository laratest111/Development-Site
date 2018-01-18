<?php

namespace App;

//use Illuminate\Database\Eloquent\Model; //remove this because (Page model)extends from new created (Model in App)
                                            // that's we created manually that has a line==> protected $guarded=[];

class Page extends Model
{
    ////must make $fillable property to use // Page::create(['name'=> request('name'),'content'=>request('content')]);

    // protected $fillable= ['name','content'];

    /* protected $guarded=[ ];    // we remove this because we make new (Model in App) that contain this line
                                        and this (Page model) extends from  Model */


    public function commentsPost()
    {
        // $this->hasMany('App\Comment');
        return $this->hasMany(Comment::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //add a comment to a post.
    public function addComment($body)
    {

        comment::create([
           'content' => $body,
            'page_id' =>$this->id,
            'user_id' => auth()->user()->id
        ]);


       // $this->commentsPost()->create(['content' => $body]);  // to create new comment for specific post.


    }





}
