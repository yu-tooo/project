<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACH TECH</title>
</head>
<body>
  <h1>{{$content}}</h1>
  <form action="/middleware" method="post">
    @csrf
    <input type="text" name="content">
    <input type="submit">
  </form>
</body>
</html>