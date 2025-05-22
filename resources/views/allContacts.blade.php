@extends("layout")

@section("title")

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

        @foreach($allContacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td btn dan>
                    <a href="/admin/delete-contact/{{$contact->id}}" class="btn btn-danger ">Obrisi</a>
                    <a class="btn btn-primary ">Edituj</a>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>

@endsection
