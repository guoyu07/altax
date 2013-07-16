---
layout: default
title: 設定 - Altax
lang:  ja
url_prefix: ja/
---
## host

Associates a host with multiple roles.

### Description

<pre class="php-nonumber">
host(string $host, [array $options,] mixed $roles)
</pre>

**host** associates a host with multiple roles.
And configure specified host settings.
For instance SSH connection settings.


### Parameters

* host

  Host name.

* options

  Associated settings to the host.

* roles

  Associated roles.

### Examples

<pre class="php-nonumber">
// Define server "web1.exsample.com" and associates with "web" role.
host('web1.exsample.com', 'web');
// Define server "192.168.0.11" and associates with "web" and "dev" role.
host('192.168.0.11', array('web', 'dev'));
// Define server "web2.exsample.com" and associates with "web" role. options are ssh connection settings.
host('web2.exsample.com', array('host' => '192.168.0.12', 'port' => '22', 'login_name' => 'userhoge', 'identity_file' => '/home/userhoge/.ssh/id_rsa'), 'web');
</pre>

### See Also

* [role](/altax/ja/documentation/configuration/role.html) - Associates a role with multiple hosts.

