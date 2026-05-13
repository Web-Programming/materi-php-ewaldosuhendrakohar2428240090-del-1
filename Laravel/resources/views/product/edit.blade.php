@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4>">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4>">Cari Produk</a>
    @endsection

@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>
    @if (@error->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach (@error->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>    
    @endif
    <form action="{{ route('prduk.update', $product->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">nama produk</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
            value="{{ old('name') }}"> @error('price')>
            @error('name') 
                <div class="invalid-feedback">{{ $message }} </div>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Harga</label>
            <input for="price" name="price" id="price" step="0.01" class="form-control @error('price') is-invalid @enderror" 
            value="{{ old('name') }}"> @error('price')>       
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <div class="mb-3">
                <textarea name="description" id="description" rows="3"
                class="from-control @error('description')is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
            </div>
            @error('description')
            <div class="invalid-dfeedback">{{ $message }} </div>
            @enderror
        </div>
        
</div>
@endsection