@extends('layout')
   
@section('content')
@foreach($tasks as $task)

<pre style="margin:20px 83px;color:rgb(31, 29, 29); font-size:34px;">{{$task->body}}</pre>

@endforeach

@endsection
   


