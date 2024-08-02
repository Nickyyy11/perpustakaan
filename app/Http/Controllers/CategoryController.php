<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sama seperti perintah SELECT * FROM users;
        $datas = Category::get();
        return view('category.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category = new Category;
        // $category->name = $request->name;
        // $category->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        //cara ke dua

        Category::create([
            'category_name' => $request->category_name,

        ]);

        return redirect()->to('category');

        //cara ketiga
        // User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // cara pertama
        // $edit = User::where('id',$id)->first();

        $edit = Category::find($id);
        return view('category.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        category::where('id', $id)->update([

            'category_name' => $request->category_name, // jika password tidak diisi maka akan menggunakan password yang lama
        ]);
        return redirect()->to('category')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = category::find($id)->delete();
        return redirect()->to('category')->with('message', 'Data berhasil di hapus');
    }
}
