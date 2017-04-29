@extends('layouts.app')

@section('content')
    
    <h1>新規タスク作成ページ</h1>
    

    {!! Form::model($task,['route' => 'tasks.store']) !!}
        {!! Form::label('content','タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status','ステータス：') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('投稿') !!}
    
    
    {!! Form::close() !!}

@endsection 