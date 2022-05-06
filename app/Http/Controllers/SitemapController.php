<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Page;

class SitemapController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $posts = Post::latest()->published()->get();
        $pages = Page::latest()->active()->get();

        return response()->view('sitemap', compact('categories','posts', 'pages'))
            ->header('Content-Type', 'text/xml');
    }
}
