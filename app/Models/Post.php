<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;
}
