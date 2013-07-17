---
layout: default
title: Altax - シンプルなPHPデプロイツール
lang:  ja
url_prefix: ja/
---
## シンプルなデプロイツール

AltaxはSSHを並列実行するシンプルなデプロイツールです。以下のような特徴をもちます。

* PHPで書かれています。

* SSHコマンドのラッパーとして実装されています。

* コンパイルドパッケージを使用すれば、PHPファイル一つのみで動作します。

Altaxは[Capistrano](https://github.com/capistrano/capistrano)と[Cinamon](https://github.com/kentaro/cinnamon)に強くインスパイアされています。
しかし、それらではデプロイタスクをPHPで書くことができません。
Altaxは違います。以下のコードはAltaxのデプロイタスクのサンプルです。

<pre class="php">
// 出力メッセージに色を付ける
set('colors', true);

// 対象のホストとSSHコネクションの設定
host('web1',  array('host' => '192.168.0.10', 'port' => '22'), 'web');
host('web2',  array('host' => '192.168.0.11', 'port' => '22'), 'web');
host('web3',  array('host' => '192.168.0.12', 'port' => '22'), 'web');

// デプロイタスク
desc('Deploy application.');
task('deploy', array('roles' => 'web'), function($host, $args){

    run('git pull', array('cwd' => '/path/to/application'));

});
</pre>

より多くの情報が[ドキュメント](/altax/ja/documentation/)ページにあります。

最新の安定バージョンはv1.3.1です。

## 必要条件

PHP5.3以上。

## ライセンス

Apache License 2.0.

## Githubリポジトリ

[https://github.com/kohkimakimoto/altax](https://github.com/kohkimakimoto/altax)

## バクレポート

バグを見つけたら[Github issues](https://github.com/kohkimakimoto/altax/issues)で報告してくださいね。


