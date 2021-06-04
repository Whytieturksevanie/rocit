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
            <th>werkplaatsnummer</th>
            <th>werkplaatsnaam</th>
            <th>onderhoudsdatum</th>
            <th>onderhoudskosten</th>
            <th>Uitvoeringen</th>
        </tr>
        @foreach ($workorders as $workorder)
            <tr>
                <td>{{ $workorder->id }}</td>
                <td>{{ $workorder->user_id }}</td>
                <td>{{ $workorder->dealer_id }}</td>
                <td>{{ $workorder->car_id }}</td>
                <td>{{ $workorder->workplacenumber }}</td>
                <td>{{ $workorder->workplacename }}</td>
                <td>{{ $workorder->maintenance_date }}</td>
                <td> € {{ $workorder->maintenance_costs }}</td>
                <td>
                    <form action="{{ route('workorders.destroy',$workorder->id) }}" method="POST">
         
                        <a class="btn btn-info" href="{{ route('workorders.show',$workorder->id) }}">Show</a>
          
                        <a class="btn btn-primary" href="{{ route('workorders.edit',$workorder->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{$workorders->links()}}
    
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
            <th>werkplaatsnummer</th>
            <th>werkplaatsnaam</th>
            <th>onderhoudsdatum</th>
            <th>onderhoudskosten</th>
        </tr>
        @foreach ($workorders as $workorder)
            <tr>
                <td>{{ $workorder->id }}</td>
                <td>{{ $workorder->user_id }}</td>
                <td>{{ $workorder->dealer_id }}</td>
                <td>{{ $workorder->car_id }}</td>
                <td>{{ $workorder->workplacenumber }}</td>
                <td>{{ $workorder->workplacename }}</td>
                <td>{{ $workorder->maintenance_date }}</td>
                <td> € {{ $workorder->maintenance_costs }}</td>
            </tr>
        @endforeach
    </table>

    {{$workorders->links()}}

    @endif
    
    @endsection