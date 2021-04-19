@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class=" w-12/12 bg-gray-700 p-6 rounded-lg">
            <form action="{{ route('login') }}" method="post">
                @csrf
         
                @if ( session('status'))
                    <div class=" bg-red-300 text-white px-4 py-3 mb-4 rounded font-medium w-full">
                        {{ session('status') }}
                    </div>    
                @endif
                
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
                    <div class=" flex items-center">
                        <input type="checkbox" class=" mr-2" name="remember" id="remember" >
                        <label for="remember">
                        Remember me 
                      </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class=" bg-blue-500 text-white px-4 py-3 rounded font-medium w-full ">Login
                    </button>
                </div>

            </form>
            
        </div>

    </div>
    
@endsection