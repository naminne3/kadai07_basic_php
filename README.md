# ①課題番号-プロダクト名

旅行記録アプリ

## ②課題内容（どんな作品か）

- 旅行の記録をつけると表に一覧が残り、地図に色が塗られる
- 以前、日本地図の色塗りをクイズでやったので、今度はフォームから色を塗ることにしました
- csvの書き込みと読み込みを行いました

## ③DEMO

https://lifecareerdesign.sakura.ne.jp/kadai07_basic_php/index.php

## ④作ったアプリケーション用のIDまたはPasswordがある場合

- ID: なし
- PW: なし

## ⑤工夫した点・こだわった点

-  今回もsvgファイルに挑戦しました。idをSVGファイルに追加し、フルダウンの都道府県名と合致するようにしました。
-  csvに書き出したデータをインデックスの方で表として表示させることができました。


## ⑥難しかった点・次回トライしたいこと(又は機能)

- 今回ローカルで問題なく動いていたものがサーバーにあげた途端、使えなくなってしまいました。
include からGet contactsに変更したらうまくいきました。
ローカルで完成してから、サーバーにデプロイするまでで、30%位の時間を使ってしまったので
どこで時間を取られるかわからないなぁと思いました。
今回は編集削除ボタンを置いただけなので、次回実装させたいです。


## ⑦質問・疑問・感想、シェアしたいこと等なんでも

- [質問]
  今回、Macの権限設定でCSVへの書き込みができなくて、そこの解明に多くの時間を費やしてしまったので、シェアします。

- [感想]
  PHPの言語自体はシンプルでわかりやすそうだなぁと思いました。

- [参考記事]
  - 1. [https://aistudio.google.com/app/prompts/new_chat]
  gemini 1.5 pro experimental 0827
