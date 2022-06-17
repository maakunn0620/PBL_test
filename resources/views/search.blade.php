<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>求人検索Search</title>
    <div style="text-align: right">
        <img src="csr.jpeg" width="100%" height="350px">
    </div>
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
                }
            }
        }
    });
    </script>
</head>

<body>
    <div class="pulldownset" style="margin-left: 400px;">
        <form style="margin: 10px" method="post">
            <div style="float: left">業界</div>
            <div style="float: left">
                <select name="industry">
                    <option value="null1">-</option>
                    <option value="medical">医療福祉</option>
                    <option value="mti">診療情報管理士</option>
                    <option value="hotel">ホテル・ブライダル</option>
                    <option value="mana">経営アシスト</option>
                    <option value="civil">公務員</option>
                    <option value="civil-q">公務員速修</option>
                    <option value="child">保育</option>
                    <option value="jsp">情報スペシャリスト</option>
                    <option value="jc">情報システム</option>
                    <option value="create">ゲームクリエイター</option>
                    <option value="program">ゲームプログラマー</option>
                    <option value="data">データマーケター</option>
                    <option value="net">ネット・動画クリエイター</option>
                    <option value="cg">CGデザイン</option>
                </select>
            </div>

            <!--勤務地のプルダウンメニュー-->
            <div style="float:left">勤務地</div>
            <select class="main">
                <option value="local">地方</option>
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
                <option value="hk">北海道</option>
            </select>

            <!--東北地方-->
            <select id="2" class="subbox">
                <option value="">■東北地方</option>
                <option value="am">青森県</option>
                <option value="it">岩手県</option>
                <option value="at">秋田県</option>
                <option value="mg">宮城県</option>
                <option value="yg">山形県</option>
                <option value="fs">福島県</option>
            </select>

            <!--関東地方-->
            <select id="3" class="subbox">
                <option value="">■関東地方</option>
                <option value="ib">茨木県</option>
                <option value="gm">群馬県</option>
                <option value="st">埼玉県</option>
                <option value="tb">千葉県</option>
                <option value="tk">東京都</option>
                <option value="kg">神奈川県</option>
            </select>

            <!--中部地方-->
            <select id="4" class="subbox">
                <option value="">■中部地方</option>
                <option value="ng">新潟県</option>
                <option value="tm">富山県</option>
                <option value="ik">石川県</option>
                <option value="hk">福井県</option>
                <option value="ym">山梨県</option>
                <option value="no">長野県</option>
                <option value="gf">岐阜県</option>
                <option value="so">静岡県</option>
                <option value="ai">愛知県</option>
            </select>

            <!--近畿地方-->
            <select id="5" class="subbox">
                <option value="">■近畿地方</option>
                <option value="me">三重県</option>
                <option value="sg">滋賀県</option>
                <option value="wy">和歌山県</option>
                <option value="kt">京都府</option>
                <option value="os">大阪府</option>
                <option value="hg">兵庫県</option>
            </select>

            <!--中国・四国地方-->
            <select id="6" class="subbox">
                <option value="">■中国・四国地方</option>
                <option value="oy">岡山県</option>
                <option value="hs">広島県</option>
                <option value="tt">鳥取県</option>
                <option value="yt">山口県</option>
                <option value="kw">香川県</option>
                <option value="tk">徳島県</option>
                <option value="eh">愛媛県</option>
                <option value="kt">高知県</option>
            </select>

            <!--九州地方-->
            <select id="7" class="subbox">
                <option value="">■九州地方</option>
                <option value="fo">福岡県</option>
                <option value="sg">佐賀県</option>
                <option value="ns">長崎県</option>
                <option value="oi">大分県</option>
                <option value="km">熊本県</option>
                <option value="mz">宮崎県</option>
                <option value="ks">鹿児島県</option>
                <option value="on">沖縄県</option>
            </select>

            <div style="margin-top: 2px;">
                <br style="clear: both">
                <div style="float:left">職種</div>
                <div style="float:left">
                    <input type="text" name="jobtype">
                </div>
            </div>
    </div>

    <div style="margin-left: 1000px;">
        <button type="submit">検索</button>
    </div>

</form>

</body>

</html>
