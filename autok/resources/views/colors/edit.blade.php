@extends('layouts.app')
@section('content')
    <form action="{{route('colors.update', $color->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Szín</label>
        <input type="text" name="name" id="name" value="{{old('name', $color->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection