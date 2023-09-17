@extends('app')

@section('content')
    <div class="container">
        <h1>Описание задачи</h1>
        <p><strong>Название:</strong> {{ $todo->title }}</p>
        <p><strong>Описание:</strong> {{ $todo->description }}</p>
        <p><strong>Создана:</strong> {{ $todo->created_at }}</p>
        <p><strong>Изменена:</strong> {{ $todo->updated_at }}</p>
        <a href="{{ route('todo.store') }}">Вернуться на главную</a>
    </div>
@endsection