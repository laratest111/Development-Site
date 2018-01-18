<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Page;
use App\Comment;

class CommentsController extends Controller
{


    public function store(Page $post)
    {
        /*
        //add a comment for a post.
        Comment::create([
            'content' => request('content'),
            'page_id' => $post->id
        ]);
        */

        //if user enter empty comment or less than two digits
        // validation will return back to the same page

        $this->validate(request(),[ 'content' => 'required|min:2' ]);

        $post->addComment(request('content'));  // addComment() written in Page model.




        return back();  //back to the same page.

    }
}
