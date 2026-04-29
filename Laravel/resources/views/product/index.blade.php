@extends('app.container')
@section('title',$title)
@section('sidebar')
    @parent
@endsection
@endsection
@section('content')
    <div class="container-fluid">
    <h1 class="mb-4">{{$title}}</h1>
        <div class="table-responsive">
            <table class=" table table-striped table-bordered table-hover">
                <thead class= "table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                </tr>
                </thead>

                <tbody>
                @for ($i = 0; $i < count($products); $i++)
                    <tr>
                    <td>({ $i + 1})</td>  
                    <td>({ $iproduct[$i]['name'] })</td>
                    <td>Rp({ number_format($products[$i][price], 0, ',', '.')})</td>
                    <td>
                        <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ url('/produk/' . $products[$i]['id']) . '/edit' }}" 
                            class="btn btn-sm btn-primay">Edit</a>
                        </td>
                    </tr>
                @endfor
                @foreach ($products as $item)
                    </tr>
                </thead>

                <tbody>
                @for ($i = 0; $i < count($products); $i++)
                    <tr>
                    <td>({ $loop->iteration})</td>  
                    <td>({ $iproduct[$i]['name'] })</td>
                    <td>Rp({ number_format($products[$i][price], 0, ',', '.')})</td>
                    <td>
                        <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ url('/produk/' . $products[$i]['id']) . '/edit' }}" 
                            class="btn btn-sm btn-primay">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </div>
            
            Konten biasa di tambahkan
        </div>
    </div>
@endsection
    
@endforeach