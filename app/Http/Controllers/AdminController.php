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

        return view('admin.edit-services', compact('content'));
    }

    // Update the services content
    public function updateServices(Request $request)
    {
        $data = $request->all();
        $contentPath = 'services.json';
        Storage::put($contentPath, json_encode($data));

        return redirect()->route('admin.edit-services')->with('status', 'services page updated successfully!');
    }

    // Show the services page to users
    public function showServices()
    {

        $contentPath = 'services.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('services', compact('content'));
    }

    public function showContact(){
        $contentPath = 'contact.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('contact', compact('content'));
    }

    public function editContact()
    {
        $contentPath = 'contact.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }

        return view('admin.edit-contact', compact('content'));
    }

    // Update the services content
    public function updateContact(Request $request)
    {
        $data = $request->all();
        $contentPath = 'contact.json';
        Storage::put($contentPath, json_encode($data));

        return redirect()->route('admin.edit-contact')->with('status', 'contact page updated successfully!');
    }

   public function showInvolved(){
        $contentPath = 'get-involved.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('get-involved', compact('content'));
    }
    public function showImpact(){
        $contentPath = 'impact.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('impact', compact('content'));
    }
}
