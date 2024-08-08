@extends('layout.app')
@section('title', 'Data Kategory')
{{-- ^^^^ akan muncul pada user  --}}
@section('content')
    {{-- <h1>Data User</h1> --}}
    <div align="right">
        <a href="{{ route('category.create') }}">Tambah</a>
        {{-- akan muncul pada admin ^^^^ --}}
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->category_name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $data->id) }}" class="btn btn-primary">Edit</a>|
                        <form action="{{ route('category.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <!-- <a href="
                            {{-- {{ route('category.destroy', $data->id) }}" --}}
                                                                                    onclick="return confirm('Apakah anda yakin ingin menhapus data ini?')">Delete</a> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
