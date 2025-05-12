@extends("layout")

@section('title')

    Shop

@endsection

@section('sadrzajStranice')

    @foreach($products as $product)
        <p>{{$product->name}}</p>
        

    @endforeach

@endsection
