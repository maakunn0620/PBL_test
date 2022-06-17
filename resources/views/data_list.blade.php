<!DOCTYPE html>
<html>
    <head>
        <form method="POST" action="a">
            @csrf
            <title>企業データ一覧</title>
        </from>
    </head>
<body>

<h1>企業データ一覧</h1>

@isset($job_no)
@foreach ($job_no as $job_nos)
<div class="1man">
<table border="2">
    <tr>
        <th>{{$job_nos->company}}</th>
    </tr>
    <tr>
        <td>{{$job_nos->jobs}}</td>
        <td>{{$job_nos->address}}</td>
        <td><button type="submit">更新</button></td>
    </tr>
    <tr>
        <td>{{$job_nos->department_name}}</td>
        <td><button type="submit">もっと見る</button></td>
        <td><button type="submit">削除</button></td>
    </tr>
</table>
</div>
@endforeach

<script>
    function deletePost(e) {
    'use strict';
    
    if (confirm('本当に削除していいですか?')) {
    document.getElementById('form_' + e.dataset.id).submit();
    }
    }
</script>

@endisset
</body>
</html>