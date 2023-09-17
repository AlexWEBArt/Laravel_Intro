@extends('app')

@section('content')
    <div class="container">
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