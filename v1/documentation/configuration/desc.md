---
layout: documentation
title: Configuration - Altax
lang:  en
---
## desc

Associates a description with the next task that gets defined.

### Description

<pre class="php-nonumber">
desc(string $description)
</pre>

**desc** associates a description with the next task that gets defined.

### Parameters

* description

  Associates a description

### Examples

<pre class="php-nonumber">
desc('Deploy application.');
task('deploy', function($host, $args){

  // your code here.

});

// You can see above description altax -l command
// $ altax -l
</pre>

### See Also

* [task](/altax/documentation/configuration/task.html) - Defines a new task.

