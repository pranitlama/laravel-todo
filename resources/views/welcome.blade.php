<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>

<body>
    <h1>TODO APP</h1>
<form action="{{route('saveTodo')}}" method="post">
    @csrf
    <input type="text" name="todo">
    <button type="submit">Save</button>
</form>  
<!-- <pre>

    {{$list}}
</pre>   -->
<div>
    <ul>
    @foreach($list as $value)
        <li>{{$value->id}}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($list as $value)
        <li>{{$value->title}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>