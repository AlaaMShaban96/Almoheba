<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all()->load('images');
        return view('dashboard.project.index',compact('projects'));
    }
    public function store(ProjectRequest $request)
    {
        
        // dd($request->photos);
        $request['image']=$this->uploadeImage($request);
        $request['user_id']=1;
        $project =Project::create($request->all());
        if (isset($request->photos)) {
            foreach ($request->file('photos') as $key => $photo) {
                $project->images()->create([
                    'image'=>$this->uploadeImages($photo,$key),
                ]);
                
            }
           
        }
        
        Session::flash('message', 'تم إضافة المشروع بنجاح'); 
        return redirect('Dashboard/project');
    }
    public function update(ProjectRequest $request ,Project $project)
    {
        // dd($project->images()->find($request->deleteGallery),$request->deleteGallery);
        if (isset($request->deleteGallery)) {
            foreach ($project->images()->find($request->deleteGallery) as $key => $photo) {
                unlink($photo->image);
            }
            Images::destroy('id',$request->deleteGallery);
        }
        if (isset($request->photos)) {
            foreach ($request->photos as $key => $photo) {
                $project->images()->create([
                    'image'=>$this->uploadeImages($photo,$key),
                ]);
            }
        }
        
        $request['image']=isset($request->file)?$this->uploadeImage($request):$project->image;
        $project->update($request->all());
        Session::flash('message', 'تم تعديل المشروع بنجاح');
        return redirect()->back(); 
    }
    public function destroy(Project $project )
    {
      
        $project->image==null?"" : unlink($project->image);;
        $project->delete();

        Session::flash('message', 'تم حدف  المشروع بنجاح'); 
        return redirect('Dashboard/project');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('file')->storeAs('project/', $imageName, 'public');
    
        return $path;
    }
    private function uploadeImages( $request,$key)
    {
        $path="";
        $imageName = $key.time().".png";

        $path ="storage/". $request->storeAs('project/image', $imageName, 'public');
       
        return $path;
    }
}
