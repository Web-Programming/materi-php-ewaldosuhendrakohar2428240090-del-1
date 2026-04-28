@extends('app.master')

@section('title','produk index')

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/product/create" class="list-group-item list-group-action-item ps-4">Tambah Produk</a>
        <a href="/product/search" class="list-group-item list-group-action-item ps-4">cari Produk</a>
    @endsection
@endsection
@section('content')
    <h3 class="h3- mb-3">Produk Index</h3>
    <p class='index-muted'>Halaman Daftar Produk menggunakan layout master.</p>
    <div class="card">
        <div class="card-body">
            Konten biasa ditampilkan di sini
        </div>
    </div>
@endsection
