<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function editHome()
    {
        // Load current homepage content from JSON
      
    
    
        $contentPath = 'homepage.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }

        return view('admin.edit-home', ['content' => $content]);
    }

    public function updateHome(Request $request)
    {
        // Validate form inputs
        $data = $request->validate([
            'title' => 'required|string',
            'welcome_message' => 'required|string',
            'intro_paragraph' => 'required|string',
            'services' => 'array',
            'services.*.name' => 'required|string',
            'services.*.description' => 'required|string',
            'services.*.image' => 'required|url',
        ]);

        // Save updated data to JSON file
        $contentPath = 'homepage.json';  // Path within the storage
     
        Storage::put($contentPath, json_encode($data));

        return redirect()->back()->with('status', 'Homepage updated successfully!');
    }
    
    public function editAbout()
    {
        $contentPath = 'about.json';
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        } else {
            $content = ['title' => '', 'heading' => '', 'description' => '', 'team' => []];
        }

        return view('admin.edit-about', compact('content'));
    }

    public function updateAbout(Request $request)
    {
        $data = $request->all();
        $contentPath = 'about.json';
        Storage::put($contentPath, json_encode($data));

        return redirect()->route('admin.edit-about')->with('status', 'About page updated successfully!');
    }

    public function editServices()
    {
        $contentPath = 'services.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }

        return view('admin.services', compact('content'));
    }

    // Update the services content
    public function updateServices(Request $request)
    {
        // Validate the incoming request
        $data = $request->validate([
            'title' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',
            'services.*.name' => 'required|string',
            'services.*.description' => 'required|string',
            'services.*.image' => 'required|url',
        ]);

        // Save the updated content to the services.json file
        Storage::put('services.json', json_encode($data));

        return redirect()->route('admin.services')->with('status', 'Services updated successfully!');
    }

    // Show the services page to users
    public function showServices()
    {
        $contentPath = public_path('services.json');
        $content = json_decode(File::get($contentPath), true);

        return view('services', compact('content'));
    }

}
