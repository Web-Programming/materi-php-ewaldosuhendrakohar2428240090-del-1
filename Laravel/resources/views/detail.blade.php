@extends('app.container')
@section('title',$title)
@section('sidebar')
    @parent
@endsection
@endsection
@section('content')
    <div class="container-fluid">
    <h1 class="mb-4">{{$title}}</h1>
        <p> nama products: ({ $iproduct[$i]['name'] })</p>
        <p> ID products: ({ $iproduct[$i]['id'] })</p>
        <p> Price : Rp ({ number_format($products[$i][price], 0, ',', '.')})</p>
        <hr>
        <ahrev="{{ url('/product') }}" class= "btn btn-primary">kembali</a> 
    </div>
@endsection
