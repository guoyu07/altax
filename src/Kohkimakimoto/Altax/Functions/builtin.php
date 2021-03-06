<?php

use Kohkimakimoto\Altax\Util\Context;
use Kohkimakimoto\Altax\Task\Executor;

function host()
{
    $context = Context::getInstance();

    $host = null;
    $options = array();
    $roles = null;

    $args = func_get_args();
    if (count($args) < 2) {
        throw new \Exception("Missing argument. function host() must 2 arguments at minimum.");
    }

    if (count($args) === 2) {
        $host = $args[0];
        
        if (is_string($args[1]) || is_vector($args[1])) {
            $roles = $args[1];
        } else {
            if (isset($args[1]['roles'])) {
                $roles = $args[1]['roles'];
                unset($args[1]['roles']);
            }
            $options = $args[1];
        }
    } else {
        $host = $args[0];
        $options = $args[1];
        $roles = $args[2];
    }

    $hosts = $context->get('hosts');

    $hosts[$host] = $options;

    if ($roles) {
        // Register related role
        if (is_string($roles)) {
            role($roles, $host);
        } else if (is_array($roles)) {
            foreach ($roles as $role) {
                role($role, $host);
            }
        }
    }

    $context->set('hosts', $hosts);
}

/**
 * Register role.
 * @param String           $role
 * @param Array or String  $hosts
 * @throws Altax_Exception
 */
function role($role, $hosts)
{
    $context = Context::getInstance();

    if (is_string($hosts)) {
       $hosts = array($hosts);
    }

    $roles = $context->get('roles');

    foreach ($hosts as $host) {
        if (!isset($roles[$role])) {
            $roles[$role] = array();
        }
        $roles[$role][] = $host;
    }

    $roles[$role] = array_unique($roles[$role]);

    $context->set('roles', $roles);
}

function desc($desc)
{
    $context = Context::getInstance();
    $context->set('desc', $desc);
}

/**
 * Register task.
 * @param unknown $name
 * @param unknown $options
 * @param unknown $callback
 */
function task()
{
    $context = Context::getInstance();
    $name = null;
    $options = null;
    $callback = null;

    $args = func_get_args();
    if (count($args) < 2) {
        throw new \Exception("Missing argument. function task() must 2 arguments at minimum.");
    }

    if (count($args) === 2) {
        $name = $args[0];
        $callback = $args[1];
    } else {
        $name = $args[0];
        $options = $args[1];
        $callback = $args[2];
    }

    $tasks = $context->get('tasks');
    if (!isset($tasks[$name])) {
        $tasks[$name] = array();
    }

    if ($context->get('desc')) {
        // If it has description, set it up to this task.
        $tasks[$name]['desc'] = $context->get('desc');
        $context->delete('desc');
    }

    $tasks[$name]['callback'] = $callback;
    $tasks[$name]['options']  = $options;
    $context->set('tasks', $tasks);
}

/**
 * Run command
 * @param unknown $command
 */
function run($command, $options = array())
{
    Context::getInstance()->get('currentTask')->runSSH($command, $options);
}

function run_local($command, $options = array())
{
    Context::getInstance()->get('currentTask')->runLocalCommand($command, $options);
}

function run_task($name, $args = array())
{
    $context = Context::getInstance();

    $currentTask = $context->get('currentTask');
    $input = $currentTask->getInput();
    $output = $currentTask->getOutput();

    $newInput = clone $input;
    $newInput->setArgument("command", $name);
    $newInput->setArgument("args", $args);

    $executor = new Executor();
    $executor->execute($name, $newInput, $output);
}

/**
 * Set a value in global configuration.
 * @param unknown $key
 * @param unknown $value
 */
function set($key, $value)
{
    Context::getInstance()->setParameter($key, $value);
}

/**
 * Get a value from global configuration.
 * @param unknown $key
 * @param string $default
 */
function get($key, $default = null)
{
    return Context::getInstance()->getParameter($key, $default);
}

/**
 * Output log message
 * @param String $message
 */
function message($message)
{
    Context::getInstance()
        ->get('currentTask')
        ->getOutput()
        ->writeln($message);
}

function is_vector($array) {
    if (array_values($array) === $array) {
      return true;
    } else {
      return false;
    }
}