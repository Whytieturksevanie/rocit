@extends('layouts.master')

@section('content')

    <div class="mt-4 mb-4">
        <h2>De gegevens van deze werkbon aanpassen</h2>
    </div>

    <form action="{{route('workorders.update', $workorder->id)}}" method="POST">
        @method('PUT')
        @csrf
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
                    <input name="workplacenumber" type="number" value="{{$workorder->workplacenumber}}">
                </div>
            </div>
            <div class="mt-4">
                <label for="workplacename">De naam van de werkplaats.</label>
                <div class="col-md-6">
                    <input name="workplacename" type="text" value="{{$workorder->workplacename}}">
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
                    <input name="maintenance_costs" type="number" value="{{$workorder->maintenance_costs}}">
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" value="Deze werkbon aanpassen" class="confirmbutton">
                <a class="cancelbutton" href="{{route('workorders.show', $workorder->id)}}">Teruggaan</a>
            </div>
        </div>
    </form>

@endsection
