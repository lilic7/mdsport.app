@extends('layout')

@section('title')
    Model nou
@endsection

@section('content')
    {!! Form::open(['route'=>'create_emodel']) !!}
        <div>
            {!! Form::label('Titlu') !!}
            {!! Form::text('name', null,
                [ 'required',
                'placeholder' => 'Titlu model' ]
            ) !!}
        </div>

        <div>
            {!! Form::label('Categorie') !!}
        </div>
    {!! Form::close() !!}
    @foreach($categories as $ac)
        {{$ac->name}}
    @endforeach
    {{ dd($categories) }}
@endsection