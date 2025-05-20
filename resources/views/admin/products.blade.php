@extends("layout")

@section("title")
    Products
@endsection

@section("sadrzajStranice")
    <div class="container mt-4">
        <h2>Lista proizvoda</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Količina</th>
                <th>Cena</th>
                <th>Slika</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }} RSD</td>
                    <td><img src="{{ $product->image }}" alt="slika" width="100"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
