@extends("layout")

@section('title')

    Shop

@endsection

@section('sadrzajStranice')

    @foreach($products as $product)
        <p>{{$product->name}}</p>
    @endforeach

    <form method="POST" action="/admin/add-product">

        @if($errors->any())
            <p>Greska: {{$errors->first()}}</p>
        @endif
        @csrf
        <input type="text" name="name" placeholder="Ime proizvoda">
        <textarea name="description" placeholder="Opis proizvoda"></textarea >
        <input type="number" name="amount" placeholder="Kolicina">
        <input type="number" name="price" placeholder="Cena">
        <input type="text" name="image" placeholder="Slika">
        <button>Objavi</button>
    </form>

@endsection
