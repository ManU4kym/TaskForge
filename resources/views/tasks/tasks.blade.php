<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:rgb(129, 146, 116); transition: 1s linear;">
    
    @foreach($tasks as $task)

    <pre style="margin:20px 83px;color:rgb(223, 223, 223); font-size:34px;">{{$task->body}}</pre>

    @endforeach


</body>
</html>