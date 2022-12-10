<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    body {
      background:#0c4da2;
    }
    .board {
      width:60%;
      background-color:white;
      padding:5px 20px;
      margin:120px auto;
      border-radius:20px;
    }
  </style>
</head>
<body>
  <div class="board">
    @yield('contents')
  </div>
</body>
</html>