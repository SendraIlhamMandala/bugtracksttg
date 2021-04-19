@extends('layouts.app')

@section('content')

<div class="flex justify-center">


    <div class=" w-8/12 bg-gray-700 p-6 rounded-lg mb-14 ">
      
<div class=" mb-3">
    <a href="{{ route('users.posts', $post->user) }}" class=" font-bold">{{ $post->user->name }}</a> <span class=" text-xs">
        {{ $post->created_at->diffForHumans() }}</span>
    
        <p>{{ $post->body }}</p>
    

    <div class=" mb-1">
        <span class=" text-sm">
            {{ $post->likes->count() }}
            {{ Str::plural('like', $post->likes->count()) }}
        </span>
    </div>

    <div class=" flex items-center">


        @auth


            @if(!$post->likedBy(auth()->user()))


                <form action="{{ route('posts.likes', $post) }}" method="post"
                    class=" mr-1">
                    @csrf
                    <button
                        class="border-2 w-16 pr-1 pl-1 border-transparent bg-blue-500  font-bold text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500"
                        type="submit">
                        Like</button>
                </form>

            @else

                <form action="{{ route('posts.likes', $post) }}" method="post"
                    class=" mr-1">
                    @csrf
                    @method('DELETE')
                    <button
                        class="border-2 w-16 pr-1 pl-1 border-transparent bg-blue-500  font-bold text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500"
                        type="submit">
                        Unlike</button>
                </form>



            @endif


            @can('delete', $post)

                <form action="{{ route('posts.destroy', $post) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="border-2 w-16 pr-1 pl-1 border-transparent bg-red-500  font-bold text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500"
                        type="submit">
                        Delete</button>
                </form>
            @endcan

        @endauth

    </div>

</div>
    </div>

</div>

@endsection