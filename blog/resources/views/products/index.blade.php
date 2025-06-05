@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 mb-4 inline-block">Create Product</a>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Name</th>
                <th class="py-2">Price</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border px-4 py-2">{{ $product->name }}</td>
                <td class="border px-4 py-2">${{ $product->price }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('products.show', $product) }}" class="text-blue-500">View</a>
                    <a href="{{ route('products.edit', $product) }}" class="text-green-500 ml-2">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500 ml-2" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
