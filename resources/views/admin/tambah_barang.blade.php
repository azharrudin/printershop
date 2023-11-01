@extends('layouts.app')

@section('content')

    <div class="container m-2 py-4 px-5 w-75" style="border: 1px dotted black;;">
    <h1>Add new product</h1>
        <form method="POST" action="{{ url('/admin/add/api')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name='namaprinter'>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea class="form-control" id="spesifikasi" rows="3" placeholder="Spesifikasi" name='spesifikasi'></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="Harga" name='harga'>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" placeholder="Stok" name='stok'>
            </div>
            <div class="form-group">
                <label for="foto">Foto (JPG)</label>
                <input type="file" class="form-control-file" id="foto" name='foto'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection