<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('send-mail')}}" method="post">
        {{ csrf_field() }}
        Enter Email <input type="text" name="mail" ><br>
        {{-- Enter Text <input type="textarea" name="text" placeholder="enter body here.."><br> --}}
        <input type="submit" value="Send Email">
    </form>
</body>
</html>