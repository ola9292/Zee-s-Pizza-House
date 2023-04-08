@extends('layouts.app')

@section('content')
<div class="p-6 flex flex-col justify-center items-center">
    <h1 class="text-3xl">Pizzas Orders</h1>
        @foreach ($pizzas as $pizza )
        <div class="flex bg-gray-300 w-4/5 p-4 mb-2">
            <img src="/img/pizza-icon.png" alt="" class="mr-4" style="width: 30px">
            <a href="{{ route('pizza.show',$pizza->id) }}}}"> {{ $pizza->name }}</a> 
        </div>
       
           
        @endforeach
</div>


@endsection