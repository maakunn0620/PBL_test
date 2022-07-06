<html>
    <head>
        <link rel="stylesheet" href="../resources/css/style.css">
        <meta charset="utf-8">
        <title>企業データ一覧管理者用</title>
    </head>
    <body>
        @if (session('update_message'))
            <div>
                <script type="text/javascript"> alert("更新が完了しました")</script>
            </div>
        @endif
        @if (session('delete_message'))
            <div>
                <script type="text/javascript"> alert("対象の削除が完了しました")</script>
            </div>
        @endif
        <p id="index-kanri">企業データ一覧管理者用
        <button type="button" onclick="location.href='./manegement_top'" id="TOPpng">TOP</button>
            <form method="POST" action="edit">
                @csrf
                <p>更新したい企業名を入力してください</p>
                <tr>
                <td>企業名</td>
                <td><input type="text" name="company_name"></td>
                <td><input type="submit" id="searchpng" value="検索"></td>
                </tr>
            </form>

        @if(!empty($initial_lists))
            <form method="POST" action="editor">
                @csrf
                <table width='1000px' class="list">
                        <tr>
                            <th>会社名</th><th>職種</th><th>勤務地</th><th>求人学科</th>
                        </tr>
                @foreach ($initial_lists as $initial_list)
                        <tr>
                            <td><input type="hidden" name="id" value="{{$initial_list->No}}"></td>
                            <td>{{$initial_list->company}}</td>
                            <td>{{$initial_list->jobs}}</td>
                            <td>{{$initial_list->address}}</td>
                            <td>{{$initial_list->department_name}}</td>
                            <td><button type="submit">🔍</button></td>
                            <td><a href="{{ route('edit.page', $initial_list->No) }}">編集</a>
                            <td><a href="{{ route('delete.page', $initial_list->job_no) }}">削除</a>
                        </th>
                </table>
                @endforeach
            </form>
        @else
            <h2>検索対象が見つかりませんでした</h2>
        @endif
    </body>
</html>
