<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
session_start();

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $categories = Category::all();
    return view('Course.add_course',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
       $course =new Course;

       $course->course_name = $request->input('course_name');
       $course->course_code = $request->input('course_code');
       $course->course_description = $request->input('course_description');
       $course->course_status = $request->input('course_status');
       $course->file_one = $request->file('file_one');
       $course->file_two = $request->file('file_two');
       $course->cat_id = $request->input('cat_id');

     if($request->hasFile('file_one')){
        $path = 'files';
        $filename = $request->file('file_one')->getClientOriginalName();
        $course->file_one = $request->file_one->storeAs($path,$filename);
    }

     if($request->hasFile('file_two')){
        $path2 = 'files';
        $filename2 = $request->file('file_two')->getClientOriginalName();
        $course->file_two = $request->file_two->storeAs($path2,$filename2);
    }
       

       $course->save();
       return redirect('/add_course')->with('response', 'New Course Added');
    }





        public function view(){
        $courses = Course::all();
  
    return view('Course.view_course',compact('courses'));


    }







public function course_delete($course_id){
    DB::table('courses')->where('id',$course_id)->delete();

    return Redirect::to('/view_course')->with('response', '1 Item Deleted Successfully');
}



    public function edit($id)
    {
       $course = Course::find($id);
       return view('Course.update_course',compact('course'));
    }



    public function update(Request $request,$id)
    {    
       $course = Course::findOrFail($id);
    $course->course_name = $request->course_name;
    $course->course_code = $request->course_code;
    $course->course_description = $request->course_description;
    $course->course_status = $request->course_status;
    $course->file_one = $request->file_one;
    $course->file_two = $request->file_two;
   
 
     if($request->hasFile('file_one')){
        $path = 'files';
        $filename = $request->file('file_one')->getClientOriginalName();
        $course->file_one = $request->file_one->storeAs($path,$filename);
    }

     if($request->hasFile('file_two')){
        $path2 = 'files';
        $filename2 = $request->file('file_two')->getClientOriginalName();
        $course->file_two = $request->file_two->storeAs($path2,$filename2);
    }

    $course->save();
return Redirect::to('/view_course')->with('update_response', 'Data Updated Successfully');
      
        
    }




   
}
