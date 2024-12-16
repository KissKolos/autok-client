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
                            <a href="{{ route('colors.destroy', $entity->id) }}">
                                Törlés
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('colors.edit', $entity->id) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection