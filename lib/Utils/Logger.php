<?php
namespace SimpleLogger\Utils;

use SimpleLogger\Configuration;
use SimpleLogger\SimpleLogger;
use Psr\Log\LogLevel;

class Logger extends SimpleLogger
{

    /**
     * Constructor.
     *
     * @param   string $logfile
     * @return  object
     */
    public function __construct($logfile)
    {
        $configuration = new Configuration();
        $configuration
            ->setLogFile($logfile)
            ->setVerbosity(LogLevel::NOTICE)
            ->setConsoleVerbosity(LogLevel::INFO)
            ->setLoggerConsoleFormat("%t %l %c:%f %m")
            ->setLoggerFileFormat("%t %l %c:%f %p %m");
        return parent::__construct($configuration);
    }
}
