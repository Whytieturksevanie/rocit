@extends('layouts.master')

@section('content')
    <div>
        <div class="mb-4 mt-4">
            <h2>De gegevens van deze werkbon.</h2>
        </div>
        <div>
            <h5>Het nummer van de werkbon:</h5>
        </div>
        <div>
            <p>{{$workorder->id}}</p>
        </div>
        <div>
            <h5>user_id:</h5>
        </div>
        <div>
            <p>{{$workorder->user_id}}</p>
        </div>
        <div>
            <h5>dealer_id:</h5>
        </div>
        <div>
            <p>{{$workorder->dealer_id}}</p>
        </div>
        <div>
            <h5>car_id:</h5>
        </div>
        <div>
            <p>{{$workorder->car_id}}</p>
        </div>
        <div>
            <h5>werkplaatsnummer:</h5>
        </div>
        <div>
            <p>{{$workorder->workplacenumber}}</p>
        </div>
        <div>
            <h5>werkplaatsnaam:</h5>
        </div>
        <div>
            <p>{{$workorder->workplacename}}</p>
        </div>
        <div>
            <h5>onderhoudsdatum:</h5>
        </div>
        <div>
            <p>{{$workorder->maintenance_date}}</p>
        </div> 
        <div>
            <h5>onderhoudskosten:</h5>
        </div>
        <div>
            <p> € {{$workorder->maintenance_costs}}</p>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <a class="cancelbutton ml-1" href="{{route('workorders.index')}}">Teruggaan</a>
        </div>
    </div>

@endsection
