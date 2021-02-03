<?php

namespace App\Http\Controllers;

use App\Models\Cover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function index()
    {
        $covers=Cover::all();
        return view('dashboard.setting.index',compact('covers'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        if (isset($request->photos)) {
            foreach ($request->file('photos') as $key => $photo) {
                Cover::create([
                    'image'=>$this->uploadeImages($photo,$key),
                    'section'=>'home',
                ]);
                
            }
            Session::flash('message', 'تم إضافة المشروع بنجاح'); 
           
        }
        return redirect('Dashboard/setting');

    }
    public function destroy()
    {
        foreach (Cover::all() as $key => $image) {
            $image->image==null?"" : unlink($image->image);
            $image->delete();
        }

        Session::flash('message', 'تم حدف  الصور بنجاح'); 
        return redirect('Dashboard/setting');
    }
    private function uploadeImages( $request,$key)
    {
        $path="";
        $imageName = $key.time().".png";

        $path ="storage/". $request->storeAs('cover', $imageName, 'public');
       
        return $path;
    }
}
