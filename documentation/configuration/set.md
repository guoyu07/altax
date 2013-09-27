---
layout: documentation
title: Configuration - Altax
lang:  en
---
## set

Sets a variable.

### Description

<pre class="php-nonumber">
set(string $key, mixed $value)
</pre>

**set** sets a variable.

The variables can be used as general purpose you like.
But the below key is reserved to control Altax core behavior.

* colors

  If you set **true**, Altax outputs colored messages (default **false**).

### Parameters

* key

  key of variable.

* value

  value of variable.


### See Also

* [get](/altax/documentation/configuration/get.html) - Gets a variable.