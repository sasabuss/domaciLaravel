@extends("layout")


@section('title')
    all-Products
@endsection


@section('sadrzajStranice')




    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        @foreach($allProducts as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td btn dan>
                    <a href="/admin/delete-product/{{$product->id}}" class="btn btn-danger ">Obrisi</a>
                    <a class="btn btn-primary ">Edituj</a>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>

@endsection
