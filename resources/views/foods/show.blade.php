@extends('layouts.app')

@section('content')
   <h1>Show detail food information</h1>
   <h2>Name: {{ $food->name }}</h2>
   <img src="{{ asset('images/'.$food->image_path) }}" alt="">
   <h2>Count: {{ $food->count }}</h2>
   <h2>Description: {{ $food->description }}</h2>
   <h2>Category_id: {{ $food->category_id }}</h2>
   <h2>Category's name: {{ $food->category->name }}</h2>
@endsection