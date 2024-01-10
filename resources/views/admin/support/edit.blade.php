<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Edit a Support</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <span>{{$error}}</span>
            @endforeach
    @endif
    <form action="{{route('support.update',$supportFound->id)}}" method="POST">


        @method('PUT')

       @include('admin/support/partials/inputsForm',[
            'supportFound' => $supportFound
       ])

        <input type="submit" value="Atualizar" >

    </form>
</body>

</html>
