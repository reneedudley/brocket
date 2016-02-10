<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    /**
     * Get the user the bookmark belongs to .
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags for a bookmark.
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
     /**
     * Get tags for the bookmarks
     */
    public function bookmarkTag()
    {
        return $this->blongsToMany('App\Tag');
    }

}
