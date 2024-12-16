@extends('layouts.app')

@section('content')
    <div>
        <table>
            <tbody>
                @foreach ($makers as $entity)
                    <tr>
                        <td>{{$entity->id}}</td>
                        <td>{{$entity->name}}</td>
                        <td><img src="logos/{{$entity->logo}}" alt="kép"></td>
                        <td>
                            <a href="{{ route('makers.destroy', $entity->id) }}">
                                Törlés
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('makers.edit', $entity->id) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection