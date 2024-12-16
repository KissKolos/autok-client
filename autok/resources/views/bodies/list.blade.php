@extends('layouts.app')
@section('content')
    <div>
        <table>
            <tbody>
                @foreach($entities as $entity)
                    <tr>
                        <td>{{ $entity['id'] }}</td>
                        <td>{{ $entity['name'] }}</td>
                        <td>
                            <a href="{{ route('bodies.destroy', $entity['id']) }}">
                                Törlés
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('bodies.edit', $entity['id']) }}">
                                Szerkesztés
                            </a>
                        </td>
                    </tr>
                @endforeach
                <td>
                    <a href="{{ route('bodies.create') }}">
                        Új
                    </a>
                </td>
            </tbody>
        </table>
        
    </div>
@endsection