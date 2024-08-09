<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SubcategoryController extends Controller
{
    public function AllSubcategory(){
        $subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all', compact('subcategories'));
    } //End method 

    public function AddSubcategory(){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('backend.subcategory.subcategory_add', compact('categories'));
    } //End method

    public function StoreSubcategory(Request $request){

        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Subcategory inserted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
   } //End method 
}
