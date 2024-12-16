@extends('layouts.app')
@section('content')
    @include('error')
    <form action="{{route('fuels.update', $fuel->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Üzemanyag</label>
        <input type="text" name="name" id="name" value="{{old('name', $fuel->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection