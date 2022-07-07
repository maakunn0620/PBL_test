<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>求人検索TOP</title>
        <link rel="stylesheet" href="../resources/css/top.css">

    </head>
    <body>
        @if (session('adding_message'))
            <div>
                <script type="text/javascript"> alert("求人票の追加が完了しました")</script>
            </div>
        @endif
        <div>
            <img src="../resources/imgs/求人票検索.jpeg" class="containe">
        </div>
        <a href='./showall' class="example"><image src="../resources/imgs/求人票一覧.jpeg"  height="70" width="220"></a>
        <a href='./search' class="example2"><image src="../resources/imgs/検索画面.jpeg"  height="70" width="220"></a>
        <a href='./login' class="example3"  ><image src="../resources/imgs/管理者はこちら.jpeg"  height="60" width="300"></a>
        {{--<button type="button" onclick="location.href='./showall'" class="example">求人票一覧</button>
        <button type="button" onclick="location.href='./search'" class="example2">検索画面</button>
        <button type="button" onclick="location.href='./login'" class="example3">管理者画面</button>--}}
    </body>
</html>
