@include('layouts.botsrap')
@include('layouts.header')
@vite('resources/css/index.css')
<link href="{{ asset('resources/css/index.css') }}">





<div class="containerkim">
    <div class="items">{{$task->body}}</div>
    <div class="items">{{$task->body}}</div>
    <div class="items">{{$task->body}}</div>
    <div class="items">{{$task->body}}</div>
    <div class="items">{{$task->body}}</div>
    <div class="items">{{$task->body}}</div>
</div>
@include('layouts.footer')