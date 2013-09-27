---
layout: default
title: Altax - A simple deployment tool for PHP
lang:  en
---
## A simple deployment tool

**This document is for version 1. Do you use Altax version 2? Sorry, I haven't written its document yet.**

Altax is a simple deployment tool running SSH in parallel. The features are the following.

* Written in PHP.

* Implemented as SSH command wrapper.

* If you use compiled package. It runs in single PHP file.

Altax is strongly inspired by [Capistrano](https://github.com/capistrano/capistrano) and [Cinamon](https://github.com/kentaro/cinnamon).
But these don't allow you to write a deployment task in PHP.
Altax is different. The following code is example to declare deployment task for Altax.

<pre class="php">
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
</pre>

There is more information in the [documentation](/altax/documentation/) page.

Latest stable version v1.3.1

## Requrement

PHP5.3 or later.

## License

Altax is licesed Apache License 2.0.

## Github Repository

[https://github.com/kohkimakimoto/altax](https://github.com/kohkimakimoto/altax)

## Bug Reports
If you find a bug, Please report it by [Github issues](https://github.com/kohkimakimoto/altax/issues).

