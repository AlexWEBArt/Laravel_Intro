@extends('app')

@section('content')
    <div class="container">
        <h1>Создать новую задачу</h1>
        <form method="POST" action="{{ route('todo.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать задачу</button>
        </form>
    </div>
@endsection