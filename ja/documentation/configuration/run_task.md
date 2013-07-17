---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## run_task

タスク内からほかのタスクを実行します。

### 説明

<pre class="php-nonumber">
run_task(string name, [array $arguments])
</pre>

**run_task**はタスク内からほかのタスクを実行します。

### パラメータ

* name

  実行するタスク名。

* arguments

  呼び出しタスクに渡す引数。


### 例

<pre class="php-nonumber">

task('task1', array('roles' => 'web'), function($host, $args){
  // task code ...

});


task('task2', array('roles' => 'web'), function($host, $args){
  // task code ...

  run_task("task1");
});



</pre>

### 関連

* [task](/altax/ja/documentation/configuration/task.html) - 新しいタスクを定義します。
* [run](/altax/ja/documentation/configuration/run.html) - リモートの管理対象ホストでコマンドを実行します。

