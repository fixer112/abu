# Abu Encrpter
* Use to encrypt string/password
* Encrypt word into a secured string using hex and ascii

## How To Use with composer

```
 "require": {
		"fixer112/abu": "dev-master"
    }
```

```
<?php
//require autoload file
require 'vendor/autoload.php';

use Abu\abu;

$abu = new abu();
echo $abu->encrypt('abu')."<br>";
echo $abu->version();
?>

//10072101144120218
//2.0.1
```
