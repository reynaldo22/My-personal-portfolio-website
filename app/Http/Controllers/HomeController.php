<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function aboutAdmin() {
        $about = About::all();
        return view('home',compact('about'));
    }

    public function inputAdmin() {
        return view('form');
    }

    public function addAbout(Request $request) {
        $request->validate([
            'description'=>'required',
        ]);
        $about = new About([
            'description' => $request->get('description'),
          ]);
          $about->save();
          return redirect('/home')->with('status', 'About has been added');
    }

    public function editAbout($id) {
        $edit = About::find($id);
        return view('editAbout',compact('edit'));
    }

    public function updateAbout(Request $request, $id) {
        $about = About::find($id);
        $data = [
            'description' => $request->input('description'),
        ];
        $about->update($data);
        return redirect('/home')->with('status','About has been updated!');
    }

    public function destroyAbout($id) {
        About::destroy($id);
        return redirect('/home')->with('status','About has been deleted!');
    }

}
