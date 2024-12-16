@extends('layouts.app')
@section('content')
    <div>
        <table>
            <tbody>
                @foreach($entities as $entity)
                    <tr style="margin-top: 10px;">
                        <td>{{$entity->id}}</td>
                        <td>{{$entity->name}}</td>
                        <td>
                            <a href="{{ route('transmissions.destroy', $entity->id) }}">
                                Törlés
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('transmissions.edit', $entity->id) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection