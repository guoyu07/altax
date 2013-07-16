---
layout: documentation
title: Documentation - Altax
lang:  en
---
## Configuration

This page provides infomations of several configuration functions on Altax.
You can use these functions on your altax configuration file (default file name is `altax.php` on your current working directory).


### Overviews

This is a simple configuration file.

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

### Reference configurations

* [host](/altax/documentation/configuration/host.html) - Associates a host with multiple roles.
* [role](/altax/documentation/configuration/role.html) - Associates a role with multiple hosts.
* [task](/altax/documentation/configuration/task.html) - Defines a new task.
* [desc](/altax/documentation/configuration/desc.html) - Associates a description with the next task that gets defined.
* [set](/altax/documentation/configuration/set.html) - Sets a variable.
* [get](/altax/documentation/configuration/get.html) - Gets a variable.
* [run](/altax/documentation/configuration/run.html) - Executes commands on remote managed server.
* [run_local](/altax/documentation/configuration/run_local.html) - Executes commands on local server.
* [run_task](/altax/documentation/configuration/run_task.html) - Runs other task in the task method.


<div class="row">
  <div class="span4">
    <a class="prev" href="/altax/documentation/installation.html">Installation</a>
  </div>
  <div class="span4 offset4" style="text-align: right;">
    <a class="next" href="/altax/documentation/basic-usage.html">Basic Usage</a>
  </div>
</div>
