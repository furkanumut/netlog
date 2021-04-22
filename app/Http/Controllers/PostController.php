<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $read_time_minutes = floor(str_word_count(strip_tags($post->body))/70);
        $read_time_second = floor(str_word_count(strip_tags($post->body)) % 70 / (70 / 60));
        $more_posts = $post->category->posts()->where('id', '!=', $post->id)->latest()->limit(5)->get();

        $read_next = Post::where('id', '>', $post->id)->first();
        if (!$read_next)
            $read_next = Post::where('id', '!=', $post->id)->latest()->first();
        $author = $post->authorId;
        return view('post', compact('post', 'more_posts','read_time_minutes', 'read_time_second', 'author', 'read_next'));
    }
}
