@extends('layouts.app')
@section('content')
    <div>
        <table>
            <tbody>
                @foreach($entities as $entity)
                    <tr>
                        <td>{{$entity->id}}</td>
                        <td>{{$entity->maker}}</td>
                        <td>{{$entity->model}}</td>
                        <td>{{$entity->body_type}}</td>
                        <td>{{$entity->fuel_type}}</td>
                        <td>{{$entity->transmission}}</td>
                        <td>{{$entity->color}}</td>
                        <td>
                            <a href="{{ route('cars.destroy', $entity->id) }}">
                                Törlés
                            </a>                          
                        </td>
                        <td>
                            <a href="{{ route('cars.edit', $entity->id) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection