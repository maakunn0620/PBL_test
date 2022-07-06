<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="../resources/css/style.css">
        <title>検索結果一覧
        </title>
    </head>
    <body>
        {{--<form method="POST" action="showall">
            @csrf
            <input type="submit">
        </form>--}}
        <p id="index-seito">企業データ一覧</p>
        <button type=“button” id="TOPpng" onclick="location.href='./top'">メインメニュー</button>
        <button type=“button” id="searchpng" onclick="location.href='./search'">検索メニュー</button>
        {{--@isset($job_no)
        @foreach ($job_no as $job_nos)--}}
        <table border="0" width="1000px" class="list">
            <tr>
                <th class="kaisyamei">会社名</th>
                <th class="syokusyu">職種</th>
                <th class="kinnuti">勤務地</th>
                <th class="kyuujingakka">求人学科</th>
            </tr>
        </table>
        <table border="0" width="1000px" class="list">
        @isset($job_no)
        @foreach ($job_no as $job_nos)
            <tr>
                <td>{{$job_nos->company}}</td>
                <td>{{$job_nos->jobs}}</td>
                <td>{{$job_nos->address}}</td>
                <td>{{$job_nos->department_name}}</td>
                <td><button type="submit">🔍</button></td>
            </tr>
        </table>
        @endforeach
        @endisset
    </body>
</html>
