@extends('layouts.app')
@section('content')
    <form action="{{route('transmissions.update', $transmission->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Váltó</label>
        <input type="text" name="name" id="name" value="{{old('name', $transmission->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection