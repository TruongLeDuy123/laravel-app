@extends('layouts.app')
<ol>

@section('content')
    <h1>This is Foods page</h1>
    <a href="foods/create" class="btn btn-primary" role="button">Create a new food</a>
   
    @foreach ($foods as $item)
    <li class="list-group-item d-flex justify-content-between align-items">
        <div class="ms-2 me-auto">
            <div class="fw-bold">
                <a href="/foods/{{ $item->id }}">
                    {{-- Show details --}}
                    {{ $item->name }}
                </a>
            </div>
            {{ $item->description }}
        </div>
        <span class="badge bg-primary rounded-pill">{{ $item->count }}</span>
        <a href="foods/{{ $item->id }}/edit">Edit</a>
        {{-- Delete a food --}}
        <form action="/foods/{{ $item->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
    </li>
    @endforeach
</ol>

@endsection