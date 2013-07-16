---
layout: documentation
title: Configuration - Altax
lang:  en
---
## run

Executes commands on remote managed server.

### Description

<pre class="php-nonumber">
run(string $command, array $options)
</pre>

**run** executes commands on remote managed server.

### Parameters

* command

  Executing command

* options

  Options to change command behavior.
  `user` is used to change user executing command.
  `cwd` is used to change current working directory when the command execute.
  See examples.




### Examples

<pre class="php-nonumber">
// Run git pull in the '/path/to/application'
run('git pull', array('cwd' => '/path/to/application'));

// Restart httpd. 'user' option changes user to run command. You need to setup sudo configuration on altax ssh connection user.
run('/etc/init.d/httpd restart', array('user' => 'root'));

</pre>

### See Also

* [task](/altax/documentation/configuration/task.html) - Defines a new task.

