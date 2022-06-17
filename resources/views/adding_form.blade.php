<html>
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
    </head>
    <body>
    <form method="POST" action="add">
        @csrf
        <table>
            <tr>
              <td>採番</td>
              <td><input type="text" name="job_no" id="no"></td>
            </tr>
            <tr>
              <td>会社名</td>
              <td><input type="text" name="company" id="company_name"></td>
            </tr>
            <tr>
                <td>職種</td>
                <td><input type="text" name="jobs" id="jobtype"></td>
            </tr>
            <tr>
                <td>都道府県</td>
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
            </tr>
            <tr>
                <td>求人学科</td>
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
                <td>求人票PDF</td>
                <td><input type="text" name="pdf" id="pdf"></td>
            </tr>
            <tr>
                <td>所在地</td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <td>会社HP</td>
                <td><input type="text" name="company_url" id="HP"></td>
            </tr>
            <tr>
                <td>コメント</td>
                <td><input type="text" name="comment" id="cment"></td>
            </tr>
          </table>
          <input type="submit" value="追加">
    </form>
    </body>
</html>