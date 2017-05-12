@extends('layouts.app')

@section('content')




@if(Auth::check())
    <h1>タスク一覧</h1>
    @if (count($tasks)>0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <?php $user = $task->user; ?>
                    <tr>
                        <td>{!! link_to_route('tasks.show',$task->id,['id'=>$task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            {!! link_to_route('tasks.create','post NEW TASK!!',null,['class' => 'btn btn-primary']) !!}
    @endif
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the TASKLIST!!</h1>
            {!! link_to_route('login.get','ログイン',null,['class'=>'btn btn-lg btn-primary']) !!}
            <br>
            {!! link_to_route('signup.get','会員登録がお済みでない方はこちら',null,['class'=>'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif

@endsection