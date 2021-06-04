@extends('layouts.master')

@section('content')

<div class="pt-4">
    <h2>Een reparatie en/of onderhoud van uw auto melden</h2>
</div>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('repairandmaintenances.store')}}" method="POST">
    @csrf
    <div>
        <div class="mt-4">
            <label for="car_id">Gebruiksnaam</label>
            <div class="col-md-6">
                <select class="form-control" type="text" name="user_id" id="user_id">
                    @foreach(\App\Models\User::select('id', 'username')->where('role_id', '2')->get() as $user)
                        <option value="{{ $user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <label for="car_id">Dealernaam</label>
                <div class="col-md-6">
                    <select class="form-control" type="text" name="dealer_id" id="dealer_id">
                        @foreach(\App\Models\Dealer::all() as $dealer)
                            <option value="{{ $dealer->id}}">{{$dealer->dealername}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label for="car_id">Auto's</label>
                <div class="col-md-6">
                    <select class="form-control" type="text" name="car_id" id="car_id">
                        @foreach(\App\Models\Car::all() as $car)
                            <option value="{{ $car->id}}">{{$car->type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label for="the_reason">De reden voor reparatie en/of onderhoud aan deze auto.</label>
                <div class="col-md-6">
                    <textarea id="the_reason" name="the_reason" rows="4" cols="86" maxlength="200">
                        {{ old('the_reason') }}
                    </textarea>
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" value="Deze auto reparatie en/of onderhoud melden" class="confirmbutton">
            </div>
        </div>
    </div>
</form>

@endsection
