<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <span>{{$error}}</span>
            @endforeach
    @endif
    <form action="{{route('support.update',$supportFound->id)}}" method="POST">

        @csrf
        @method('PUT')

        <input name="subject" placeholder="subject" value="{{$supportFound->subject}}" >

        <textarea name="body" placeholder="body">{{$supportFound->body}}</textarea>

        <input type="submit" value="Atualizar" >

    </form>
</body>

</html>
