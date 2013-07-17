---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## role

ロールを一つまたは複数のホストに関連付けます。

### 説明

<pre class="php-nonumber">
role(string $role, mixed $hosts)
</pre>

**role**はロールを一つまたは複数のホストに関連付けます。

### パラメータ

* role

  ホストを分類するロール名。

* hosts

  関連付けるホスト。

### 例

<pre class="php-nonumber">
role('web', array('web1.exsample.com','web2.exsample.com','web3.exsample.com'));
role('db', 'db1.exsample.com');
</pre>

### 関連

* [host](/altax/ja/documentation/configuration/host.html) - ホストを一つまたは複数ロールに関連付けます。

