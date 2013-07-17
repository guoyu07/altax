---
layout: documentation.ja
title: ドキュメント - Altax
lang:  ja
url_prefix: ja/
---
## 設定

このページではAltaxの設定を行うために用意されている関数について説明します。
これらの関数はAltaxの設定ファイル(デフォルトはカレントディレクトリの`altax.php`です)で使用出来ます。

### 概要

以下のサンプルの設定ファイルです。

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

### リファレンス

* [host](/altax/ja/documentation/configuration/host.html) - ホストを一つまたは複数ロールに関連付けます。
* [role](/altax/ja/documentation/configuration/role.html) - ロールを一つまたは複数のホストに関連付けます。
* [task](/altax/ja/documentation/configuration/task.html) - 新しいタスクを定義します。
* [desc](/altax/ja/documentation/configuration/desc.html) - 次に定義されたタスクに説明文を関連付けます。
* [set](/altax/ja/documentation/configuration/set.html) - 変数を設定します。
* [get](/altax/ja/documentation/configuration/get.html) - 変数を取得します。
* [run](/altax/ja/documentation/configuration/run.html) - リモートの管理対象ホストでコマンドを実行します。
* [run_local](/altax/ja/documentation/configuration/run_local.html) - ローカルホストでコマンドを実行します。
* [run_task](/altax/ja/documentation/configuration/run_task.html) - タスク内からほかのタスクを実行します。


<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/installation.html">インストール</a>
  </div>
  <div class="span4 offset1" style="text-align: right;">
    <a class="next" href="/altax/ja/documentation/basic-usage.html">基本的な使用方法</a>
  </div>
</div>
