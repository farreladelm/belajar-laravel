@extends('template.template')
@section('title', 'Data Mahasiswa')
@section('body')
<h2 class="text-center my-5">Data Mahasiswa</h2>
<div class="container my-5 border rounded p-2 px-5">
    <a class="btn btn-primary my-4" href="/student/create">Tambah data</a>

    <table class="table ">
        <thead>
            <tr>
                <th>#</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $row_num = 0;
            @endphp
            @foreach ($students as $student)
            <tr>
                <th>{{++$row_num}}</th>
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
    