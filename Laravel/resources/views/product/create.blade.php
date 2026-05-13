@extends('app.master')
@section('title', $title)
@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h1>{{ $title }}</h1>
        <a href="{{ url('/barang') }}" class="btn btn-outline-secondary">Kembali</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text"  id="name" name="name" class="form-control @error('name')
                    is-invalid @enderror"
                    value="{{old('name' )}}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" id="price" name="price"class="form-control @error ('name') is-invalid @enderror" 
                    value="{{ old('name') }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }} @enderror </div>
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" rows="3"
                    class="form-control @error ('description') is-nvalid @enderror"> 
                    value="{{ old('description') }}"</textarea> 
                    @error('price')
                        <div class="invalid-feedback">{{ $message }} </div>
                    @enderror 
                    <div class="mb-3">
                    <label for="status" class="form-label">status</label>
                    <select id="status" name="status"  class="form-select @error ('status') is-invalid @enderror">
                        <option value="" >pilih status</option>
                        <option value="new" {{ old('status') === 'new' ? 'selected' : '' }}>Baru</option>
                        <option value="used" {{ old('status') === 'used' ? 'selected' : '' }}>Bekas</option>
                    </select>
                    @error('status')
                        <div class="mb-3">
                            <label for="release_date" class="form-label">tanggal rilis</label>
                            <input type="date" name="release_date" id="release_date" 
                                class="form-control @error ('release_date') is-invalid @enderror" value="{{ old('release_date') }}">
                            @error('release_date')
                            <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-chect">
                            <input type="chectbox" name="is-active" id="is-active" value="1" class="from-check-input"
                            {{ old('is_active') ? 'checked' : '' }}>
                            <label for="is_active" class="form-check-label">active</label>   
                        </div>
                        <button type="submit" class="btn btn-primary">simpan</button>
                        <a href="{{route('Produk.index')}}" class="btn btn-secondary">batal</a>
            </form>
        </div>
@endsection