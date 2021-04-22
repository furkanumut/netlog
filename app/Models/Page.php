<?php

namespace App\Models;

use TCG\Voyager\Models\Page as ModelsPage;

class Page extends ModelsPage
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
