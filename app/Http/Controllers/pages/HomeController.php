<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{


    public function index()
    {
        // بازیابی تمام داده‌های جدول
        $paymentPosts = Post::where('category_id', '1')->get()->take(4);
        $graphicPosts = Post::where('category_id', '2')->get()->take(4);
        $appPosts = Post::where('category_id', '3')->get()->take(4);
        $networkPosts = Post::where('category_id', '4')->get()->take(4);


        // ارسال داده‌ها به ویو
        return view('pages.home', compact('paymentPosts', 'graphicPosts', 'appPosts', 'networkPosts'));
    }


    public function about()
    {
        return view('pages.about');
    }

    public function post($id)
    {
        $post = Post::find($id);
        return view('pages.post', compact('post'));
    }
}
