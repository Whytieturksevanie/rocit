@extends('layouts.master')

@section('content')
    <div>
        <div class="mb-4 mt-4">
            <h2>De gegevens van deze dealer.</h2>
        </div>
        <div>
            <h5>Dealernummer:</h5>
        </div>
        <div>
            <p>{{$dealer->id}}</p>
        </div>
        <div>
            <h5>Dealernaam:</h5>
        </div>
        <div>
            <p>{{$dealer->dealername}}</p>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <a class="cancelbutton ml-1" href="{{route('dealers.index')}}">Teruggaan</a>
        </div>
    </div>
@endsection