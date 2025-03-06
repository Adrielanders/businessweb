<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $contentPath = 'homepage.json';

        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }
   
        $title = $content['title'];
        $welcome_message = $content['welcome_message'];
        $subtext    = $content['intro_paragraph'];
        return view('home', [
            'Title'   => $title,
            'content' => $content,
            'welcome' => $welcome_message,
            'subtext' => $subtext,
        ]);
    }
}
