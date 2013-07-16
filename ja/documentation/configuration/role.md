---
layout: default
title: 設定 - Altax
lang:  ja
url_prefix: ja/
---
## role

Associates a role with multiple hosts.

### Description

<pre class="php-nonumber">
role(string $role, mixed $hosts)
</pre>

**role** associates a role with multiple hosts.

### Parameters

* role

  Role name for classifing multiple hosts.

* hosts

  Associated hosts.

### Examples

<pre class="php-nonumber">
role('web', array('web1.exsample.com','web2.exsample.com','web3.exsample.com'));
role('db', 'db1.exsample.com');
</pre>

### See Also

* [host](/altax/ja/documentation/configuration/host.html) - Associates a host with multiple roles.

