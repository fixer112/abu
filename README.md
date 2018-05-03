# Abu Encrpter
* Use to encrypt string/password
* Encrypt word into a secured string using hex and ascii

## How To Use with composer

```
 "require": {
		"fixer112/abu": "2.1.*"
    }
```
* Default max encrypt length is 60
* To change max encrypt length: abu::encrypt($password, 70)
* The higher the value the more secured
* Always check for version before encrpting or checking encrpted string


```
<?php
//require autoload file
require 'vendor/autoload.php';

use Abu\abu;
$password = 'pass@string';
if (abu::version()=='2.1.0') {
	if (abu::encrypt('$password', 50) == '5894340128377128414f120450123487123519109555109589') {
		//execute code
	}
}
?>
```
