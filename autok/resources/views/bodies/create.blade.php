@extends('layouts.app')
@section('content')
    <form action="{{route('bodies.store')}}" method="POST">
        @csrf
        <label for="name">Karosszéria neve:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Mentés</button>
    </form>
@endsection