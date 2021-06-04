@extends('layouts.master')

@section('content')

        <div class="pt-4">
            <h2>Hier zie u de gebruiksnaam van de dealers.</h2>
        </div>
    
        <div class="mt-2 mb-4">
            <ul>
                @foreach (\App\Models\User::select('id', 'username')->where('role_id','2')->get() as $user)
                    <li>
                        <a href="{{route('users.show', $user->id)}}" class="autobutton">{{$user->username}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        {{$users->links()}}

        <div>
            <a class="editcarbutton" href="{{route('users.create')}}">Een klant aanmaken</a>
        </div>
@endsection