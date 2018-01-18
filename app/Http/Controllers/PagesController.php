<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    //



    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }






    public function index()
    {
        //  $posts=Page::all();
        $posts=Page::latest()->get();// ordering with newest post==> $posts=Page::orderBy('created_at','desc')->get();
        return view('pages.index',compact('posts'));
    }



    public function show($id)
    {
        $post= Page::find($id);
        return view('pages.show',compact('post'));
    }



    public function create()
    {
        return view('pages.create');
    }




    public function store()
    {
        //create new post with the requested dara.

        ////// dd(request()->all());        // this is die and dump function in laravel
        //that show all the fields of rows in dump format like array_dump().
        //// dd(request(['name','content']));

        /*
        $page= new Page;// create object of model.
        $page->name = request('name');
        $page->content = request('content');

        //save it in the database
        $page->save();
        */

        $this->validate(request(),[

            'name' =>'required',
            'content' =>'required'
        ]);



        auth()->user()->published(

            new Page(request(['name','content']))  // published() has the instant object in it's body
                                                    //this means==> $post= new Page(request(['name','content']))
                                                        //this method published() written in User model.
        );



        //and then redirect to the home page.
        return redirect('/');
        return redirect()->home();
    }
}
