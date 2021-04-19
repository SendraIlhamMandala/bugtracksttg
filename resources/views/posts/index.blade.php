@extends('layouts.app')

@section('content')

<div class="  flex justify-center">
    <div class=" w-8/12 bg-gray-700 p-6 rounded-lg">

        <form action="{{ route('posts') }}" method="POST">
            @csrf
            <div class=" mb-4">
                <label for="body" class=" sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4"
                    class=" placeholder-white bg-gray-500 border-2 border-gray-400 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                    placeholder=" Post Something . . "></textarea>

                @error('body')
                    <div class=" text-red-500 mt-1 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class=" bg-blue-500 text-white mb-2 px-4 py-3 rounded font-medium w-full ">
                    Post
                </button>
            </div>
        </form>

        @if($posts->count())
            @foreach($posts as $post)
             <x-post :post="$post"/>
            @endforeach

            {{ $posts->links() }}


            {{-- {{$posts->appends(['latest' => $postLatestAuth->currentPage()])->links() }}
            --}}
        @else
            no posts
        @endif

    </div>

</div>

@endsection