@extends('template.template')
@section('title', 'Tambah Data Mahasiswa')
@section('body')
<div class="row py-5 border rounded m-5">
    <div class="col-6 mx-auto">
        <form class="form " action="/student/edit/{{$student->id}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control col-3" id="npm" placeholder="NPM Mahasiswa" name="npm" value="{{$student->npm}}">
                @if ($errors->has('npm'))
                    <span class="text-danger">{{$errors->first('npm')}}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama lengkap" name="nama" value="{{$student->nama}}">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{$errors->first('nama')}}</span>
                @endif
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div >
            <a class="ms-auto" href="/student">Kembali</a>
        </div>
    </div>
</div>
    
@endsection