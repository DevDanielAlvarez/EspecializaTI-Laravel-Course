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
    <a href="{{ route('support.index') }}"> View all supports</a>
    <form action="" method="POST">
        <input
        type="text" placeholder="subject"
        name="subject"
        >
        <textarea name="body" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>


    </form>
</body>
</html>
