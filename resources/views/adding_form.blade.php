<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/nakashima.css') }}">
        <meta charset="utf-8">
        <title>新規登録</title>
    </head>
    <body>
        <p class="index">新規企業情報入力</p>
        <form method="POST" action="add">
        @csrf
        <table class="form" width="1000px">
            <div class="warning_alert">
                @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <tr>
              <th width="300" class="required">採番</th>
              @foreach ($getno as $get_no)
              <td><input type="text" name="job_no" id="no" value="{{$get_no->job_no}}"></td>
              @endforeach
            </tr>
            <tr>
              <th class="required">会社名</th>
              <td><input type="text" name="company" size="40" id="company_name"></td>
            </tr>
            <tr>
                <th class="required">職種</th>
                <td><input type="text" name="jobs" size="40" id="jobtype"></td>
            </tr>
            <tr>
                <th rowspan="2" class="required">都道府県</th>
                <td>
                    <table class="pre">
                        <td>
                            <label>主要都道府県</label><br>
                            <input type="checkbox" name="prefecture[]" id="東京" value="13">東京都<br>
                            <input type="checkbox" name="prefecture[]" id="大阪" value="27">大阪府<br>
                            <input type="checkbox" name="prefecture[]" id="兵庫" value="28">兵庫県<br>
                            <input type="checkbox" name="prefecture[]" id="愛知" value="23">愛知県<br>
                            <input type="checkbox" name="prefecture[]" id="北海道" value="1">北海道<br>
                            <input type="checkbox" name="prefecture[]" id="神奈川" value="14">神奈川県<br>
                            <input type="checkbox" name="prefecture[]" id="京都" value="26">京都府<br>
                            <input type="checkbox" name="prefecture[]" id="福岡" value="40">福岡<br>
                        </td>
                        <td>
                            <label>中四国</label><br>
                            <input type="checkbox" name="prefecture[]" id="岡山" value="33">岡山県<br>
                            <input type="checkbox" name="prefecture[]" id="広島" value="34">広島県<br>
                            <input type="checkbox" name="prefecture[]" id="鳥取" value="31">鳥取県<br>
                            <input type="checkbox" name="prefecture[]" id="島根" value="32">島根県<br>
                            <input type="checkbox" name="prefecture[]" id="山口" value="35">山口県<br>
                            <input type="checkbox" name="prefecture[]" id="徳島" value="36">徳島県<br>
                            <input type="checkbox" name="prefecture[]" id="香川" value="37">香川県<br>
                            <input type="checkbox" name="prefecture[]" id="愛媛" value="38">愛媛県<br>
                            <input type="checkbox" name="prefecture[]" id="高知" value="39">高知県<br>
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
                                        <input type="checkbox" name="prefecture[]" id="青森" value="2">青森県<br>
                                        <input type="checkbox" name="prefecture[]" id="岩手" value="3">岩手県<br>
                                        <input type="checkbox" name="prefecture[]" id="宮城" value="4">宮城県<br>
                                        <input type="checkbox" name="prefecture[]" id="秋田" value="5">秋田県<br>
                                        <input type="checkbox" name="prefecture[]" id="山形" value="6">山形県<br>
                                        <input type="checkbox" name="prefecture[]" id="福島" value="7">福島県<br>
                                        <label>関東</label><br>
                                        <input type="checkbox" name="prefecture[]" id="茨城" value="8">茨城県<br>
                                        <input type="checkbox" name="prefecture[]" id="栃木" value="9">栃木県<br>
                                        <input type="checkbox" name="prefecture[]" id="群馬" value="10">群馬県<br>
                                        <input type="checkbox" name="prefecture[]" id="埼玉" value="11">埼玉県<br>
                                        <input type="checkbox" name="prefecture[]" id="千葉" value="12">千葉県<br>
                                        <label>中部</label><br>
                                        <input type="checkbox" name="prefecture[]" id="新潟" value="15">新潟県<br>
                                        <input type="checkbox" name="prefecture[]" id="富山" value="16">富山県<br>
                                        <input type="checkbox" name="prefecture[]" id="石川" value="17">石川県<br>
                                        <input type="checkbox" name="prefecture[]" id="福井" value="18">福井県<br>
                                        <input type="checkbox" name="prefecture[]" id="山梨" value="19">山梨県<br>
                                        <input type="checkbox" name="prefecture[]" id="長野" value="20">長野県<br>
                                        <input type="checkbox" name="prefecture[]" id="岐阜" value="21">岐阜県<br>
                                        <input type="checkbox" name="prefecture[]" id="静岡" value="22">静岡県<br>
                                    </td>
                                    <td>
                                        <label>近畿</label><br>
                                        <input type="checkbox" name="prefecture[]" id="三重" value="24">三重県<br>
                                        <input type="checkbox" name="prefecture[]" id="滋賀" value="25">滋賀県<br>
                                        <input type="checkbox" name="prefecture[]" id="奈良" value="29">奈良県<br>
                                        <input type="checkbox" name="prefecture[]" id="和歌山" value="30">和歌山県<br>
                                        <label>九州</label><br>
                                        <input type="checkbox" name="prefecture[]" id="佐賀" value="41">佐賀県<br>
                                        <input type="checkbox" name="prefecture[]" id="長崎" value="42">長崎県<br>
                                        <input type="checkbox" name="prefecture[]" id="熊本" value="43">熊本県<br>
                                        <input type="checkbox" name="prefecture[]" id="大分" value="44">大分県<br>
                                        <input type="checkbox" name="prefecture[]" id="宮崎" value="45">宮崎県<br>
                                        <input type="checkbox" name="prefecture[]" id="鹿児島" value="46">鹿児島県<br>
                                        <input type="checkbox" name="prefecture[]" id="沖縄" value="47">沖縄県<br>
                                    </td>

                                </tr>
                            </table>
                        </div>
                        </td>
            </tr>
                <tr>
                    <th class="required">求人学科</th>
                    <td>
                        <input type="checkbox" name="department[]" id="指定なし" value="15">指定なし<br>
                        <input type="checkbox" name="department[]" id="医療福祉" value="1">医療福祉学科<br>
                        <input type="checkbox" name="department[]" id="診療情報管理士" value="2">診療情報管理士学科<br>
                        <input type="checkbox" name="department[]" id="ホテル・ブライダル" value="3">ホテル・ブライダル学科<br>
                        <input type="checkbox" name="department[]" id="経営アシスト" value="4">経営アシスト学科<br>
                        <input type="checkbox" name="department[]" id="公務員" value="5">公務員学科<br>
                        <input type="checkbox" name="department[]" id="公務員速修" value="6">公務員速修学科<br>
                        <input type="checkbox" name="department[]" id="保育" value="7">保育学科<br>
                        <input type="checkbox" name="department[]" id="情報スペシャリスト" value="8">情報スペシャリスト学科<br>
                        <input type="checkbox" name="department[]" id="情報システム" value="9">情報システム学科<br>
                        <input type="checkbox" name="department[]" id="ゲームクリエイター" value="10">ゲームクリエイター学科<br>
                        <input type="checkbox" name="department[]" id="ゲームプログラマー" value="11">ゲームプログラマー学科<br>
                        <input type="checkbox" name="department[]" id="データマーケター" value="12">データマーケター学科<br>
                        <input type="checkbox" name="department[]" id="ネット・動画クリエイター" value="13">ネット・動画クリエイター学科<br>
                        <input type="checkbox" name="department[]" id="CGデザイン" value="14">CGデザイン学科<br>
                    </td>
                </tr>
            <tr>
                <th class="required">求人票PDF</th>
                <td><input type="text" size="40" name="pdf" id="pdf"></td>
            </tr>
            <tr>
                <th class="required">本社所在地</th>
                <td><input type="text" size="40" name="address" id="address"></td>
            </tr>
            <tr>
                <th>会社HP</th>
                <td><input type="text" size="40" name="company_url" id="HP"></td>
            </tr>
            <tr>
                <th>コメント</th>
                <td><input type="text" size="40" name="comment" id="cment"></td>
            </tr>
          </table>
          <input type="submit" class="bt" value="追加"></td>
          <button type="button" class="bt" onclick="location.href='./manegement_top'">管理者画面へ</button>
    </form>
    </body>
</html>
