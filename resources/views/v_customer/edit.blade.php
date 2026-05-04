@extends('backend.v_layouts.app')

@section('content')
<div class="container">
    <h2>{{ $judul }}</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <form action="{{ route('backend.customer.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $edit->email }}">
        </div>

        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="hp" class="form-control" value="{{ $edit->hp }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{ $edit->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label>Kode Pos</label>
            <input type="text" name="pos" class="form-control" value="{{ $edit->pos }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.customer.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection