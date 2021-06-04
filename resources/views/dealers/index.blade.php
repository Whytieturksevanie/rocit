@extends('layouts.master')

@section('content')

        <div class="pt-4">
            <h2>Hier zie u Dealers.</h2>
        </div>
    
        <div class="mt-2 mb-4">
            <ul>
                @foreach ($dealers as $dealer)
                    <li>
                        <a href="{{route('dealers.show', $dealer->id)}}" class="autobutton">{{$dealer->dealername}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        {{$dealers->links()}}

@endsection