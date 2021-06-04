@extends('layouts.master')

@section('content')
    <div>
        <div class="mb-4 mt-4">
            <h2>De gegevens van deze auto.</h2>
        </div>
        <div>
            <h5>De kenteken:</h5>
        </div>
        <div>
            <p>{{$car->car_number_plate}}</p>
        </div>
        <div>
            <h5>Het type:</h5>
        </div>
        <div>
            <p>{{$car->type}}</p>
        </div>
        <div class="d-flex justify-content-start pt-2">

            @if (Auth::user()->role_id === 1)
                <a class="editcarbutton" id="card_btn-edit" href="{{route('cars.edit',$car->id)}}">Deze auto aanpassen</a>
                <a class="cancelbutton ml-1" href="{{route('cars.index')}}">Teruggaan</a>

            @elseif (Auth::user()->role_id === 2)
                <a class="cancelbutton ml-1" href="{{route('cars.index')}}">Teruggaan</a>
            @endif
        </div>
    </div>
@endsection