@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-8">Demo Products</h1>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($products as $id => $product)
            <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center hover:shadow-xl transition">
                <div class="w-full h-32 bg-indigo-100 rounded-xl flex items-center justify-center text-5xl mb-4">
                    🛍️
                </div>

                <h3 class="text-xl font-semibold">{{ $product['name'] }}</h3>
                <p class="text-2xl font-bold text-indigo-600 my-3">
                    Rs {{ number_format($product['price']) }}
                </p>

                <form action="{{ route('stripe.checkout') }}" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $id }}">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition">
                        Pay Now
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection