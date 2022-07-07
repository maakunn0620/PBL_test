<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/nakashima.css') }}">
        <meta charset="utf-8">
        <title>企業情報更新</title>
    </head>
    <body>
        <p class="index">企業情報更新</p>
        @isset($sp_company)
        <form method="POST" action="update">
            @csrf
            <button type="button" onclick="location.href='../edit'">前に戻る</button>
            <div class="warning_alert">
                @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
                <table class="form" width="1000px" >
                    @foreach ($sp_company as $sp_companys)
                        <?php
                            $jobs_array = explode(",", $sp_companys->area_no);
                            $department_array = explode(",", $sp_companys->department_name);
                        ?>
                        <tr>
                            <input type="hidden" name="id" value="{{$sp_companys->No}}">
                        </tr>
                        <tr>
                            <th width="300">採番</th>
                            <td><input type="text" id="no" name="job_no" value={{$sp_companys->job_no}}></td>
                        </tr>
                        <tr>
                            <th>会社名</th>
                            <td><input type="text" size="40" name="company" id="company_name" value="{{$sp_companys->company}}"></td>
                        </tr>
                        <tr>
                            <th>職種</th>
                            <td><input type="text" size="40" id="jobtype" name="jobs" value="{{$sp_companys->jobs}}"></td>
                        </tr>
                        <tr>
                            <th rowspan="2">都道府県</th>
                                <td>
                                    <table class="pre">
                                        <td>
                                            <label>主要都道府県</label><br>
                                            <input type="checkbox" name="prefecture[]" id="東京" value="13" {{(in_array("13", $jobs_array)) ?'checked':'' }}>東京都<br>
                                            <input type="checkbox" name="prefecture[]" id="大阪" value="27" {{(in_array("27", $jobs_array)) ?'checked':'' }}>大阪府<br>
                                            <input type="checkbox" name="prefecture[]" id="兵庫" value="28" {{(in_array("28", $jobs_array)) ?'checked':'' }}>兵庫県<br>
                                            <input type="checkbox" name="prefecture[]" id="愛知" value="23" {{(in_array("23", $jobs_array)) ?'checked':'' }}>愛知県<br>
                                            <input type="checkbox" name="prefecture[]" id="北海道" value="1" {{(in_array("1", $jobs_array)) ?'checked':'' }}>北海道<br>
                                            <input type="checkbox" name="prefecture[]" id="神奈川" value="14" {{(in_array("14", $jobs_array)) ?'checked':'' }}>神奈川県<br>
                                            <input type="checkbox" name="prefecture[]" id="京都" value="26" {{(in_array("26", $jobs_array)) ?'checked':'' }}>京都府<br>
                                            <input type="checkbox" name="prefecture[]" id="福岡" value="40" {{(in_array("40", $jobs_array)) ?'checked':'' }}>福岡<br>
                                        </td>
                                        <td>
                                            <label>中四国</label><br>
                                            <input type="checkbox" name="prefecture[]" id="岡山" value="33" {{(in_array("33", $jobs_array)) ?'checked':'' }}>岡山県<br>
                                            <input type="checkbox" name="prefecture[]" id="広島" value="34" {{(in_array("34", $jobs_array)) ?'checked':'' }}>広島県<br>
                                            <input type="checkbox" name="prefecture[]" id="鳥取" value="31" {{(in_array("31", $jobs_array)) ?'checked':'' }}>鳥取県<br>
                                            <input type="checkbox" name="prefecture[]" id="島根" value="32" {{(in_array("32", $jobs_array)) ?'checked':'' }}>島根県<br>
                                            <input type="checkbox" name="prefecture[]" id="山口" value="35" {{(in_array("35", $jobs_array)) ?'checked':'' }}>山口県<br>
                                            <input type="checkbox" name="prefecture[]" id="徳島" value="36" {{(in_array("36", $jobs_array)) ?'checked':'' }}>徳島県<br>
                                            <input type="checkbox" name="prefecture[]" id="香川" value="37" {{(in_array("37", $jobs_array)) ?'checked':'' }}>香川県<br>
                                            <input type="checkbox" name="prefecture[]" id="愛媛" value="38" {{(in_array("38", $jobs_array)) ?'checked':'' }}>愛媛県<br>
                                            <input type="checkbox" name="prefecture[]" id="高知" value="39" {{(in_array("39", $jobs_array)) ?'checked':'' }}>高知県<br>
                                        </td>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
                                        <a style="cursor:pointer;">▼その他都道府県</a>
                                    </div>
                                        <div id="open" style="display:none;clear:both;">
                                            <table class="pre">
                                                <tr>
                                                    <td>
                                                        <label>東北</label><br>
                                                        <input type="checkbox" name="prefecture[]" id="青森" value="2" {{(in_array("2", $jobs_array)) ?'checked':'' }}>青森県<br>
                                                        <input type="checkbox" name="prefecture[]" id="岩手" value="3" {{(in_array("3", $jobs_array)) ?'checked':'' }}>岩手県<br>
                                                        <input type="checkbox" name="prefecture[]" id="宮城" value="4" {{(in_array("4", $jobs_array)) ?'checked':'' }}>宮城県<br>
                                                        <input type="checkbox" name="prefecture[]" id="秋田" value="5" {{(in_array("5", $jobs_array)) ?'checked':'' }}>秋田県<br>
                                                        <input type="checkbox" name="prefecture[]" id="山形" value="6" {{(in_array("6", $jobs_array)) ?'checked':'' }}>山形県<br>
                                                        <input type="checkbox" name="prefecture[]" id="福島" value="7" {{(in_array("7", $jobs_array)) ?'checked':'' }}>福島県<br>
                                                        <label>関東</label><br>
                                                        <input type="checkbox" name="prefecture[]" id="茨城" value="8" {{(in_array("8", $jobs_array)) ?'checked':'' }}>茨城県<br>
                                                        <input type="checkbox" name="prefecture[]" id="栃木" value="9" {{(in_array("9", $jobs_array)) ?'checked':'' }}>栃木県<br>
                                                        <input type="checkbox" name="prefecture[]" id="群馬" value="10" {{(in_array("10", $jobs_array)) ?'checked':'' }}>群馬県<br>
                                                        <input type="checkbox" name="prefecture[]" id="千葉" value="12" {{(in_array("11", $jobs_array)) ?'checked':'' }}>千葉県<br>
                                                        <label>中部</label><br>
                                                        <input type="checkbox" name="prefecture[]" id="新潟" value="15" {{(in_array("15", $jobs_array)) ?'checked':'' }}>新潟県<br>
                                                        <input type="checkbox" name="prefecture[]" id="富山" value="16" {{(in_array("16", $jobs_array)) ?'checked':'' }}>富山県<br>
                                                        <input type="checkbox" name="prefecture[]" id="石川" value="17" {{(in_array("17", $jobs_array)) ?'checked':'' }}>石川県<br>
                                                        <input type="checkbox" name="prefecture[]" id="福井" value="18" {{(in_array("18", $jobs_array)) ?'checked':'' }}>福井県<br>
                                                        <input type="checkbox" name="prefecture[]" id="山梨" value="19" {{(in_array("19", $jobs_array)) ?'checked':'' }}>山梨県<br>
                                                        <input type="checkbox" name="prefecture[]" id="長野" value="20" {{(in_array("20", $jobs_array)) ?'checked':'' }}>長野県<br>
                                                        <input type="checkbox" name="prefecture[]" id="岐阜" value="21" {{(in_array("21", $jobs_array)) ?'checked':'' }}>岐阜県<br>
                                                        <input type="checkbox" name="prefecture[]" id="静岡" value="22" {{(in_array("22", $jobs_array)) ?'checked':'' }}>静岡県<br>
                                                    </td>
                                                    <td>
                                                        <label>近畿</label><br>
                                                        <input type="checkbox" name="prefecture[]" id="三重" value="24" {{(in_array("24", $jobs_array)) ?'checked':'' }}>三重県<br>
                                                        <input type="checkbox" name="prefecture[]" id="滋賀" value="25" {{(in_array("25", $jobs_array)) ?'checked':'' }}>滋賀県<br>
                                                        <input type="checkbox" name="prefecture[]" id="奈良" value="29" {{(in_array("29", $jobs_array)) ?'checked':'' }}>奈良県<br>
                                                        <input type="checkbox" name="prefecture[]" id="和歌山" value="30" {{(in_array("30", $jobs_array)) ?'checked':'' }}>和歌山県<br>
                                                        <label>九州</label><br>
                                                        <input type="checkbox" name="prefecture[]" id="佐賀" value="41" {{(in_array("41", $jobs_array)) ?'checked':'' }}>佐賀県<br>
                                                        <input type="checkbox" name="prefecture[]" id="長崎" value="42" {{(in_array("42", $jobs_array)) ?'checked':'' }}>長崎県<br>
                                                        <input type="checkbox" name="prefecture[]" id="熊本" value="43" {{(in_array("43", $jobs_array)) ?'checked':'' }}>熊本県<br>
                                                        <input type="checkbox" name="prefecture[]" id="大分" value="44" {{(in_array("44", $jobs_array)) ?'checked':'' }}>大分県<br>
                                                        <input type="checkbox" name="prefecture[]" id="宮崎" value="45" {{(in_array("45", $jobs_array)) ?'checked':'' }}>宮崎県<br>
                                                        <input type="checkbox" name="prefecture[]" id="鹿児島" value="46" {{(in_array("46", $jobs_array)) ?'checked':'' }}>鹿児島県<br>
                                                        <input type="checkbox" name="prefecture[]" id="沖縄" value="47" {{(in_array("47", $jobs_array)) ?'checked':'' }}>沖縄県<br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <th>求人学科</th>
                                <td>
                                    <input type="checkbox" name="department[]" id="指定なし" value="15" {{(in_array("指定なし", $department_array)) ?'checked':'' }}>指定なし<br>
                                    <input type="checkbox" name="department[]" id="医療福祉" value="1" {{(in_array("医療福祉学科", $department_array)) ?'checked':'' }}>医療福祉学科<br>
                                    <input type="checkbox" name="department[]" id="診療情報管理士" value="2" {{(in_array("診療情報管理士学科", $department_array)) ?'checked':'' }}>診療情報管理士学科<br>
                                    <input type="checkbox" name="department[]" id="ホテル・ブライダル" value="3" {{(in_array("ホテル・ブライダル学科", $department_array)) ?'checked':'' }}>ホテル・ブライダル学科<br>
                                    <input type="checkbox" name="department[]" id="経営アシスト" value="4" {{(in_array("経営アシスト学科", $department_array)) ?'checked':'' }}>経営アシスト学科<br>
                                    <input type="checkbox" name="department[]" id="公務員" value="5" {{(in_array("公務員学科", $department_array)) ?'checked':'' }}>公務員学科<br>
                                    <input type="checkbox" name="department[]" id="公務員速修" value="6" {{(in_array("公務員速修学科", $department_array)) ?'checked':'' }}>公務員速修学科<br>
                                    <input type="checkbox" name="department[]" id="保育" value="7" {{(in_array("保育学科", $department_array)) ?'checked':'' }}>保育学科<br>
                                    <input type="checkbox" name="department[]" id="情報スペシャリスト" value="8" {{(in_array("情報スペシャリスト学科", $department_array)) ?'checked':'' }}>情報スペシャリスト学科<br>
                                    <input type="checkbox" name="department[]" id="情報システム" value="9" {{(in_array("情報システム学科", $department_array)) ?'checked':'' }}>情報システム学科<br>
                                    <input type="checkbox" name="department[]" id="ゲームクリエイター" value="10" {{(in_array("ゲームクリエイター学科", $department_array)) ?'checked':'' }}>ゲームクリエイター学科<br>
                                    <input type="checkbox" name="department[]" id="ゲームプログラマー" value="11" {{(in_array("ゲームプログラマー学科", $department_array)) ?'checked':'' }}>ゲームプログラマー学科<br>
                                    <input type="checkbox" name="department[]" id="データマーケター" value="12" {{(in_array("データマーケター学科", $department_array)) ?'checked':'' }}>データマーケター学科<br>
                                    <input type="checkbox" name="department[]" id="ネット・動画クリエイター" value="13" {{(in_array("ネット・動画クリエイター学科", $department_array)) ?'checked':'' }}>ネット・動画クリエイター学科<br>
                                    <input type="checkbox" name="department[]" id="CGデザイン" value="14" {{(in_array("CGデザイン学科", $department_array)) ?'checked':'' }}>CGデザイン学科<br>
                                </td>
                            </tr>
                            <tr>
                                <th>求人票PDF</th>
                                <td><input type="text" size="40" name="pdf" id="pdf" value="{{$sp_companys->pdf}}"></td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td><input type="text" size="40" name="address" id="address" value="{{$sp_companys->address}}"></td>
                            </tr>
                            <tr>
                                <th>会社HP</th>
                                <td><input type="text" size="40" name="company_url" id="HP" value="{{$sp_companys->company_url}}"></td>
                            </tr>
                            <tr>
                                <th>コメント</th>
                                <td><input type="text" size="40" name="comment" id="cment" value="{{$sp_companys->cment}}"></td>
                            </tr>
                    @endforeach
                </table>
                <input type="submit" class="bt" value="更新"></td>
        @endisset
        </form>
    </body>
</html>
