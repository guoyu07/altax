---
layout: documentation.ja
title: Configuration - Altax
lang:  ja
url_prefix: ja/
---
## run_task

Runs other task in the task method.

### Description

<pre class="php-nonumber">
run_task(string name, [array $arguments])
</pre>

**run_task** runs other task in the task method.

### Parameters

* name

  Executing task name

* arguments

  Arguments passed to the task.


### Examples

<pre class="php-nonumber">

task('task1', array('roles' => 'web'), function($host, $args){
  // task code ...

});


task('task2', array('roles' => 'web'), function($host, $args){
  // task code ...

  run_task("task1");
});



</pre>

### See Also

* [task](/altax/ja/documentation/configuration/task.html) - Defines a new task.
* [run](/altax/ja/documentation/configuration/run.html) - Executes commands on local server.

