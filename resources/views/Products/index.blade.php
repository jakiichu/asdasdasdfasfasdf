@extends('layouts.navigation')
@section('title', 'Товары')
@section('content')

    <br><br><br><br>

    <h1>Клавиатуры</h1>

    @foreach ($boards as $board)
        <div class="card">
            <img src="images/content/{{ $board->name }}.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $board->name }}</h5>
                <a href="/board/{{ $board->id }}" style="background-color: rgb(37, 37, 37)"
                    class="btn btn-primary">{{ $board->price }} ₽</a>
            </div>
        </div>
    @endforeach
@endsection
