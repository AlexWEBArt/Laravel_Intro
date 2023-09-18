@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('home') }}">Закрыть список задач</a>
        </div>
        <h1>Все задачи</h1>
        <ul>
            @foreach($todos as $todo)
                <li>
                    {{ $todo->title }}
                    <a href="{{ route('todo.show', $todo->id) }}"> - Просмотр</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('todo.create') }}" class="btn btn-primary">Создать задачу</a>
    </div>
@endsection