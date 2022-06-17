<!DOCTYPE html>
<html>
    <head>
        <title>企業データ一覧
        </title>
    </head>
<body>
@foreach ($job_nos as $job_no)
<div class="1man">
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
<button type=“button” onclick="this.delete">削除</button>
<button type=“button” onclick="this.update">更新</button>
</div>
@endforeach
</body>
</html>
