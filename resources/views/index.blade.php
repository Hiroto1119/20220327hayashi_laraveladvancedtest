<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
</head>
<body>
    <h1>トップページ</h1>
    <form action="/add" method="post">
        @csrf
        <div>
            <label for="name">氏名</label><br>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="name">メールアドレス</label><br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="送信する">
    </form>
</body>
</html>
