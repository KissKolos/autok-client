@extends('layouts.app')
@section('content')
    <form action="{{route('bodies.update', $body->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Karosszéria</label>
        <input type="text" name="name" id="name" value="{{old('name', $body->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection