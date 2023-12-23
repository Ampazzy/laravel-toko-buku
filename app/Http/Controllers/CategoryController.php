<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();

        return view('categories', ["categories" => $categories]);
    }

    public function getCategory(Category $category)
    {
        $categories = $category->load('book');
        return view('category', ["category" => $categories]);
    }
}
