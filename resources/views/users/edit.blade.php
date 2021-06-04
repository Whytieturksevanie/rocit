@extends('layouts.master')

@section('content')
    <div class="mt-4 mb-4">
        <h2>De gegevens van de dealer aanpassen</h2>
    </div>

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <div>
                <span class="label">Username</span>
            </div>
            <div class="mb-4">
                <input name="username" type="text" class="name input_field" value="{{$user->username}}">
            </div>
            <div>
                <span class="label">Dealername</span>
            </div>
            <div class="mb-4">
                <input name="dealername" type="text" class="name input_field" value="">
            </div>
            <div>
                <span class="label">Email</span>
            </div>
            <div class="mb-4">
                <input name="email" type="email" class="name input_field" value="{{$user->email}}">
            </div>

            <div>
                <span class="label">Password</span>
            </div>
            <div class="mb-4">
                <input name="password" type="password" class="name input_field" value="">
            </div>
            <div>
                <span class="label">Confirm Password</span>
            </div>
            <div class="mb-4">
                <input name="password_confirmation" type="password" class="name input_field" value="">
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Role') }}" />
                <div class="col-md-6">
                    <select class="form-control" type="text" name="role_id" id="role_id">
                        @foreach(\App\Models\Role::all() as $role)
                            <option value="{{ $role->id}}">{{$role->role}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <input type="submit" value="Deze klant aanpassen" class="confirmbutton">
                <a class="cancelbutton" href="{{route('users.index')}}">Teruggaan</a>
            </div>
        </div>
    </form>
@endsection
