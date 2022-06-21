<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use Illuminate\Http\Request;

class ArticelController extends Controller
{
    public function index(Request $request)
    {
        $posts = Articel::with(['category', 'user'])->latest();

        if ($request->keyword) {
            $posts = Articel::where('title', 'like', "%" . $request->keyword . "%")
                ->orWhere('content', 'like', "%" . $request->keyword . "%");
        }

        $keyword = $request->keyword;


        return view('pages.blog', [
            'posts' => $posts->get(),
            'keyword' => $keyword,
        ]);
    }

    public function detail($slug)
    {
        $post = Articel::with(['user', 'category'])->where('slug', $slug)->firstOrFail();

        return view('pages.blog-detail', [

            'post' => $post
        ]);
    }
}