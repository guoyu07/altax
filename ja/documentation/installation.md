---
layout: default
title: ドキュメント - Altax
lang:  ja
url_prefix: ja/
---

## インストール

Altaxのインストール方法はいくつかあります。

### コンパイルドパッケージをカレントディレクトリにインストールする

コンパイルドパッケージとは実行可能な単一のPHPファイルです。これはAltaxのすべてのソースファイルを結合して作られています。

Altaxをカレントディレクトリにインストールする場合は以下のコマンドを実行します。

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s
</pre>

これで、実行権限のついた`altax`ファイルがカレントディレクトリにインストールされます。


### コンパイルドパッケージをシステムワイドにインストールする

Altaxをシステムワイドにインストールする場合は以下のコマンドをルートユーザで実行します。

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s system
</pre>

これで、実行権限のついた`altax`ファイルが`/usr/local/bin`にインストールされます。

### Composerパッケージとしてインストールする

[Composer](http://getcomposer.org/)はPHPの有名な依存関係の管理ツールです。
AltaxをComposerのパッケージとして管理したい場合は、Composerによるインストールが利用できます。
以下のような`composer.json`を作成してください。

<pre class="sh">
{
    "require": {
        "kohkimakimoto/altax": "~1.3.0"
    }
}
</pre>

そして、Composerのインストールコマンドを実行します。

<pre class="sh-nonumber">
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
</pre>


<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/getting-started.html">はじめに</a>
  </div>
  <div class="span4 offset4" style="text-align: right;">
    <a class="next" href="/altax/ja/documentation/configuration.html">設定</a>
  </div>
</div>

