@extends('template.template')
@section('title', 'Data Mahasiswa')
@section('body')
<div class="container my-5 border rounded p-2 px-5">
    <a class="btn btn-primary my-4" href="/student/create">Tambah data</a>

    <table class="table ">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <th>{{ $student['npm'] }}</th>
                <td>{{ $student['nama'] }}</td>
                <td>
                    <a class="btn btn-primary m-1" href="/student/edit/{{$student['id']}}">Edit</a>
                    <form action="/student/delete/{{$student->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>   
</div>
@endsection
    