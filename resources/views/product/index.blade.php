@extends('layouts.navigation')

@section('title', 'продукт')
@section('content')
    <div
        style="position: fixed; background-color: aliceblue; border: solid; margin-left: 50px;margin-top: 120px;width: 836px; height: auto;">
        <p class="id">{{ $item->id }}</p>
        <img style="width:832px; height: auto;" src="/images/content/{{ $item->name }}.png">
    </div>
    <div style="position: absolute; left:920px;top:150px; width: 800px;">
        <h1>{{ $item->name }}</h1>

        <form id="add-form" action="/addToCart/{{ $item->id }}" method="POST">
            @csrf
            <input type="text" value="{{ Auth::user()->name }}" class="d-none" name="name">
            <button class="buy" style="margin: 10px; padding: 8px; font-size: 24px;">
                {{ $item->price }} ₽</button>
        </form>
        <p style="color: aliceblue; font-size: 16px"><?php echo nl2br("$item->text", false); ?></p>
    </div>
@endsection
