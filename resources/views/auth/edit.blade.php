

@extends('layout')

@section('content')



<form method="POST" action="{{ route ('auth.update', $user->id) }}">
        @method('PATCH')
        @csrf
    <input type="text" name="name"  value="{{ $user->name }}" >

    <input type="text" name="address"  value="{{ $user->address }}" >

    <input type="email" name="email"  value="{{ $user->email }}" >

    <input type="password" name="password" >

    <input type="password" name="password_confirmation" >

    <button type="submit">Send</button>
</form>

@endsection
