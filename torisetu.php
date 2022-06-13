//前提条件//
必ずpullでファイル更新後に作業する
git clone で作成されたファイルにcdで移動後にコマンド操作する
PCで別のブランチのデータ作業がしたい場合ブランチを移動しなければいけない

//データの更新方法//
git pull origin main
git add .
git commit -m "a"
git push origin main

作業前にローカルにリモートの内容をコピーする
git pull origin main(コピーしたいブランチ)
ローカルに更新した内容を反映すると申請
git add .（index.phpとファイルを指定するか.で全部を指定する）
ローカルに更新を確定する
git commit -m "更新する詳細やコメントを記入"
リモートにローカルのデータをコピーする
git push origin main(コピーしたいブランチcd)

//ブランチの移動//
git checkout main

ブランチの移動
git checkout main(移動したいブランチ)

//役立つコマンド//
今いるブランチの確認
git branch
データの流れの確認
git status