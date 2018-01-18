<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setPasswordAttribute($value)
    {
        if( \Hash::needsRehash($value) ) {
            $value = \Hash::make($value);
        }
        $this->attributes['password'] = $value;
    }




    public function posts()
    {
        return $this->hasMany(Page::class);
    }



    public function published(Page $post)
    {

        // Page::create(request(['name','content','user_id']));

        /*
        Page::create([
            'name' => request('name'),
            'content' => request('content'),
            'user_id' => auth()->user()->id
        ]);

        */

        /*
        Page::create([
            'name' => request('name'),
            'content' => request('content'),
            'user_id' => auth()->id()
        ]);
        */

        $this->posts()->save($post);  // we use save() instead of create() because
                                        // we have instant object==> $post
                                        //that's has $post= new Page(request['name','content'])
    }
}
