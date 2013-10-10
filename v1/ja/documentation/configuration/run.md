---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## run

リモートの管理対象ホストでコマンドを実行します。

### 説明

<pre class="php-nonumber">
run(string $command, array $options)
</pre>

**run**はリモートの管理対象ホストでコマンドを実行します。

### パラメータ

* command

  実行するコマンド

* options

  コマンドの振る舞いを変えるためのオプションです。
  `user`はコマンドの実行ユーザを変更します。
  `cwd`はコマンド実行時のカレントディレクトリを変更します。
  以下の例を参考にしてください。

### 例

<pre class="php-nonumber">
// Run git pull in the '/path/to/application'
run('git pull', array('cwd' => '/path/to/application'));

// Restart httpd. 'user' option changes user to run command. You need to setup sudo configuration on altax ssh connection user.
run('/etc/init.d/httpd restart', array('user' => 'root'));

</pre>

### 関連

* [task](/altax/ja/documentation/configuration/task.html) - 新しいタスクを定義します。


