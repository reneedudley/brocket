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
     * Get the tags for the bookmarks.
     */
    public function tags()
    {
        return $this->hasMany('App\Tags');
    }
}
