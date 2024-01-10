<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Support</title>
</head>
<body>
    <h1>New Support</h1>

    @if($errors->any())
        @foreach ($errors->all() as $error)

        <span>{{$error}}</span><br>

        @endforeach
    @endif

    <a href="{{ route('support.index') }}"> View all supports</a>
    <form action="{{ route('support.store') }}" method="POST">

        @include('admin/support/partials/inputsForm')

        <button type="submit">Submit</button>


    </form>
</body>
</html>
