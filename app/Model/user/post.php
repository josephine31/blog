<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];
    //protected $fillable = ['title','subtitle','slug','body','status'];

    public function tags()
    {
        return $this->belongsToMany('App\Model\user\tag','post_tags');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Model\user\category','category_posts');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
