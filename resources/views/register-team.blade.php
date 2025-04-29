@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Register Your Team</h1>

        <form action="{{ route('register-team') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Team Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md" required>
                @error('name') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <div class="mb-4">
                <label for="logo" class="block text-gray-700">Team Logo (Optional)</label>
                <input type="file" name="logo" id="logo" class="w-full px-4 py-2 border rounded-md">
                @error('logo') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Register Team</button>
        </form>
    </div>
@endsection
