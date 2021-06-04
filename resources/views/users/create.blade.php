@extends('layouts.master')

@section('content')
<div class="pt-4">
    <h2>Een nieuwe dealer aanmaken</h2>
</div>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('users.store')}}" method="POST">
    @csrf    
    <div>
        <div class="mb-4">
            <x-jet-label for="username" value="{{ __('Username') }}" />
            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
        </div>
        <div class="mb-4">
            <x-jet-label for="dealername" value="{{ __('Dealernaam') }}" />
            <x-jet-input id="dealername" class="block mt-1 w-full" type="text" name="dealername" :value="old('dealername')" required autofocus autocomplete="dealername" />
        </div>
        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
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
            <input type="submit" value="Een klant aanmaken" class="confirmbutton">
            <a class="cancelbutton" href="{{route('users.index')}}">Teruggaan</a>
        </div>
    </div>
</form>
@endsection
