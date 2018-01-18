<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;  //remove this because (Comment model) extends from Model that I created

class Comment extends Model
{
    // this return post associated with a comment.
    public function post()
    {
        //  return $this->belongsTo('App\Page');
        return $this->belongsTo(Page::class);
    }



    //this return name of user that write a comment.
    public function user()
    {
        //  return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }



}
