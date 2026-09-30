<h1>Payment Successful </h1>
<p>Amount: ${{ $session->amount_total / 100 }}</p>
<p>Status: {{ $session->payment_status }}</p>
<a href="/products">Back to products</a>@extends('layouts.app')

@section('title', 'Payment Successful')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-md p-8 text-center">
        <div class="text-6xl mb-4">✅</div>
        <h1 class="text-2xl font-bold text-green-600 mb-4">Payment Successful</h1>

        <div class="bg-gray-50 rounded-lg p-4 text-left space-y-2 mb-6">
            <p><span class="font-semibold">Amount:</span>
                {{ strtoupper($session->currency) }} {{ number_format($session->amount_total / 100) }}</p>
            <p><span class="font-semibold">Status:</span>
                <span class="inline-block bg-green-100 text-green-700 text-sm px-2 py-0.5 rounded-full">
                    {{ $session->payment_status }}
                </span>
            </p>
        </div>

        <a href="/products"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg transition">
            Back to products
        </a>
    </div>
@endsection