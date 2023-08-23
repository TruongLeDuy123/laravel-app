@extends('layouts.app')

@section('content')
   <h1>Update food information</h1>
    <form action="/foods/{{ $food->id }}" method="post">
        {{-- not work, because it related to CSRF - cross site request forgery --}}
        @csrf
        {{-- the key is generated at every session start
        only apply to non-read routes
        if some hacker access to this site from his/her site --}}
        @method('PUT')

        <input type="text" class="form-control" name="name" placeholder="Enter food's name" value="{{ $food->name }}">
        <input type="text" class="form-control" name="description" placeholder="Enter food's description" value="{{ $food->description }}">
        <input type="text" class="form-control" name="count" placeholder="Enter food's count" value="{{ $food->count }}">
        <button class="btn btn-primary" type="submit">Update food</button>

    </form>
@endsection