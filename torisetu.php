//前提条件//
必ずファイル更新後にコマンド作業する
git clone で作成されたファイルにターミナルでcd

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
git push origin main(コピーしたいブランチ)