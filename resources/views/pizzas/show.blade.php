@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center py-6" >
  <div class="bg-gray-200 w-2/3 p-4">
    <h1 class="text-3xl">Order for {{ $pizza->name }}</h1>
    <p class="type mb-2">Type - {{ $pizza->type }}</p>
    <p class="base mb-2">Basee - {{ $pizza->base }}</p>
    <p class="toppings mb-2">Extra Toppings:</p>
    <ul class="ml-4">
        @foreach ($pizza->toppings as $toppings )
            <li>{{ $toppings }}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizza.show',$pizza->id) }}}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="mt-8 border bg-purple-800 py-1 px-2 rounded text-white">Complete Order</button>
    </form>
  </div>

  <a href="{{ route('pizza.index') }}" class="text-bg-purple-800"><- Back to all pizzas</a>
</div>
  
@endsection