<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('admin.pages.product_category.create');
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
    public function index(Request $request)
    {
        // $page = $request->page ?? 1;

        // $totalRecords = DB::table('product_category')->count();

        // // $itemPerPage = env('ITEM_PER_PAGE', 8);
        // $itemPerPage = config('myconfig.product_category.item_per_page');

        // $totalPages = (int)ceil($totalRecords / $itemPerPage);

        // $offset = ($page - 1) * $itemPerPage;

        // //Query Builder
        // $datas = DB::table('product_category')->offset($offset)->limit($itemPerPage)->get();
        $datas = DB::table('product_category')->paginate(config('myconfig.product_category.item_per_page'));

        return view('admin.pages.product_category.index', ['datas' => $datas]);
    }
    public function makeSlug(Request $request)
    {
        $dataSlug = $request->slug;
        $slug = Str::slug($dataSlug);

        return response()->json(['slug' => $slug]);
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        // $delete = DB::table('product_category')->where('id', $id)->delete();

        //Eloquent - ORM
        $delete = ProductCategory::find($id)->delete();

        $message = $delete ? 'Xoa thanh cong' : 'Xoa that bai';
        return redirect()->route('admin.product_category.index')->with('message', $message);
    }
}
