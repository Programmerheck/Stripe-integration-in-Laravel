@extends('layouts.app')

@section('title', 'Payment Cancelled')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-md p-8 text-center">
        <div class="text-6xl mb-4">❌</div>
        <h1 class="text-2xl font-bold text-red-600 mb-2">Payment Cancelled</h1>
        <p class="text-gray-500 mb-6">Your payment is cancelled.</p>

        <a href="/products"
           class="inline-block bg-gray-800 hover:bg-gray-900 text-white px-6 py-2.5 rounded-lg transition">
            Try again
        </a>
    </div>
@endsection