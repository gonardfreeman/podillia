<?php

namespace App\Http\Controllers;

use App\Post;
use App\Menu;
use App\Files;

class MainController extends Controller
{
    public $menus;

    public function __construct()
    {
            $this->menus = Menu::where('visible','=',true)->orderBy('position', 'asc')->get();
    }

    public function index()
    {
        $posts = Post::where('visible', '=', true)->latest()->simplePaginate(2);
        $menus = $this->menus;
        return view('pages.index', compact('menus', 'posts'));
    }

    public function post($post)
    {
        $menus = $this->menus;
        $post = Post::where('link', '=', $post)->first();
        $files = Files::where('post_id', '=', $post->id)->where('active','=',true)->get();
        return view('pages.post', compact('post', 'menus', 'files'));
    }

    public function contacts()
    {

    }

    public function about_us()
    {

    }

    public function groups()
    {

    }
}
