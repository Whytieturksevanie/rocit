@extends('layouts.master')

@section('content')
    <div class="mt-4 mb-4">
        <h2>De gegevens van de auto aanpassen</h2>
    </div>

    <form action="{{route('cars.update', $car->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <div class="mb-4">
                <span>
                    <img src="{{ asset('../images/upload_foto.png') }}" alt="">
                    <input type="file">
                </span>
            </div>
            <div>
                <span class="label">Het kenteken</span>
            </div>
            <div>
                <input name="car_number_plate" type="text" class="name input_field" value="{{$car->car_number_plate}}">
            </div>
            <div class="mt-4">
                <span class="label">Het type</span>
            </div>
            <div>
                <input name="type" type="text" class="value input_field" value="{{$car->type}}">
            </div>
            <div class="mt-4">
                <input type="submit" value="De auto aanpassen" class="confirmbutton">
                <a class="cancelbutton" href="{{route('cars.show', $car->id)}}">Teruggaan</a>
            </div>
        </div>
    </form>
@endsection
