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

    <form method="POST" action = '/send-contact'>

        @if($errors->any())
            <p>Greska: {{$errors->first()}}</p>
        @endif

        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Unesite vas email">
        <input type="text" name="subject" placeholder="Unesite naslov">
        <textarea name="description"></textarea>
        <button>Posalji poruku</button>

    </form>

    <p>Trenutno sati {{ $sat}}</p>
    <p>Trenutno vreme je {{$trenutnoVreme}}</p>

@endsection



