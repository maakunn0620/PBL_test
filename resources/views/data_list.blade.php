<html>
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
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
        <h1>企業データ一覧画面</h1>
        <input type="button" onclick="location.href='./manegement_top'" value="管理画面トップへ">
            <form method="POST" action="edit">
                @csrf
                <p>更新したい企業名を入力してください</p>
                <tr>
                <td>企業名</td>
                <td><input type="text" name="company_name"></td>
                <input type="submit" value="検索">
                </tr>
            </form>

        @if(!empty($initial_lists))
            <form method="POST" action="editor">
                @csrf
                @foreach ($initial_lists as $initial_list)
                <table border="1">
                        <input type="hidden" name="id" value="{{$initial_list->No}}">
                        <tr>
                            <th>{{$initial_list->company}}</th>
                        </tr>
                        <tr>
                            <td>{{$initial_list->jobs}}</td>
                        </tr>
                        <tr>
                            <td>{{$initial_list->address}}</td>
                            <td>{{$initial_list->department_name}}</td>
                        </tr>
                        <th>
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
