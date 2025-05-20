@extends('layout')


@section('title')

    Home

@endsection

@section('sadrzajStranice')

    @if($sat >= 0 && $sat <= 12)
        <p>Dobro jutro</p>
     @else

     <p>Dobar dan</p>

    @endif

    @foreach ($products as $product)

    <p>{{$product->name}}</p>

    @endforeach


    <p>Trenutno vreme je {{$trenutnoVreme}}</p>

    <form method="post" action="/send-contact">
        @if($errors->any())
            <p>Greska: {{$errors->first()}}</p>
        @endif
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Unesite vašu email adresu">
        </div>

        <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Unesite naslov poruke">
        </div>

        <div class="mb-3">
            <textarea name="description" class="form-control" rows="4" placeholder="Unesite poruku..."></textarea>
        </div>

        <button class="btn btn-primary">Pošalji poruku</button>
    </form>



@endsection



