<!DOCTYPE html>
<html>
    <head>
<<<<<<< HEAD
        <title>検索結果一覧
        </title>
    </head>
=======
        <title>検索結果一覧</title>
    </head>
    <h1>検索結果一覧</h1>
>>>>>>> d496fc38fd42dc08fa1e7c375970ac6fcce6c8ee
    <body>
        <form method="POST" action="showall">
            @csrf
            <input type="submit">
        </form>
<<<<<<< HEAD
        <button type=“button” onclick="this.mainmanu">メインメニュー</button>
        <button type=“button” onclick="this.search">検索メニュー</button>
=======
        <button type=“button” onclick="location.href='./top' ">トップメニュー</button>
        <button type=“button” onclick="location.href='./search' ">検索画面</button>
>>>>>>> d496fc38fd42dc08fa1e7c375970ac6fcce6c8ee
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> d496fc38fd42dc08fa1e7c375970ac6fcce6c8ee
