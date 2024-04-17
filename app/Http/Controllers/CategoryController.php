<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryConTroller extends Controller
{
    //
    public function getCategories()
    {
        $listCategories = Category::all();
        return view('listCategories',compact('listCategory'));
        
    }
    
}