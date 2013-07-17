---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## task

新しいタスクを定義します。

### 説明

<pre class="php-nonumber">
task(string $name, [array $options,] callback $function)
</pre>

**task**は新しいタスクを定義します。


### パラメータ

* name

  タスク名。

* options

  タスクに関連付ける設定。

* function

  タスクの処理を実装したコールバック関数。

### 例

<pre class="php-nonumber">
// Task for web role servers.
task('task1', array('roles' => 'web'), function($host, $args){
    // your task code here.
});

// Task for web and db role servers.
task('task2', array('roles' => array('web', 'db')), function($host, $args){
    // your task code here.
});

// Task for web1.exsample.com servers.
task('task2', array('hosts' => 'web1.exsample.com'), function($host, $args){
    // your task code here.
});


// Task runs localhost (do not connect remote servers).
task('task3', function($host, $args){
    // your task code here.
});
</pre>


**host**、**desc**と合わせたタスク定義例。

<pre class="php-nonumber">
// Output message uses colors.
set('colors', true);

// Target hosts and ssh connection settings.
host('web1',  array('host' => '192.168.0.10', 'port' => '22'), 'web');
host('web2',  array('host' => '192.168.0.11', 'port' => '22'), 'web');
host('web3',  array('host' => '192.168.0.12', 'port' => '22'), 'web');

// Deployment task.
desc('Deploy application.');
task('deploy', array('roles' => 'web'), function($host, $args){

    run('git pull', array('cwd' => '/path/to/application'));

});


// You can execute above task as the following command
// $ altax deploy
</pre>



### 関連

* [host](/altax/ja/documentation/configuration/host.html) - ホストを一つまたは複数ロールに関連付けます。
* [role](/altax/ja/documentation/configuration/role.html) - ロールを一つまたは複数のホストに関連付けます。

