<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <form action="{{URL::to('save-values')}}" method="post">
        @csrf

        <input type="submit" name="">
    </form>
</body>
</html>