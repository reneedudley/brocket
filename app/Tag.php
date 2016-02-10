<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /**
     * Get the bookmark the tag belongs to .
     */
    public function bookmark()
    {
        return $this->belongsTo('App\Bookmark');
    }
    /**
     * Get bookmarks for the tags
     */
    public function bookmarkTag()
    {
        return $this->blongsToMany('App\Bookmarks');
    }

}
