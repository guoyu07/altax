---
layout: default
title: Configuration - Altax
---
## task

Defines a new task.

### Description

<pre class="php-nonumber">
task(string $name, [array $options,] callback $function)
</pre>

**task** defines a new task.


### Parameters

* name

  Task name.

* options

  Associated settings to the task.

* function

  Callback function implemented task.

### Examples
<pre class="php-nonumber">
// Task for web role servers.
task('task1', array('roles' => 'web'), function($host, $args){
    // your task code here.
});

// Task for web and db role servers.
task('task2', array('roles' => array('web', 'db'), function($host, $args){
    // your task code here.
});

// Task for web1.exsample.com servers.
task('task2', array('hosts' => 'web1.exsample.com', function($host, $args){
    // your task code here.
});


// Task runs localhost (do not connect remote servers).
task('task3', function($host, $args){
    // your task code here.
});
</pre>

Exsample with **host** and **desc**

<pre class="php-nonumber">
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


// You can execute above task as the following command
// $ altax deploy
</pre>



### See Also

* [host](/altax/documentation/configuration/host.html) - Associates a host with multiple roles.
* [role](/altax/documentation/configuration/role.html) - Associates a role with multiple hosts.

