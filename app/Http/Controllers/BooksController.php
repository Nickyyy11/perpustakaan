<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sama seperti perintah SELECT * FROM books;
        $books = Book::get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::get():
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $book = new book;
        // $book->name = $request->name;
        // $book->email = $request->email;
        // $book->password = $request->password;
        // $book->save();

        //cara ke dua

        Book::create([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,

        ]);

        return redirect()->to('book')->with('message', 'Data berhasil diubah');

        //cara ketiga
        // book::create($request->all());
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
        // $edit = book::where('id',$id)->first();

        $edit = Book::find($id);
        return view('book.edit', compact('edit'));
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
        Book::where('id', $id)->update([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,
        ]);
        return redirect()->to('book')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->to('book')->with('message', 'Data berhasil di hapus');
    }
}