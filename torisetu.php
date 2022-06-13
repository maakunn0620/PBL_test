//前提条件//
必ずpullでファイル更新後に作業する
git clone で作成されたファイルにcdで移動後にコマンド操作する
PCで別のブランチのデータ作業がしたい場合ブランチを移動しなければいけない

//データの更新方法//
git pull origin hatamoto
git add .
git commit -m "a"
git push origin hatamoto

作業前にローカルにリモートの内容をコピーする
git pull origin hatamoto
hatamotoの部分は自分の名前のローマ字に変更する
ローカルに更新した内容を反映すると申請
git add .（index.phpとファイルを指定するか.で全部を指定する）
ローカルに更新を確定する
git commit -m "更新する詳細やコメントを記入"
リモートにローカルのデータをコピーする
git push origin hatamoto(コピーしたいブランチ)

//自分のブランチからメインのdevelopmentブランチに反映//
githabのサイトにアクセスする
Compare & pull requestで変更点を確認
base:development ← compare:hatamoto 
上記の形になっているか確認する(右は自分の名前のブランチが入る)
確認してよければpull requestからCreate pull requestを作成する
更にMerge pull requestをクリックし、Confiem mergeをクリックすることで
developmentブランチに変更点を更新できる

//ブランチの移動//
git checkout main

ブランチの移動
git checkout main(移動したいブランチ)

//役立つコマンド//
今いるブランチの確認
git branch
データの流れの確認
git status