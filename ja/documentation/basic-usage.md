---
layout: default
title: Documentation - Altax
lang:  ja
url_prefix: ja/
---
## Basic usage

Altax makes `altax` command to your system.
You can use this command with some command line options.

### syntax

<pre class="sh-nonumber">
altax [-d|-h|-f|-l|-c] TASK [ARGS..]
</pre>


### Command line Options

#### -d

Switch the debug mode to output log on the debug level.

Exsample:

<pre class="sh-nonumber">
$ altax -d init
</pre>

#### -l

List available tasks.

Exsample:

<pre class="sh-nonumber">
$ altax -l
</pre>

#### -h

List available command line options.

Exsample:

<pre class="sh-nonumber">
$ altax -h
</pre>


#### -f=FILE

Specify to load configuration file.

Exsample:

<pre class="sh-nonumber">
$ altax -f=/path/to/altax.php
</pre>


#### -c

List configurations.

Exsample:

<pre class="sh-nonumber">
$ altax -c
</pre>

### Running Task

You run a defined task below command

<pre class="sh-nonumber">
$ altax sometask
</pre>

The following is built-in init task to create initial configuration file.

<pre class="sh-nonumber">
$ altax init
</pre>

If you have a problem, you can use -d option to get debug level messages.

<pre class="sh-nonumber">
$ altax -d sometask
</pre>

You can use command line arguments passed to your task.

<pre class="sh-nonumber">
$ altax sometask foo bar
</pre>

You can use arguments as below PHP code.
<pre class="php">
task('sometask', array('roles' => 'web'), function($host, $args){
    // args[0] => "foo"
    // args[1] => "bar"
});
</pre>



<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/ja/documentation/configuration.html">Configuration</a>
  </div>
</div>
