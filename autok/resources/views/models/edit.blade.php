@extends('layouts.app')
@section('content')
    <form action="{{route('models.update', $model->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Model</label>
        <input type="text" name="name" id="name" value="{{old('name', $model->name)}}">
        <button type="submit">Mentés</button>
    </form>
@endsection