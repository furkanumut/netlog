<?php

namespace App\Models;

use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends ModelsCategory
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
