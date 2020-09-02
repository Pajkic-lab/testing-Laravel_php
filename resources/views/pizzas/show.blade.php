@extends('layouts.layaout')

@section('content')
<div class='wrapper pizza-details'>
    <h1>order for: {{$pizza->name}}</h1>
    <p class='type'>Type - {{ $pizza->type }}</p>
    <p class='base'>Type - {{ $pizza->base }}</p>
    <form action='/pizzas/{{$pizza->id}}' method='POST'>
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back">Back to all pizzas</a>
@endsection