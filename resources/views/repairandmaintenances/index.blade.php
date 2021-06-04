@extends('layouts.master')

@section('content')

@if (Auth::user()->role_id === 1)

    <div class="pt-4">
        <h2>Meldingen van dealers van hun auto's</h2>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>gebruikernummer</th>
            <th>dealernummer</th>
            <th>autonummer</th>
            <th>De reden</th>
            <th>Verwijderen</th>
        </tr>
        @foreach ($repairandmaintenances as $repairandmaintenance)
            <tr>
                <td>{{ $repairandmaintenance->id }}</td>
                <td>{{ $repairandmaintenance->user_id }}</td>
                <td>{{ $repairandmaintenance->dealer_id }}</td>
                <td>{{ $repairandmaintenance->car_id }}</td>
                <td>{{ $repairandmaintenance->the_reason }}</td>
                <td>
                    <form action="{{ route('repairandmaintenances.destroy',$repairandmaintenance->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{$repairandmaintenances->links()}}
    
    @elseif (Auth::user()->role_id === 2)
    
    <div class="pt-4">
        <h2>Meldingen van reparatie en/of onderhoud van auto's</h2>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>gebruikernummer</th>
            <th>dealernummer</th>
            <th>autonummer</th>
            <th>De reden</th>
        </tr>
        @foreach ($repairandmaintenances as $repairandmaintenance)
            <tr>
                <td>{{ $repairandmaintenance->id }}</td>
                <td>{{ $repairandmaintenance->user_id }}</td>
                <td>{{ $repairandmaintenance->dealer_id }}</td>
                <td>{{ $repairandmaintenance->car_id }}</td>
                <td>{{ $repairandmaintenance->the_reason }}</td>
            </tr>
        @endforeach
    </table>

    {{$repairandmaintenances->links()}}

    @endif
    
    @endsection
