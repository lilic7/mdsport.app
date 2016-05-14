@extends('layout')

@section('title')
    Modele de emisiuni
@endsection

@section('content')
    <a href="{{ url('emodel/create') }}">Crează model de emisiune</a>
    <hr>
    @if(count($emodels) > 0)
        <table>
            @foreach($emodels as $emodel)
                <tr>
                    <td><a href="{{ url('emodel', [$emodel->id]) }}"> {{ $emodel->name }} </a></td>
                    <td>{{ $emodel->default_duration }}</td>
                </tr>
            @endforeach
        </table>
    @else
        Nu sunt modele de emisiuni.
    @endif
@endsection