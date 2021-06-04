@extends('layouts.master')

@section('content')

@if (Auth::user()->dealer_id < '0') 

<div class="pt-4">
    <h2>Een auto dealen</h2>
</div>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('autodealers.store')}}" method="POST">
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
                <input type="submit" value="Deze auto dealen" class="confirmbutton">
            </div>
        </div>
    </div>
</form>

@elseif (Auth::user()->dealer_id > 0) 

<div class="pt-4">
    <h2 class="mb-3">U heeft al een auto gedeald!</h2>
    <p class="mb-4">Als u een andere auto wilt dealen dan moet u deze auto eerst verwijderen.</p>
    <a class="cancelbutton" href="{{route('autodealers.index')}}">Naar de pagina gaan uw auto te gaan verwijderen</a>
</div>

@endif

@endsection 
