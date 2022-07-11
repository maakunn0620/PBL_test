<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="{{ asset('css/nakashima.css') }}">
        <title>検索結果一覧</title>
    </head>
    <body>
        <p id="index-seito">企業データ一覧</p>
        <!-- 上：企業一覧、下：もっと見るのボタン -->
        @if(isset($job_no))
            <button type=“button” id="TOPpng" onclick="location.href='./top'">メインメニュー</button>
            <button type=“button” id="searchpng" onclick="location.href='./search'">検索メニュー</button>
        @elseif(isset($job_detail))
            <button type=“button” id="TOPpng" onclick="location.href='../top'">メインメニュー</button>
            <button type=“button” id="searchpng" onclick="location.href='../search'">検索メニュー</button>
        @endif
        <table border="0" width="1000px" class="list">
            <!-- 初期企業一覧表示 -->
            @if(isset($job_no))
            <tr>
                <th class="kaisyamei">会社名</th>
                <th class="syokusyu">職種</th>
                <th class="kinnuti">勤務地</th>
                <th class="kyuujingakka">求人学科</th>
            </tr>
            <form method="POST" action="showall">
                @csrf
                @foreach ($job_no as $job_nos)
                    <tr>
                        <td>{{$job_nos->company}}</td>
                        <td>{{$job_nos->jobs}}</td>
                        <td>{{$job_nos->address}}</td>
                        <td>{{$job_nos->department_name}}</td>
                        <td><button type="button" onclick="location.href='{{ route('showpopup', $job_nos->No) }}'">🔍</td>
                    </tr>
                @endforeach
            </form>
            @endif
            <!-- 🔍を押したときの表示 -->
            @if(isset($job_detail))
                <tr>
                    <th class="kaisyamei">会社名</th>
                    <th class="syokusyu">職種</th>
                    <th class="kinnuti">勤務地</th>
                    <th class="kyuujingakka">求人学科</th>
                    <th class="comment">コメント</th>
                    <th class="pdf">pdf</th>
                </tr>
                @foreach ($job_detail as $job_nos)
                <tr>
                    <td>{{$job_nos->company}}</td>
                    <td>{{$job_nos->jobs}}</td>
                    <td>{{$job_nos->address}}</td>
                    <td>{{$job_nos->department_name}}</td>
                    <td>{{$job_nos->cment}}</td>
                    <td><a href={{"$job_nos->pdf"}}>{{"$job_nos->pdf"}}</a>
                </tr>
                @endforeach
            @endif
        </table>
    </body>
</html>
