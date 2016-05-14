@extends('layout')

@section('title')
    {{$emodel->name}}
@endsection

@section('content')
    <h2>{{$emodel->name}}</h2>
    <p>{{$emodel->category->name}} | {{$emodel->production->name}} | {{$emodel->language->name}} | {{$emodel->default_duration}}</p>
    @if(count($emodel->introducer) > 0)
        <div>Prezintă:
            <ul>
                @foreach($emodel->introducer as $introducer)
                    <li>{{$introducer->name}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <div>
        Difuzare:
        @if(count($emodel->emodelProgram) > 0)
            <ul>
                @foreach($emodel->emodelProgram as $show)
                    <li>{{$show->weekday}}, {{$show->hour}}</li>
                @endforeach
            </ul>
        @else
            Nu există program
        @endif
    </div>
    <a href="{{ url('emodel') }}">Lista</a>
@endsection