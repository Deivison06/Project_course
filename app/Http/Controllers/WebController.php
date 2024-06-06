<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderby('created_at', 'DESC')->limit(3)->get();
        // var_dump($posts);
        $head = $this->seo->render(env('APP_NAME') . ' - DeivisonDev',
            'Eleita a melhor escola de desenvolvimento, programação em mais de 20 países',
            url('/'),
            asset('images/img_bg_1.jpg'));
        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }
    public function course()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - Sobre o curso',
        'Um treinamento completo do zero ao developer para voc~e aprender e se especializar no laravel!',
        url('/curso'),
        asset('images/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head,
        ]);
    }
    public function blog()
    {
        $posts = Post::orderby('created_at', 'DESC')->get();
        $head = $this->seo->render(env('APP_NAME') . ' - Blog',
        '',
        route('course'),
        asset('images/img_bg_1.jpg'));

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }
    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();
        $head = $this->seo->render(env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 800, 450)));

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }
    public function contact()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - DeivisonDev',
        '',
        route('contact'),
        asset('images/img_bg_1.jpg'));

        return view('front.contact', [
            'head' => $head
        ]);
    }
}
