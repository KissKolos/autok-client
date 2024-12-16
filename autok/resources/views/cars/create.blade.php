@extends('layouts.app')

@section('content')
        <div>
            <label for="makers">Gyártó</label>
            <select name="makers" id="makers">
                @foreach($makers as $maker)
                    <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                @endforeach
            </select>

            <label for="models">Model</label>      
            <select name="models" id="models">
                @foreach($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                @endforeach
            </select>

            <label for="colors">Szín</label>
            <select name="colors" id="colors">
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>

            <label for="bodies">Karosszéria</label>
            <select name="bodies" id="bodies">
                @foreach($bodies as $body)
                    <option value="{{ $body->id }}">{{ $body->name }}</option>
                @endforeach
            </select>

            <label for="fuels">Üzemanyag</label>
            <select name="fuels" id="fuels">
                @foreach($fuels as $fuel)
                    <option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
                @endforeach
            </select>

            <label for="transmissions">Sebváltó</label>
            <select name="transmissions" id="transmissions">
                @foreach($transmissions as $transmission)
                    <option value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                @endforeach
            </select>
            
            <a href="{{ route('cars.store') }}">Hozzáadás</a>
        </div>
@endsection


