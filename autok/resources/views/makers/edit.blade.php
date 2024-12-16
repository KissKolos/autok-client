@extends('layouts.app')
@section('content')
    <form action="{{route('makers.update', $maker->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Gyártó</label>
        <input type="text" name="name" id="name" value="{{old('name', $maker->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection