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

    <p>Trenutno sati {{ $sat}}</p>
    <p>Trenutno vreme je {{$trenutnoVreme}}</p>

@endsection



