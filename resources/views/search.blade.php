<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>求人検索</title>
    <link href="../resources/css/search.css" rel="stylesheet">
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded',function(){
            //2回目以降のプルダウンを全て非表示
            var sub=document.getElementsByClassName("subbox");
            for(var i=0; i<sub.length; i++){
                sub[i].style.display='none';
            }
            //全てのプルダウンメニューセットごとに処理
            var main=document.getElementsByClassName('pulldownset');
            for(var i=0; i<main.length; i++){
                var mainSelect=main[i].getElementsByClassName("main");
                mainSelect[0].onchange=function(){
                    //同じ親要素に含まれているすべての2階層目(サブ)要素を消す
                    var sub=this.parentNode.getElementsByClassName("subbox");
                    for(var j=0; j<sub.length; j++){
                        sub[j].style.display='none';
                    }

                    //指定された2階層目要素だけを表示する
                    if(this.value){
                        var target=document.getElementById(this.value);
                        target.style.display='inline';
                        target.setAttribute("name", "area_no")
                    }
                }
            }
        });
    </script>
</head>

<body>
@if (session('flash_message'))
    <div class="flash_message">
        <script type="text/javascript"> alert("お探しの求人は見つかりませんでした。\n他の検索条件を試してみてください。"); </script>
    </div>
@endif
<img src="../resources/imgs/求人票検索.png" alt="求人票検索" class="kyu-jin">
{{--<span class="pulldownset">--}}
<form method="POST" action="search">
    @csrf
        <span class="pulldownset">
            <div class="search gyo-kai">学科</div>
                <select name="industry">
                    <option value="null">指定なし</option>
                    <option value="1">医療福祉</option>
                    <option value="2">診療情報管理士</option>
                    <option value="3">ホテル・ブライダル</option>
                    <option value="4">経営アシスト</option>
                    <option value="5">公務員</option>
                    <option value="6">公務員速修</option>
                    <option value="7">保育</option>
                    <option value="8">情報スペシャリスト</option>
                    <option value="9">情報システム</option>
                    <option value="10">ゲームクリエイター</option>
                    <option value="11">ゲームプログラマー</option>
                    <option value="12">データマーケター</option>
                    <option value="13">ネット・動画クリエイター</option>
                    <option value="14">CGデザイン</option>
                </select>
            </div>

            <div class="search job">職種</div>
            <input type="text" name="jobtype">

            <!--勤務地のプルダウンメニュー-->
            <div class="search area">勤務地</div>
            <select class="main">
                <option value="null">なし</option>
                <option value="1">北海道</option>
                <option value="2">東北</option>
                <option value="3">関東</option>
                <option value="4">中部</option>
                <option value="5">近畿</option>
                <option value="6">中国・四国</option>
                <option value="7">九州</option>
            </select>
            <!--北海道地方-->
            <select id="1" class="subbox">
                <option value="">■北海道</option>
                <option value="1">北海道</option>
            </select>

            <!--東北地方-->
            <select id="2" class="subbox">
                <option value="">■東北地方</option>
                <option value="2">青森県</option>
                <option value="3">岩手県</option>
                <option value="4">宮城県</option>
                <option value="5">秋田県</option>
                <option value="6">山形県</option>
                <option value="7">福島県</option>
            </select>

            <!--関東地方-->
            <select id="3" class="subbox">
                <option value="">■関東地方</option>
                <option value="9">茨木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
            </select>

            <!--中部地方-->
            <select id="4" class="subbox">
                <option value="">■中部地方</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
            </select>

            <!--近畿地方-->
            <select id="5" class="subbox">
                <option value="">■近畿地方</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
            </select>

            <!--中国・四国地方-->
            <select id="6" class="subbox">
                <option value="">■中国・四国地方</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
            </select>

            <!--九州地方-->
            <select id="7" class="subbox" >
                <option value="">■九州地方</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
            </select>
        </span>
    <!-- <p> special thakns Takumi Yokoyama</p> -->
    <div>
        <br>
    <input type="submit" value="検索">
    </div>
</form>
</body>
<a href="./top">
    <p class="back">←TOPへ戻る</p>
</a>

</html>
