<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food_type_list extends Model
{
    protected $table = 'food_type_list';

    protected $primaryKey = 'id';

    protected $fillable = ['title'];
}
