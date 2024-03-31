@extends('layout')

<div class="contents">
    <h1>The Following are our recent posts...</h1>
</div>
   
@section('content')
@foreach($tasks as $task)

    
        <ul class="taskli">
            <li class="tasklists">{{$task->body}}</li>
        </ul>
    

@endforeach

@endsection
   


