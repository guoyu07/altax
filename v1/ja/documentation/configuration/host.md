---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## host

ホストを一つまたは複数ロールに関連付けます。

### 説明

<pre class="php-nonumber">
host(string $host, [array $options,] mixed $roles)
</pre>

**host**はホストを一つまたは複数ロールに関連付けます。
またホスト固有の設定を行います。例えばSSHの接続設定などです。

### パラメータ

* host

  ホスト名

* options

  ホストに関連付ける設定

* roles

  ホストに関連付けるロール

### 例

<pre class="php-nonumber">
// Define server "web1.exsample.com" and associates with "web" role.
host('web1.exsample.com', 'web');
// Define server "192.168.0.11" and associates with "web" and "dev" role.
host('192.168.0.11', array('web', 'dev'));
// Define server "web2.exsample.com" and associates with "web" role. options are ssh connection settings.
host('web2.exsample.com', array('host' => '192.168.0.12', 'port' => '22', 'login_name' => 'userhoge', 'identity_file' => '/home/userhoge/.ssh/id_rsa'), 'web');
</pre>

### 関連

* [role](/altax/ja/documentation/configuration/role.html) - ロールを一つまたは複数のホストに関連付けます。

