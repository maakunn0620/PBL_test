<!DOCTYPE html>
<html>
    <head>
        <title>検索結果一覧
        </title>
    </head>
    <body>
        <form method="POST" action="showall">
            @csrf
            <input type="submit">
        </form>
        <button type=“button” onclick="this.mainmanu">メインメニュー</button>
        <button type=“button” onclick="this.search">検索メニュー</button>
    </body>

    @isset($job_no)
    @foreach ($job_no as $job_nos)
    <table border="1">
            <tr>
                <th>{{$job_nos->company}}</th>
            </tr>
            <tr>
                <td>{{$job_nos->jobs}}</td>
            </tr>
            <tr>
                <td>{{$job_nos->address}}</td>
                <td>{{$job_nos->department_name}}</td>
            </tr>
    </table>
    @endforeach
    @endisset
</html>
