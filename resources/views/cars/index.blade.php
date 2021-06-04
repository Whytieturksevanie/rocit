@extends('layouts.master')

@section('content')

        <div class="pt-4">
            <h2>Hier zie u alle auto's.</h2>
        </div>
    
        <div>
            <ul>
                @foreach ($cars as $car)
                    <li>
                        <a href="{{route('cars.show', $car->id)}}" class="autobutton">{{$car->type}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        {{$cars->links()}}
@endsection
