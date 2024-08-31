@extends('frontend.layout')


@Section('content')

<div class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="max-w-sm w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>

        @if ($errors->any())
           <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
           </div>
        @endif

        <form action="{{ route('save.user') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="email@example.com" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
         
            <div class="mb-2">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="********" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm-password" placeholder="********" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Register</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{route ('user.login') }}" class="text-blue-500 hover:underline">Already have an account? Login</a>
        </div>
    </div>
</div>
@endsection