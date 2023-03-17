<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'photo'
    ];
      public $timestamps = true;
}
