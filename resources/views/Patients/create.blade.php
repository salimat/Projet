@extends('layouts.contenu_layout')

 @section('contenu')

{!! Form::open(['url' => 'users']) !!}

{!! Form::label('nom', 'Entrez votre nom : ') !!}

{!! Form::text('nom') !!}
!! Form::label('nom', 'Entrez votre nom : ') !!}

{!! Form::text('nom') !!}

{!! Form::submit('Envoyer !') !!}

{!! Form::close() !!}
@endsection
