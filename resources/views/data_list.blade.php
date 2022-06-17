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
            <th>$job_no->company</th>
        </tr>
        <tr>
            <td>$job_no->jobs</td>
            <td>$job_no-></td>
        </tr>
        <tr>
            <td>$job_no->address</td>
            <td>$job_no->job_department</td>
        </tr>
</table>
<button type=“button” onclick="this.delete">削除</button>
<button type=“button” onclick="this.update">更新</button>
</div>
@endforeach
</body>
</html>
