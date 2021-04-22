<?php

namespace App\Models;

use TCG\Voyager\Models\Post as VoyagerPost;

class Post extends VoyagerPost
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
