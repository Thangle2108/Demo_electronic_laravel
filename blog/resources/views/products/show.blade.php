@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
    @if($product->image_path)
    <img src="{{ asset('storage/' . $product->image_path) }}" class="mb-4" />
    @endif
    <p class="mb-2">{{ $product->description }}</p>
    <p class="font-bold">${{ $product->price }}</p>
    <a href="{{ route('products.index') }}" class="text-blue-500">Back</a>
</div>
@endsection
