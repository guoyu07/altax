---
layout: documentation.ja
title: ドキュメント - Altax
lang:  ja
url_prefix: ja/
---
## はじめに

Altaxを初めて使うひと向けのチュートリアルです。

### インストール

以下のコマンドをルートユーザで実行してください。

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s system
</pre>

`altax`コマンドファイルが/usr/local/bin/にインストールされます。

### 設定

最初に、設定ファイル`altax.php`を作成します。以下のコマンドで`altax.php`が生成されます。

<pre class="sh-nonumber">
$ altax init
</pre>

生成された`altax.php`ファイルを以下のように編集してください。
管理対象のホストとタスクを定義する必要があります。
すべての管理対象のホストはSSHの公開鍵認証、パスワードなしで接続できるようになっていなければなりません。

<pre class="php">
role('web', '192.168.0.11');

desc('This is a sample task.');
task('sample',array('roles' => 'web'), function($host, $args){

    run('echo Hellow World!');

});
</pre>

以下のコマンドで利用できるタスクを表示できます。

<pre class="sh-nonumber">
$ altax -l
# 以下のようなメッセージが表示されます。
Available tasks :
  sample  : This is a sample task.
  init    : Create default configuration file (altax.php).
</pre>

### タスクの実行

以下のコマンドを実行してください。

<pre class="sh-nonumber">
$ altax sample
# 以下のようなメッセージが表示されます。
[2013-02-28T08:46:58+09:00] *** Altax version 1.0.0 ***
[2013-02-28T08:46:58+09:00] Starting task: [sample]
Connection to 192.168.0.11 closed.
Hellow World!
</pre>



<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/">ドキュメント</a>
  </div>
  <div class="span4 offset1" style="text-align: right;">
    <a class="next" href="/altax/ja/documentation/installation.html">インストール</a>
  </div>
</div>


