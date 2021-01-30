<?php

namespace App\Http\Controllers\AdminArea;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends parentController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Category::where('status', 1)->get();
            // return $data;
            $data_arr =  DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a onclick="editCat(`' . $row->id . '`, `' . $row->name . '`)" class="edit btn btn-sm"><em class="icon ni text-primary ni-pen2"></em></a>';
                    $btn = $btn . '<a onclick="deleteCat(' . $row->id . ')" class="edit btn btn-sm"><em class="icon ni text-danger ni-trash"></em></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
            return $data_arr;
        }
        return view('AdminArea.Pages.category.category_list');
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Name is required',
        ]);
        Category::where('id', $request->id)->update([
            'name' => $request->name
        ]);
        toastr()->success('Category updated successfully!');
        return back();
    }

    public function delete(Request $request)
    {
        Category::where('id', $request->id)->update([
            'status' => 2
        ]);
        toastr()->success('Category deleted successfully!');
        return back();
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255|min:2'
        ]);
        // $request->validate([
        //     'name' => 'required|unique:categories|max:255|min:2',
        // ]);
        Category::create([
            "name" => $request->name
        ]);
        toastr()->success('Category added successfully!');
        die();
        return back();
    }
}
