@extends('frontend.layout')

@section('content')
<div class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="max-w-sm w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Forgot Password</h2>
        <p class="mb-4 text-gray-600 text-center">
            Enter your email address and we will send you a link to reset your password.
        </p>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" placeholder="email@example.com" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Send Reset Link</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{ route('user.login') }}" class="text-blue-500 hover:underline">Back to Login</a>
        </div>
    </div>
</div>
@endsection

















