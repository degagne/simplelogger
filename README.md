## Installation
Add simplelogger package to your composer.json file.
```
{
    "require": {
        "degagne/simplelogger": "~1.0"
    }
}
```

or run
```composer require degagne/simplelogger```

## Basic Usage
You can either create your own instance of the SimpleLogger class or use a default "Logger" class.

To create your own:
```php
<?php

date_default_timezone_set('America/Toronto');

require_once(__DIR__ . '/vendor/autoload.php');

use SimpleLogger\Configuration;
use SimpleLogger\SimpleLogger;
use Psr\Log\LogLevel;

$configuration = (new Configuration())
    ->setLogFile('/path/to/log/file.log')
    ->setVerbosity(LogLevel::INFO);

$logger = new SimpleLogger($configuration);
```

To use a default logger:
```php

<?php

date_default_timezone_set('America/Toronto');

require_once(__DIR__ . '/vendor/autoload.php');

use SimpleLogger\Utils\Logger;

$logger = new Logger('/path/to/log/file.log');
```

## Changing Logger Format
You can change the SimpleLogger format by using the following:

| Format Character | Description | Example |
| ---------------- | ----------- | ------- |
| %t | ISO 8601 date | 2017-10-31T15:19:21+00:00 |
| %c | class name | CalledClass |
| %f | function name | calledFunction |
| %F | filename | /home/jdoe/lib/simplelogger/logger_test.php |
| %l | log level | INFO |
| %L | line number | 332 |
| %p | process ID | 15656 |
| %m | log message | This is the logged message |

Example usage:

```php
$configuration = (new Configuration())
    ->setFormat("[%t] %l %c:%f :: %m");
```

This will output: ```[2017-10-31T15:19:21+00:00] INFO CalledClass:calledFunction :: This is the logged message```
