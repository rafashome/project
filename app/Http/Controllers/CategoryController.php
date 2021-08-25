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

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat =new Category;

       $cat->title = $request->input('title');
       $cat->status = $request->input('status');

       

       $cat->save();
       return redirect('/add_category')->with('response', 'New Category Added');
      
    }



        public function view(){
        $categories = Category::all();
  
    return view('view_category',compact('categories'));


    }


    public function edit($id)
    {
       $category = Category::find($id);
       return view('update_category',compact('category'));
    }



    public function update(Request $request,$id)
    {    
       $category = Category::findOrFail($id);
    $category->title = $request->title;
    $category->status = $request->status;
 

    $category->save();
return Redirect::to('/view_category')->with('update_response', 'Data Updated Successfully');
      
        
    }


public function category_delete($category_id){
    DB::table('categories')->where('id',$category_id)->delete();

    return Redirect::to('/view_category')->with('response', '1 Item Deleted Successfully');
}





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
