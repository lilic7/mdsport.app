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
            {!! Form::select('category', function($categories){
                $cats = array();
                foreach($categories as $category){
                    $cats[$category->id] = $category->name;
                }
                dd($cats);
                return $cats;
            }) !!}
        </div>
    {!! Form::close() !!}
    @foreach($categories as $ac)
        {{$ac->name}}
    @endforeach
    {{ dd($categories) }}
@endsection