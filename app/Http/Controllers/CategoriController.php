<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index(){
        //mengabil data
        $categories = Categori::all();
        return view('backend.categories.index', compact('categories'));//menampilkan data
    }

    public function add()
    {
        return view('backend.categories.add');

    }

    public function store(Request $request){
        $category = new Categori();
        $category->name =$request ->name;
        $category->save();

        return redirect()->route('category.index')-> with ('status', 'Category added successfully');
    }
    public function edit($id){

        $categories = Categori::findOrFail($id);
        return view('backend.categories.edit', compact('categories'));
}

public function update(Request $request){

        #memvalidasi data yang di input

        $this->validate($request,[
            'id' => 'required',
            'name' => 'required',
            'status' => 'required',
            ]);



        #menyimpam data
    $category = Categori::findOrFail($request->id);
    $category->name = $request->name;
    $category->status = $request->status;
    $category->save();

        #kemnbali ke halaman
    return redirect()->route('category.index')-> with ('data', 'Category updated successfully');
}

public function delete($id){
        $categories = Categori::findOrFail($id);
        $categories->delete();
        return redirect()->route('category.index')-> with ('status', 'Category deleted successfully');
}

}

