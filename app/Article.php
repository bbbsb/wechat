<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'wechat_article';

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

    protected $hidden = [
        'published',
    ];
}
