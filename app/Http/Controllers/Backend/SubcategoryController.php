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
}
