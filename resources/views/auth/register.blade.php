@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class=" w-4/12 bg-gray-700 p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class=" mb-4 ">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" 
                    class=" bg-gray-600 border-2 w-full p-4 rounded-lg placeholder-white @error('name') border-red-400 @enderror " value="{{ old('name') }}">
                    @error('name')
                         <div class=" text-red-400 mt-1 text-sm">
                             {{ $message }}
                         </div>
                    @enderror
                </div>

                <div class=" mb-4 ">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" 
                    class=" bg-gray-600 border-2 w-full p-4 rounded-lg placeholder-white @error('username') border-red-400 @enderror " value="{{ old('username') }}">
                    @error('username')
                         <div class=" text-red-400 mt-1 text-sm">
                             {{ $message }}
                         </div>
                    @enderror
                </div>

                <div class=" mb-4 ">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" 
                    class=" bg-gray-600 border-2 w-full p-4 rounded-lg placeholder-white @error('email') border-red-400 @enderror " value="{{ old('email') }}">
                    @error('email')
                         <div class=" text-red-400 mt-1 text-sm">
                             {{ $message }}
                         </div>
                    @enderror
                </div>
                
                <div class=" mb-4 ">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" 
                    class=" bg-gray-600 border-2 w-full p-4 rounded-lg placeholder-white @error('password') border-red-400 @enderror " value="{{ old('password') }}">
                    @error('password')
                         <div class=" text-red-400 mt-1 text-sm">
                             {{ $message }}
                         </div>
                    @enderror
                </div>

                <div class=" mb-4 ">
                    <label for="password_confirmation" class="sr-only">Repeat password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" 
                    class=" bg-gray-600 border-2 w-full p-4 rounded-lg placeholder-white @error('password_confirmation') border-red-400 @enderror " value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                         <div class=" text-red-400 mt-1 text-sm">
                             {{ $message }}
                         </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class=" bg-blue-500 text-white px-4 py-3 rounded font-medium w-full ">Register
                    </button>
                </div>

            </form>
            
        </div>

    </div>
    
@endsection