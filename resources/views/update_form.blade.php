<html>
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
    </head>
    <body>
        <h1>更新管理画面</h1>
        @isset($initial_lists)
            <form method="POST" action="editor">
                @csrf
                <?php $a = 0 ?>
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
                            <td><input type="submit" name="update" value="更新">
                                <input type="hidden" name="update[]" value="{{$initial_list->No}}">
                                <input type="submit" name="delete" value="削除"></td>
                            <td><input type="hidden" name="digit" value="{{$a}}"></td>
                        </th>
                        <?php $a += 1 ?>
                </table>
                @endforeach
            </form>
        @endisset
        @isset($sp_company)
            <form method="POST" action="edit">
                @csrf
                <h1>更新画面</h1>
                <p>更新したい企業名を入力してください</p>
                <tr>
                <td>企業名</td>
                <td><input type="text" name="company_name"></td>
                <input type="submit" value="検索">
                </tr>
            </form>
            <form method="POST" action="update">
                <table>
                    @csrf
                    @foreach ($sp_company as $sp_companys)
                        <?php
                            $jobs_array = explode(",", $sp_companys->area_no);
                            $department_array = explode(",", $sp_companys->department_name);
                        ?>
                        <input type="hidden" name="id" value="{{$sp_companys->No}}">
                        <tr>
                            <td>採番</td>
                            <td><input type="text" id="no" name="job_no" value={{$sp_companys->job_no}}></td>
                        </tr>
                        <tr>
                            <td>会社名</td>
                            <td><input type="text" name="company" id="company_name" value="{{$sp_companys->company}}"></td>
                        </tr>
                        <tr>
                            <td>職種</td>
                            <td><input type="text" id="jobtype" name="jobs" value="{{$sp_companys->jobs}}"></td>
                        </tr>
                        <tr>
                            <td>都道府県</td>
                            <td>
                                <label>主要都道府県</label><br>
                                <input type="checkbox" name="prefecture[]" id="東京" {{(in_array("13", $jobs_array)) ?'checked':'' }}>東京都<br>
                                <input type="checkbox" name="prefecture[]" id="大阪" {{(in_array("27", $jobs_array)) ?'checked':'' }}>大阪府<br>
                                <input type="checkbox" name="prefecture[]" id="兵庫" {{(in_array("28", $jobs_array)) ?'checked':'' }}>兵庫県<br>
                                <input type="checkbox" name="prefecture[]" id="愛知" {{(in_array("23", $jobs_array)) ?'checked':'' }}>愛知県<br>
                                <input type="checkbox" name="prefecture[]" id="北海道" {{(in_array("1", $jobs_array)) ?'checked':'' }}>北海道<br>
                                <input type="checkbox" name="prefecture[]" id="神奈川" {{(in_array("14", $jobs_array)) ?'checked':'' }}>神奈川県<br>
                                <input type="checkbox" name="prefecture[]" id="京都" {{(in_array("26", $jobs_array)) ?'checked':'' }}>京都府<br>
                                <input type="checkbox" name="prefecture[]" id="福岡" {{(in_array("40", $jobs_array)) ?'checked':'' }}>福岡<br>
                            </td>
                            <td>
                                <label>中四国</label><br>
                                <input type="checkbox" name="prefecture[]" id="岡山" {{(in_array("33", $jobs_array)) ?'checked':'' }}>岡山県<br>
                                <input type="checkbox" name="prefecture[]" id="広島" {{(in_array("34", $jobs_array)) ?'checked':'' }}>広島県<br>
                                <input type="checkbox" name="prefecture[]" id="鳥取" {{(in_array("31", $jobs_array)) ?'checked':'' }}>鳥取県<br>
                                <input type="checkbox" name="prefecture[]" id="島根" {{(in_array("32", $jobs_array)) ?'checked':'' }}>島根県<br>
                                <input type="checkbox" name="prefecture[]" id="山口" {{(in_array("35", $jobs_array)) ?'checked':'' }}>山口県<br>
                                <input type="checkbox" name="prefecture[]" id="徳島" {{(in_array("36", $jobs_array)) ?'checked':'' }}>徳島県<br>
                                <input type="checkbox" name="prefecture[]" id="香川" {{(in_array("37", $jobs_array)) ?'checked':'' }}>香川県<br>
                                <input type="checkbox" name="prefecture[]" id="愛媛" {{(in_array("38", $jobs_array)) ?'checked':'' }}>愛媛県<br>
                                <input type="checkbox" name="prefecture[]" id="高知" {{(in_array("39", $jobs_array)) ?'checked':'' }}>高知県<br>
                            </td>
                        </tr>
                        <tr>
                            <td>求人学科</td>
                            <td>
                                <input type="checkbox" name="department[]" id="指定なし">指定なし<br>
                                <input type="checkbox" name="department[]" id="医療福祉" {{(in_array("医療福祉学科", $department_array)) ?'checked':'' }}>医療福祉学科<br>
                                <input type="checkbox" name="department[]" id="診療情報管理士" {{(in_array("診療情報管理士学科", $department_array)) ?'checked':'' }}>診療情報管理士学科<br>
                                <input type="checkbox" name="department[]" id="ホテル・ブライダル" {{(in_array("ホテル・ブライダル学科", $department_array)) ?'checked':'' }}>ホテル・ブライダル学科<br>
                                <input type="checkbox" name="department[]" id="経営アシスト" {{(in_array("経営アシスト学科", $department_array)) ?'checked':'' }}>経営アシスト学科<br>
                                <input type="checkbox" name="department[]" id="公務員" {{(in_array("公務員学科", $department_array)) ?'checked':'' }}>公務員学科<br>
                                <input type="checkbox" name="department[]" id="公務員速修" {{(in_array("公務員速修学科", $department_array)) ?'checked':'' }}>公務員速修学科<br>
                                <input type="checkbox" name="department[]" id="保育" {{(in_array("保育学科", $department_array)) ?'checked':'' }}>保育学科<br>
                                <input type="checkbox" name="department[]" id="情報スペシャリスト" {{(in_array("情報スペシャリスト学科", $department_array)) ?'checked':'' }}>情報スペシャリスト学科<br>
                                <input type="checkbox" name="department[]" id="情報システム" {{(in_array("情報システム学科", $department_array)) ?'checked':'' }}>情報システム学科<br>
                                <input type="checkbox" name="department[]" id="ゲームクリエイター" {{(in_array("ゲームクリエイター学科", $department_array)) ?'checked':'' }}>ゲームクリエイター学科<br>
                                <input type="checkbox" name="department[]" id="ゲームプログラマー" {{(in_array("ゲームプログラマー学科", $department_array)) ?'checked':'' }}>ゲームプログラマー学科<br>
                                <input type="checkbox" name="department[]" id="データマーケター" {{(in_array("データマーケター学科", $department_array)) ?'checked':'' }}>データマーケター学科<br>
                                <input type="checkbox" name="department[]" id="ネット・動画クリエイター" {{(in_array("ネット・動画クリエイター学科", $department_array)) ?'checked':'' }}>ネット・動画クリエイター学科<br>
                                <input type="checkbox" name="department[]" id="CGデザイン" {{(in_array("CGデザイン学科", $department_array)) ?'checked':'' }}>CGデザイン学科<br>
                            </td>
                        </tr>
                        <tr>
                            <td>求人票PDF</td>
                            <td><input type="text" name="pdf" id="pdf" value="{{$sp_companys->pdf}}"></td>
                        </tr>
                        <tr>
                            <td>所在地</td>
                            <td><input type="text" name="address" id="address" value="{{$sp_companys->address}}"></td>
                        </tr>
                        <tr>
                            <td>会社HP</td>
                            <td><input type="text" name="company_url" id="HP" value="{{$sp_companys->company_url}}"></td>
                        </tr>
                        <tr>
                            <td>コメント</td>
                            <td><input type="text" name="comment" id="cment" value="{{$sp_companys->cment}}"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="更新"></td>
                        </tr>
                    @endforeach
                </table>
        @endisset
    </form>
    </body>
</html>
