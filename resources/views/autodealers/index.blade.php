@extends('layouts.master')

@section('content')

@if (Auth::user()->role_id === 1)

    <div class="pt-4">
        <h2>Deze auto's zijn bezet!!</h2>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>gebruikernummer</th>
            <th>dealernummer</th>
            <th>autonummer</th>
        </tr>
        @foreach ($autodealers as $autodealer)
            <tr>
                <td>{{ $autodealer->id }}</td>
                <td>{{ $autodealer->user_id }}</td>
                <td>{{ $autodealer->dealer_id }}</td>
                <td>{{ $autodealer->car_id }}</td>
            </tr>
        @endforeach
    </table>
    
    {{$autodealers->links()}}

    @elseif (Auth::user()->role_id === 2)
        
        <div class="pt-4">
            <h2>U heeft al een auto gedeald!!</h2>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>gebruikernummer</th>
                <th>dealernummer</th>
                <th>autonummer</th>
                <th>Verwijderen</th>
            </tr>
            @foreach ($autodealers as $autodealer)
                <tr>
                    <td>{{ $autodealer->id }}</td>
                    <td>{{ $autodealer->user_id }}</td>
                    <td>{{ $autodealer->dealer_id }}</td>
                    <td>{{ $autodealer->car_id }}</td>
                    <td>
                        <form action="{{ route('autodealers.destroy',$autodealer->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{$autodealers->links()}}

    @endif
    
    @endsection 
