<?php

namespace App\Http\Controllers;

use App\Post;
use App\Menu;

class MainController extends Controller
{
    public $menus;

    public function __construct()
    {
            $this->menus = Menu::where('visible','=',true)->orderBy('position', 'asc')->get();
    }

    public function index()
    {
        $posts = Post::where('visible', '=', true)->latest()->get();
        $menus = $this->menus;
        return view('pages.index', compact('menus', 'posts'));
    }

    public function post($post)
    {
        $post = Post::where('link', '=', $post)->get();
        return $post;
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
