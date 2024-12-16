@extends('layouts.app')
@section('content')
    <div>
        <table>
            <tbody>
                @foreach($entities as $entity)
                    <tr>
                        <td>{{$entity->id}}</td>
                        <td>{{$entity->name}}</td>
                        <td>
                            <a href="{{ route('models.destroy', $entity->id) }}">
                                Törlés
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('models.edit', $entity->id) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection