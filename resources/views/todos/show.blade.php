@extends('layouts.app')

@section('content')
    <a class="btn btn-info" href="/">Go Back</a>
    <h3>{{ $todo->text }}</h3>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <hr>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection
