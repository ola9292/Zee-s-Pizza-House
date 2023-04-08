@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center">
    <div class="wrapper create-pizza bg-gray-300 w-4/5 p-6">
        <h1 class="text-3xl mb-6">Create a New Pizza</h1>
        <form action="{{ route('pizza.index') }}" method="POST">
           @csrf
           <div class="mb-4">
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" required>
           </div>
          <div >
            <label for="type" class="mt-4">Choose type of pizza:</label><br />
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
          </div>
          
        
          <label for="base">Choose crust:</label><br />
          <select name="base" id="base">
            <option value="thick">Thick</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="cheese crust">Cheese Crust</option>
            <option value="garlic crust">Garlic Crust</option>
          </select>
          <fieldset class="border border-gray-600 p-4 mt-4">
            <label>Extra toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
          </fieldset>
          <input type="submit" value="Order Pizza">
        </form>
      </div>
</div>


@endsection