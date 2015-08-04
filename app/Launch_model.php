<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Launch_model extends Model
{
    protected $table = 'launchs';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'type', 'timming', 'is_alive', 'price', 'location'];
}
