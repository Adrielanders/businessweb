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
        // dd($content);
   
        // $title = $content['title'];
        // $welcome_message = $content['welcome_message'];
        // $subtext    = $content['intro_paragraph'];
        return view('home', [
            'content'=>$content,
            'welcome' => $content['welcome'],
            'subtext' => $content['subtext'],
            'sectionTitle' => $content['section_title'],
            'sectionDescription' => $content['section_description'],
            'solutions' =>$content['solutions']
        ]);
    }
}
