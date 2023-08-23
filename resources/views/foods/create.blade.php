@extends('layouts.app')

@section('content')
   <h1>Enter food information</h1>
   {{-- enctype="multipart/form-data": file ảnh đc chia thành nhiều phần nhỏ để upload  --}}
    <form action="/foods" method="post" enctype="multipart/form-data">
        {{-- not work, because it related to CSRF - cross site request forgery --}}
        @csrf
        {{-- the key is generated at every session start
        only apply to non-read routes
        if some hacker access to this site from his/her site --}}
        <input type="file" class="form-control" name="image">
        <input type="text" class="form-control" name="name" placeholder="Enter food's name">
        <input type="text" class="form-control" name="description" placeholder="Enter food's description">
        <input type="text" class="form-control" name="count" placeholder="Enter food's count">
        <div>
            <label>Choose a categories:</label>
            <select name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                  {{ $category->name }}
                </option>    
              @endforeach                                
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    {{-- $errors is array --}}
    @if ($errors->any()) 
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection