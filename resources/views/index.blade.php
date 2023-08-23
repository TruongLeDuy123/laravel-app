@extends('layouts.app')

@section('content')
<h1>Page controller with shared header footer</h1>
<img src="{{ asset('storage/doctor9.jpg')}}" width="100" height="100" alt="">
{{-- {{ $x = 10; }}
@if ($x > 2)
    <h3>x is greater</h3>
@elseif($x < 2)
    <h3>x is less</h3>
@else
    <h3>x is equal</h3>
@endif --}}
{{-- unless = if not --}}
{{-- @unless(empty($name))
    <h3>Name is not empty</h3>
@endunless --}}

{{-- @if(!empty($name))
    <h3>Name is not empty</h3>
@endif --}}

{{-- @empty($name)
    <h3>Name is empty</h3>
@endempty

@empty($age)
    <h3>Age is empty</h3>
@endempty

@isset($name)
    <h3>Name is set</h3>
@endisset

@switch($name)
    @case('truong')
        <h3>This is truong</h3>
        @break
    @case('TRUONG')
        <h3>This is TRUONG</h3>
        @break
    @default
        <h3>NOT NAME</h3>
@endswitch --}}

{{-- @for ($i = 0; $i < 5; $i++)
    <h1>i = {{ $i }}</h1>
@endfor --}}

{{-- @foreach ($names as $name)
    <h1>each name: {{ $name }}</h1>
@endforeach --}}

{{-- @forelse ($names as $name)
    <h1>each name: {{ $name }}</h1>
@empty
    <h1>EMPTY</h1>
@endforelse --}}

{{-- {{ $i = 0 }}
@while ($i < 5)
    <h1>i = {{ $i }}</h1>
    {{ $i++; }}
@endwhile --}}

@endsection