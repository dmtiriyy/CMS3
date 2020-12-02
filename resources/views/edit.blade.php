<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
        form {
            display:flex;
            flex-direction:column;
        }
        form input {
            width:150px;
        }
        form div {
            display:flex;
            margin-bottom:24px;
        }

        </style>
    </head>
    <body class="">

    <h2>Page Editor</h1>
    <h3>Page id : {{$page->id}}</h2>
    <h3>Page url : {{$page->url}}</h2>
        <form action="{{url('editPage')}}" method="post">
        @csrf
                <div><span>Caption : </span><input type="text" id="caption" name="caption" value="{{$page->caption}}" ></div>
                <div><span>parentCode : </span><input type="text" id="parentCode" name="parentCode" value="{{$page->parentCode}}" ></div>
                <div><span>orderNum : </span><input type="text" id="orderNum" name="orderNum" value="{{$page->orderNum}}" ></div>
                <div><span>Content : </span><textarea style="height:700px;width:700px;" type="text" id="content" name="content" required>{{$page->content}}</textarea></div>
               
                <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                <input type="submit" id="form-submit" value="Надіслати">
        </form>
        
    </body>
</html>
