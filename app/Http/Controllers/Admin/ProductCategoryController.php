<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('admin.pages.productCreate');
    }
    public function store(Request $request)
    {
        $name = $request->email;
        $slug = $request->slug;
        $status = $request->status;

        dd($name, $slug, $status);
    }
}
