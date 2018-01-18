<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends  Eloquent
{
    protected $guarded=[ ];  //run the model without take any DB fields .
}
