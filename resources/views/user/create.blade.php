@extends('layout.app')
@section('title', 'Tambah Kategori')
@section('content')
    <h1>Tambah Kategori Buku</h1>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Kategori Buku</label>
            <select name="category_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" name="penulis" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection
