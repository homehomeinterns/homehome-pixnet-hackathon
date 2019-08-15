<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>examplefronend</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="app">
            <example-component></example-component>
            <!-- 直接抓 ExampleController 的 frontend() 丟過來的變數 -->
            {{ $name }}
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
