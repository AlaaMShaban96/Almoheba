<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Mail\ContactUs;
use App\Models\AboutUs;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class WebsiteController extends Controller
{
    public function index()
    {
        $projects= Project::orderBy('id')->take(5)->get();
        $teams=Team::where('titel', 'مدير')->get();
        $aboutUs=AboutUs::first();
        return view('website.index',compact('projects','teams','aboutUs'));
    }
    public function project()
    {
        $projects=Project::all();
        return view('website.project.index',compact('projects'));

        # code...
    }
    public function showProject(Project $project )
    {
        return view('website.project.show',compact('project'));

        # code...
    }
    public function member()
    {
        $teams=Team::all();
        return view('website.team.index',compact('teams'));

    }
    public function about()
    {
        $aboutUs=AboutUs::first();
        return view('website.about',compact('aboutUs'));


    }
    public function login()
    {
        return view('website.login');
    }
    public function send(Request $request)
    {
        // dd($request->all());
        Mail::to('info@almawhiba.ly')->send(new ContactUs($request));
        return redirect('/');
    }
}
