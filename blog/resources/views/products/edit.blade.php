@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="border p-2 w-full" required>
        </div>
        <div>
            <label class="block">Description</label>
            <textarea name="description" class="border p-2 w-full">{{ $product->description }}</textarea>
        </div>
        <div>
            <label class="block">Price</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="border p-2 w-full" required>
        </div>
        <div>
            <label class="block">Image</label>
            <input type="file" name="image_path" class="border p-2 w-full">
        </div>
        <button class="bg-blue-500 text-white px-4 py-2">Update</button>
    </form>
</div>
@endsection
