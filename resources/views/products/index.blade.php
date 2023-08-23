<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function of Products controller</h1>
    {{-- <h1>Title: {{ $title }}</h1> --}}
    {{-- <h1>x = {{ $x }}</h1>
    <h1>y = {{ $y }}</h1> --}}
    {{-- <h1>name={{ $name }}</h1> --}}

    {{-- @foreach ($product as $item)
        <h1>{{ $item }}</h1>
    @endforeach --}}

    {{-- <h1>{{ $product }}</h1> --}}
    <a href="{{ route('products') }}">Link to Products</a>

</body>
</html>