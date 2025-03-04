<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
  
            $contentPath = 'homepage.json';  // Path within the storage
            if (Storage::exists($contentPath)) {
                $content = json_decode(Storage::get($contentPath), true);
            }
            // dump(Storage::path($contentPath));
            // dd($content);
        // dd($homepageContent);

        return view('home', ['content' => $content]);
    }
}
