<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'content' => 'Selamat datang di halaman Home'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'content' => 'Ini adalah halaman About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'content' => 'Ini adalah halaman Contact'
        ]);
    }

    public function artikel()
    {
        return view('artikel', [
            'title' => 'Artikel',
            'content' => 'Ini adalah halaman Artikel'
        ]);
    }
}