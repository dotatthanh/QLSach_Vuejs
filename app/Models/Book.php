<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author_id',
        'type',
    ];

    public function author()
    {
    	return $this->belongsTo('App\Models\Author');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}
