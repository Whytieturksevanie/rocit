@extends('layouts.master')

@section('content')

<div class="pt-4">
    <h2>Een werkbon maken</h2>
</div>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('workorders.store')}}" method="POST">
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
                <label for="workplacenumber">Het nummer van de werkplaats.</label>
                <div class="col-md-6">
                    <x-jet-input id="workplacenumber" class="block mt-1 w-full" type="number" name="workplacenumber" :value="old('workplacenumber')" required autofocus autocomplete="workplacenumber" />
                </div>
            </div>
            <div class="mt-4">
                <label for="workplacename">De naam van de werkplaats.</label>
                <div class="col-md-6">
                    <x-jet-input id="workplacename" class="block mt-1 w-full" type="text" name="workplacename" :value="old('workplacename')" required autofocus autocomplete="workplacename" />
                </div>
            </div>
            <div class="mt-4">
                <label for="maintenance_date">De datum van de onderhoud.</label>
                <div class="col-md-6">
                    <input name="maintenance_date" type="datetime-local" class="form-control">
                </div>
            </div>
            <div class="mt-4">
                <label for="maintenance_costs">De kosten van de onderhoud.</label>
                <div class="col-md-6">
                    <x-jet-input id="maintenance_costs" class="block mt-1 w-full" type="number" name="maintenance_costs" :value="old('maintenance_costs')" required autofocus autocomplete="maintenance_costs" />
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" value="Een werkbon maken" class="confirmbutton">
            </div>
        </div>
    </div>
</form>

@endsection
