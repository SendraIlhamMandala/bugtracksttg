@component('mail::message')

YOUR POST WAS LIKED !!

{{ $userLiker->name }} liked 1 of your post

@component('mail::button', ['url' => route('posts.show',$post)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
