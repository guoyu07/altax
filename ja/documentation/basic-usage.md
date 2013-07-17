---
layout: documentation.ja
title: ドキュメント - Altax
lang:  ja
url_prefix: ja/
---
## 基本的な使用方法

Altaxは`altax`コマンドをシステムにインストールします。
このコマンドはいくつかのコマンドラインオプションを持っています。

### シンタックス

<pre class="sh-nonumber">
altax [-d|-h|-f|-l|-c] TASK [ARGS..]
</pre>


### コマンドラインオプション

#### -d

ログをデバッグレベルで出力するデバッグモードに切り替えます。

例:

<pre class="sh-nonumber">
$ altax -d init
</pre>

#### -l

利用可能なタスクを表示します。

例:

<pre class="sh-nonumber">
$ altax -l
</pre>

#### -h

利用可能なコマンドラインオプションを表示します。

例:

<pre class="sh-nonumber">
$ altax -h
</pre>


#### -f=FILE

読み込む設定ファイルを指定します。

例:

<pre class="sh-nonumber">
$ altax -f=/path/to/altax.php
</pre>


#### -c

設定内容を表示します。

例:

<pre class="sh-nonumber">
$ altax -c
</pre>

### タスクの実行

定義されたタスクは以下のコマンドで実行出来ます。

<pre class="sh-nonumber">
$ altax sometask
</pre>

以下は組み込みのinitタスクです。このタスクは初期の設定ファイルを生成します。

<pre class="sh-nonumber">
$ altax init
</pre>

タスク実行中にもし問題にあたったら、-dオプションをつけてデバッグレベルのメッセージを表示して、問題解決に役立てることができます。

<pre class="sh-nonumber">
$ altax -d sometask
</pre>

タスクにはコマンドライン引数を渡すことができます。

<pre class="sh-nonumber">
$ altax sometask foo bar
</pre>

この引数は以下のようなPHPコードで使用出来ます。

<pre class="php">
task('sometask', array('roles' => 'web'), function($host, $args){
    // args[0] => "foo"
    // args[1] => "bar"
});
</pre>


<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/configuration.html">設定</a>
  </div>
</div>
