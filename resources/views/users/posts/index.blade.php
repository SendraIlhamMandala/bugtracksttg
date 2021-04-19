@extends('layouts.app')

@section('content')

<div class="flex justify-center">


    <div class=" w-8/12 ">
        <div class=" p-6 mb-2">
            <h1 class=" text-5xl font-bold mb-1">
                {{ $user->name }}
            </h1>
            <p>
                posted {{ $posts->count() }}  {{ Str::plural('post', $posts->count()) }}
            </p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg mb-14">
            @if($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                no posts
            @endif
        </div>

    </div>

</div>

@endsection