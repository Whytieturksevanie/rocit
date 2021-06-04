@extends('layouts.master')

@section('content')
    <div>
        <div class="mb-4 mt-4">
            <h2>De gegevens van deze dealer.</h2>
        </div>
        <div>
            <h5>Username:</h5>
        </div>
        <div>
            <p>{{$user->username}}</p>
        </div>
        <div>
            <h5>email:</h5>
        </div>
        <div>
            <p>{{$user->email}}</p>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <a class="editcarbutton" id="card_btn-edit" href="{{route('users.edit', $user->id)}}">Deze klant aanpassen</a>
            <a class="cancelbutton ml-1" href="{{route('users.index')}}">Teruggaan</a>
            <form action="{{route('users.destroy', $user->id)}}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Deze dealer verwijderen" class="btn btn-danger ml-2">
            </form>
        </div>
    </div>
@endsection