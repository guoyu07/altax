---
layout: default
title: Documentation - Altax
lang:  ja
url_prefix: ja/
---
## Getting started

This page provides a tutorial to use Altax at first.

### Installation

Run the following command under the root user.

<pre class="sh-nonumber">
$ curl https://raw.github.com/kohkimakimoto/altax/master/installer.sh | bash -s system
</pre>

You will get `altax` command in your /usr/local/bin/

### Configurations

At first time, you need to create a configuration file `altax.php`. Run the following command to generate `altax.php` file.

<pre class="sh-nonumber">
$ altax init
</pre>

Modify generated `altax.php` file.
You need to define managed hosts and tasks.
All managed hosts must be able to be accessed by SSH on publick key authentication without password.

<pre class="php">
role('web', '192.168.0.11');

desc('This is a sample task.');
task('sample',array('roles' => 'web'), function($host, $args){

    run('echo Hellow World!');

});
</pre>

Run below command to show available tasks list

<pre class="sh-nonumber">
$ altax -l
# You will get below message.
Available tasks :
  sample  : This is a sample task.
  init    : Create default configuration file (altax.php).
</pre>

### Running Task

Execute below command.

<pre class="sh-nonumber">
$ altax sample
# You will get below message.
[2013-02-28T08:46:58+09:00] *** Altax version 1.0.0 ***
[2013-02-28T08:46:58+09:00] Starting task: [sample]
Connection to 192.168.0.11 closed.
Hellow World!
</pre>



<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/">Documentation</a>
  </div>
  <div class="span4 offset4" style="text-align: right;">
    <a class="next" href="/altax/ja/documentation/installation.html">Installation</a>
  </div>
</div>


