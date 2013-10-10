---
layout: documentation
title: Documentation - Altax
lang:  en
---

## Installation

There are several ways to install Altax to your system.

### Installing compiled package to current working direcotry

The compiled package is a single executable PHP file generated from all Altax src files.

If you want to install Altax to your current working directory, you should run below command.

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s
</pre>

You will get executable `altax` command file in your current working directory.

### Installing compiled package to system wide

If you want to install Altax to system wide, you should run below command under the root user.

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s system
</pre>

You will get executable `altax` command file in `/usr/local/bin`.

### Installing composer package

[Composer](http://getcomposer.org/) is a famous dependency management tool for PHP.
If you want to use composer to manage packages, you can use composer installation.
Make `composer.json` file like the following.

<pre class="sh">
{
    "require": {
        "kohkimakimoto/altax": "~1.3.0"
    }
}
</pre>

And run Composer install command.

<pre class="sh-nonumber">
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
</pre>




<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/documentation/getting-started.html">Getting started</a>
  </div>
  <div class="span4 offset1" style="text-align: right;">
    <a class="next" href="/altax/documentation/configuration.html">Configuration</a>
  </div>
</div>

