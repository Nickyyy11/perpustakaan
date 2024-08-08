@extends('layout.app')
@section('title', 'Data Book')
@section('content')

    <h1>Data User</h1>
    <div align="right">
        <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>{{ $item->tahun_terbit }}</td>
                    <td>{{ $item->penulis }}</td>
                    <a href="{{ route('book.edit', $data->id) }}" class="btn btn-primary">Edit</a>|
                    <form action="{{ route('book.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!-- <a href="{{ route('user.destroy', $user->id) }}"
                                                        onclick="return confirm('Apakah anda yakin ingin menhapus data ini?')">Delete</a> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
