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
                    <input type="checkbox" name="mainprefecture[]" id="東京">東京都<br>
                    <input type="checkbox" name="mainprefecture[]" id="大阪">大阪府<br>
                    <input type="checkbox" name="mainprefecture[]" id="兵庫">兵庫県<br>
                    <input type="checkbox" name="mainprefecture[]" id="愛知">愛知県<br>
                    <input type="checkbox" name="mainprefecture[]" id="北海道">北海道<br>
                    <input type="checkbox" name="mainprefecture[]" id="神奈川">神奈川県<br>
                    <input type="checkbox" name="mainprefecture[]" id="京都">京都府<br>
                    <input type="checkbox" name="subprefecture[]" id="福岡">福岡<br>
                </td>
                <td>
                    <label>中四国</label><br>
                    <input type="checkbox" name="subprefecture[]" id="岡山">岡山県<br>
                    <input type="checkbox" name="subprefecture[]" id="広島">広島県<br>
                    <input type="checkbox" name="subprefecture[]" id="鳥取">鳥取県<br>
                    <input type="checkbox" name="subprefecture[]" id="島根">島根県<br>
                    <input type="checkbox" name="subprefecture[]" id="山口">山口県<br>
                    <input type="checkbox" name="subprefecture[]" id="徳島">徳島県<br>
                    <input type="checkbox" name="subprefecture[]" id="香川">香川県<br>
                    <input type="checkbox" name="subprefecture[]" id="愛媛">愛媛県<br>
                    <input type="checkbox" name="subprefecture[]" id="高知">高知県<br>
            </tr>
            <tr>
                <td>求人学科</td>
                <td>
                    <input type="checkbox" name="department[]" id="指定なし">指定なし<br>
                    <input type="checkbox" name="department[]" id="医療福祉">医療福祉学科<br>
                    <input type="checkbox" name="department[]" id="診療情報管理士">診療情報管理士学科<br>
                    <input type="checkbox" name="department[]" id="ホテル・ブライダル">ホテル・ブライダル学科<br>
                    <input type="checkbox" name="department[]" id="経営アシスト">経営アシスト学科<br>
                    <input type="checkbox" name="department[]" id="公務員">公務員学科<br>
                    <input type="checkbox" name="department[]" id="公務員速修">公務員速修学科<br>
                    <input type="checkbox" name="department[]" id="保育">保育学科<br>
                    <input type="checkbox" name="department[]" id="情報スペシャリスト">情報スペシャリスト学科<br>
                    <input type="checkbox" name="department[]" id="情報システム">情報システム学科<br>
                    <input type="checkbox" name="department[]" id="ゲームクリエイター">ゲームクリエイター学科<br>
                    <input type="checkbox" name="department[]" id="ゲームプログラマー">ゲームプログラマー学科<br>
                    <input type="checkbox" name="department[]" id="データマーケター">データマーケター学科<br>
                    <input type="checkbox" name="department[]" id="ネット・動画クリエイター">ネット・動画クリエイター学科<br>
                    <input type="checkbox" name="department[]" id="CGデザイン">CGデザイン学科<br>

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
