@extends('layouts.app')

@section('content')

    <div class="flex flex-col items-center mt-8">
        <img src="/img/pizza-house.png" alt="">
        <div class="title m-b-md">
            The West's Best Pizzas
        </div>
        <p class="mssg">{{ session('msg') }}</p>
        <a href="/pizzas/create" class="bg-purple-700 text-white px-2 py-2 rounded-full">Order a Pizza</a>
    </div>
@endsection