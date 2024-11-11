<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <div>mogitate</div>
    </header>

    <main>
        <h1>商品一覧</h1>
        <div>
            <form class="form" action="/products{:productId}" method="post">
                @csrf
                <input type="button">
            </form>
        </div>
    </main>
</body>
</html>