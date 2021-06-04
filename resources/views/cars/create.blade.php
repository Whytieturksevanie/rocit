@extends('layouts.master')

@section('content')
    <div class="pt-4">
        <h2>Een nieuwe auto aanmaken</h2>
    </div>
    
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form enctype="multipart/form-data" action="{{route('cars.store')}}" method="POST">
        @csrf
        <div>
            <div class="card_avatar pb-4 pt-4">
                <span>
                    <img class="customer_img" src="{{ asset('../images/female_avatar.png')}} " alt="">
                    <input type="file" name="profile_picture">
                </span>
            </div>
            <div class="card_details card_form">
                <div class="occupation">De kenteken</div>
                <input name="car_number_plate" type="text" class="name input_field">
            </div>
            <div class="card_about">
                <div class="item">
                    <div class="pt-4">De type van de auto. Bijvoorbeeld Nissan</div>
                    <input name="type" type="text" class="value input_field">
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" value="De auto aanmaken" class="confirmbutton">
                <a class="cancelbutton" href="{{route('cars.index')}}">Teruggaan</a>
            </div>
        </div>
    </form>
@endsection
