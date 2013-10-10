---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## desc

次に定義されたタスクに説明文を関連付けます。

### 説明

<pre class="php-nonumber">
desc(string $description)
</pre>

**desc**は次に定義されたタスクに説明文を関連付けます。

### パラメータ

* description

  関連付ける説明文

### 例

<pre class="php-nonumber">
desc('Deploy application.');
task('deploy', function($host, $args){

  // your code here.

});

// You can see above description altax -l command
// $ altax -l
</pre>

### 関連

* [task](/altax/ja/documentation/configuration/task.html) - Defines a new task.

