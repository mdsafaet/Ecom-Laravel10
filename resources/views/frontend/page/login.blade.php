@extends('frontend.layout')


@section('content')

<div class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="max-w-sm w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{route('validate.user')  }}" method="GET" >

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="email@example.com" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="********" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex justify-between items-center mb-6">
                <a href="{{route('forget.pass')}}" class="text-blue-500 hover:underline">Forgot Password?</a>
            </div>
            <button type="submit"  class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{route('user.registration')}}" class="text-blue-500 hover:underline">Don't have an account? Register</a>
        </div>
    </div>
</div>

@endsection