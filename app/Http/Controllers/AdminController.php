<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect to login page or home
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Autentikasi berhasil, perbarui sesi
            $request->session()->regenerate();
        
            // Alihkan pengguna ke halaman yang dituju
            return redirect()->intended('/admin/edit-home');
        }

 
      

        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput();
    }
    public function showLogin()
    {
        return view('login');
    }

    public function index()
    {
        return view('admin.index');
    }
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
        $data = $request->all();
        // dd($data);
        $contentPath = 'homepage.json';
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
        // dd($data);
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

    public function showContact()
    {
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

    public function showInvolved()
    {
        $contentPath = 'get-involved.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('get-involved', compact('content'));
    }

    public function editInvolved()
    {
        $contentPath = 'get-involved.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }

        return view('admin.edit_get_involved', compact('content'));
    }

    // Update the services content
    public function updateInvolved(Request $request)
    {
        $data = $request->all();
        $contentPath = 'get-involved.json';
        Storage::put($contentPath, json_encode($data));

        return redirect()->route('admin.edit-involved')->with('status', 'Get Involved page updated successfully!');
    }


    public function showImpact()
    {
        $contentPath = 'impact.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }


        return view('IMPACT', compact('content'));
    }

    public function editImpact()
    {
        $contentPath = 'impact.json';  // Path within the storage
        if (Storage::exists($contentPath)) {
            $content = json_decode(Storage::get($contentPath), true);
        }

        return view('admin.edit_impact', compact('content'));
    }

    // Update the services content
    public function updateImpact(Request $request)
    {
        $data = $request->all();
        $contentPath = 'impact.json';
        Storage::put($contentPath, json_encode($data));

        return redirect()->route('admin.edit-impact')->with('status', 'Impact page updated successfully!');
    }




    // public function showAll(){



    //     return view('admin.edit_all');
    // }

    // public function gethomedata(){
    //     $contentPath = 'homepage.json';

    //     if (Storage::exists($contentPath)) {
    //         $content = json_decode(Storage::get($contentPath), true);
    //         return response()->json($content);
    //     } else {
    //         return response()->json(['error' => 'File not found'], 404);
    //     }
    // }



}
