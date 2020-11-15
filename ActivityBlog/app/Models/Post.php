<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;





    //what is save for update in post::create
    protected $fillable = [
        'title',
        'body',
        'info',
        'isActive',
        'is_main'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }








}
