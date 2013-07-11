---
layout: default
title: Documentation - Altax
---

## Installation

There are two ways to install Altax to your system.

### Installing compiled package

The compiled package is a single executable PHP file generated from all Altax src files.

Just run the following command under the root user.
Executable `altax` command file is put in the `/usr/local/bin`

<pre class="sh">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | sh
</pre>

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

<pre class="sh">
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
</pre>




<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/documentation/getting-started.html">Getting started</a>
  </div>
  <div class="span4 offset4" style="text-align: right;">
    <a class="next" href="/altax/documentation/configuration.html">Configuration</a>
  </div>
</div>

