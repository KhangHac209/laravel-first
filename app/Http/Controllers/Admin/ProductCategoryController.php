<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('admin.pages.productCreate');
    }
    public function store(Request $request)
    {
        // $name = $request->email;
        // $slug = $request->slug;
        // $status = $request->status;

        $request->validate([
            //'name' => ['required', 'min:3', 'max:255'],
            'name' => 'required|min:3|max:255',
            'slug' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Ten buoc phai nhap',
            'name.min' => 'It nhat 3 ky tu',
            'name.max' => 'Nhieu nhat 255 ky tu',
        ]);

        //Fresh data
        $result = DB::table('product_category')->insert([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);
        if ($result) {
            return redirect()->route('admin.product_category.create')->with('message', 'Tao danh muc thanh cong');
        } else {
            dd('that bai');
        }
    }
    public function index()
    {
        $totalRecords = DB::table('product_category')->count();
        $itemPerPage = 5;
        $totalPages = (int)ceil($totalRecords / $itemPerPage);



        $datas = DB::table('product_category')->get();
        return view('admin.pages.product_category.index', ['datas' => $datas, 'totalPages' => $totalPages]);
    }
}
